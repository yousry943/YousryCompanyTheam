
<?php
if (class_exists('CSF')) {

    // Set a unique slug-like ID
    $prefix = 'company_options';

    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => __('Company Options','company'),
        'menu_slug' => 'company_options',
        'framework_title'=> 'Comapny Options by Yousry',
        'menu_parent' => 'themes.php',
        'menu_type' =>'submenu'
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'id' => 'header_options',
        'title' => 'Header options'
      
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'parent'=> 'header_options',
        'title' => __('Header Left','company'),
        'fields' => array(
            array(
                'id' => 'header_phone',
                'type' => 'text',
                'title' => 'Phone'
            ),
            array(
                'id' => 'header_email',
                'type' => 'text',
                'title' => 'Email '
            )
       
        )
      
    ));





    CSF::createSection($prefix,
        array(
            'title' => __('Header Icons'),
            'parent' => 'header_options',
            
            'fields' => array(
                array(
                    'id' => 'header_icones',
                    'title' => 'Header icons',
                    'type' => 'group',
                    'fields' => array(
                        array(
                        'id'=> 'social_link',
                        'type' => 'text',
                        'title'=> 'Social link'
                        ),
                        array(
                            'id' => 'social_icon',
                            'type' => 'icon',
                            'title' => 'social_icon'
                        )
                    )
                    
                )
                

            )

        )
    );


    CSF::createSection($prefix,array(
        'parent' => 'header_options',
        'title'=> 'logo',
        'fields' => array(
            array(
            'id' => 'logo',
            'type'=>'media',
            'title'=> __('Uplode Logo ','company')
            )

        ),
    ));

    CSF::createSection($prefix,array(
        'id' => 'about_options',
        'title' => __('About  Section' ,'company')
    ));


    




}
