<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Ilmu Komputer</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
  <!-- FontAwesome Icon CSS -->
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous"
  />

  <!-- Animate.style -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <!-- LINK TO CSS -->
  <link rel="stylesheet" href="http://localhost/uts-web-ilkom/css/style.css">
</head>

<body>
  <!-- navbar -->
  <?php include "navbar.php"; ?>
  <!-- end navbar -->

  <!-- main content -->
  <main>
    <?php
      if(isset($_GET['page'])){
        $page=$_GET['page'];
        switch($page){
          case "home":
            include "home.php";
            break;
          case "visi-misi":
            include "visi&misi.php";
            break;
          case "about":
            include "about.php";
            break;
          case "sejarah":
            include "sejarah.php";
            break;
          case "contact";
            include "kontak.php";
            break;
          default:
            include "404.html";
            break;
        }
      } else {
          include "home.php";
      }
      ?>

  </main>
  <!-- end main content -->

  <!-- footer -->
  <footer>
    <p>&#169; Copyright Wahyu Nur Fadillah</p>
  </footer>
  <!-- end footer -->


  <!-- jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- SCRIPT JAVASCRIPT -->
  <script src="http://localhost/uts-web-ilkom/js/script.js"></script>
</body>

</html>
