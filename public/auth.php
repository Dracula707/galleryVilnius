<?php 
  include_once './components/art.php';
  include_once './components/admin.php';
  include_once '../app/admin.php';
  session_start();

  $error = 0;
  $state = 0;
  $data = [];
  $type = "";


  if (isset($_SESSION['id'])) {
    $state = 1;

    if (isset($_GET['type'])) {
      if ($_GET['type'] === 'Logout') {
        session_unset();
        session_destroy();
        $state = 0;
      } elseif ($_GET['type'] === 'Contacts') {
        $state = 1;
      } elseif ($_GET['type'] === 'Collection') {
        $state = 2;
      }
    }
  }
?>

<?php 
  if(isset($_POST['submit'])) {
    if($state === 0) {
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);

      if (empty($username) || empty($password)) {
        header("location: ./auth.php?=Login=empty");
        exit();
      }

      $l = login($username,$password);
      if ($l === -1) {
        header("location: ./auth.php?=Login=empty");
      } else {
        header("location: ./auth.php?=Login=sucess");
      }
    }
  }
?>

<?php 
  if($state === 0) {
      if(isset($_GET['Login'])) {
        $error = ($_GET['Login'] === 'empty') ? -1 : 0;
      }
  } elseif($state === 1) {
      require_once '../app/sql.php';
      $db = connect();
      $data = getContacts($db);
      $db = null;
  } elseif($state === 2) {
    require_once '../app/sql.php';
    $db = connect();
    $data = getArtsList($db);
    $db = null;
  }

?>

<?php 
include 'components/head.php';
echo head('Admin','');
?>

<body>
  <div class="box">
    <?php 
      include 'components/header.php';
    ?>
    <section class="box-content">
      <div class="container">
      <?php 
        if($state === 0) {
          echo loginHtml();
        } elseif($state === 1) {
          headerHtml();
          contactsHtml($data);
        } elseif($state === 2) {
          headerHtml();
          artAdminHtml($data);
        }
      
      ?>


      </div>
    </section>
    <?php include 'components/footer.php'; ?>
  </div>
  <script src="../static/js/main.js"></script>
</body>
</html>