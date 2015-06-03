<?php

return array(

    'mobile'    =>  array(
        'is_default'    =>  false,
        'title' =>  'strings.mobile_only',
        'grids' =>  array(
            '1' => array(
                'cols'      =>  12,
                'title'     =>  'Full Row'

            ),
            '2' => array(
                'cols'      =>  12,
                'title'     =>  'Full Row'

            ),
            '3' => array(
                'cols'      =>  12,
                'title'     =>  'Full Row'

            ),
            '4' => array(
                'cols'      =>  12,
                'title'     =>  'Full Row'

            )
        )
    ),
    'body'    =>  array(
        'is_default'    =>  false,
        'title' =>  'strings.body',
        'grids' =>  array(

            'page' => array(
                'cols'      =>  8,
                'title'     =>  'Main Content'

            ),
            'sidebar' => array(
                'cols'      =>  4,
                'title'     =>  'Right side sidebar',
                'before_block' => '<div id="%1$s" class="widget %2$s">',
	            'after_block'  => '</div>',
                'before_title'  => '<h5 class="widgetheading">',
                'after_title'   => '</h5>',
            ),

        ),
    ),

);
