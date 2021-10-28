<?php 
function loginHtml() {
    $html = "
        <div class=\"mt-60 mb-4\">
        <h1 class=\"header\">Admin.</h1>
        <section style=\"max-width:400px;margin: 0 auto;margin-top: 60px;\">
            <div class=\"border-b my-4\">
            <h2 class=\"title my-3\">LogIn</h2>
            </div>
            <form action=\"#\" method=\"POST\">
                <div>
                <label for=\"username\">Enter your username</label>
                <input class=\"input w-full\" id=\"username\" type=\"text\" name=\"username\" placeholder=\"enter your username\">
                </div>
    
                <div class=\"mt-4\">  
                <label for=\"password\">Enter your password</label>
                <input class=\"input w-full\" id=\"password\" type=\"password\" name=\"password\" placeholder=\"enter your password\">
                </div>
    
                <div class=\"mt-2\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"login\">
                </div>
            </form>
        </section>
    </div>    
    ";

    return $html;
}

function headerHtml() {
    echo '
    <div class="mt-60 mb-4">
      <div>
        <h1 class="header">Admin.</h1>
        <div class="block-main flex justify-between mt-3">
          <div class="flex">
            <form action="" method="GET">
              <button class="btn btn-basic" type="submit" value="1" name="type">Contacts</button>
            </form>
            <p class="mx-1">/</p>
            <form action="" method="GET">
              <button class="btn btn-basic" type="submit" value="2" name="type">Collection</button>
            </form>
            <p class="mx-1">/</p>
            <form action="" method="GET">
              <button class="btn btn-basic" type="submit" value="3" name="type">Artist</button>
            </form>
          </div>
          <form style="margin-left:10px;" action="" method="GET">
            <button class="btn btn-basic" type="submit" value="Logout" name="type" style="border:none;outline:none;">Logout</button>
          </form>
        </div>
      </div>
    </div>
    
    ';
}

function contactsHtml($contacts) {
    echo "
    <div class=\"border-b my-4\">
      <h2 class=\"title my-3\">Contacts</h2>
    </div>
    <section>
    <ul>
    ";
    
    foreach($contacts as $contact) {
      $style = $contact['completed'] === '0' ? "" : "text-decoration:line-through;";
      $form = $contact['completed'] === '1' ? "" : "<form action=\"../app/contacts.php\" method=\"POST\">
        <button class=\"btn btn-basic\" type=\"submit\" name=\"submit\" value=\"{$contact['id']}\">
          <svg class=\"svg-a\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
            <path d=\"M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z\"/>
          </svg>
        </button>
      </form>";

      echo "
      <li class=\"block-main my-2\">
        <div class=\"flex justify-between\">
          <p style=\"$style\">{$contact['name']} / {$contact['email']} / +370{$contact['phonenumber']}</p>
          <div class=\"flex\">
            $form
          </div>
        </div>
      </li>
      ";
    }
    echo "
    </ul>
    </section>
    ";    
}

function collectionHtml($arts) {
    echo "
    <section>
    <div class=\"border-b my-4\">
      <div class=\"flex justify-between\">
        <h2 class=\"title my-3\">Collection</h2>
        <svg onclick=\"openModal('modalCollectionCreate')\" class=\"svg-a mt-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\"  viewBox=\"0 0 16 16\">
          <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
        </svg>
      </div>
    </div>
    <ul>
    ";

    foreach($arts as $art) {
      echo "
      <li class=\"block-main my-2\">
        <div class=\"flex justify-between\">
          <p>{$art['id']} {$art['title']}</p>
          <div class=\"flex\">
            <svg class=\"svg-a\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\"  viewBox=\"0 0 16 16\">
              <path d=\"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z\"/>
            </svg>
          </div>
        </div>
      </li>
      ";
    }
    echo "
    </ul>
    </section>
    ";
}

function artistHtml($artists) {
  echo "
  <div class=\"border-b my-4\">
    <div class=\"flex justify-between\">
      <h2 class=\"title my-3\">Artist</h2>
      <svg onclick=\"openModal('modalCollectionCreate')\" class=\"svg-a mt-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\"  viewBox=\"0 0 16 16\">
        <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
      </svg>
    </div>
  </div>
  <section>
  <ul>
  ";

  foreach($artists as $artist) {
    echo "
    <li class=\"block-main my-2\">
      <div class=\"flex justify-between\">
        <p>{$artist['id']} {$artist['name']}</p>
        <div class=\"flex\">
          <svg class=\"svg-a\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\"  viewBox=\"0 0 16 16\">
            <path d=\"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z\"/>
          </svg>
        </div>
      </div>
    </li>
    ";
  }
  echo "
  </ul>
  </section>
  ";
}