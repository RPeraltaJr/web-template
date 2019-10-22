<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta http-equiv="Cache-control" content="public">
    <meta name="description" content="<?php if(isset($page->meta) && !empty($page->meta['desc'])): echo $page->meta['desc']; else: echo ""; endif; ?>">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#FFFFFF"/>
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Company | Careers<?php if( isset($page->title) && !empty($page->title) ): echo " - $page->title"; endif; ?>">
    <meta name="twitter:site" content="@client">
    <meta name="twitter:title" content="Company | Careers<?php if( isset($page->title) && !empty($page->title) ): echo " - $page->title"; endif; ?>">
    <meta name="twitter:description" content="<?php if( isset($page->desc) && !empty($page->desc) ): echo "$page->desc"; else: echo ""; endif; ?>">
    <meta name="twitter:creator" content="@client">
    <!-- Twitter Summary card images must be at least 120x120px --> 
    <meta name="twitter:image" content="assets/build/img/logos/client.jpg">

    <!-- Open Graph -->
    <meta property="og:title" content="Company | Careers<?php if( isset($page->title) && !empty($page->title) ): echo " - $page->title"; endif; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://example.com/<?php if($page->name != 'index'): echo basename($_SERVER['REQUEST_URI']); endif; ?>" />
    <meta property="og:image" content="assets/build/img/meta/cover.jpg" /> <!-- http://via.placeholder.com/1200x630 -->
    <meta property="og:description" content="<?php if( isset($page->desc) && !empty($page->desc) ): echo "$page->desc"; else: echo ""; endif; ?>" />
    <meta property="og:site_name" content="Company | Careers" />

    <title>Company | Careers<?php if(isset($page->meta) && !empty($page->meta['title'])): echo " - {$page->meta['title']}"; endif; ?></title>
    <!-- <link rel="shortcut icon" href="assets/build/img/favicon.ico" type="image/x-icon"> -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/build/css/<?php echo $page->type; ?>.min.css?ver=<?php echo $version; ?>">
    
    <!--[if lte IE 8]>
      <meta http-equiv="refresh" content="0" url="http://browsehappy.com/" />
      <script type="text/javascript">
      /* <![CDATA[ */
      window.top.location = 'http://browsehappy.com/';
      /* ]]> */
      </script>
    <![endif]-->

  </head>
  <body>