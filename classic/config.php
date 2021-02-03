<?php

#$copyright = 'Designed by <a href="https://example.com/">exampleDesign</a>';

$categ_nav_class = '';
$article_wrapper_class = 'mb-2 px-2';
$article_nav_wrapper_class = 'd-flex border mt-5';
$article_nav_next_href_class = 'flex-fill p-2 text-decoration-none w-50';
$article_nav_prev_href_class = 'border-right '. $article_nav_next_href_class;
$article_nav_xaquo_class = 'px-1 d-flex align-items-center bg-secondary text-white';
$article_nav_title_class = 'd-block mb-1 text-secondary';
$article_nav_content_class = 'd-block pb-3 px-3';

$sidebox_wrapper_class = ['list-group mb-5', 'list-group-item collapse show pl-0 pr-3', 'list-group mb-5 w-100'];
$sidebox_title_class = [
	'list-group-item bg-primary title', #sidebox 1
	'list-group-item list-group-item-primary title', #sidebox 2
	'list-group-item bg-success title', # login success
	'list-group-item bg-danger title', #login error
	'list-group-item bg-info navbar-dark d-flex align-items-center justify-content-between py-2 title', #toc
	];
$sidebox_content_class = [
	'list-group-item list-group-item-action',
	'list-group-item-text wrap',
	'list-group-item wrap',
	'list-group-item',
	'p-1 border-0 d-block list-group-item list-group-item-action'
	];
