<?php include('inc/header.php');?>
  <div class="main" role="main">
    <div class="banner">
      <img src="./img/banner.jpg">
    </div>

    <div class="category-wrapper" id="content">
      <div class="intro">
        <h1>About DementiaApp</h1>
        <hr>
        <p class="left">
          We provide high quality information and resources about dementia and what you might encounter on your journey. We also assist you in finding local information about services, support groups, and primary care staff to help you and your family. We want to more effectively help support people living with dementia and other cognitive impairments, their families, and carers.
        </p>
      </div>
      <h2>Find what you're looking for</h2>
      <div class="category">
        <a href="#">
          <img src="./img/memory.jpg">
          <h3>Worried about your memory?</h3>
          <p>
            Lorem ipsum dolor sit amet, vis decore graeci ea, eos malis molestie temporibus ei. Doctus utroque ex nam, an eius nostrum persecuti vix
          </p>
        </a>
      </div>

      <div class="category">
        <a href="#">
          <img src="./img/legal.jpg">
          <h3>Benefits and Legal</h3>
          <p>
            Lorem ipsum dolor sit amet, vis decore graeci ea, eos malis molestie temporibus ei. Doctus utroque ex nam, an eius nostrum persecuti vix
          </p>
        </a>
      </div>

      <div class="category">
        <a href="#">
          <img src="./img/active.jpg">
          <h3>Staying Active</h3>
          <p>
            Lorem ipsum dolor sit amet, vis decore graeci ea, eos malis molestie temporibus ei. Doctus utroque ex nam, an eius nostrum persecuti vix
          </p>
        </a>
      </div>

      <div class="category">
        <a href="404.php">
          <img src="./img/carer.jpg" alt="carers' Health">
          <h3>Carer Health</h3>
          <p>
            Lorem ipsum dolor sit amet, vis decore graeci ea, eos malis molestie temporibus ei. Doctus utroque ex nam, an eius nostrum persecuti vix
          </p>
        </a>
      </div>

      <div class="category">
        <a href="#">
          <img src="./img/health.jpg">
          <h3>Your Health</h3>
          <p>
            Lorem ipsum dolor sit amet, vis decore graeci ea, eos malis molestie temporibus ei. Doctus utroque ex nam, an eius nostrum persecuti vix
          </p>
        </a>
      </div>
    </div>

    <form method="get" class="home-search flex-inline" action="general-search.php">
      <input type="text" name="searchTerm" class="emptyfocus" placeholder="Search everything" onfocus="if(this.value == 'value') { this.value = ''; }">
      <button type="submit" class="btn"><span>Search</span></button>
    </form>
    <p class="no-margin footer-advanced">
      <a href="#" class="advanced">Advanced Search →</a>
    </p>


  </div>
<?php include('inc/footer.php');?>
