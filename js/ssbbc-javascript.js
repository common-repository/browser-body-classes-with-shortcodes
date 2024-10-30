/* Close Meta Box by Default */
jQuery("#browserbodyclasses-mb.postbox").addClass("closed");

/* Smooth Toogle Transition for Metabox */	
jQuery("#browserbodyclasses-mb h3.hndle").addClass("ssbbc-metaslide");
jQuery("#browserbodyclasses-mb div.inside").addClass("ssbbc-metaslide-child");
    jQuery(document).ready(function($) {
        $("h3.ssbbc-metaslide").click(function(){
            $(this).toggleClass("active");
            $(this).next("div.ssbbc-metaslide-child").stop('true','true').slideToggle(600);
        });
    });

/* Meta Box Shortcode Generator */
function generate_ssbbc_shortcode(){
	var browser = jQuery('#shortcode_ssbbc_browsers').val();
	var showhide = jQuery('#shortcode_ssbbc_showhide').val();	
  if(showhide === 'hide'){
    var shortcode_start = '[hidefrom';
    var shortcode_end = '] Content Here [/hidefrom]';
  }
  if(showhide === 'show'){
    var shortcode_start = '[showto';
    var shortcode_end = '] Content Here [/showto]';	
  }
    var shortcode_ssbbc_browser = browser === null ? '' : ' browser="'+browser.join(", ")+'"';
     var shortcode = shortcode_start+shortcode_ssbbc_browser+shortcode_end;

	if(browser != null && showhide != null){
	  jQuery("#ssbbc-shortcode").fadeOut("fast", function(){
	  jQuery('#ssbbc-shortcode').text(shortcode).fadeIn('slow');});
			}
			else
			{
	  jQuery('#ssbbc-shortcode').fadeOut('slow');
  	  jQuery('#ssbbc-shortcode').text('');}}

/* Select-It Function */
function selectElementContents(el) {
    var body = document.body, range, sel;
    if (document.createRange && window.getSelection) {
        range = document.createRange();
        sel = window.getSelection();
        sel.removeAllRanges();
        try {
            range.selectNodeContents(el);
            sel.addRange(range);
        } catch (e) {
            range.selectNode(el);
            sel.addRange(range);
       }
    } else if (body.createTextRange) {
        range = body.createTextRange();
        range.moveToElementText(el);
        range.select();
    }
}