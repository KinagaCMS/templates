<!doctype html>
<html lang=<?=$lang?>>
<head>
<meta charset=<?=$encoding?>>
<meta name=viewport content="width=device-width,initial-scale=1">
<link href="<?=$css?>" rel=stylesheet>
<?=$header?>
</head>
<body id=TOP class="text-white bg-dark">
<div class=container-fluid>
<div class=row>
<div class="col-lg-8 pb-5 p-0">
<ol class="breadcrumb rounded-0 bg-dark border-bottom border-black"><?=$breadcrumb?></ol>
<div class=p-4><?=$article?></div>
</div>
<aside class="col-lg-4 pb-5 border-left border-black">
<div class=text-center>
<a href="<?=$url?>"><img src="<?=$url?>images/icon.php" alt="" width=250><span class="d-block h1 m-4"><?=$site_name?></span></a>
</div>
<div class="d-block p-5"><?=$search?></div>
<div id=category class=pb-4>
<div class="p-3 title border-0"><?=$category?></div>
<ul class=list-unstyled><?=$nav?></ul>
</div>
<?=$aside?>
</aside>
</div>
</div>
<footer class="text-center p-4 border-top border-black">
<a href="#TOP" id=page-top class="btn btn-outline-primary">&uarr;</a>
<script src="<?=$js?>"></script>
<?=$footer?>
</footer>
</body>
</html>