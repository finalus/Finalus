<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?> ::
		<?php echo $appConfigurations['name']; ?>
	</title>
	<!-- <link rel="alternate" type="application/rss+xml" href="/auctions/index.rss" title="<?php __('Live Auctions');?>"> -->
	<?php
		if(!empty($meta_description)) :
			echo $html->meta('description', $meta_description);
		endif;
		if(!empty($meta_keywords)) :
			echo $html->meta('keywords', $meta_keywords);
		endif;
		echo $html->css('style');

		echo $javascript->link('jquery/jquery');
		echo $javascript->link('jquery/ui');
		echo $javascript->link('default');

		echo $scripts_for_layout;
	?>
	<!--[if lt IE 7]>
		<?php echo $javascript->link('dropdown'); ?>
	<![endif]-->
</head>
<body>

<div id="container">
	<div id="header">
		<div class="logo">
			<?php echo $html->link($html->image('logo.gif', array('alt' => $appConfigurations['name'], 'title' => $appConfigurations['name'])), '/', null, null, false); ?>
		</div>
		<div class="top-menu">
			<?php echo $this->element('menu_top');?>
		</div>
	</div>

	<div id="maincontent" class="clearfix">
		<?php
			if($session->check('Message.flash')){
				$session->flash();
			}

			if($session->check('Message.auth')){
				$session->flash('auth');
			}
		?>
		<?php echo $content_for_layout; ?>

	</div>

	<?php echo $this->element('footer');?>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
