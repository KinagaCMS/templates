<?php
include '../../../includes/functions.php';
include '../../../includes/config.php';
header('Last-Modified: '. $last_modified = timestamp(__FILE__));
if ($last_modified === filter_input(INPUT_SERVER, 'HTTP_IF_MODIFIED_SINCE')) header(filter_input(INPUT_SERVER, 'SERVER_PROTOCOL'). ' 304 Not Modified');
header('Content-Type: text/css; charset='. $encoding);
$bootstrap = file_get_contents('bootstrap.min.css');
if ($color)
{
	#primary
	$bootstrap = str_replace('#0d6efd', hsla($color, 0, -5), $bootstrap);
	$bootstrap = str_replace('13,110,253,', 'var(--bs-primary-rgb),', $bootstrap);
	#border, a:hover, btn-primary:hover, .btn-primary:focus .btn-primary:active, .btn-link:hover, .nav-link:hover, .nav-link:focus, .page-link:hover|focus, .link-primary:hover, .link-primary:focus
	$bootstrap = str_replace(['#0b5ed7', '#0a58ca', '#0a53be'], hsla($color, 0, 0, 1), $bootstrap);
	#.btn-primary:hover, .btn-primary:focus
	$bootstrap = str_replace(['rgba(49,132,253,.5)', 'rgba(13,110,253,.5)', 'rgba(13,110,253,.25)'], hsla($color, 0, 5, .2), $bootstrap);
	#alert-bg, .list-group-item-primary-bg .table-primary-bg
	$bootstrap = str_replace(['#cfe2ff', '#b6d4fe'], hsla($color, 0, 15), $bootstrap);
	#.alert-primary-color, .list-group-item-primary.list-group-item-action.active, input:focus
	$bootstrap = str_replace(['#084298', '#86b7fe'], hsla($color, 0, -15), $bootstrap);
	#.accordion-button:not(.collapsed)-bg
	$bootstrap = str_replace(['#e7f1ff', '#bacbe6'], hsla($color, 0, 25), $bootstrap);
	#.accordion-button:not(.collapsed)-color, .alert-primary .alert-link-color
	$bootstrap = str_replace(['#0c63e4', '%230c63e4', '#06357a'], hsla($color, -25, -20), $bootstrap);
	#dark
	$bootstrap = str_replace('#212529', '#3c3c3c', $bootstrap);

	$c = hsla($color);
	$c2 = hsla($color, 0, 0, .2);
	$c05 = hsla($color, 0, -50, .3);
	[$h, $s, $l] = explode(',', str_replace(['hsla', '(', ')', '%'], '', hsla($color, 0, -5)));
}
else
{
	$bootstrap = str_replace('#e9ecef', 'rgba(0, 0, 0, .5)', $bootstrap);
}
$serif_fonts = '';
if ('ja' === $lang)
{
	$bootstrap = str_replace('system-ui,', 'TakaoPGothic,"Noto Sans CJK JP",system-ui,', $bootstrap);
	$bootstrap = str_replace('SFMono-Regular,', 'TakaoGothic,"Noto Sans Mono CJK JP",SFMono-Regular,', $bootstrap);
	$serif_fonts = 'TakaoPMincho,"Noto Serif CJK JP",';
}
$get_categ = !filter_has_var(INPUT_GET, 'categ') ? '' : filter_input(INPUT_GET, 'categ', FILTER_CALLBACK, ['options' => 'strip_tags_basename']);
echo $bootstrap, file_get_contents('fancybox.css'), (!$color ? '' : ':root{--bs-primary-rgb:'. implode(',', hsl2rgb($h, $s, $l)). '}'), 'html{scroll-behavior:smooth}a{text-decoration:none}#page-top svg{bottom:1em;position:fixed;right:1em;transition:all .3s linear .3s}
.not-found{background-image:url(daddy13.gif);background-repeat:no-repeat;background-position: 50% 100%;min-height:350px}
#page-top{bottom:2em;position:fixed;right:2em;display:none;z-index:10}
#page-top svg{width:1em}
.article{font-size:large;line-height:1.9}
.avatar{min-height:100px;min-width:100px;width:100px}
.badge-light{background-color:#f8f9fa}
.banned{filter:grayscale(100%);opacity:.8}
.bg-danger.text-danger{background-color:#f2dede!important;color:#a94442!important}
.bg-info.text-info{background-color:#d9edf7!important;color:#31708f!important}
.bg-success.text-success{background-color:#dff0d8!important;color:#3c763d!important}
.bg-warning.text-warning{background-color:#fcf8e3!important;color:#8a6d3b!important}

.col-lg-4{flex:0 0 100%!important;max-width:100%!important}
.index{flex-direction:column}.index div{width:100%!important}
.comment:target{box-shadow:5px 5px 5px 3px rgba(0,0,0,.2)}
.comment-icon{background-color:'. ($color ? hsla($color, 5.5, -7,.9) : 'inherit'). '}
.container{max-width:540px}
.card-arrow:before{background-color:#fff;border-right:solid 1px rgba(0,0,0,.125);border-top:solid 1px rgba(0,0,0,.125);height:15px;transform:rotate(225deg);width:15px;content:"";display:block;left:117px;position:absolute;top:16px;z-index:1}
.custom-file-label:after{content:"'. $custom_file_label. '"}
.flow{color:dimgray;font-size:small;padding:0;list-style:none;counter-reset:num;margin-bottom:2em}
.flow li{overflow-wrap:break-word;width:25%;float:left;position:relative;text-align:center;padding:0 1em}
.flow li:before{counter-increment:num;content:counter(num,upper-roman);height:30px;width:30px;line-height:30px;border:thin solid lightgray;display:block;margin:0 auto 10px auto;border-radius:50%;background-color:white}
.flow li:after{content:"";position:absolute;width:100%;height:1px;background-color:lightgray;top:15px;left:-55%;z-index:-1}
.flow li:first-child:after{content:none}
.flow li.active{color:limegreen}
.flow li.active:before{border-color:limegreen}
.img-responsive{display:block;max-width:100%;height:auto}
.lock{width:.6em;height:.7em;margin-left:.2em;background-image:url(\'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" fill="'. ($color ? hsla($color) : 'dimgray'). '" viewBox="0 0 4 5"%3E%3Cpath d="m0.2422 1.7224v0.0608c-0.138 0.0285-0.2422 0.1489-0.2422 0.2931v2.6248c0.000005 0.1658 0.1357 0.2989 0.3047 0.2989h3.3906c0.169 0 0.3047-0.13409 0.3047-0.29889v-2.6248c0-0.1442-0.1042-0.26466-0.2422-0.2931v-0.0608c0-0.95055-0.7888-1.7224-1.7578-1.7224-0.969 0.0000052-1.7578 0.77186-1.7578 1.7224zm1.7578-1.1227c0.631 0 1.1465 0.50276 1.1465 1.1227v0.053149h-2.293v-0.053051c0.00002-0.61995 0.5145-1.1228 1.1465-1.1228zm0 2.0974h0.00195c0.237 0 0.42969 0.18709 0.42969 0.41958 0 0.12066-0.052766 0.23003-0.13477 0.30654l0.11523 0.59584c0.006 0.033352-0.014828 0.059393-0.048828 0.059393h-0.7149c-0.034 0-0.056781-0.026041-0.050781-0.059393l0.11328-0.59201c-0.086-0.076513-0.14062-0.18678-0.14062-0.31038 0-0.23248 0.1927-0.41955 0.4297-0.41955z"%2F%3E%3C%2Fsvg%3E\');background-repeat:no-repeat}
.nowrap{white-space:normal}
.page-top:after{content:"'. $pagetop. '";position:absolute;opacity:0;right:-2em}
.page-top:hover:after{opacity:1;right:0;transition:.3s linear}
.page-top:not(:hover):after{opacity:0;transition:.3s}
.page-top{border-bottom:thin dotted;position:relative;text-decoration:none!important}
.permit{left:.5em}
.popover{max-width:70%}
.popover-body{overflow:auto;max-height:200px}
.similar-article{height:2rem}
.sticky-top{top:10px}
.text-light{color:'. ($color ? hsla($color, -5, +20, .9) : 'inherit'). ' !Important}
.title{color:white}
.wrap,.popover-body{word-wrap:break-word;white-space:pre-wrap}
::-moz-selection,.highlight{background-color:#d9edf7;color:#31708f}
::selection,.highlight{background-color:#d9edf7;color:#31708f}
a:hover img,a:hover svg,.social:hover,img[alt=K]{opacity:.8}img[alt=K]:hover{opacity:1}
body{color:#555;letter-spacing:.4px}
h1,h2,h3,h4,h5,h6{border-bottom:thin dotted;padding:.1em;overflow-wrap:break-word;margin-bottom:.5em}
a,li,.title{overflow-wrap:break-word}
label:not(.active),img[alt=K]{cursor:pointer}
urlset{background-repeat: no-repeat; background:linear-gradient(to left,white,whitesmoke);color:dimgray}
urlset:before{border-bottom:medium solid dimgray;margin:1em;text-align:center;font-size:x-large;display:block;content:"Sitemap of '. $server. '";padding-bottom:1em}
url:hover{background-color:whitesmoke;color:darkgray}
url{margin:1em auto;width:95%;display:block;font-size:small;padding:1em;overflow-wrap:break-word}
lastmod{display:block;text-align:right;margin-top:1em;white-space:nowrap}
@media(max-width:991px){.card-columns{column-count:1}#form .input-group-text{display:block}}';

if ($use_auto_wrap) echo '
.article,.card-text{word-wrap:break-word;white-space:pre-wrap}
.article h1,.article h2,.article h3,.article h4,.article h5,.article h6{margin-bottom:0}
.article #accordion,.article .accordion,.article .btn-group,.article .card,.article .carousel,.article .custom-control,.article .custom-file,.article .form-group,.article .form-horizontal,.article .input-group,.article .list-group,.article .media,.article .modal,.article .navbar,.article .row,.article .tab-content,.article dl,.article fieldset,.article li,.article ol,.article table,.article ul{white-space:normal!important}';
else echo '.page-top{padding-top:2rem!important;margin-bottom:2rem!important}';

if ($color) echo '
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{background-color:'. hsla($color, 0, 0, .05). '}
::selection, .highlight{background-color:'.hsla($color, 0, 0, .2).';color:'.hsla($color).'}
::-moz-selection, .highlight{background-color:'.hsla($color, 0, 0, .2).';color:'.hsla($color).'}';

if ($bootstrap4) echo '
.badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.badge{transition:none}}a.badge:focus,a.badge:hover{text-decoration:none}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-primary{color:#fff;background-color:#007bff}a.badge-primary:focus,a.badge-primary:hover{color:#fff;background-color:#0062cc}a.badge-primary.focus,a.badge-primary:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.badge-secondary{color:#fff;background-color:#6c757d}a.badge-secondary:focus,a.badge-secondary:hover{color:#fff;background-color:#545b62}a.badge-secondary.focus,a.badge-secondary:focus{outline:0;box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.badge-success{color:#fff;background-color:#28a745}a.badge-success:focus,a.badge-success:hover{color:#fff;background-color:#1e7e34}a.badge-success.focus,a.badge-success:focus{outline:0;box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.badge-info{color:#fff;background-color:#17a2b8}a.badge-info:focus,a.badge-info:hover{color:#fff;background-color:#117a8b}a.badge-info.focus,a.badge-info:focus{outline:0;box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.badge-warning{color:#212529;background-color:#ffc107}a.badge-warning:focus,a.badge-warning:hover{color:#212529;background-color:#d39e00}a.badge-warning.focus,a.badge-warning:focus{outline:0;box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.badge-danger{color:#fff;background-color:#dc3545}a.badge-danger:focus,a.badge-danger:hover{color:#fff;background-color:#bd2130}a.badge-danger.focus,a.badge-danger:focus{outline:0;box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.badge-light{color:#212529;background-color:#f8f9fa}a.badge-light:focus,a.badge-light:hover{color:#212529;background-color:#dae0e5}a.badge-light.focus,a.badge-light:focus{outline:0;box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.badge-dark{color:#fff;background-color:#343a40}a.badge-dark:focus,a.badge-dark:hover{color:#fff;background-color:#1d2124}a.badge-dark.focus,a.badge-dark:focus{outline:0;box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.float-left{float:left!important}.float-right{float:right!important}@media (min-width:576px){.float-sm-left{float:left!important}.float-sm-right{float:right!important}.float-sm-none{float:none!important}}@media (min-width:768px){.float-md-left{float:left!important}.float-md-right{float:right!important}.float-md-none{float:none!important}}@media (min-width:992px){.float-lg-left{float:left!important}.float-lg-right{float:right!important}.float-lg-none{float:none!important}}@media (min-width:1200px){.float-xl-left{float:left!important}.float-xl-right{float:right!important}.float-xl-none{float:none!important}}.border-left{border-left:1px solid #dee2e6!important}.border-right-0{border-right:0!important}.border-left-0{border-left:0!important}.rounded-right{border-top-right-radius:.25rem!important;border-bottom-right-radius:.25rem!important}.rounded-left{border-top-left-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.ml-0{margin-left:0!important}.ml-1{margin-left:.25rem!important}.ml-2{margin-left:.5rem!important}.ml-3{margin-left:1rem!important}.ml-4{margin-left:1.5rem!important}.ml-5{margin-left:3rem!important}.ml-auto{margin-left:auto!important}.mr-0{margin-right:0!important}.mr-1{margin-right:.25rem!important}.mr-2{margin-right:.5rem!important}.mr-3{margin-right:1rem!important}.mr-4{margin-right:1.5rem!important}.mr-5{margin-right:3rem!important}.mr-auto{margin-right:auto!important}.pl-0{padding-left:0!important}.pl-1{padding-left:.25rem!important}.pl-2{padding-left:.5rem!important}.pl-3{padding-left:1rem!important}.pl-4{padding-left:1.5rem!important}.pl-5{padding-left:3rem!important}.pl-auto{padding-left:auto!important}.pr-0{padding-right:0!important}.pr-1{padding-right:.25rem!important}.pr-2{padding-right:.5rem!important}.pr-3{padding-right:1rem!important}.pr-4{padding-right:1.5rem!important}.pr-5{padding-right:3rem!important}.pr-auto{padding-right:auto!important}.text-left{text-align:left!important}.text-right{text-align:right!important}
';
