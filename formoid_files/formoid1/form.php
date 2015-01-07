<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', '"backend.php?addCategory=true"');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-solid-green.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-solid-green.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>
<form class="formoid-solid-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans',Arial,Verdana,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="savehandle.php?addCategory=true"><div class="title"><h2>Cateogrien androën</h2></div>
	<div class="element-input<?frmd_add_class("input")?>" title="Hei Den Code agin"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Code"/><span class="icon-place"></span></div></div>
	<div class="element-input<?frmd_add_class("input1")?>" title="Hein den Text angin"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input1" required="required" placeholder="Beschreiwung"/><span class="icon-place"></span></div></div>
	<div class="element-select<?frmd_add_class("select")?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select" required="required">

		<option value="couture">couture</option>
		<option value="ceramique">ceramique</option>
		<option value="papier">papier</option>
		<option value="jardinage">jardinage</option>
		<option value="buanderie">buanderie</option>
		<option value="imprimerie">imprimerie</option>
		<option value="backoffice">backoffice</option>
		<option value="info-media">info-media</option>
		<option value="cuisine">cuisine</option>
		<option value="confiserie">confiserie</option>
		<option value="takeaway">takeaway</option></select><i></i><span class="icon-place"></span></span></div></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?=dirname($form_path)?>/formoid-solid-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>