<?php


class SWCustomClass extends FLBuilderModule {

    public function __construct()
    {
        
        parent::__construct(array(
            'name'              => __( 'Module Template', 'fl-builder' ),
            'description'       => __( 'Custom Beaver Builder module template', 'fl-builder' ),
            'category'          => __( 'Example Module', 'fl-builder' ),
            'partial_refresh'   => true,
            'dir'               => SW_CUSTOM_MODULE_DIR . '/',
            'url'               => SW_CUSTOM_MODULE_URL . '/',
        ));
        

        //$this->add_js('javascript.file', $this->url . 'js/javascript.js', array(), '', true);
        //$this->add_css('css.file', $this->url . 'css/css.css');
        
    }    
    
}

FLBuilder::register_module( 'SWCustomClass', array(
    
    'first-tab'      => array(
        
        'title'         => __( 'First Tab', 'fl-builder' ),
        'sections'      => array( 
            
              'section-one'  => array(
                  
                    'title'         => __( 'Section One', 'fl-builder' ),
                  
                    'fields'        => array(

                    ) // end fields
                  
                ), // end section-one
            
              'section-two'  => array(
                  
                'title'         => __( 'Section Two', 'fl-builder' ),
                  
                'fields'        => array(
                    
                ) // end fields
                  
            ), // end section-two
            
        ) // end sections
        
    ), // end first-tab
    
    'second-tab'      => array(
        
        'title'         => __( 'Second Tab', 'fl-builder' ),
        'sections'      => array( 
            
              'section-one'  => array(
                  
                    'title'         => __( 'Section One', 'fl-builder' ),
                  
                    'fields'        => array(

                    ) // end fields
                  
                ), // end section-one
            
              'section-two'  => array(
                  
                'title'         => __( 'Section Two', 'fl-builder' ),
                  
                'fields'        => array(
                    
                ) // end fields
                  
            ), // end section-two
            
        ) // end sections
        
    ), // end first-tab
    
) ); 

FLBuilder::register_settings_form('custom_form', array(
    
    'title' => __('Custom Form', 'fl-builder'),
    
    'tabs'  => array(
        
        'form-tab-one'      => array(
            
            'title'         => __('Tab One', 'fl-builder'),
            'sections'      => array(
                
                'form-section-one'       => array(
                    
                    'title'         => 'Section one',
                    
                    'fields'        => array(

                        
                    )
                    
                ),
                
            )
            
        ), // end form-tab-one
        
    ) // end tabs
    
));