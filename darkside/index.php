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
<div id=main class=p-4><?=$article?></div>
</div>
<aside id=side class="col-lg-4 border-left border-black p-0"><?=$aside?></aside>
</div>
</div>
<footer class="text-center p-4 border-top border-black">
<a href="#TOP" id=page-top class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path  fill="currentColor" d="m2.5872 45.447-2.5872-2.043 24.034-40.851 23.966 40.987-2.996 1.362-21.038-35.745z"/></svg></a>
<script src="<?=$js?>"></script>
<?=$footer?>
</footer>
</body>
</html>
