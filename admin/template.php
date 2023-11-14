<?php

include('class/function.php');
session_start();

$id =  $_SESSION['adminID'];
if($id== null){
    header('location: index.php');
}


?>

<!-- templete start -->

<?php include_once('includes/head.php') ?>
    <body class="sb-nav-fixed">
    <?php
    
    include_once('includes/navbar.php') 
    ?>
        <div id="layoutSidenav">
<!-- sidebar include -->
<?php include_once('includes/sidebar.php') ?>
            <div id="layoutSidenav_content">
                <main>
<div class="container-fluid">
  <?php 
  
  if(isset($view)){
    if ($view=='dashboard') {
        include('view/dash_view.php');
    }
    elseif ($view=='add_post') {
        include('view/addpost_view.php');
    }
    elseif ($view=='manage_post') {
        include('view/managepost_view.php');
    }
    elseif ($view=='add_categories') {
        include('view/addCat_view.php');
    }
   elseif ($view=='manage_categories') {
        include('view/manageCat_view.php');
    } else{
        include('view/error.php');
    }
  }

  ?>
</div>
                </main>
                <?php include_once('includes/footer.php') ?>
            </div>
        </div>
<?php include_once('includes/script.php') ?>
    </body>
</html>
