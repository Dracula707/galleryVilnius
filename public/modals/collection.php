<!-- Modal start -->
<?php 
function collectionEdit() {
echo "
  <div id=\"modalEdit\" class=\"modal-bgrnd hidden\">
    <div class=\"modal\">
      <div class=\"modal-main\" >
        <header class=\"modal-header\">
          <h2 class=\"text-sm\">Contacts</h2>
          <div class=\"focus:outline-none p-2\">
            <svg onclick=\"closeModal('modal')\" class=\"fill-current svg-a\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\">
              <path
                d=\"M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z\"
              ></path>
            </svg>
          </div>
        </header>
        <main class=\"p-4 text-center\">
        <p id=\"modal-text\" class=\"font-semibold text-void-fgp text-sm\">We got your contact information we gonna contact you as soon as possible, thank you!</p>
        </main>
        <footer class=\"flex justify-center p-2\">
          <div class=\"text-right pb-4\">
              <button onclick=\"closeModal('modal')\" class=\"btn btn-primary\">
                Confirm
              </button>
          </div>
        </footer>
      </div>
    </div>
  </div>
";
}

function collectionCreate() {
  echo "
    <div id=\"modalCollectionCreate\" class=\"modal-bgrnd hidden\">
      <div class=\"modal\" style=\"margin-top: 5%;\">
        <div class=\"modal-main\" >
          <header class=\"modal-header\">
            <h2 class=\"text-sm\">Collection</h2>
            <div class=\"focus:outline-none p-2\">
              <svg onclick=\"closeModal('modal')\" class=\"fill-current svg-a\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\">
                <path
                  d=\"M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z\"
                ></path>
              </svg>
            </div>
          </header>
          <main class=\"p-4 text-center\">
          <p id=\"modal-text\" class=\"font-semibold text-void-fgp text-sm\">Add new Collection item to database!</p>
          <form action=\"../app/collection.php\" method=\"POST\" enctype=\"multipart/form-data\" class=\"mt-4\">
            <div>
              <label for=\"add-title\" style=\"float:left;\">Title</label>
              <input id==\"add-title\" class=\"input w-full\" type=\"text\" placeholder=\"enter art title\" >
            </div>
            <div class=\"flex-split\">
              <div>
                <label for=\"add-title\" style=\"float:left;\">Year</label>
                <input id==\"add-title\" class=\"input w-full\" type=\"text\" placeholder=\"enter art title\" >
              </div>
              <div  class=\"mx-2\">
                <label for=\"add-class\" style=\"float:left;\">Class</label>
                <select  class=\"input w-full\" id=\"add-class\">
                  <option selected value=\"empty\">Empty</option>
                  <option value=\"vertical\">Vertical</option>
                  <option value=\"horizontal\">Horizontal</option>
                  <option value=\"big\">Big</option>
                </select>
              </div>
              <div>
                <label for=\"add-title\" style=\"float:left;\">Creator ID</label>
                <input id==\"add-title\" class=\"input w-full\" type=\"text\" placeholder=\"enter art title\">
              </div>
            </div>
            <div>
              <label for=\"add-file-gallery\" style=\"float:left;\">Image gallery</label>
              <input id==\"add-file-gallery\" name=\"add-file-gallery\" class=\"input w-full\" type=\"file\" placeholder=\"enter art title\">
            </div>
            <div>
              <label for=\"add-file-hero\" style=\"float:left;\">Image hero</label>
              <input id==\"add-file-hero\" name=\"add-file-hero\" class=\"input w-full\" type=\"file\" placeholder=\"enter art title\">
            </div>
            <div>
              <label for=\"add-title\" style=\"float:left;\">Title</label>
              <textarea class=\"input w-full\" rows=\"3\"></textarea>
            </div>
            <div class=\"text-center pb-4\">
                <button type=\"submit\" name=\"submit-add\" class=\"btn btn-primary\">
                  Confirm
                </button>
            </div>
          </form>
          </main>
          <footer class=\"flex justify-center p-2\">
          </footer>
        </div>
      </div>
    </div>
  ";
  }