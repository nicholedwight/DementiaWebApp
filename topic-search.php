<?php include('inc/header');
// Pulling general search term
 $searchTerm = $_GET['searchTerm'];
?>
 <div class="main" role="main">
   <div class="banner">
     <img src="./img/banner.jpg">
   </div>

   <div class="wrapper" id="content">
     <p class="heading">TOPIC Search Results for
       <strong><?= $searchTerm;?></strong>
     </p>
     <p>Sort results by:</p>
   </div>


 </div>

<?php include('inc/footer.php');?>
