<?php
$recent_files = glob($glob_dir. 'index.html', GLOB_NOSORT);
$glob_info_files = glob('contents/*.html', GLOB_NOSORT);

if ($recent_files || $glob_info_files)
{
	$aside .=
	'<div class="py-4 text-center">'. $n.
	'<a href="'. $url. '">'. $n.
	(!is_file('images/logo.png') ? '<img src="'. $url. 'images/icon.php" alt="" width=250><span class="d-block h1 mt-4">'. $site_name. '</span>' : get_logo()). $n.
	'</a>'. $n.
	'</div>';
}

if ($use_search)
	$aside .='<div class="d-block p-5">'. $search. '</div>'. $n;

if ($recent_files)
{
	$aside .=
	'<div id=category class="p-4">'. $n.
	'<h5>'. $category. '</h5>'. $n.
	'<ul class=list-unstyled>'. $nav. '</ul>'. $n.
	'</div>';
}

if ($use_recents && $recent_files)
{
	usort($recent_files, 'sort_time');

	$aside .= '<div id=recents class="p-4"><h5>'. $recents. '</h5><ul class=list-unstyled>'. $n;
	$j = 0;
	foreach($recent_files as $recents_name)
	{
		if ($j === $number_of_recents) break;
		$recent_categ = get_categ($recents_name);
		$recent_title = get_title($recents_name);
		$aside .= '<li><a class="nav-item nav-link'. ($categ_name. $title_name === $recent_categ. $recent_title ? ' active' : ''). '" href="'. $url. r($recent_categ. '/'. $recent_title). '">'. h($recent_title). '</a></li>'. $n;
		++$j;
	}
	$aside .= '</ul></div>';
}

if ($glob_info_files || $dl || $use_contact && $mail_address)
{
	usort($glob_info_files, 'sort_time');

	$aside .= '<div id=informations class="p-4"><h5>'. $informations. '</h5><ul class=list-unstyled>'. $n;

	foreach($glob_info_files as $info_files)
	{
		if ($info_files === 'contents/index.html') continue;
		$info_uri = basename($info_files, '.html');
		$aside .= '<li><a class="nav-item nav-link'. ($page_name === $info_uri ? ' active' : ''). '" href="'. $url. r($info_uri). '">'. h($info_uri). '</a></li>'. $n;
	}

	if ($dl)
		$aside .= '<li><a class="nav-item nav-link'. ($page_name === $download_contents ? ' active' : ''). '" href="'. $url. r($download_contents). '">'. $download_contents. '</a></li>'. $n;

	if ($use_contact && $mail_address)
		$aside .= '<li><a class="nav-item nav-link'. ($page_name === $contact_us ? ' active' : ''). '" href="'. $url. r($contact_us). '">'. $contact_us. '</a></li>'. $n;
	$aside .= '</ul></div>';
}

if ($address)
	$aside .=
	'<div id=address class="p-4">'. $n.
	'<h5>'. ($address_title ? $address_title : $site_name). '</h5>'. $n.
	'<p class="mx-3 wrap">'. $address. '</p>'. $n.
	'</div>';

if ($use_popular_articles && $number_of_popular_articles > 0 &&$glob_all_counter_files = glob($glob_dir. 'counter.txt', GLOB_NOSORT))
{
	$aside .=
	'<div id=popular-articles class="p-4">'. $n.
	'<h5>'. $popular_articles. '</h5><ul class=list-unstyled>'. $n;

	foreach($glob_all_counter_files as $all_counter_files)
		$counter_sort[] = (int)trim(file_get_contents($all_counter_files)). $all_counter_files;

	$counter_sort = array_filter($counter_sort);
	rsort($counter_sort, SORT_NUMERIC);
	for($i = 0, $c = count($counter_sort); $i < $c && $i < $number_of_popular_articles; ++$i)
	{
		$popular_titles = explode('/', $counter_sort[$i]);
		$aside .=
		'<li><a class="nav-item nav-link'. ($categ_name. $title_name === $popular_titles[1]. $popular_titles[2] ? ' active' : ''). '" href="'. $url. r($popular_titles[1]. '/'. $popular_titles[2]). '">'. h($popular_titles[2]). '</a></li>'. $n;
	}
	$aside .= '</ul></div>'. $n;
}

if ($use_comment && $number_of_new_comments > 0 && $glob_all_comment_files = glob($glob_dir. 'comments/*-~-*.txt', GLOB_NOSORT))
{
	usort($glob_all_comment_files, 'sort_time');

	$aside .=
	'<div id=recent-comments class="p-4">'. $n.
	'<h5>'. $recent_comments. '</h5>';

	$j = 0;
	foreach($glob_all_comment_files as $all_comments)
	{
		if ($j === $number_of_new_comments) break;
		$comments_content = str_replace($line_breaks, ' ', trim(strip_tags(file_get_contents($all_comments))));
		$new_comments = explode('-~-', $all_comments);
		$comment_link = explode('/', $new_comments[0]);
		$aside .=
		'<a class="d-block m-3" href="'. $url. r($comment_link[1]. '/'. $comment_link[2]). '#cid-'. basename($new_comments[0]). '">'. $n.
		'<p class="comment-text wrap">'. mb_strimwidth($comments_content, 0, $comment_length, $ellipsis, $encoding). '</p>'. $n.
		'<small class="blockquote-footer text-right">'. h(basename($new_comments[1], '.txt')). ' ('. timeformat(basename($new_comments[0])). ')</small>'. $n.
		'</a> '. $n;
		++$j;
	}
	$aside .= '</div>'. $n;
}
