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
        <?php
        // Pulling general search term
         $searchTerm = $_GET['searchTerm'];
         $urlTerm = strtolower(str_replace(" ", "", $searchTerm));
         $topic = $_GET['topic'];
         $postcode = strtoupper($_GET['location']);
         $group = $_GET['group'];
        ?>

        <div class="search-container collapsed" id="the-basics">
          <form method="get" action="general-search.php">
            <input class="typeahead" type="search" placeholder="Search everything" name="searchTerm"
            value="<?php if($searchTerm){
              echo $searchTerm;
            }?>" required>
            <button type="submit" class="btn">Search</button>
          </form>
          <p class="advanced-search-toggle advanced"><a href="#" id="advanced">Advanced Search &#8594;</a></p>
        </div>

        <div class="advanced-search-container collapsed">
          <p class="no-margin">Search a category</p>
          <form method="get" action="topic-search.php">
            <select name="topic" required>
              <option selected disabled value="">Topic</option>
              <option value="Benefits">Benefits</option>
              <option value="Power of Attorney">Power of Attorney</option>
              <option value="Local Council">Local Council</option>
              <option value="Staying Active">Staying Active</option>
              <option value="Group Forumn">Group Forumn</option>
              <option value="Support Groups">Support Groups</option>
              <option value="Carer's Support Groups">Carer's Support Groups</option>
              <option value="Carer Training">Carer Training</option>
              <option value="Specialist Physicians">Specialist Physicians</option>
            </select>
            <input type="search" placeholder="Search term" name="searchTerm" value="<?php if($searchTerm){
              echo $searchTerm;
            }?>" required>
            <input type="submit" class="btn search" value="Search">
          </form>

          <p>Or</p>
          <p class="no-margin">Find groups near you</p>

          <form method="get" action="map.php">
            <select name="group" required>
              <option selected value="Groups">All Groups</option>
              <option value="Support Groups">Support Groups</option>
              <option value="Carer's Support Groups">Carer's Support Groups</option>
              <option value="Sports Groups">Sports</option>
              <option value="Crafts Groups">Crafts</option>
              <option value="Libraries">Libraries</option>
              <option value="Organisations">Organisations</option>
            </select>
            <input type="text" placeholder="Post Code" name="location" id="location" value="<?php if($postcode){
              echo $postcode;
            }?>" required>
            <input type="submit" class="btn search" value="Search">
          </form>
        </div>
    </header>
