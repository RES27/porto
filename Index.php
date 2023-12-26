<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Meyawo Landing page | Free Bootstrap 4.3.x landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="assets/css/meyawo.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
     
<div class="container-fluid">
        <?php
        
        include_once 'navbar.php';
        ?>
        <br/>
        
               <?php
              if (isset($_REQUEST['hal'])) {
                $hal = $_REQUEST['hal'];
                if (!empty($hal)) {
                  include_once $hal. '.php';
                }
              } else {
                include_once 'home.php';
              }
              ?>
            
        <br/>
        <?php include_once 'footer.php' ?>
        
    </div>





<!-- core  -->
     <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="assets/js/meyawo.js"></script>

</body>

</html>