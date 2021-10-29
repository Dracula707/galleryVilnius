<?php
  require_once './components/art.php';
  require_once '../app/sql.php';
  $db = connect();
  $arts = getArts($db);
?>  

<?php 
include 'components/head.php';
echo head('Collection','');
?>

<body>
  <div class="box">
    <?php 
      include 'components/header.php';
    ?>
    <section class="box-content">
    
      <div class="container">
        <div class="mt-60 mb-4">
          <h1 class="header">The Collection.</h1>
        </div>

        <div class="border-b my-4"> 
          <h2 class="title my-3">About</h2>
        </div>

        <div>
          <p>
            Our collection is small but growing and evolving at steady pace contains <?= count($arts); ?>
            works of modern and contemporary art. We have blue triangle at the top to show latest artworks in over collections.
          </p>

          <p class="mt-2">
            If you like what you see, visit us to see them in person they look even more magnificent.
          </p>
        </div>


        <div class="border-b my-4"> 
          <h2 class="title my-3">Artwork</h2>
        </div>

        <div class="grid-collection">
        <?php 
          foreach($arts as $art) {
            echo artCollectionHtml($art);
          }
        ?>
        </div>

      </div>

    </section>
    <?php include 'components/footer.php'; ?>
  </div>
  <script src="../static/js/collection.js"></script>
  <script src="../static/js/main.js"></script>
</body>
</html>