<div>
    <div class="row">
      @for ($nav = 0; $nav < count($quizNav); $nav++) @if ($nav % 5==0) </div>
        <div class="row">
          @endif
          <div class="col-md-2 p-1">
            <div class="card p-1">
              <a href="?page={{ $quizNav[$nav] }}" class="fs-12 text-center py-1">{{ $quizNav[$nav]
                }}</a>
            </div>
          </div>
          @endfor
        </div>
    </div>
</div>
