<!doctype html>
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
              <li><a href="404.php">Worried about your memory?</a></li>
              <li class="benefits">
                <a href="#" class="has-dropdown">
                  Benefits and Legal
                </a>
                <ul class="dropdown collapsed">
                  <li><a href="404.php">Benefits</a></li>
                  <li><a href="404.php">Power of Attorney</a></li>
                  <li><a href="404.php">Local Council</a></li>
                </ul>
              </li>
              <li class="active">
                <a href="#" class="has-dropdown">
                  Staying Active
                </a>
                <ul class="dropdown collapsed">
                  <li><a href="404.php">Group Forum</a></li>
                  <li><a href="404.php">Support Groups</a></li>
                  <li><a href="404.php">Activities</a></li>
                  <li><a href="404.php">Organisations</a></li>
                  <li><a href="404.php">In the Home</a></li>
                </ul>
              </li>
              <li class="carer">
                <a href="#" class="has-dropdown">
                  Carer Health
                </a>
                <ul class="dropdown collapsed">
                  <li><a href="404.php">Carer's Support Groups</a></li>
                  <li><a href="404.php">Carer Training</a></li>
                </ul>
              </li>
              <li class="your-health">
                <a href="#" class="has-dropdown">
                  Your Health
                </a>
                <ul class="dropdown collapsed">
                  <li><a href="404.php">What to Expect</a></li>
                  <li><a href="404.php">Specialist Health Physicians</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="404.php">Helpline</a></li>
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
          <form method="get" action="general-search.php" class="flex-inline">
            <input class="typeahead" type="search" placeholder="Search everything" name="searchTerm"
            value="<?php if($searchTerm){
              echo $searchTerm;
            }?>" required>
            <button type="submit" class="btn">Search</button>
          </form>
          <p class="advanced-search-toggle advanced"><a href="#" id="advanced">Advanced Search &#8594;</a></p>
        </div>

        <div class="advanced-search-container collapsed">
          <p class="no-margin heading">Search a category</p>
          <form method="get" action="topic-search.php">
            <label for="topic">Topic:</label>
            <select name="topic" id="topic" required>
              <option selected disabled value="">Topic</option>
              <option value="Benefits">Benefits</option>
              <option value="Power of Attorney">Power of Attorney</option>
              <option value="Local Council">Local Council</option>
              <option value="Staying Active">Staying Active</option>
              <option value="Group Forumn">Group Forumn</option>
              <option value="Support Groups">Support Groups</option>
              <option value="carers' Support Groups">carers' Support Groups</option>
              <option value="Carer Training">Carer Training</option>
              <option value="Specialist Physicians">Specialist Physicians</option>
            </select>
            <label for="searchTerm">Search Term:</label>
            <input type="search" placeholder="Search term" id="searchTerm" name="searchTerm" value="<?php if($searchTerm){
              echo $searchTerm;
            }?>" required>
            <input type="submit" class="btn search" value="Search">
          </form>

          <p class="heading">Or</p>

          <p class="no-margin heading">Find groups near you</p>

          <form method="get" action="map.php">
            <label for="group">Group Type:</label>
            <select name="group" id="group" required>
              <option selected value="Groups">All Groups</option>
              <option value="Support Groups">Support Groups</option>
              <option value="carers' Support Groups">carers' Support Groups</option>
              <option value="Sports Groups">Sports</option>
              <option value="Crafts Groups">Crafts</option>
              <option value="Libraries">Libraries</option>
              <option value="Organisations">Organisations</option>
            </select>
            <label for="location">Post Code:</label>
            <input type="text" placeholder="Post Code" name="location" id="location" value="<?php if($postcode){
              echo $postcode;
            }?>" required>
            <input type="submit" class="btn search" value="Search">
          </form>
        </div>
    </header>
