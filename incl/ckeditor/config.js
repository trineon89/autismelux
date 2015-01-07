/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	config.skin = 'office2013';
	// config.uiColor = '#AADC6E';
	config.extraPlugins = "lineutils,widget,imgbrowse";
	//imageBrowser_listUrl
	config.filebrowserImageBrowseUrl='/incl/ckeditor/plugins/imgbrowse/imgbrowse.html';
	config.filebrowserUploadUrl ="/incl/ckeditor/plugins/imgupload/imgupload.php";
};
