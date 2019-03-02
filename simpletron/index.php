<!doctype html>
<html lang=<?=$lang?>>
<head>
<meta charset=<?=$encoding?>>
<meta name=viewport content="width=device-width,initial-scale=1">
<link href="<?=$css?>" rel=stylesheet>
<?=$header?>
</head>
<body id=TOP>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded-0">
<button class=navbar-toggler data-toggle=collapse data-target="#nav" aria-controls=nav aria-expanded=false><span class=navbar-toggler-icon></span></button>
<ul class="navbar-nav align-items-start collapse navbar-collapse" id=nav><?=$nav?></ul>
<?=$search?>
</nav>
<header class="jumbotron mh-100 text-center rounded-0">
<h1 class="display-4 mb-4"><a href="<?=$url?>"><?=get_logo()?></a></h1>
<?php if ($meta_description):?>
<p><?=$meta_description?></p>
<?php endif?>
</header>
<div class=container><?=$article?></div>
<aside class="container-fluid d-flex flex-wrap flex-column flex-md-row justify-content-around bg-primary text-white pt-5"><?=$aside?></aside>
<footer class="text-center bg-primary text-white pb-3">
<a href="#TOP" id=page-top class="btn btn-outline-primary">&uarr;</a>
<script src="<?=$js?>"></script>
<?=$footer?>
</footer>
</body>
</html>
