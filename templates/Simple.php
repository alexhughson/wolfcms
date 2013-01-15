<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $this->title(); ?></title>

    <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?php echo ($this->description() != '') ? $this->description() : 'Default description goes here'; ?>" />
    <meta name="keywords" content="<?php echo ($this->keywords() != '') ? $this->keywords() : 'default, keywords, here'; ?>" />
    <meta name="author" content="Author Name" />

    <link rel="favourites icon" href="<?php echo THEMES_URI; ?>wolf/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo THEMES_URI; ?>simple/screen.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="<?php echo THEMES_URI; ?>simple/print.css" media="print" type="text/css" />
    <link rel="alternate" type="application/rss+xml" title="Wolf Default RSS Feed" href="<?php echo URL_PUBLIC.((USE_MOD_REWRITE)?'':'/?'); ?>rss.xml" />

</head>
<body>
<div id="page">
    <?php $this->includeSnippet('header'); ?>
    <div id="content">

        <h2><?php echo $this->title(); ?></h2>
        <?php echo $this->content(); ?>
        <?php if ($this->hasContent('extended')) echo $this->content('extended'); ?>

    </div> <!-- end #content -->
    <div id="sidebar">

        <?php echo $this->content('sidebar', true); ?>

    </div> <!-- end #sidebar -->
    <?php $this->includeSnippet('footer'); ?>
</div> <!-- end #page -->
</body>
</html>