<?php
if ( ! class_exists( 'HNP_Theme_Options' ) ) {
    class HNP_Theme_Options {
        public $sections = array();
        public $theme;
        public $ReduxFramework;
        public function __construct() {
            if ( ! class_exists( 'ReduxFramework' ) ) {
                return;
            }
            if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                $this->initSettings();
            } else {
                add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
            }
        
        }
        public function initSettings() {
            $this->setArguments();
            $this->setHelpTabs();
            $this->setSections();
         
            if ( ! isset( $this->args['opt_name'] ) ) { 
                return;
            }
            $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
        }
        public function setArguments() {
            $theme = wp_get_theme();
            $this->args = array(
                'opt_name'  => 'hnp_options',
                'display_name' => $theme->get( 'Name' ),
                'menu_type'          => 'menu',
                'allow_sub_menu'     => true,
                'menu_title'         => __( 'Theme Options', 'halink' ),
                'page_title'         => __( 'Theme Options', 'halink' ),
                'dev_mode' => false,
                'customizer' => true,
                'menu_icon' => '', 
                'hints'              => array(
                    'icon'          => 'icon-question-sign',
                    'icon_position' => 'right',
                    'icon_color'    => 'lightgray',
                    'icon_size'     => 'normal',
                    'tip_style'     => array(
                        'color'   => 'light',
                        'shadow'  => true,
                        'rounded' => false,
                        'style'   => '',
                    ),
                    'tip_position'  => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect'    => array(
                        'show' => array(
                            'effect'   => 'slide',
                            'duration' => '500',
                            'event'    => 'mouseover',
                        ),
                        'hide' => array(
                            'effect'   => 'slide',
                            'duration' => '500',
                            'event'    => 'click mouseleave',
                        ),
                    ),
                ) // end Hints
            );
        }
        public function setHelpTabs() {
 
            // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
            $this->args['help_tabs'][] = array(
                'id'      => 'redux-help-tab-1',
                'title'   => __( 'Theme Information 1', 'halink' ),
                'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'halink' )
            );
         
            $this->args['help_tabs'][] = array(
                'id'      => 'redux-help-tab-2',
                'title'   => __( 'Theme Information 2', 'halink' ),
                'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'halink' )
            );
         
            // Set the help sidebar
            $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'halink' );
        }
        public function setSections() {
            $this->sections[] = array(
                'title'  => __( 'Cài đặt chung', 'halink' ),
                'desc'   => __( 'All of settings for general on this theme.', 'halink' ),
                'icon'   => 'el-icon-home',
                'fields' => array()
            ); // end section

            $this->sections[] = array(
                'title'  => __( 'Home Slides', 'halink' ),
                'desc'   => __( 'Home Slides.', 'halink' ),
                'icon'   => 'el-icon-picture',
                'fields' => array(
                    array(
                        'id'          => 'home-slides',
                        'type'        => 'slides',
                        'title'       => __('Home slides'),
                       
                        'placeholder' => array(
                            'title'           => __('Tiêu đề', 'halink'),
                            'description'     => __('Mô tả', 'halink'),
                            'url'             => __('Đường dẫn', 'halink'),
                        ),
                    )
                    
                )
            ); // end section
         
        }

    }
    global $reduxConfig;
    $reduxConfig = new HNP_Theme_Options();
}