<?php $request_page = basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?>
<?php if (isset($_GET['uri']) && trim($_GET['uri']) != '') { $request_uri = trim($_GET['uri']); } ?>
<!DOCTYPE html>
<!-- 
concept and style by thisismyengine.com
design by studio.build
dev by razor.co.uk
-->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Ticket Tannoy</title>
    <link rel="stylesheet" href="./src/css/engine.css">
	<script defer src="./src/plugin/jquery/jquery.js"></script>
	<script defer src="./src/plugin/datepicker/datepicker.js"></script>
    <script defer src="./src/script/engine.js"></script>
</head>
<?php
	$class = ['page_' . $request_page];
    if (($request_page == 'list') && (isset($_GET['uri']))) $class[] = 'category_' . $_GET['uri'];  
	if (isset($view_detail)) $class[] = 'view_detail';
?>
<body class="<?php echo implode(' ', $class); ?>">	

<header>
    
    <div class="toggle nav"></div>
    <div class="toggle search"></div>
    <a class="logo" href="index.php"></a>
    
    <form class="search" action="search.php">
        <div class="toggle search"></div>
        <input type="search" id="search" name="query" placeholder="Search" autocomplete="off">
        <button type="submit"></button>
    </form>
    
    <nav>
        <div class="toggle nav"></div>
        <div class="toggle search"></div>
        <a class="logo" href="index.php"></a>
        
        <div class="area">
            <section class="primary">
                <?php
                    $class = ['category_club'];
                    if ($request_page == 'list' && $_GET['uri'] == 'club') $class []= 'page_active';
                ?>
                <a href="list.php?uri=club" class="<?php echo implode(' ', $class); ?>">Clubs</a>
                <?php
                    $class = ['category_festival'];
                    if ($request_page == 'list' && $_GET['uri'] == 'festival') $class []= 'page_active';
                ?>
                <a href="list.php?uri=festival" class="<?php echo implode(' ', $class); ?>">Festivals</a>
                <?php
                    $class = ['category_culture'];
                    if ($request_page == 'list' && $_GET['uri'] == 'culture') $class []= 'page_active';
                ?>
                <a href="list.php?uri=culture" class="<?php echo implode(' ', $class); ?>">Culture</a>
                <?php
                    $class = ['page_news'];
                    if ($request_page == 'news') $class []= 'page_active';
                ?>
                <a href="news.php" class="<?php echo implode(' ', $class); ?>">News</a>
                <?php
                    $class = [];
                    if ($request_page == 'resale') $class []= 'page_active';
                ?>
                <a href="resale.php" class="<?php echo implode(' ', $class); ?>">Resale</a>
                <?php
                    $class = [];
                    if ($request_page == 'about') $class []= 'page_active';
                ?>
                <a href="about.php" class="<?php echo implode(' ', $class); ?>">About</a>
            </section>
            <section class="secondary">
                <a href="info.php?uri=about">About</a>
                <a href="contact.php">Contact</a>
                <a href="info.php?uri=faq">Support</a>
                <a href="promoter.php">Sell Tickets</a>
                <a href="info.php?uri=queue">Queue Software</a>
            </section>
            <section class="user">
                <a href="user.php?uri=login" class="button">Login</a>
                <a href="user.php?uri=register" class="button">Sign Up</a>
            </section>
            <section class="social">
                <a href="https://instagram.com/tickettannoy" class="instagram" target="_blank"></a>
                <a href="https://facebook.com/tickettannoy" class="facebook" target="_blank"></a>
                <a href="https://twitter.com/TicketTannoy" class="twitter" target="_blank"></a>
            </section>
        </div>
        
    </nav>

</header>
    
<main>

    
    