<!doctype html>
<html lang="<?= ($ui['lang']) ?>">
  <head>
  	<title><?= ($ERROR['text']) ?></title>
    <meta charset="<?= ($ui['charset']) ?>">

    <meta name="description" content="<?= ($ui['description']) ?>">
    <meta name="keywords" content="<?= ($ui['keywords']) ?>">
    <link rel="canonical" href="<?= ($SCHEME.'://'.$HOST.$BASE.'/') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= ($BASE) ?>/theme/css/style.css">
  </head>
  <body>
	<div class="container d-md-flex align-items-stretch">

      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?= ($ERROR['text']) ?></h2>
        <p>Кажется вы получили ошибку <?= ($ERROR['code']) ?>. Что-то пошло не так, вернитесь на страницу назад или же обратитесь к администратору!</p>
      </div>
      
	</div>
    <script src="<?= ($BASE) ?>/theme/js/main.js"></script>
  </body>
</html>