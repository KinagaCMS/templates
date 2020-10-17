<!doctype html>
<html lang=<?=$lang?>>
<head>
<meta charset=<?=$encoding?>>
<meta name=viewport content="width=device-width,initial-scale=1">
<link href="<?=$css, ($get_categ ? '?categ='.$get_categ : '')?>" rel=stylesheet>
<?=$header?>
</head>
<body id=TOP>
<div class=container>
<header class="d-flex flex-column flex-md-row my-3 text-center">
<div class="mx-auto w-50 order-md-2">
<a href="<?=$url?>"><img class=img-fluid src="<?=$css?>daddy-<?=color2class($color)?>.gif" alt="daddy" height=315 width=123></a>
</div>
<div class="mx-auto text-md-left w-100 order-md-1">
<h1><a href="<?=$url?>"><?=get_logo()?></a></h1>
<ul class="nav nav-pills justify-content-center justify-content-md-start mb-3"><?=$nav?></ul>
<?php if ($meta_description):?>
<p class="border border-primary rounded p-3 mb-3"><?=$meta_description?></p>
<?php endif?>
<?=$search?>
</div>
</header>
<ol class="breadcrumb mb-3"><?=$breadcrumb?></ol>
<div class="d-flex flex-column"><?=$aside?><div><?=$article?></div></div>
</div>
<footer class="my-5">
<a href="#TOP" id=page-top class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path fill="currentColor" d="m2.5872 45.447-2.5872-2.043 24.034-40.851 23.966 40.987-2.996 1.362-21.038-35.745z"/></svg></a>
<script src="<?=$js?>"></script>
<?=$footer?>
</footer>
</body>
</html>
