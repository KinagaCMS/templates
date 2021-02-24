<?php
$sidebox_wrapper_class[0] = 'p-4';
$sidebox_wrapper_class[1] = 'border-0';
$sidebox_wrapper_class[2] = 'mb-5';
foreach (range(0, 3) as $i) $sidebox_title_class[$i] = 'h5';
$sidebox_title_class[3] .= ' bg-danger p-3 text-white';
$sidebox_title_class[4] = 'h2 navbar navbar-dark';
$sidebox_content_class[0] = $sidebox_content_class[2] = $sidebox_content_class[3] = $sidebox_content_class[4] = 'd-block p-2 border-0';
$sidebox_content_class[2] .= ' wrap';

$article_nav_wrapper_class = 'd-flex border mt-5';
$article_nav_next_href_class = 'flex-fill p-2 text-decoration-none w-50';
$article_nav_prev_href_class = 'border-right '. $article_nav_next_href_class;
$article_nav_xaquo_class = 'px-1 d-flex align-items-center bg-secondary text-white';
$article_nav_title_class = 'd-block mb-1 text-secondary';
$article_nav_content_class = 'd-block pb-3 px-3';
