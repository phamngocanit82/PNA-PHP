/**
 * $Id: editor_plugin_src.js 324 2007-11-01 12:58:49Z spocke $
 *
 * @author Moxiecode
 * @copyright Copyright � 2004-2007, Moxiecode Systems AB, All rights reserved.
 */

(function() {
	tinymce.create('tinymce.plugins.WZImagePlugin', {
		init : function(ed, url) {
			// Register commands
			ed.addCommand('mceWZImage', function() {
				// Internal image object like a flash placeholder
				if (ed.dom.getAttrib(ed.selection.getNode(), 'class').indexOf('mceItem') != -1)
					return;

				ed.windowManager.open({
					file : url + '/image.php',
					width : 900 + parseInt(ed.getLang('wzimage.delta_width', 0)),
					height : 400 + parseInt(ed.getLang('wzimage.delta_height', 0)),
					inline : 1
				}, {
					plugin_url : url
				});
			});

			// Register buttons
			ed.addButton('image', { 
				title : 'Insert/edit image',
				cmd : 'mceWZImage'
			});
		},

		getInfo : function() {
			return {
				longname : 'WZ image',
				author : 'Wiredesignz',
				authorurl : 'http://www.wiredesignz.co.nz',
				infourl : 'http://www.wiredesignz.co.nz',
				version : tinymce.majorVersion + "." + tinymce.minorVersion
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('wzimage', tinymce.plugins.WZImagePlugin);
})();