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
          <h1 class="header">Collection.</h1>
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