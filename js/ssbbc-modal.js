(function() {
	if(ssbbc_mce_config.version === 'new'){
		tinymce.PluginManager.add('ssbbcmodal', function( editor, url ) {
        	editor.addButton( 'ssbbcmodal', {
            	title: 'Browser Shortcodes',
	            icon: 'icon ssbbc-icon',
	            onclick: function() {
	            	var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 640 < width ) ? 640 : width;
					W = W;
					H = H;
					tb_show( 'Browser Body Classes with Shortcodes', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=ssbbcmodal-form' );
        	    }
        	});
    	});
   }
	else {
		tinymce.create('tinymce.plugins.ssbbcmodal', {
			createControl : function(id, controlManager) {
				if (id == 'ssbbcmodal') {
					var button = controlManager.createButton('ssbbcmodal', {
						title : 'Browser Shortcodes',
						image : ssbbc_mce_config.button_img,   
						onclick : function() {
							var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 640 < width ) ? 640 : width;
							W = W;
							H = H;
							tb_show( 'Browser Body Classes with Shortcodes', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=ssbbcmodal-form' );
						}
					});
					return button;
				}
				return null;
			}
		});
		tinymce.PluginManager.add('ssbbcmodal', tinymce.plugins.ssbbcmodal);
	}
	jQuery(function(){
		var form = jQuery('<div id="ssbbcmodal-form"><img src="../wp-content/plugins/browser-body-classes-with-shortcodes/images/bbc_banner.png" style="margin-left:5px; margin-right: 20px; position:relative; top:14px"><table id="ssbbcmodal-table" class="form-table"><tr><td valign=top><br><select id="ssbbcmodal-showhide" name="showhide"><option value="show">Show To</option><option value="hide">Hide From</option></select><br><br><div class="ssbbc-modal-instructions">ctrl+click<br>for multiple<br>or to<br>deselect</div><select id="ssbbcmodal-browser" name="browser" style="height:115px;" multiple><option value="firefox">Firefox</option><option value="chrome">Chrome</option><option value="safari">Safari</option><option value="opera">Opera</option><option value="maxthon">Maxthon</option><option value="msie">Internet Explorer</option><option value="ie5">IE5</option><option value="ie6">IE6</option><option value="ie7">IE7</option><option value="ie8">IE8</option><option value="ie9">IE9</option><option value="ie10">IE10</option><option value="ie11">IE11</option><option value="ns4">Netscape 4</option><option value="lynx">Lynx</option><option value="samsunggalaxytablet">Samsung Galaxy Tablet</option><option value="kindlefire">Kindle Fire</option><option value="kindlesilk">Kindle Silk</option><option value="ipad">iPad</option><option value="iphone">iPhone</option><option value="ipod">iPod</option><option value="android">Android</option><option value="blackberry">BlackBerry</option><option value="operamobile">Opera Mobile</option><option value="operamini">Opera Mini</option><option value="skyfire">Skyfire</option><option value="samsung">Samsung</option><option value="palm">Palm</option><option value="lg">LG</option><option value="blazer">Blazer</option><option value="bolt">Bolt</option><option value="symbian">Symbian</option><option value="nokia">Nokia</option><option value="motorola">Motorola</option><option value="winmobile">WinMobile</option><option value="iemobile">IE Mobile</option><option value="desktop">Desktop</option><option value="handheld">Handheld</option><option value="tablet">Tablet</option><option value="mobile">Mobile</option><option value="ios">iOS</option><option value="unknown">Unknown</option></select><br><p class="submit"><input type="button" id="ssbbcmodal-submit" class="selectItbrowser" style="padding-left:0; padding-right:0; width:170px; margin-top:10px;" value="Insert Shortcode" name="submit" disabled /></p><br></td></tr></table></div>');
		var table = form.find('table');
		form.appendTo('body').hide();
		form.find('#ssbbcmodal-submit').click(function(){
			var showhide = table.find('#ssbbcmodal-showhide').val();
			if (showhide === 'show'){			
			var shortcode = '[showto';
			}
			if (showhide === 'hide'){			
			var shortcode = '[hidefrom';
			}
			var options = { 
				'browser'   : 'required',
				};
				for( var index in options) {
				var value = table.find('#ssbbcmodal-' + index).val();
				if ( value !== options[index] && value != null )
					shortcode += ' ' + index + '="' + value.join(", ") + '"';
				if ( value !== options[index] && value === null )
					shortcode += ' ' + index + '="browser-required"';	
			}
			if (showhide === 'show'){			
			shortcode += '] Content Here [/showto]';
			}
			if (showhide === 'hide'){			
			shortcode += '] Content Here [/hidefrom]';
			}
			tinyMCE.activeEditor.execCommand('mceInsertContent', 0, shortcode);
			tb_remove();
		});
	});
})()

/* Disable Submit if No Browser Chosen */
jQuery(function($) {
    $('#ssbbcmodal-browser').change(function() {
        var empty = false;
        $('#ssbbcmodal-browser').each(function() {
            if ($(this).val() == null) {
                empty = true;
            }
        });
        if (empty) {
            $('#ssbbcmodal-submit').attr('disabled', 'disabled');
        } else {
            $('#ssbbcmodal-submit').removeAttr('disabled');
        }
    });
});