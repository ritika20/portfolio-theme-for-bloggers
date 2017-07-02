<?php
function wpb_customize_register($wp_customize){
  $wp_customize->add_section('showcase', array(
    'title' => __('Showcase','wpbootstrap'),
    'description' => sprintf(__('Options for showcase','wpbootstrap')),
    'priority' => 130
  ));
  $wp_customize->add_setting('showcase_image',array(
    'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
    'type' =>'theme_mod'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image',array(
    'label' => __('showcase Image','wpbootstrap'),
    'section' => 'showcase',
    'setting' => 'showcase_image',
    'priority' => 1
  )));

  $wp_customize->add_setting('showcase_heading',array(
    'default' => _x('Custom Wordpress Theme','wpbootstrap'),
    'type' =>'theme_mod'
  ));
  $wp_customize->add_control('showcase_heading',array(
    'label' => __('Heading','wpbootstrap'),
    'section' => 'showcase',
    'priority' => 2
  ));
  $wp_customize->add_setting('showcase_text',array(
    'default' => _x('sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','wpbootstrap'),
    'type' =>'theme_mod'
  ));
  $wp_customize->add_control('showcase_text',array(
    'label' => __('Text','wpbootstrap'),
    'section' => 'showcase',
    'priority' => 3
  ));
  $wp_customize->add_setting('btn_url',array(
    'default' => _x('http://example.com','wpbootstrap'),
    'type' =>'theme_mod'
  ));
  $wp_customize->add_control('btn_url',array(
    'label' => __('Button Url','wpbootstrap'),
    'section' => 'showcase',
    'priority' => 4
  ));
  $wp_customize->add_setting('btn_text',array(
    'default' => _x('Read more','wpbootstrap'),
    'type' =>'theme_mod'
  ));
  $wp_customize->add_control('btn_text',array(
    'label' => __('Button Text','wpbootstrap'),
    'section' => 'showcase',
    'priority' => 5
  ));
}
add_action('customize_register' , 'wpb_customize_register');
?>
