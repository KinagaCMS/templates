<!doctype html>
<html lang=<?=$lang?>>
<head>
<meta charset=<?=$encoding?>>
<meta name=viewport content="width=device-width,initial-scale=1">
<link href="<?=$css, ($get_categ ? '?categ='.$get_categ : '')?>" rel=stylesheet>
<?=$header?>
</head>
<body id=TOP class=text-break>
<div class=container>
<header class="d-flex flex-column flex-md-row my-3 text-center" id=header>
<div class="mx-auto w-50 order-md-2">
<a href="<?=$url?>"><img class=img-fluid src="<?=$css?>daddy-<?=color2class($color)?>.gif" alt="daddy" height=315 width=123></a>
</div>
<div class="mx-auto text-md-left w-100 order-md-1">
<ol class="breadcrumb justify-content-center mb-3"><?=$breadcrumb?></ol>
<h1><a href="<?=$url?>"><?=get_logo()?></a></h1>
<?php if ($meta_description):?><p class=my-4><?=$meta_description?></p><?php endif?>
<div class=my-4><?=$search?></div>
<div class="card shadow-sm p-3 my-3"><ul class="nav nav-pills"><?=$nav?></ul></div>
</div>
</header>
<div class="d-flex flex-column" id=side><?=$aside?><?=$article?></div>
<footer class="card shadow-sm p-3 my-3">
<a href="#TOP" id=page-top><svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16"><path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/></svg></a>
<script src="<?=$js?>"></script>
<?=$footer?>
</footer></div>
</body>
</html>
