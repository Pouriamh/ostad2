<div id="timeline-section" class="container-fluid timeline-section sp-3">
  <div class="row pl-2 pr-2">
    <div id="timeline-column" class="col-12">

      @for ($i = 0; $i < 5; $i++)
      <div draggable="true" class="row track">
<!-- Track Header -->
        <div class="track-header">
          <i class="track-handle fa fa-bars" aria-hidden="true"></i>
<!-- Track Type -->
          <div class="pt-3 text-center">
            <h3>Track Type</h3>
          </div>
<!-- Track Header Controls -->
          <div class="header-controls-container justify-content-between row">
            <div class="col-8 controls-left">
<!-- Move Track -->
              <div>
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                <span class="track-label align-middle">Move Track</span>
              </div>
<!-- Play / Silent Switch -->
              <div>
                <span class="track-label">Play</span>
                <label class="switch align-middle">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
                <span class="track-label">Silent</span>
              </div>
            </div>
<!-- Clear Button -->
            <button class="col-4 clear-button btn btn-sm btn-danger align-self-center">Clear</button>
          </div>
        </div>
<!-- Workspace -->
        <div class="workspace">
          <div class="audio-file-region">
          </div>
          <div class="audio-file-info">
            <span class="track-label pl-1 align-middle">Info:</span>
          </div>
        </div>
      </div>
      @endfor
    </div>
  </div>
<!-- Zoom Control -->
  <div class="row pl-2 pr-2 pd-5">
    <div class="col-4 d-flex align-items-center">
      <h3 class="d-inline align-middle">Zoom</h3>
      <input id="zoom-control" class="ml-4" type="range">
    </div>
<!-- Media Controls -->
    <div class="media-controls pl-5 pr-5 col-4 d-flex justify-content-around">
      <i class="fa fa-2x fa-fast-backward" aria-hidden="true"></i>
      <i id="play-button" class="fa fa-2x fa-play" aria-hidden="true"></i>
      <i class="fa fa-2x fa-fast-forward" aria-hidden="true"></i>
      <i class="fa fa-2x fa-repeat" aria-hidden="true"></i>
    </div>
<!-- Save Project Button -->
    <div class="col-4 d-flex justify-content-end">
      <button class="btn btn-md btn-success">Save Project</button>
    </div>
  </div>
</div>
