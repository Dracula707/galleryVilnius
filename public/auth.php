<?php 
  include_once './components/art.php';
  include_once './components/admin.php';
  include_once '../app/admin.php';
  //include_once '../public/modals/collection.php';
  session_start();

  $error = 0;
  $state = '0';
  $data = [];
  $type = "";

  // we check if user log in the we set admin page location
  if (isset($_SESSION['id'])) {
    $state = '1';

    if (isset($_GET['type'])) {
      if ($_GET['type'] === 'Logout') {
        session_unset();
        session_destroy();
        $state = '0';
      } else {
        $state = $_GET['type'];
      }
    }
  }
?>

<?php 
  // we do all page posts here
  if(isset($_POST['submit'])) {
    if($state === '0') {
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);

      if (empty($username) || empty($password)) {
        header("location: auth.php?=Login=empty");
        exit();
      }

      $l = login($username,$password);
      if ($l === -1) {
        header("location: auth.php?=Login=empty");
      } else {
        header("location: auth.php?=Login=sucess");
      }
    }
  }
?>

<?php 
# we load page data by state
if ($state != '0') {
  require_once '../app/sql.php';
  $db = connect();
}

switch ($state) {
  case '0':
    if(isset($_GET['Login'])) {
      $error = ($_GET['Login'] === 'empty') ? -1 : 0;
    }
    break;
  
    case '1':
      $data = getContacts($db);
      $db = null;
      break;


    case '2':
      $data = getCollection($db);
      $db = null;
      break;

    case '3':
      $data = getArtist($db);
      $db = null;
      break;
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
      switch ($state) {
        case '0':
          echo loginHtml();
          break;
        case '1':
          headerHtml();
          contactsHtml($data);
          break;
        case '2':
          headerHtml();
          collectionHtml($data);
          //collectionEdit(); 
          //collectionCreate();
          break;
        case '3':
          headerHtml();
          artistHtml($data);
          break;
      }
      ?>


      </div>
    </section>
    <?php include 'components/footer.php'; ?>
  </div>
  <script src="../static/js/main.js"></script>
  <script src="../static/js/admin.js"></script>
</body>
</html>