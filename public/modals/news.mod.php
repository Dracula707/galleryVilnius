<?php
function news($id) {
  $item = ["",""];
  switch($id) {
    case 0:
      $item[0] = 'New art pieces for fall season';
      $item[1] = '<h4 class="text-void-fgp text-sm">We got new art come ant visit us! or check out in collection online.</h4>
        <p class="mt-2">Guernica by Pablo Picasso <a class="link" href="artpage.php?id=3">Here</a></p>
        <p class="mt-2">The Night Café by Vincent Van Gogh <a class="link" href="artpage.php?id=10">Here</a></p>';
      break;

    case 1:
      $item[0] = 'From july 24 to 26 we gonna be closed';
      $item[1] = '<h4 class="text-void-fgp text-sm">From july 24 to 26 we gonna be closed. </h4><p>sorry for inconveniens for some small repairs to building to improve quality and design. So you enjoy visiting us and feel well.</p>';
      break;

    case 2:
      $item[0] = 'New art pieces for fall season';
      $item[1] = '<h4 class="text-void-fgp text-sm">Thank you for visiting my website!</h4>
        <p>Visit my Github <a class="link" href="https://github.com/Dracula707/galleryVilnius" target="_blank">link</a></p>';
      break;

    case 3:
      $item[0] = 'All posts';
      $item[1] = "<h4 class=\"text-void-fgp text-sm\">Sorry is not implemented</h4><p>this feature not yet implemented we sorry for inconvenience.</p>";
      break;
  }

  echo "
  <div id=\"modal$id\" class=\"modal-bgrnd hidden\">
    <div class=\"modal\">
      <div class=\"modal-main\" >
        <header class=\"modal-header\">
          <h2 class=\"text-sm\">{$item[0]}</h2>
          <div class=\"focus:outline-none p-2\">
            <svg onclick=\"closeModal('modal$id')\" class=\"fill-current svg-a\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\">
              <path
                d=\"M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z\"
              ></path>
            </svg>
          </div>
        </header>
        <section class=\"p-4 text-left\">
          {$item[1]}
        </section>
        <footer class=\"flex justify-center p-2\">
          <div class=\"text-right pb-4\">
              <button onclick=\"closeModal('modal$id')\" class=\"btn btn-primary\">
                Close
              </button>
          </div>
        </footer>
      </div>
    </div>
  </div>
  ";
}