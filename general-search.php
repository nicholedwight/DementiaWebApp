<?php include('inc/header.php');
 // Pulling general search term
  $searchTerm = $_GET['searchTerm'];
?>
  <div class="main" role="main">
    <div class="banner">
      <img src="./img/banner.jpg">
    </div>

    <div class="wrapper" id="content">
      <p class="heading">Search Results for <strong><?= $searchTerm;?></strong></p>
    </div>



  </div>
<?php include('inc/footer.php');?>
