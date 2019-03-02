<!doctype html>
<html lang=<?=$lang?>>
<head>
	<meta charset=<?=$encoding?>>
	<meta name=viewport content="width=device-width,initial-scale=1">
	<link href="<?=$css?>" rel=stylesheet>
	<?=$header?>
</head>
<body id=TOP>
	<div class=container>
		<header class="d-flex flex-column flex-md-row my-md-3 my-4 text-center">
			<div class="mx-auto w-50 mr-md-5 order-md-2">
				<a href="<?=$url?>"><img class="img-fluid mb-3" src="<?=$css?>daddy-<?=color2class($color)?>.gif" alt=""></a>
			</div>
			<div class="mx-auto text-md-left w-100 order-md-1">
				<h1><a href="<?=$url?>"><?=get_logo()?></a></h1>
				<ul class="nav nav-pills justify-content-center justify-content-md-start mb-3"><?=$nav?></ul>
				<?php if ($meta_description):?>
				<p class="border border-primary rounded p-3 mb-4"><?=$meta_description?></p>
				<?php endif?>
				<?=$search?>
			</div>
		</header>
		<ol class="breadcrumb small"><?=$breadcrumb?></ol>
		<?=$article?>
		<aside class="card-columns"><?=$aside?></aside>
		<footer class="text-center mt-5">
			<a href="#TOP" id=page-top class="btn btn-outline-primary">&uarr;</a>
			<script src="<?=$js?>"></script>
			<?=$footer?>
			<a href="http://shimizumari.com/fuwa2li/" target="_blank" rel="noopener noreferrer"><img class=p-3 src="<?=$css?>fuwa_b20.gif" alt=""></a>
		</footer>
	</div>
</body>
</html>
