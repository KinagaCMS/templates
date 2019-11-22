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
<div class="col-lg-8 pb-5 p-0 border-black">
<ol class="breadcrumb rounded-0 bg-dark border-black"><?=$breadcrumb?></ol>
<div id=main class="p-4 border-bottom border-black"><?=$article?></div>
</div>
<aside id=side class="col-lg-4 border-left border-black p-0 d-flex flex-column">
<div class="py-4 text-center">
<a href="<?=$url?>"><?=!is_file('images/logo.png') ?
'<img class=mt-3 src="'. $url. 'images/icon.php" alt=logo width=250 height=200><span class="border-0 d-block h1 mt-4">'. $site_name. '</span>' : get_logo()?>
</a>
</div>
<?=$use_search ?
'<div class="d-block p-5 border-black">'. $search. '</div>' : '', $nav ?
'<div id=category class="p-4 order-'. $sidebox_order[10]. '">'. $n.
'<h2 class=h5>'. $sidebox_title[10]. '</h2>'. $n.
'<ul class=list-unstyled>'. $nav. '</ul>'. $n.
'</div>' : '', $aside?>
</aside>
</div>
</div>
<footer class="text-center pb-2 pt-4 border-top border-black">
<a href="#TOP" id=page-top class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path fill="currentColor" d="m2.5872 45.447-2.5872-2.043 24.034-40.851 23.966 40.987-2.996 1.362-21.038-35.745z"/></svg></a>
<script src="<?=$js?>"></script>
<?=$footer?>
</footer>
</body>
</html>
