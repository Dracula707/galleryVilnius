<?php
  if(!isset($_GET['id'])) {
    header('Location: ./notfound.php');
    exit();
  }

  require_once '../app/sql.php';
  $db = connect();
  $art = getArt($db,intval($_GET['id']));
  if($art === false) {
    header('Location: ./notfound.php');
    exit();
  }


?>

<?php 
include 'components/head.php';
echo head('Art','');
?>

<body>
  <div class="box">
    <section class="box-content">
      <div class="container">
        <div class="mt-60 mb-4">
          <div class="flex justify-between">
            <h1 class="header">Showcase.</h1>
            <a class="mx-1" href="./collection.php">
              <img src="../static/assets/shared/icon-next-button.svg" class="mt-1" width="32" height="32" alt="back button" >
            </a>
          </div>
        </div>

        <div class="grid-three mt-60">
          <div>
            <img src="../static/<?= $art['galleryimg']; ?>" width="100%" height="auto" alt="art piece">
          </div>
          <div>
            <div class="art-header">
              <h2 class="text-md"><?= $art['title']; ?></h2>
              <p><?= $art['name']; ?></p>
            </div>
            <div class="art-creator">
              <img src="../static<?= $art['image']; ?>artist.jpg" width="128" height="128" >
            </div>
          </div>
          <div>
            <p><?= $art['description']; ?></p>
          </div>
        </div>


      </div>
    </section>
    
  </div>
  <script src="../static/js/main.js"></script>
</body>
</html>