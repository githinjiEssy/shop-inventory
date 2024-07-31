	<!-- Navigation -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Promolink</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto"> -->
			<!-- <li class="nav-item">
				<form class="form-inline" action="/action_page.php">
					<input class="form-control col-md-8 mr-sm-2" type="text" placeholder="Search">
					<button class="btn btn-success" type="submit">Search</button>
				</form>
			</li> -->
              <!-- <li class="nav-item">
                <span class="nav-link">Welcome <?php echo $_SESSION['fullName']; ?></span>
              </li>
              <li class="nav-item">
                <span class="nav-link"> | </span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="model/login/logout.php">Log Out</a>
              </li>
          </ul>
        </div>
      </div>
    </nav> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-warning bg-gradient fixed-top">
  <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Promolink</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <div class="col-lg-2">
        <h1 class="my-4"></h1>
          <div class="nav flex-column nav-pills text-primary" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active text-primary" id="v-pills-item-tab" data-toggle="pill" href="#v-pills-item" role="tab" aria-controls="v-pills-item" aria-selected="true">Item</a>
            <a class="nav-link text-primary" id="v-pills-purchase-tab" data-toggle="pill" href="#v-pills-purchase" role="tab" aria-controls="v-pills-purchase" aria-selected="false">Purchase</a>
            <a class="nav-link text-primary" id="v-pills-vendor-tab" data-toggle="pill" href="#v-pills-vendor" role="tab" aria-controls="v-pills-vendor" aria-selected="false">Vendor</a>
            <a class="nav-link text-primary" id="v-pills-sale-tab" data-toggle="pill" href="#v-pills-sale" role="tab" aria-controls="v-pills-sale" aria-selected="false">Sale</a>
            <a class="nav-link text-primary" id="v-pills-customer-tab" data-toggle="pill" href="#v-pills-customer" role="tab" aria-controls="v-pills-customer" aria-selected="false">Customer</a>
            <a class="nav-link text-primary" id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search" role="tab" aria-controls="v-pills-search" aria-selected="false">Search</a>
            <a class="nav-link text-primary" id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false">Reports</a>
          </div>
        </div>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <span class="nav-link">Welcome <?php echo $_SESSION['fullName']; ?></span>
      </li>
      <li class="nav-item">
        <span class="nav-link"> | </span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="model/login/logout.php">Log Out</a>
      </li>
    </ul>
  </div>
</nav>