<?php include('inc/header.php');?>
  <div class="main" role="main">
    <div class="banner">
      <img src="./img/banner.jpg">
    </div>

    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <span></span>
      <li>Search Results</li>
    </ul>

    <div class="wrapper" id="content" tabindex="0">
      <p class="heading">Search Results for
        <strong><?= $searchTerm;?></strong>
      </p>
      <div class="sort-by-options">
        <p>Sort results by:</p>
        <button class="current-btn opt-btn">Most Popular</button>
        <button class="opt-btn">A-Z</button>
        <button class="opt-btn">Newest</button>
        <button class="opt-btn">Oldest</button>
        <hr>
      </div>

      <section class="results-wrapper">
        <article class="search-result">
          <p class="heading">Lorem ipsum dolor sit amet</p>
          <p class="phone"><span></span>01234 567 8910</p>
          <p>
            Lorem ipsum dolor sit amet, cu nonumy consul graeco pri. Cu enim legere mea. His delectus lucilius torquatos ei, ad alia aliquam vix.
          </p>
          <a href="#" class="email"><span></span>www.<?= $urlTerm;?>.com</a>
        </article>
        <hr>
        <article class="search-result">
          <p class="heading">Lorem ipsum dolor sit amet</p>
          <p class="phone"><span></span>01234 567 8910  -  John Smith</p>
          <p>
            Lorem ipsum dolor sit amet, cu nonumy consul graeco pri. Cu enim legere mea. His delectus lucilius torquatos ei, ad alia aliquam vix. Eu veniam qualisque vel, mutat affert sententiae ei mei...
          </p>
        </article>
        <hr>
        <article class="search-result">
          <p class="heading">Lorem ipsum dolor sit amet</p>
          <p class="phone"><span></span>01234 567 8910</p>
          <p class="phone"><span></span>01987 654 3210</p>
          <p>
            Lorem ipsum dolor sit amet, cu nonumy consul graeco pri. Cu enim legere mea. His delectus lucilius torquatos ei, ad alia aliquam vix. Eu veniam qualisque vel.
          </p>
          <p class="address"><span></span>Lorem House, 10 Ipsum Road, Bristol, BS1 0KP</p>
        </article>
        <article class="search-result hidden">
          <hr>
          <p class="heading">Lorem ipsum dolor sit amet</p>
          <p class="phone"><span></span>01234 567 8910</p>
          <p>
            Lorem ipsum dolor sit amet, cu nonumy consul graeco pri. Cu enim legere mea. His delectus lucilius torquatos ei, ad alia aliquam vix. Eu veniam qualisque vel, mutat affert sententiae ei mei. Assum iisque ut ius, cum ad omnium impedit dissentias.
          </p>
          <a href="#" class="email"><span></span>www.<?= $urlTerm;?>.com</a>
        </article>
        <article class="search-result hidden">
          <hr>
          <p class="heading">Lorem ipsum dolor sit amet</p>
          <p class="phone"><span></span>01234 567 8910  -  John Smith</p>
          <p>
            Lorem ipsum dolor sit amet, cu nonumy consul graeco pri. Cu enim legere mea. His delectus lucilius torquatos ei, ad alia aliquam vix.
          </p>
        </article>
        <article class="search-result hidden">
          <hr>
          <p class="heading">Lorem ipsum dolor sit amet</p>
          <p class="phone"><span></span>01234 567 8910</p>
          <p class="phone"><span></span>01987 654 3210</p>
          <p>
            Lorem ipsum dolor sit amet, cu nonumy consul graeco pri. Cu enim legere mea. His delectus lucilius torquatos ei, ad alia aliquam vix. Eu veniam qualisque vel...
          </p>
          <p class="address"><span></span>Lorem House, 10 Ipsum Road, Bristol, BS1 0KP</p>
        </article>
        <button class="show-all">Show All</button>
      </section>
    </div>


  </div>
<?php include('inc/footer.php');?>
