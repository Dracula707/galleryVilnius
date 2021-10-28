<?php 
if(isset($_POST['submit'])) {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $tel = trim($_POST['tel']);
  
  if(!empty($name) && !empty($email) && !empty($tel)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      require_once '../app/sql.php';
      $db = connect();
      $arts = addContact($db,[$name,$email,$tel]);

      header('Location: ./about.php?form=submited');
      exit();
    }
  }

  header('Location: ./about.php?form=error');
  exit();
}
?>

<?php 
include 'components/head.php';
echo head('About','');
?>

<body>
  <div class="box">
    <?php include 'components/header.php';?>
    <section class="box-content">
      <div class="container">
        <div class="mt-60 mb-4">
          <h1 class="header">About.</h1>
        </div>

        <div class="border-b my-4">
          <h2 class="title my-3">You can visit us</h2>
        </div>

        <div class="grid-index">
          <div class="flex align-center">
            <div>
              <h3 class="sub-title">Times/dates</h3>
              <ul class="visiting-hours">
                <li><p>Monday to Wednesday, Friday: 10:00am – 6:00pm</p></li>
                <li><p>Saturday, Sunday and public holiday: 10:00am – 7:00pm</p></li>
                <li><p>Christmas Eve and Lunar New Year's Eve: 10:00am – 5:00pm</p></li>
                <li><p>Closed on Thursdays (except public holiday)</p></li>
                <li><a href="https://www.google.com/search?tbs=lf:1,lf_ui:1&tbm=lcl&q=museum&rflfq=1&num=10&ved=2ahUKEwi9yryFrtvzAhV-hP0HHStMDm4QtgN6BAghEAc#rlfi=hd:;si:4727335685913863594,l,CgZtdXNldW1ImdyirdSVgIAIWhIQABgAIgZtdXNldW0qBAgDEACSAQZtdXNldW2qAQ4QASoKIgZtdXNldW0oAA,y,MbZryw5lZlU;mv:[[54.71269780650769,25.33762154394531],[54.681051899374246,25.236341331542967],null,[54.69687793836469,25.28698143774414],14]" target="_blank">At Vilnius Gallery. Street,State,Postal Code</a></li>
              </ul>
            </div>
          </div>
          <div class="mobile-order">
            <img class="animate-apear" src="../static/assets/other/about.webp" width="100%" height="auto" alt="about image">
          </div>
        </div>

        <div class="border-b my-4">
          <h2 class="title my-3">Contacts</h2>
        </div>

        <section class="grid-index mb-4">
          <div>
            <h2 class="header">Get in touch</h2>
            <p class="text-md">Fill in the form to start a conversation</p>
            <div class="flex my-2 mt-4">
              <svg width="32" height="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              <a href="https://www.google.com/search?tbs=lf:1,lf_ui:1&tbm=lcl&q=museum&rflfq=1&num=10&ved=2ahUKEwi9yryFrtvzAhV-hP0HHStMDm4QtgN6BAghEAc#rlfi=hd:;si:4727335685913863594,l,CgZtdXNldW1ImdyirdSVgIAIWhIQABgAIgZtdXNldW0qBAgDEACSAQZtdXNldW2qAQ4QASoKIgZtdXNldW0oAA,y,MbZryw5lZlU;mv:[[54.71269780650769,25.33762154394531],[54.681051899374246,25.236341331542967],null,[54.69687793836469,25.28698143774414],14]" target="_blank" class="mx-2">Vilnius Gallery. Street,State,Postal Code</a>
            </div>
            <div class="flex my-2">
              <svg width="32" height="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
              </svg>
              <a href="tel:+3701231233313" class="mx-2 mt-1">+3701231233313</a>
            </div>
            <div class="flex my-2">
              <svg width="32" height="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
              <a href="mailto:info@vilniusgallery.com" class="mx-2 mt-1">info@vilniusgallery.com</a>
            </div>
            <div class="flex my-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
              </svg>
              <a href="https://github.com/Dracula707/galleryVilnius" target="_blank" class="mx-2 mt-1">github.com/Dracula707</a>
            </div>
          </div>
          <div>
            <form action="#" method="POST" class="flex flex-column">
              <input class="input" type="text" name="name" placeholder="Full Name" required>
              <input class="input" type="email" name="email" placeholder="Email" required>
              <div class="flex">
                <input class="input-disabled" style="width:90px;" type="tel1" name="tel1" value="+370" disabled>
                <input class="input w-full" minlength="8" maxlength="8" pattern="[6]{1}[0-9]{7}" type="tel" name="tel" placeholder="Telephone Number" required>
              </div>
              <input class="btn btn-primary mt-2" style="width: 50%;" type="submit" name="submit" value="Submit">
            </form>
          </div>

        </section>  
      </div>
    </section>
    <?php include 'components/footer.php'; ?>
  </div>
  <?php include './modals/about.mod.php'; ?>

  <script src="../static/js/about.js"></script>
  <script src="../static/js/main.js"></script>
</body>
</html>