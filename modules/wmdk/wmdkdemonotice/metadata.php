<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.0';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'wmdkdemonotice',
    'title'        => 'WMDK :: Demo Notice',
    'description'  => 'Blendet einen Demoshop Hinweis ein',
    'thumbnail'    => 'thumbnail.jpg',
    'version'      => '0.0.1',
    'author'       => 'Daniel Kussin',
    'url'          => 'https://www.kussin.de',
    'email'        => 'daniel.kussin@kussin.de',
    
    'blocks'       => array(
        array(
            'template'  => 'layout/base.tpl',
            'block'     => 'head_meta_robots',
            'file'      => 'views/blocks/layout/wmdk_meta_robots.tpl',
        ),
        array(
            'template'  => 'layout/base.tpl',
            'block'     => 'theme_svg_icons',
            'file'      => 'views/blocks/layout/wmdk_demo_notice.tpl',
        ),
    ),
    
	'settings' => array(
		array(
			'group' => 'sWmdkDemoNoticeSettings', 
			'name' => 'sWmdkDemoNoticeRobotsInstruction', 
			'type' => 'str', 
			'value' => 'noindex, nofollow'
		),
    ),
);