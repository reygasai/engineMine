<!doctype html>
<html lang="<?= ($ui['lang']) ?>">
  <head>
  	<title><?= ($ui['project']) ?></title>
    <meta charset="<?= ($ui['charset']) ?>">

    <meta name="description" content="<?= ($ui['description']) ?>">
    <meta name="keywords" content="<?= ($ui['keywords']) ?>">
    <link rel="canonical" href="<?= ($SCHEME.'://'.$HOST.$BASE.'/') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= ($BASE) ?>/theme/css/style.css">
    <link rel="stylesheet" href="<?= ($BASE) ?>/theme/css/main.css">
  </head>
  <body>

    <div class="container">
      <nav class="main">
        <a class="logotype" href="/"><i class="fa fa-cube" aria-hidden="true"></i> <?= ($ui['project']) ?></a>
        <div class="links">
          <a href="/">Главная</a>
          <a href="/2">Главная2</a>
          <a href="/2">Главная2</a>
          <a href="/2">Главная2</a>
          <a href="/2">Главная2</a>
        </div>
      </nav>
    </div>

		<div class="container d-md-flex align-items-stretch">

      <div id="content" class="pt-5">
        <h2 class="mb-4"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?= ($ui['title']) ?></h2>
        <p><?= ($content) ?></p>
      </div>

      <nav id="sidebar">
				<div class="p-4 pt-5">
					<h5>Categories</h5>
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mens Shoes</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Casual</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Football</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jordan</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Lifestyle</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Running</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Soccer</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sports</a></li>
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mens Shoes</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Casual</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Football</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jordan</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Lifestyle</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Running</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Soccer</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sports</a></li>
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Accessories</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu3">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Nicklace</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Ring</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Bag</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sacks</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Lipstick</a></li>
	            </ul>
	          </li>
	          <li>
	            <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Clothes</a>
	            <ul class="collapse list-unstyled" id="pageSubmenu4">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jeans</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> T-shirt</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Jacket</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Shoes</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Sweater</a></li>
	            </ul>
	          </li>
	        </ul>
					<div class="mb-5">
						<h5>Tag Cloud</h5>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">dish</a>
              <a href="#" class="tag-cloud-link">menu</a>
              <a href="#" class="tag-cloud-link">food</a>
              <a href="#" class="tag-cloud-link">sweet</a>
              <a href="#" class="tag-cloud-link">tasty</a>
              <a href="#" class="tag-cloud-link">delicious</a>
              <a href="#" class="tag-cloud-link">desserts</a>
              <a href="#" class="tag-cloud-link">drinks</a>
            </div>
					</div>
					<div class="mb-5">
	        	<h5>Newsletter</h5>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>
	      </div>
    	</nav>
		</div>

    <script src="<?= ($BASE) ?>/theme/js/jquery.min.js"></script>
    <script src="<?= ($BASE) ?>/theme/js/popper.js"></script>
    <script src="<?= ($BASE) ?>/theme/js/bootstrap.min.js"></script>
    <script src="<?= ($BASE) ?>/theme/js/main.js"></script>
  </body>
</html>