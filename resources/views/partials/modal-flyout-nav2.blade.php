<div class="modal fade slide-right" id="modalFlyoutNav2" tabindex="-1" role="dialog" aria-labelledby="modalFlyoutNav2"
  aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog modal-md">
    <div class="modal-content-wrapper">
      <div class="modal-content table-block">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <p>X</p>
        </button>
        <div class="modal-body v-align-center">
          <div class="py-3 pl-5 navigation-wrapper">
            <div class="row">
              @for ($nav = 0; $nav < count($quizNav); $nav++) @if ($nav % 5==0) </div>
                <div class="row">
                  @endif
                  <div class="col-md-2 p-1">
                    <a href="?page={{ $nav+1 }}" class="btn btn-default btn-block m-t-5">
                      {{ $quizNav[$nav]
                      }}</a>
                  </div>
                  @endfor
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>