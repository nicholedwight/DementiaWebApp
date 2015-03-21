<?php include('inc/header.php');?>
  <div class="main" role="main">
    <div class="banner">
      <img src="./img/banner.jpg">
    </div>

    <div class="category-wrapper" id="content">
      <h1>Categories</h1>
      <div class="category">
        <a href="#">
          <img src="./img/memory.jpg">
          <h4>Worried about your memory?</h4>
          <p>
            Lorem ipsum dolor sit amet, vis decore graeci ea, eos malis molestie temporibus ei. Doctus utroque ex nam, an eius nostrum persecuti vix
          </p>
        </a>
      </div>

      <div class="category">
        <a href="#">
          <img src="http://placekitten.com/g/300/200">
          <h4>Benefits and Legal</h4>
          <p>
            Lorem ipsum dolor sit amet, vis decore graeci ea, eos malis molestie temporibus ei. Doctus utroque ex nam, an eius nostrum persecuti vix
          </p>
        </a>
      </div>

      <div class="category">
        <a href="#">
          <img src="./img/active.jpg">
          <h4>Staying Active</h4>
          <p>
            Lorem ipsum dolor sit amet, vis decore graeci ea, eos malis molestie temporibus ei. Doctus utroque ex nam, an eius nostrum persecuti vix
          </p>
        </a>
      </div>

      <div class="category">
        <a href="#">
          <img src="./img/carer.jpg">
          <h4>Carer Health</h4>
          <p>
            Lorem ipsum dolor sit amet, vis decore graeci ea, eos malis molestie temporibus ei. Doctus utroque ex nam, an eius nostrum persecuti vix
          </p>
        </a>
      </div>

      <div class="category">
        <a href="#">
          <img src="./img/health.jpg">
          <h4>Your Health</h4>
          <p>
            Lorem ipsum dolor sit amet, vis decore graeci ea, eos malis molestie temporibus ei. Doctus utroque ex nam, an eius nostrum persecuti vix
          </p>
        </a>
      </div>

      <form role="search" method="get" id="searchform" action="#">
        <input type="text" name="s" class="emptyfocus" placeholder="Search everything" onfocus="if(this.value == 'value') { this.value = ''; }">
        <button type="submit"><span>Search</span></button>
        <a href="#">Advanced Search →</a>
      </form>
    </div>

  </div>
<?php include('inc/footer.php');?>
