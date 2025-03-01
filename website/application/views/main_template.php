<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
	<base href="<?=base_url('assets');?>/">
    <?=$meta;?>
    <?=$header_asset;?>
	<?=$SITE_CODE_HEADER;?>
</head>

<body data-plugin-page-transition>
	<div class="body">
		<div role="main" class="main main-section">
			<?=$header;?>
			<?=$content;?>
			<?=$footer;?>
    	</div>
    </div>
    <?=$extra_element;?>
</body>
<?=$footer_asset;?>
<?=$SITE_CODE_FOOTER;?>
</html>