<?php
/*
   Plugin Name: Browser Body Classes with Shortcodes
   Plugin URI: http://imdb.me/thomstark
   Description: Adds browser-specific body classes and shortcodes to show or hide content to/from specified browsers and devices.
   Version: 1.6
   Author: Thom Stark
   Author URI: http://imdb.me/thomstark
   License: GPLv3
*/
//////////////////////////////////////// THE BODY CLASSES ////////////////////////////////////////
$agent = $_SERVER['HTTP_USER_AGENT'];
// GENERAL
$is_opera = (preg_match('/opr/i', $agent)) ? true : false;
$is_maxthon = (preg_match('/Maxthon/i', $agent)) ? true : false;
$is_ie5 = (preg_match('/MSIE 5/i',$agent)) ? true : false;
$is_ie6 = (preg_match('/MSIE 6/i',$agent)) ? true : false;
$is_ie7 = (preg_match('/MSIE 7/i',$agent)) ? true : false;
$is_ie8 = (preg_match('/MSIE 8/i',$agent)) ? true : false;
$is_ie9 = (preg_match('/MSIE 9/i',$agent)) ? true : false;
$is_ie10 = (preg_match('/MSIE 10/i',$agent)) ? true : false;
$is_ie11 = (preg_match('/MSIE 11/i',$agent)) ? true : false;
// TABLETS
$is_samsung_galaxy_tablet = (preg_match('/SPH/i', $agent) || preg_match('/SCH/i', $agent)) ? true : false;
$is_kindlefire = (preg_match('/Kindle Fire/i', $agent)) ? true : false;
$is_kindlesilk = (preg_match('/Silk/i', $agent)) ? true : false;
$is_ipad = (preg_match('/ipad/i', $agent)) ? true : false;
// MOBILE
$is_iphone = (preg_match('/iphone/i', $agent)) ? true : false;
$is_ipod = (preg_match('/ipod/i', $agent)) ? true : false;
$is_android = (preg_match('/android/i', $agent)) ? true : false;
$is_blackberry = (preg_match('/blackberry/i', $agent)) ? true : false;
$is_operamobile = (preg_match('/opera mobi/i', $agent)) ? true : false;
$is_operamini = (preg_match('/opera mini/i', $agent)) ? true : false;
$is_skyfire = (preg_match('/Skyfire/i', $agent)) ? true : false;
$is_samsung = (preg_match('/Samsung/i', $agent)) ? true : false;
$is_palm = (preg_match('/webOS/i', $agent)) ? true : false;
$is_lg = (preg_match('/LG/i', $agent)) ? true : false;
$is_blazer = (preg_match('/blazer/i', $agent)) ? true : false;
$is_bolt = (preg_match('/BOLT/i', $agent)) ? true : false;
$is_symbian = (preg_match('/Series60/i', $agent)) || (preg_match('/Symbian/i', $agent)) ? true : false;
$is_nokia = (preg_match('/Series60/i', $agent)) || (preg_match('/Symbian/i', $agent)) || (preg_match('/Nokia/i', $agent)) ? true : false;
$is_motorola = (preg_match('/\ Droid/i', $agent) || preg_match('/XT720/i', $agent) || preg_match('/MOT-/i', $agent) || preg_match('/MIB/i', $agent)) ? true : false;
$is_winmobile = (preg_match('/WM5/i', $agent)) || (preg_match('/WindowsMobile/i', $agent)) ? true : false;
$is_iemobile = (preg_match('/IEMobile/i', $agent)) ? true : false;
add_filter('body_class','ssbbc_browser_body_class');
function ssbbc_browser_body_class($classes) {
    global
	$is_gecko,
	$is_chrome,
	$is_safari,
	$is_opera,
	$is_maxthon,
	$is_IE,
	$is_NS4,
	$is_lynx,
	$is_samsung_galaxy_tablet,
	$is_kindlefire,
	$is_kindlesilk,
	$is_ipad,
	$is_iphone,
	$is_ipod,
	$is_android,
	$is_blackberry,
	$is_operamobile,
	$is_operamini,
	$is_skyfire,
	$is_samsung,
	$is_palm,
	$is_lg,
	$is_blazer,
	$is_bolt,
	$is_symbian,
	$is_nokia,
	$is_motorola,
	$is_winmobile,
	$is_iemobile;
// GENERAL
    if($is_gecko) $classes[] = 'firefox';
    elseif($is_chrome) $classes[] = 'chrome';
    elseif($is_safari) $classes[] = 'safari';
    elseif($is_opera) $classes[] = 'opera';
    elseif($is_maxthon) $classes[] = 'maxthon';	
    elseif($is_IE) $classes[] = 'msie';
    elseif($is_NS4) $classes[] = 'ns4';
    elseif($is_lynx) $classes[] = 'lynx';
    else $classes[] = 'unknown';
// TABLETS
	if($is_samsung_galaxy_tablet) $classes[] = 'samsunggalaxytablet';
    if($is_kindlefire) $classes[] = 'kindlefire';
    if($is_kindlesilk) $classes[] = 'kindlesilk';
    if($is_ipad) $classes[] = 'ipad';
// MOBILE	
    if($is_iphone) $classes[] = 'iphone';
    if($is_ipod) $classes[] = 'ipod';	
    if($is_android) $classes[] = 'android';
    if($is_blackberry) $classes[] = 'blackberry';
    if($is_operamobile) $classes[] = 'operamobile';		
    if($is_operamini) $classes[] = 'operamini';
	if($is_skyfire) $classes[] = 'skyfire';
	if($is_samsung) $classes[] = 'samsung';
	if($is_palm) $classes[] = 'palm';
	if($is_lg) $classes[] = 'lg';
	if($is_blazer) $classes[] = 'blazer';
	if($is_bolt) $classes[] = 'bolt';
	if($is_symbian) $classes[] = 'symbian';
	if($is_nokia) $classes[] = 'nokia';
	if($is_motorola) $classes[] = 'motorola';
	if($is_winmobile) $classes[] = 'winmobile';
	if($is_iemobile) $classes[] = 'iemobile';	
    return $classes;}
add_filter('body_class','ssbbc_browser_body_class_ie_versions');
function ssbbc_browser_body_class_ie_versions($classes) {
    global
	$is_ie5,
	$is_ie6,
	$is_ie7,
	$is_ie8,
	$is_ie9,
	$is_ie10,
	$is_ie11;
	if($is_ie5) $classes[] = 'ie5';
	elseif($is_ie6) $classes[] = 'ie6';
	elseif($is_ie7) $classes[] = 'ie7';
	elseif($is_ie8) $classes[] = 'ie8';
	elseif($is_ie9) $classes[] = 'ie9';
	elseif($is_ie10) $classes[] = 'ie10';
	elseif($is_ie11) $classes[] = 'ie11';
    return $classes;}
add_filter('body_class','ssbbc_browser_body_class_ios');
function ssbbc_browser_body_class_ios($classes){
	global 
	$is_iphone,
	$is_ipad,
	$is_ipod;
		if(
		$is_iphone || 
		$is_ipad || 
		$is_ipod
		)
		{
			$is_ios = true;
		}
		if($is_ios) $classes[] = 'ios';
	return $classes;
}	
add_filter('body_class','ssbbc_browser_body_class_tablet');
function ssbbc_browser_body_class_tablet($classes){
	global 
	$is_samsung_galaxy_tablet,
	$is_kindlefire,
	$is_kindlesilk,
	$is_ipad;
		if(
		$is_samsung_galaxy_tablet || 
		$is_kindlefire || 
		$is_kindlesilk || 
		$is_ipad
		)
		{
			$is_tablet = true;
		}
		if($is_tablet) $classes[] = 'tablet';
	return $classes;
}	
add_filter('body_class','ssbbc_browser_body_class_mobile');
function ssbbc_browser_body_class_mobile($classes){
	global 
	$is_iphone,
	$is_android, 
	$is_blackberry, 
	$is_operamobile, 
	$is_operamini, 
	$is_skyfire, 
	$is_samsung, 
	$is_palm, 
	$is_lg, 
	$is_blazer, 
	$is_bolt, 
	$is_symbian, 
	$is_nokia, 
	$is_motorola, 
	$is_winmobile, 
	$is_iemobile;
		if(
		$is_iphone || 
		$is_android || 
		$is_blackberry || 
		$is_operamobile || 
		$is_operamini || 
		$is_skyfire || 
		$is_samsung || 
		$is_palm || 
		$is_lg || 
		$is_blazer || 
		$is_bolt || 
		$is_symbian || 
		$is_nokia || 
		$is_motorola || 
		$is_winmobile || 
		$is_iemobile
		)
		{
			if(!$is_tablet){$is_mobile = true;}
		}
		if($is_mobile) $classes[] = 'mobile';
	return $classes;
}
add_filter('body_class','ssbbc_browser_body_class_handheld_desktop');
function ssbbc_browser_body_class_handheld_desktop($classes){
	global 
	$is_samsung_galaxy_tablet, 
	$is_kindlefire,
	$is_kindlesilk, 
	$is_ipad,
	$is_iphone,
	$is_ipod,
	$is_android, 
	$is_blackberry,
	$is_operamobile, 
	$is_operamini, 
	$is_skyfire, 
	$is_samsung,
	$is_palm, 
	$is_lg, 
	$is_blazer, 
	$is_bolt, 
	$is_symbian, 
	$is_nokia, 
	$is_motorola, 
	$is_winmobile, 
	$is_iemobile;
		if(
		$is_samsung_galaxy_tablet || 
		$is_kindlefire || 
		$is_kindlesilk || 
		$is_ipad ||
		$is_iphone ||
		$is_ipod ||
		$is_android || 
		$is_blackberry || 
		$is_operamobile || 
		$is_operamini || 
		$is_skyfire || 
		$is_samsung ||
		$is_palm || 
		$is_lg || 
		$is_blazer || 
		$is_bolt || 
		$is_symbian || 
		$is_nokia || 
		$is_motorola || 
		$is_winmobile || 
		$is_iemobile
		)
		{
			$is_handheld = true;
		}
		if($is_handheld) $classes[] = 'handheld';
		if(!$is_handheld) $classes[] = 'desktop';
	return $classes;
}
//////////////////////////////////////// THE SHORTCODES ////////////////////////////////////////
// Show to Browsers Shortcode 
add_shortcode('showto', 'sc_showto');
function sc_showto($atts, $content = null){
	extract(shortcode_atts(array('browser' => ''), $atts));
	$showcontent = null; $classes = get_body_class(); 
	$b = preg_split("/[\s,]+/",$browser);
	foreach ($classes as $c){
		$match = array_search($c,$b);
		if($match !== FALSE){
			$showcontent = do_shortcode($content);
		}
	}
	return $showcontent;
}
// Hide from Browsers Shortcode 
add_shortcode('hidefrom', 'sc_hidefrom');
function sc_hidefrom($atts, $content = null){
	extract(shortcode_atts(array('browser' => ''), $atts));
	$hiddencontent = do_shortcode($content); $classes = get_body_class();
	$b = preg_split("/[\s,]+/",$browser);
	foreach ($classes as $c){
		$match = array_search($c,$b);
		if($match !== FALSE){
			$hiddencontent = null;
		}
	}
	return $hiddencontent;
}
//////////////////////////////////////// INCLUDES ////////////////////////////////////////
function browser_body_classes_style(){
	wp_register_style('ssbbc-style', plugins_url('/css/ssbbc-style.css', __FILE__));
	wp_enqueue_style('ssbbc-style');
}
add_action('admin_enqueue_scripts','browser_body_classes_style');
include 'includes/ssbbc-shortcode-generator.php'; 
//////////////////////////////////////// TINY MCE MODAL ////////////////////////////////////////
add_action('admin_head','ssbbc_add_button');
function ssbbc_add_button(){  
	global $pagenow;
    if ( ! in_array( $pagenow, array( 'post.php', 'post-new.php' ) ) )
        return;
	$ssbbc_options = get_option('ss_browser_body_classes_options');
	$ssbbc_modal_access = $ssbbc_options['ss_browser_body_classes_modal_access'];
	$pos = $ssbbc_options['ss_browser_body_classes_tmce_rows'];	
	if (current_user_can($ssbbc_modal_access)){
		add_filter('mce_external_plugins', 'ssbbc_add_plugin');  
		add_filter('mce_buttons'.$pos.'', 'ssbbc_register_button'); 
	}
}
function ssbbc_register_button($buttons) { 
	array_push($buttons, "ssbbcmodal");  
	return $buttons;
}
function ssbbc_add_plugin($plugin_array){  
   $plugin_array['ssbbcmodal'] = plugins_url( '/js/ssbbc-modal.js', __FILE__ );   
   return $plugin_array;
}  
foreach( array('post.php','post-new.php') as $hook )
    add_action( "admin_head-$hook", 'ssbbc_admin_head_js_vars' );
/**
 * Localize Script
 */
function ssbbc_admin_head_js_vars() {
    $img = plugins_url( '/images/tmcebbc.png', __FILE__ );
	global $wp_version;
	if ($wp_version >= 3.9) $version = 'new';
	else $version = 'old';
        ?>

<script type='text/javascript'>
    var ssbbc_mce_config = {
        'tb_title': '<?php _e('Browser Shortcodes'); ?>',
        'button_img': '<?php echo $img; ?>',
	    'version': '<?php echo $version; ?>',				
    };
</script>
<style>
i.ssbbc-icon {
	background-image: url('<?php echo $img; ?>');
}
</style>
        <?php
}
//////////////////////////////////////// OPTIONS PAGE ////////////////////////////////////////
// Set-up Action and Filter Hooks
register_activation_hook(__FILE__, 'ss_browser_body_classes_add_defaults');
register_uninstall_hook(__FILE__, 'ss_browser_body_classes_delete_plugin_options');
add_action('admin_init', 'ss_browser_body_classes_init' );
add_action('admin_menu', 'ss_browser_body_classes_add_options_page');
add_filter( 'plugin_action_links', 'ss_browser_body_classes_plugin_action_links', 10, 2 );
function ss_browser_body_classes_delete_plugin_options(){
	delete_option('ss_browser_body_classes_options');
}
function ss_browser_body_classes_add_defaults(){
	$tmp = get_option('ss_browser_body_classes_options');
    if(($tmp['chk_default_options_db']=='1')||(!is_array($tmp))) {
		delete_option('ss_browser_body_classes_options'); 
		$arr = array(	"ss_browser_body_classes_metabox_access" => "edit_pages",
						"ss_browser_body_classes_modal_access" => "edit_pages",
						"ss_browser_body_classes_tmce_rows" => "",					
						"chk_default_options_db" => "",	);
		update_option('ss_browser_body_classes_options', $arr);
	}
}
function ss_browser_body_classes_init(){
	register_setting('ss_browser_body_classes_plugin_options','ss_browser_body_classes_options','ss_browser_body_classes_validate_options');
}
function ss_browser_body_classes_add_options_page(){
	add_options_page('Browser Body Classes &#8594; Options','Browser Body Classes Options','manage_options',__FILE__,'ss_browser_body_classes_render_form');
}
function ss_browser_body_classes_render_form(){ ?>
<div class="ssbbc-plugins">	
<a href="http://wordpress.org/plugins/browser-body-classes-with-shortcodes/" target="_blank"><img src="../wp-content/plugins/browser-body-classes-with-shortcodes/images/bbc_banner.png" border=0 /></a>
<br /><br /><br /><center>
<img src="../wp-content/plugins/browser-body-classes-with-shortcodes/images/other_plugins.png" />
<a href="http://wordpress.org/plugins/eyes-only-user-access-shortcode/" target="_blank"><img src="../wp-content/plugins/browser-body-classes-with-shortcodes/images/eyesonly_banner.png" border=0 /></a>
<div class="ssbbc-support-review"><a href="http://wordpress.org/support/plugin/browser-body-classes-with-shortcodes" target="_blank" class="selectItbrowser" style="margin-right:20px;">get support</a><a href="http://wordpress.org/support/view/plugin-reviews/browser-body-classes-with-shortcodes" target="_blank" class="selectItbrowser">leave a review</a></div>
</center></div>
<div class="wrap ssbbc-options-wrap">
<div class="icon32" id="icon-options-general"><br></div>
<h2 class="browserbodyclasses-header">Browser Body Classes &#8594; <i>Options</i></h2>
<form method="post" action="options.php">
<?php settings_fields('ss_browser_body_classes_plugin_options'); ?>
<?php $options = get_option('ss_browser_body_classes_options'); ?>
<br /><br /><br /><table class="form-table ssbbc-form-table">
<tr><th scope="row"><h4 class="ssbbc-options-headings">Meta Box Access</h4></th>
<td><?php
	$user = new WP_User( 1 );
	$capslist = $user->allcaps;
	echo '<select name="ss_browser_body_classes_options[ss_browser_body_classes_metabox_access]">';
	echo '<option value="administrator" '.selected('administrator', $options['ss_browser_body_classes_metabox_access']).'>Administrators Only</option><option value="ss_fake_cap_nobody" '.selected('ss_fake_cap_nobody', $options['ss_browser_body_classes_metabox_access']).'>Disable for Everyone</option>';
	foreach($capslist as $cap=>$caps){
	if($cap !== 'administrator' && $cap !== 'level_0' && $cap !== 'level_1' && $cap !== 'level_2' && $cap !== 'level_3' && $cap !== 'level_4' && $cap !== 'level_5' && $cap !== 'level_6' && $cap !== 'level_7' && $cap !== 'level_8' && $cap !== 'level_9' && $cap !== 'level_10'){ 
	echo '<option value="'.$cap.'" '.selected($cap, $options['ss_browser_body_classes_metabox_access']).'>'.$cap.'</option>';}}
	echo '</select>'; ?><br />
<div class="ssbbc-option-description">By user capability, choose who can see the shortcode metabox, or disable it completely. Default: edit_pages</div>
</td></tr>
<tr><th scope="row"><h4 class="ssbbc-options-headings">Shortcode Button Access</h4></th>
<td><?php
	$user = new WP_User( 1 );
	$capslist = $user->allcaps;
	echo '<select name="ss_browser_body_classes_options[ss_browser_body_classes_modal_access]">';
	echo '<option value="administrator" '.selected('administrator', $options['ss_browser_body_classes_modal_access']).'>Administrators Only</option><option value="ss_fake_cap_nobody" '.selected('ss_fake_cap_nobody', $options['ss_browser_body_classes_modal_access']).'>Disable for Everyone</option>';
	foreach($capslist as $cap=>$caps){
	if($cap !== 'administrator' && $cap !== 'level_0' && $cap !== 'level_1' && $cap !== 'level_2' && $cap !== 'level_3' && $cap !== 'level_4' && $cap !== 'level_5' && $cap !== 'level_6' && $cap !== 'level_7' && $cap !== 'level_8' && $cap !== 'level_9' && $cap !== 'level_10'){ 
	echo '<option value="'.$cap.'" '.selected($cap, $options['ss_browser_body_classes_modal_access']).'>'.$cap.'</option>';}}
	echo '</select>';
?><br />
<div class="ssbbc-option-description">By user capability, choose who can see the shortcode button, or disable it completely. Default: edit_pages</div>
</td></tr>
<tr><th scope="row"><h4 class="ssbbc-options-headings">Shortcode Button Position</h4></th>
<td><select name="ss_browser_body_classes_options[ss_browser_body_classes_tmce_rows]">
<option value="" <?php selected('', $options['ss_browser_body_classes_tmce_rows']) ?> />First Row</option>
<option value="_2" <?php selected('_2', $options['ss_browser_body_classes_tmce_rows']) ?> />Second Row</option>
<option value="_3" <?php selected('_3', $options['ss_browser_body_classes_tmce_rows']) ?> />Third Row</option>
<option value="_4" <?php selected('_4', $options['ss_browser_body_classes_tmce_rows']) ?> />Fourth Row</option>
</select>
<br />
<div class="sseo-option-description">Choose the position of the shortcode button on the TinyMCE panel. Default: First Row</div>
</td></tr>
<tr valign="top"><th scope="row"><h4 class="ssbbc-options-headings">Database Options</h4></th>
<td><label><input name="ss_browser_body_classes_options[chk_default_options_db]" type="checkbox" value="1" <?php if (isset($options['chk_default_options_db'])) { checked('1', $options['chk_default_options_db']); } ?> /> Restore defaults on plugin deactivation / reactivation</label>
<br /><div class="ssbbc-option-description">Check this if you'd like to reset the above settings upon plugin reactivation</div>
</td></tr></table>
<br /><br /><p class="submit">
<input type="submit" class="selectItbrowser" style="margin-left:33px!important;" value="<?php _e('Save Changes') ?>" />
</p></form></div>
<?php }
function ss_browser_body_classes_validate_options($input){return $input;}
function ss_browser_body_classes_plugin_action_links($links,$file){
	if($file == plugin_basename( __FILE__ )){
		$ss_browser_body_classes_links = '<a href="'.get_admin_url().'options-general.php?page=browser-body-classes-with-shortcodes/browser-body-classes-with-shortcodes.php">'.__('Options').'</a>';
		// make the 'Settings' link appear first
		array_unshift( $links, $ss_browser_body_classes_links );
	}
	return $links; 
}
//////////////////////////////////////// THE END ////////////////////////////////////////
?>