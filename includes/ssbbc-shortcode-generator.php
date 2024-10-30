<?php 

// THE METABOX 
add_action( 'add_meta_boxes', 'browser_body_classes_meta_box_add' );  

// Begin Metabox Add
function browser_body_classes_meta_box_add(){  
$ssbbc_options = get_option('ss_browser_body_classes_options');
$ssbbc_metabox_access = $ssbbc_options['ss_browser_body_classes_metabox_access'];
if (current_user_can($ssbbc_metabox_access)){$types = array( 'post', 'page');
foreach($types as $type){add_meta_box( 'browserbodyclasses-mb', 'Browser Body Classes', 'browser_body_classes_meta_box_cb', $type, 'normal', 'high' );}}

// Begin Metabox
function browser_body_classes_meta_box_cb(){  ?>
<script><?php include plugins_url( '../js/ssbbc-javascript.js', __FILE__ ); ?></script>

<!-- Shortcode Generator Form -->
<div class="browserbodyclasses-column0">
<?php if(current_user_can(manage_options)){ ?><a href="../wp-admin/options-general.php?page=browser-body-classes-with-shortcodes/browser-body-classes-with-shortcodes.php" target="_blank" class="selectItbrowser ssbc-config-options">Configure Options</a><?php } ?><br /></div>
<table id="ssbbc_create_table"><tr><td>
<div class="browserbodyclasses-column browserbodyclasses-column1">
<div class="ssbbc-inner-div">
<table border=0 cellpadding=20 cellspacing=0><tr><td valign=top>
<select id="shortcode_ssbbc_showhide" placeholder="Show or Hide" onchange="generate_ssbbc_shortcode();">
<option value="show">Show To</option>
<option value="hide">Hide From</option>
</select></td><td>
<select multiple style="height:140px; min-width:180px;" id="shortcode_ssbbc_browsers" placeholder="Hide From Browsers" onchange="generate_ssbbc_shortcode();">
<option value="firefox">Firefox</option>
<option value="chrome">Chrome</option>
<option value="safari">Safari</option>
<option value="opera">Opera</option>
<option value="maxthon">Maxthon</option>
<option value="msie">Internet Explorer</option>
<option value="ie5">IE5</option>
<option value="ie6">IE6</option>
<option value="ie7">IE7</option>
<option value="ie8">IE8</option>
<option value="ie9">IE9</option>
<option value="ie10">IE10</option>
<option value="ie11">IE11</option>
<option value="ns4">Netscape 4</option>
<option value="lynx">Lynx</option>
<option value="samsunggalaxytablet">Samsung Galaxy Tablet</option>
<option value="kindlefire">Kindle Fire</option>
<option value="kindlesilk">Kindle Silk</option>
<option value="ipad">iPad</option>
<option value="iphone">iPhone</option>
<option value="ipod">iPod</option>
<option value="android">Android</option>
<option value="blackberry">BlackBerry</option>
<option value="operamobile">Opera Mobile</option>
<option value="operamini">Opera Mini</option>
<option value="skyfire">Skyfire</option>
<option value="samsung">Samsung</option>
<option value="palm">Palm</option>
<option value="lg">LG</option>
<option value="blazer">Blazer</option>
<option value="bolt">Bolt</option>
<option value="symbian">Symbian</option>
<option value="nokia">Nokia</option>
<option value="motorola">Motorola</option>
<option value="winmobile">WinMobile</option>
<option value="iemobile">IE Mobile</option>
<option value="desktop">Desktop</option>
<option value="handheld">Handheld</option>
<option value="tablet">Tablet</option>
<option value="mobile">Mobile</option>
<option value="ios">iOS</option>
<option value="unknown">Unknown</option>
</select><br /><br />
<a onclick="selectElementContents( document.getElementById('ssbbc-shortcode') );" class="selectItbrowser" style="width:180px;">Select It</a></td>
<td valign=top><div class="ssbbc-metabox-instructions">
ctrl+click<br />for multiple<br />or to<br />deselect</div>
</td></tr></table></div></div></div></td></tr></table>
<div id="ssbbc-shortcode"></div>

<?php 
} //End Metabox
} //End Metabox Add
?>