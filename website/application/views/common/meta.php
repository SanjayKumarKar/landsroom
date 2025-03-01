<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>
	<?=$META_TITLE?>
</title>
<meta name="keywords" content="<?=$META_KEYWORD?>"/>
<meta name="description" content="<?=$META_DESCRIPTION?>">

<?php if(!$SEARCH_ENGINE) { ?>
<meta name="robots" content="noindex, nofollow">
<?php }else{ ?>
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
<?php } ?>

<?php if(empty($OG_TAG)) { ?>
<!-- Facebook/LinkedIN Meta Tags -->
<meta property="og:url" content="<?=$OG_URL;?>">
<meta property="og:type" content="<?=$OG_TYPE;?>">
<meta property="og:title" content="<?=$OG_TITLE?>">
<meta property="og:description" content="<?=$OG_DESCRIPTION?>">
<meta property="og:image" content="<?=$OG_IMAGE?>">


<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="<?=$TWITTER_CARD;?>">
<meta property="twitter:domain" content="<?=$TWITTER_DOMAIN;?>">
<meta property="twitter:url" content="<?=$TWITTER_URL;?>">
<meta name="twitter:title" content="<?=$TWITTER_TITLE?>">
<meta name="twitter:description" content="<?=$TWITTER_DESCRIPTION?>">
<meta name="twitter:image" content="<?=$TWITTER_IMAGE?>">
<?php } else echo $OG_TAG; ?>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?=$SITE_FAV_ICON;?>">
<?=$SCHEMA?>