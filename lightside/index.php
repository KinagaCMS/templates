<!doctype html>
<html lang=<?=$lang?>>
<head>
<meta charset=<?=$encoding?>>
<meta name=viewport content="width=device-width,initial-scale=1">
<link href="<?=$css?>" rel=stylesheet>
<?=$header?>
</head>
<body id=TOP>
<div class="d-flex" id="wrapper">
<aside id=sidebar-wrapper class="bg-light pb-5">
<div class="text-center"><a href="<?=$url?>"><img src="<?=$url?>images/icon.php" alt="" width=250><span class="d-block h1 m-4"><?=$site_name?></span></a></div>
<div class="d-block p-5"><?=$search?></div>
<div id=category  class=pb-4><div class="p-3 title border-0"><?=$category?></div><ul class=list-unstyled><?=$nav?></ul></div>
<?=$aside?>
</aside>
<div class="container-fluid pb-5 p-0">
<ol class="breadcrumb mb-0 rounded-0 bg-light">
<li class="d-md-none mr-3"><a class="badge badge-primary p-2" href="#top" onclick="$('#wrapper').toggleClass('toggled')">&#9664;&#9654;</a></li>
<?=$breadcrumb?>
</ol>
<div class=p-4><?=$article?></div>
</div>
</div>
<footer class="text-center bg-light p-4">
<a href="#TOP" id=page-top class="btn btn-outline-primary">&uarr;</a>
<script src="<?=$js?>"></script>
<?=$footer?>
</footer>
</body>
</html>