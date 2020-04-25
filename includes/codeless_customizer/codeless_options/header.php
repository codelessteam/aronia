<?php

/* Header Options ---------------------------------------- */


Kirki::add_panel('cl_header', array(
	'priority' => 6,
	'type' => '',
	'title' => esc_attr__('Header', 'aronia') ,
	'tooltip' => esc_attr__('All Header Options', 'aronia') ,
));


require_once 'header/layout.php';
require_once 'header/logo.php';
require_once 'header/menu.php';
require_once 'header/main_header.php';
require_once 'header/top_header.php';
require_once 'header/extra_header.php';
require_once 'header/top_news.php';
require_once 'header/sticky.php';

?>