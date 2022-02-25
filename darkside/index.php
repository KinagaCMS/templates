<!doctype html>
<html lang=<?=$lang?>>
<head>
<meta charset=<?=$encoding?>>
<meta name=viewport content="width=device-width,initial-scale=1">
<link href="<?=$css, (!$get_categ ? '' : '?categ='. $get_categ)?>" rel=stylesheet>
<?=$header?>
</head>
<body id=TOP class="text-white text-break bg-dark">
<div class=container-fluid>
<div class=row>
<div id=main  class="col-lg-8 pb-5 p-0 border-black">
<nav aria-label=breadcrumb><ol class="breadcrumb rounded-0 bg-dark border-black mb-0 border-bottom p-3"><?=$breadcrumb?></ol></nav>
<div class="p-4 border-bottom border-black"><?=$article?></div>
</div>
<aside id=side class="col-lg-4 border-start border-black p-0 d-flex flex-column">
<div class="py-4 text-center">
<a href="<?=$url?>"><?php get_logo(); echo !$logo_found ?
'<img class=my-3 src="'. $url. 'images/icon.php" alt=logo width=250 height=200><span class="border-0 d-block h1">'. $site_name. '</span>' : get_logo(true,'d-block display-6 my-3', 250)?>
</a>
</div>
<?=$use_search ?
'<div class="d-block p-5 border-black border-bottom">'. $search. '</div>' : '', $nav ?
'<div id=category class="p-4 order-'. $sidebox_order[10]. '">'. $n.
'<h2 class=h5>'. $sidebox_title[10]. '</h2>'. $n.
'<ul class=list-unstyled>'. $nav. '</ul>'. $n.
'</div>' : '', $aside?>
</aside>
</div>
</div>
<footer class="py-4 border-top border-black" id=footer>
<a href="#TOP" id=page-top><svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16"><path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/></svg></a>
<script src="<?=$js?>"></script>
<?=$footer?>
</footer>
</body>
</html>
