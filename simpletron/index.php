<!doctype html>
<html lang=<?=$lang?>>
<head>
<meta charset=<?=$encoding?>>
<meta name=viewport content="width=device-width,initial-scale=1">
<link href="<?=$css, ($get_categ ? '?categ='.$get_categ : '')?>" rel=stylesheet>
<?=$header?>
</head>
<body id=TOP class=text-break>
<nav class="justify-content-center navbar navbar-expand-lg navbar-dark bg-primary rounded-0">
<button class=navbar-toggler data-bs-toggle=collapse data-bs-target="#nav" aria-controls=nav aria-expanded=false accesskey=n tabindex=100><span class=navbar-toggler-icon></span></button>
<ul id=nav class="justify-content-center navbar-nav collapse navbar-collapse"><?=$nav?></ul>
</nav>
<header id=header class="jumbotron mh-100 text-center rounded-0 mb-0 py-5 bg-light">
<h1 class=display-4><a href="<?=$url?>"><?=get_logo()?></a></h1>
<?php if ($meta_description): ?><p class=m-4><?=$meta_description?></p><?php endif?>
<?php if ($search): ?><div class="mx-auto px-5"><?=$search?></div><?php endif?>
</header>
<main id=main class="container py-3"><?=$article?></main>
<ol class="breadcrumb mb-0 rounded-0 bg-light justify-content-center py-3">
<?=$breadcrumb?>
</ol>
<aside id=side class="container-fluid d-flex flex-wrap flex-column flex-md-row align-items-start justify-content-between bg-primary text-white p-5"><?=$aside?></aside>
<footer id=footer class="bg-dark py-5">
<a href="#TOP" id=page-top><svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" stroke="white" fill="var(--bs-primary)" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16"><path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/></svg></a>
<script src="<?=$js?>"></script>
<?=$footer?>
</footer>
</body>
</html>
