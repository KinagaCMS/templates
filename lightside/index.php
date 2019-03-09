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
<a href="#TOP" id=page-top class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="1em"><path  fill="currentColor" d="m2.5872 45.447-2.5872-2.043 24.034-40.851 23.966 40.987-2.996 1.362-21.038-35.745z"/></svg></a>
<script src="<?=$js?>"></script>
<?=$footer?>
</footer>
</body>
</html>
