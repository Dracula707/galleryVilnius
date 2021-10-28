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
              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g stroke="var(--color-btn-b)" fill="none" fill-rule="evenodd"><path d="M1.528 1.843l20.538 10.27L1.528 22.382V1.843z" stroke-width="2"/><path fill="#D8D8D8" d="M24.708.5h1v22.775h-1z"/></g>
              </svg>
            </a>
          </div>
        </div>

        <div class="grid-three mt-60" >
          <div>
            <img src="../static/<?= $art['galleryimg']; ?>/hero-large.jpg" width="100%" height="auto" alt="art piece">
          </div>
          <div class="relative">
            <div class="art-header">
              <h2 class="text-xl my-1"><?= $art['title']; ?></h2>
              <p class="text-small"><?= $art['name']; ?></p>
            </div>
            <div class="art-creator">
              <img src="../static<?= $art['image']; ?>artist.jpg" width="128" height="128" >
            </div>
          </div>
          <div class="flex align-center">
            <p class="text-md" style="line-height: 1.5em;"><?= $art['description']; ?></p>
          </div>
        </div>


      </div>
    </section>
    
  </div>
  <script src="../static/js/main.js"></script>
</body>
</html>