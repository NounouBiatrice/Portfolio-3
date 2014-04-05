<?php include 'switch.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->
    <head>
        <title><?= $myTitle ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This website is Jes&uacute;s (Chuz) Mora-Herrera's portfolio. I'm a front-end web developer and database administrator. " />
        <meta name="keywords" content="Jes&uacute;s, Jesus, Chuz, Mora-Herrera, Web, Developer, Designer, PHP, MySQL, HTML5, CSS3, Responsive Design, Seattle, Burien, WA, San Jose, Costa Rica" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="30 days" />
        <!--[if lt IE 9]> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/styles.css" media="all" />
    </head>
    <body>
        <header id="top">
            <nav>
                <?php echo makelinks($nav1); ?>
            </nav>
        </header>
        <section id="siteName">
            <h1>Jes&uacute;s (Chuz) Mora-Herrera</h1>
            <h5>Front End Web Developer</br>Database Administrator</h5>
        </section>
        <!--top stops here -->