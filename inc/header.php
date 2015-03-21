<!doctype html>
<?php session_start();?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dementia App</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body class="nojs">
    <header>
        <div class="navbar-header">
          <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" id="nav-toggle">
            <span></span>
            Menu
          </a>
          <a class="navbar-brand" href="index.php">DementiaApp</a>
          <a href="#" class="search-btn"><span></span>Search</a>
        </div>
        <nav class="navbar-collapsible collapsed">
          <ul class="nav navbar-nav">
      		    <li class="active"><a href="index.php">Home</a></li>
              <li><a href="#">Worried about your memory?</a></li>
              <li class="benefits">
                <a href="#" class="has-dropdown">
                  Benefits and Legal
                </a>
                <ul class="dropdown collapsed">
                  <li><a href="#">Benefits</a></li>
                  <li><a href="#">Power of Attorney</a></li>
                  <li><a href="#">Local Council</a></li>
                </ul>
              </li>
              <li class="active">
                <a href="#" class="has-dropdown">
                  Staying Active
                </a>
                <ul class="dropdown collapsed">
                  <li><a href="#">Group Forum</a></li>
                  <li><a href="#">Support Groups</a></li>
                  <li><a href="#">Activities</a></li>
                  <li><a href="#">Organisations</a></li>
                  <li><a href="#">In the Home</a></li>
                </ul>
              </li>
              <li class="carer">
                <a href="#" class="has-dropdown">
                  Carer Health
                </a>
                <ul class="dropdown collapsed">
                  <li><a href="#">Carer's Support Groups</a></li>
                  <li><a href="#">Carer Training</a></li>
                </ul>
              </li>
              <li class="your-health">
                <a href="#" class="has-dropdown">
                  Your Health
                </a>
                <ul class="dropdown collapsed">
                  <li><a href="#">What to Expect</a></li>
                  <li><a href="#">Specialist Health Physicians</a></li>
                </ul>
              </li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Helpline</a></li>
      		</ul>
        </nav>

        <div class="search-container collapsed" id="the-basics">
          <form method="get" action="general-search.php">
            <input class="typeahead" type="search" placeholder="Search everything" name="searchTerm">
            <!-- Setting the general search value so it can be pulled on search results page-->
            <?php $searchTerm = $_POST['searchTerm']; ?>
            <button class="btn">Search</button>
          </form>
          <p class="no-margin"><a href="#" id="advanced">Advanced Search</a></p>
        </div>

        <div class="advanced-search-container collapsed">
          <input type="search" placeholder="Search term">
          <select>
            <option selected disabled value="">Topic</option>
            <option value="benefits">Benefits</option>
          </select>
          <p class="no-margin">Optional</p>
          <select>
            <option selected disabled value="">Group Type</option>
          </select>
          <input type="text" placeholder="Post Code">
          <p>Or</p>
          <select>
            <option selected disabled value="">Location</option>
            <option value="bristol">Bristol</option>
            <option value="south gloucestershire">South Gloucestershire</option>
          </select>
          <input type="submit" class="btn" value="Submit">
        </div>
    </header>
