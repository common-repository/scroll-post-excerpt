<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

delete_option('spe_title');
delete_option('spe_select_num_user');
delete_option('spe_dis_num_user');
delete_option('spe_dis_num_height');
delete_option('spe_select_categories');
delete_option('spe_select_orderby');
delete_option('spe_select_order');
delete_option('spe_excerpt_length');
delete_option('spe_speed');
delete_option('spe_waitseconds');

 
// for site options in Multisite
delete_site_option('spe_title');
delete_site_option('spe_select_num_user');
delete_site_option('spe_dis_num_user');
delete_site_option('spe_dis_num_height');
delete_site_option('spe_select_categories');
delete_site_option('spe_select_orderby');
delete_site_option('spe_select_order');
delete_site_option('spe_excerpt_length');
delete_site_option('spe_speed');
delete_site_option('spe_waitseconds');