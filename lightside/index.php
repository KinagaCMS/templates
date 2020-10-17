<!doctype html>
<html lang=<?=$lang?>>
<head>
<meta charset=<?=$encoding?>>
<meta name=viewport content="width=device-width,initial-scale=1">
<link href="<?=$css, ($get_categ ? '?categ='.$get_categ : '')?>" rel=stylesheet>
<?=$header?>
</head>
<body id=TOP>
<div class="d-flex" id="wrapper">
<aside id=sidebar-wrapper class="bg-light pb-5 d-flex flex-column">
<div class="py-4 text-center">
<a href="<?=$url?>"><?=!is_file('images/logo.png') ?'
<img class=mt-3 src="'. $url. 'images/icon.php" alt=logo width=250 height=200>
<span class="border-0 d-block h1 mt-4">'. $site_name. '</span>' : get_logo(true)?>
</a>
</div>
<?=$use_search ? '
<div class="d-block p-4 border-bottom">'. $search. '</div>' : '', $nav ?
'<div id=category class="p-4 order-'. $sidebox_order[10]. '">'. $n.
'<h2 class=h5>'. $sidebox_title[10]. '</h2>'. $n.
'<ul class=list-unstyled>'. $nav. '</ul>'. $n.
'</div>' : '', $aside?>
</aside>
<div class="container-fluid pb-5 p-0">
<ol class="breadcrumb mb-0 rounded-0 bg-light">
<li class="d-md-none mr-3"><a class="badge badge-primary p-2" href="#top" onclick="$('#wrapper').toggleClass('toggled')">&#9664;&#9654;</a></li>
<?=$breadcrumb?>
</ol>
<div class=p-4><?=$article?></div>
</div>
</div>
<footer class="bg-light py-4">
<a href="#TOP" id=page-top class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path  fill="currentColor" d="m2.5872 45.447-2.5872-2.043 24.034-40.851 23.966 40.987-2.996 1.362-21.038-35.745z"/></svg></a>
<script src="<?=$js?>"></script>
<?=$footer?>
</footer>
</body>
</html>
