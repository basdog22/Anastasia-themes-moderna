<?php


//override default layouts and add one
register_layouts(array(
    array(
        'name'   =>  'moderna_page',
        'title'  =>  'strings.pages',
        'positions' =>  the_theme_path().'/positions_page.php',
        'positions_tpl'=>   'moderna::page_theme'
    ), array(
        'name'   =>  'tagpage',
        'title'  =>  'strings.tags',
        'positions' =>  the_theme_path().'/positions_page.php',
        'positions_tpl'=>   'moderna::page_theme'
    ),array(
        'name'   =>  'search_page',
        'title'  =>  'strings.search',
        'positions' =>  the_theme_path().'/positions_page.php',
        'positions_tpl'=>   'moderna::page_theme'
    ),array(
        'name'   =>  'posts_index',
        'title'  =>  'posts::strings.posts_index',
        'positions' =>  the_theme_path().'/positions_page.php',
        'positions_tpl'=>   'moderna::page_theme'
    ),array(
        'name'   =>  'posts_singlepost',
        'title'  =>  'posts::strings.single_post',
        'positions' =>  the_theme_path().'/positions_page.php',
        'positions_tpl'=>   'moderna::page_theme'
    ),
));

register_content_block(array(
    'menu_select_block'  =>  array(
        'name'  =>  'menu_select_block',
        'title' =>  t('moderna::strings.menu'),
        'tpl'   =>  array(
            'moderna::blocks/topmenu'=>'default',
            'moderna::blocks/pills'   =>  'Pills'
        ),
        'model'  =>  '\Menu',
        'action'    => 'find',
        'params_action'=>'lists',
        'params_args'   => array('title','id'),
        'params_title'=>0,
        'params'    => 1,
        'multiple'  =>  true,
        'configurable'=> true
    ),
    'logo_block'  =>  array(
        'name'  =>  'logo_block',
        'title' =>  t('moderna::strings.logo'),
        'tpl'   =>  array(
            'moderna::blocks/logo'=>'default'
        ),
        'model'  =>  '\Widget',
        'action'    => 'getblockdata',
        'params_tpl'=>  'moderna::blocks/param_tpls/logo',
        'params'    => array('title'=>'A','content'=>'PP'),
        'params_title'=>'title',
        'multiple'  =>  false,
        'configurable'=> true
    ),
    'carousel_block'  =>  array(
        'name'  =>  'carousel_block',
        'title' =>  t('moderna::strings.carousel'),
        'tpl'   =>  array(
            'moderna::blocks/carousel'=>'default'
        ),
        'model'  =>  'moderna',
        'action'    => 'getimages',
        'params_action'=>'listimages',
        'params_args'   => array('original_filename','id'),
        'params_tpl'=>  'moderna::blocks/param_tpls/carousel',
        'params'    => array(
            array('img'=>1,'url'=>'#','title'=>'Caption 1','content'=>'Some text','button'=>'click here'),
            array('img'=>2,'url'=>'#','title'=>'Caption 2','content'=>'Some text','button'=>'click here'),
            array('img'=>3,'url'=>'#','title'=>'Caption 3','content'=>'Some text','button'=>'click here'),
        ),
        'multiple'  =>  true,
        'configurable'=> true
    ),
    'html_box'  =>  array(
        'name'  =>  'html_box',
        'title' =>  t('moderna::strings.html_box'),
        'tpl'   =>  array(
            'moderna::blocks/htmlbox'=>'default'
        ),
        'model'  =>  '\Widget',
        'action'    => 'getblockdata',
        'params_tpl'=>  'moderna::blocks/param_tpls/htmlbox',
        'params'    => array('title'=>'Custom block','content'=>'This is a configurable text','url'=>'http://www.google.com','button'=>'click here','iconclass'=>'fa-user'),
        'params_title'=>'title',
        'multiple'  =>  true,
        'configurable'=> true
    ),
    'call_to_action'  =>  array(
        'name'  =>  'call_to_action',
        'title' =>  t('moderna::strings.call_to_action'),
        'tpl'   =>  array(
            'moderna::blocks/calltoaction'=>'default'
        ),
        'model'  =>  '\Widget',
        'action'    => 'getblockdata',
        'params_tpl'=>  'moderna::blocks/param_tpls/c2a',
        'params'    => array('title'=>'Custom block','content'=>'This is a configurable text','url'=>'http://www.google.com','button'=>'click here'),
        'params_title'=>'title',
        'multiple'  =>  true,
        'configurable'=> true
    ),
    'portfolio_block'  =>  array(
        'name'  =>  'portfolio_block',
        'title' =>  t('moderna::strings.portfolio'),
        'tpl'   =>  array(
            'moderna::blocks/portfolio'=>'default'
        ),
        'model'  =>  'moderna',
        'action'    => 'getimages',
        'params_action'=>'listimages',
        'params_args'   => array('original_filename','id'),
        'params_tpl'=>  'moderna::blocks/param_tpls/carousel',
        'params'    => array(
            array('img'=>1,'url'=>'#','title'=>'Caption 1','content'=>'Some text'),
            array('img'=>2,'url'=>'#','title'=>'Caption 2','content'=>'Some text'),
            array('img'=>3,'url'=>'#','title'=>'Caption 3','content'=>'Some text'),
            array('img'=>4,'url'=>'#','title'=>'Caption 3','content'=>'Some text'),
        ),
        'multiple'  =>  true,
        'configurable'=> true
    ),'copyright_block'  =>  array(
        'name'  =>  'copyright_block',
        'title' =>  t('moderna::strings.copyright'),
        'tpl'   =>  array(
            'moderna::blocks/copyright'=>'Copyright'
        ),
        'multiple'  =>  true,
        'configurable'=> false
    ),'socials_block'  =>  array(
        'name'  =>  'socials_block',
        'title' =>  t('moderna::strings.social'),
        'tpl'   =>  array(
            'moderna::blocks/social'=>'Social Buttons'
        ),
        'multiple'  =>  true,
        'configurable'=> false
    ),

));