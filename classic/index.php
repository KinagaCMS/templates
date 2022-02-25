<!doctype html>
<html lang=<?=$lang?>>
<head>
<meta charset=<?=$encoding?>>
<meta name=viewport content="width=device-width,initial-scale=1">
<link href="<?=$css, (!$get_categ ? '' : '?categ='. $get_categ)?>" rel=stylesheet>
<?=$header?>
</head>
<body id=TOP class=text-break>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary title">
<div class="container-fluid">
<a class=navbar-brand href="<?=$url?>"><?=get_logo()?></a>
<button class=navbar-toggler type=button data-toggle=collapse data-target="#nav" accesskey=n tabindex=-1>
<span class=navbar-toggler-icon></span>
</button>
<div class="collapse navbar-collapse" id=nav>
<ul class="navbar-nav me-auto"><?=$nav?></ul>
<?=$search?>
</div>
</div>
</nav>
<ol class="breadcrumb rounded-0 justify-content-end mb-4 p-2"><?=$breadcrumb?></ol>
<div class=container-fluid>
<div class=row>
<div id=main class="col-lg-9"><?=$article?></div>
<div id=side class="col-lg-3 d-flex flex-column"><?=$aside?></div>
</div>
</div>
<footer id=footer class="py-3">
<a href="#TOP" id=page-top><svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16"><path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/></svg></a>
<script src="<?=$js?>"></script>
<?=$footer?>
</footer>
</body>
</html>
