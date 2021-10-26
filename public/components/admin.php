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
      <div class="flex justify-between">
        <h1 class="header">Admin.</h1>
        <div class="flex">
          <div class="flex mx-4">
            <form action="" method="GET">
              <input type="submit" value="Contacts" name="type" style="border:none;outline:none;">
            </form>
            <p class="mx-1">/</p>
            <form action="" method="GET">
              <input type="submit" value="Collection" name="type" style="border:none;outline:none;">
            </form>
          </div>
          <form action="" method="GET">
            <input type="submit" value="Logout" name="type" style="border:none;outline:none;">
          </form>
        </div>
      </div>
    </div>
    
    ';
}

function contactsHtml($contacts) {
    echo "<section class=\"mt-4\">";
    
    foreach($contacts as $contact) {
        echo "
        <div class=\"flex justify-between\">
            <p>{$contact['name']}</p>
            <p>{$contact['email']} / {$contact['phonenumber']}</p>
        </div>";
    }
   
    echo "</section>";
}

function artAdminHtml($arts) {
    echo "<h2>Art</h2>";
    foreach($arts[0] as $art) {
      echo "<p>{$art['id']} {$art['title']}</p>";
    }
    echo "<h2 class=\"mt-4\">Creator</h2>";
    foreach($arts[1] as $art) {
      echo "<p>{$art['id']} {$art['name']}</p>";
    }

}