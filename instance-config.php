<?php

/*
*  Instance Configuration
*  ----------------------
*  Edit this file and not config.php for imageboard configuration.
*
*  You can copy values from config.php (defaults) and paste them here.
*/


	$config['db']['server'] = 'localhost';
	$config['db']['database'] = '';
	$config['db']['prefix'] = '';
	$config['db']['user'] = '';
	$config['db']['password'] = '';


	$config['cookies']['mod'] = 'mod';
	$config['cookies']['salt'] = 'ODBkZjhiZDNkNmRiYWY0YjZhZTYwMD';

	$config['flood_time'] = 10;
	$config['flood_time_ip'] = 120;
	$config['flood_time_same'] = 30;
	$config['max_body'] = 1800;
	$config['reply_limit'] = 250;
	$config['max_links'] = 20;
	$config['max_filesize'] = 10485760;
	$config['thumb_width'] = 255;
	$config['thumb_height'] = 255;
	$config['max_width'] = 10000;
	$config['max_height'] = 10000;
	$config['threads_per_page'] = 10;
	$config['max_pages'] = 10;
	$config['threads_preview'] = 5;
	$config['root'] = '/chan/';
	$config['secure_trip_salt'] = 'YTk0ZjIxOGM5ZjA3NmM0NjBkYjY3YT';
	
	$config['boards'] = array(
		array('CHAN' => 'http://interplay.xyz/chan/'),
	 	array('col', 'b', 's4s'),
	 	array('Back to interplay' => 'http://interplay.xyz/')
	 );
	 
	$config['field_disable_email'] = true;
	$config['field_disable_subject'] = true;
	$config['field_disable_reply_subject'] = true;

$config['thumb_ext'] = '';
$config['thumb_method'] = 'convert';

$config['threads_preview'] = 3;
	
	$config['post_date'] = '%b /%e / %Y %H:%M %P     ';
	
	$config['poster_ids'] = false;
	
	$config['url_banner'] = '/chan/banner.png';

$config['page_nav_top'] = true;

$config['boardlist_wrap_bracket'] = false;

$config['enable_embedding'] = true;


$config['anonymous'] = 'Posted on:';

$config['additional_javascript'] = array();
	 $config['additional_javascript'][] = 'js/jquery.min.js';
	 $config['additional_javascript'][] = 'js/inline-expanding.js';
	 $config['additional_javascript'][] = 'js/auto-reload.js';
	 $config['additional_javascript'][] = 'js/post-hover.js';
	 $config['additional_javascript'][] = 'js/show-backlinks.js';
                    
                            
// Changes made via web editor by "admin" @ Fri, 12 Sep 2014 19:25:54 -0700:
$config['catalog_link'] = 'catalog.html';


                            
                            
                            