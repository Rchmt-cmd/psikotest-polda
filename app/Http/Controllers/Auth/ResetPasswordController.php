<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    // use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function index()
    {
        return view('auth.passwords.reset');
    }

    public function reset(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            // Current password and new password same
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success", "Password successfully changed!");
    }

    // public function reset(Request $request)
    // {
    //     $request->validate($this->rules(), $this->validationErrorMessages());

    //     $status = Password::reset(
    //         $request->only('no_hp', 'password', 'password_confirmation'),
    //         function ($user, $password) {
    //             $user->forceFill([
    //                 'password' => Hash::make($password)
    //             ])->setRememberToken(Str::random(60));
                    
    //             $user->save();

    //             event(new PasswordReset($user));
    //         }
    //     );

    //     return $status === Password::PASSWORD_RESET
    //         ? redirect()->route('login')->with('status', __($status))
    //         : back()->withErrors(['no_hp' => [__($status)]]);
    // }

    protected function rules()
    {
        return [
            // 'token' => 'required',
            'no_hp' => 'required|numeric|digits_between:11,13',
            'password' => 'required|min:8|confirmed',
        ];
    }

    protected function validationErrorMessages()
    {
        return [];
    }

    protected function credentials(Request $request)
    {
        return $request->only(
            'email',
            'password',
            'password_confirmation'
        );
    }
}
