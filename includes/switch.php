<?php

//--- begin config area

$nav1 = array();
$nav1['index.php'] = "Main";
$nav1['portfolio.php'] = "Portfolio";
$nav1['resume.php'] = "Resume";
$nav1['contactus.php'] = "Contact";

//--- end config area

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch (THIS_PAGE) {
    case "index.php":
        $myTitle = "Welcome to Jes&uacute;s (Chuz) Mora-Herrera's Portfolio!";
        $myPageID = "Jes&uacute;s (Chuz) Mora-Herrera's Main Page";
        break;

    case "portfolio.php":
        $myTitle = "Jes&uacute;s (Chuz) Mora-Herrera's Portfolio";
        $myPageID = "Jes&uacute;s (Chuz) Mora-Herrera's Projects";
        break;

    case "resume.php":
        $myTitle = "Jes&uacute;s (Chuz) Mora-Herrera's Resume";
        $myPageID = "Check out my resume!";
        break;

    case "contactus.php":
        $myTitle = "Jes&uacute;s (Chuz) Mora-Herrera's Contact Page";
        $myPageID = "I'd love to hear from you!";
        break;

    default:
        $myTitle = THIS_PAGE; #unique
        $myPageID = "Welcome!";
}

/*
  makeLinks function will create our dynamic nav when called.

  Call like this:

  echo makeLinks($nav1); #in which $nav1 is an associative array of links
 */

function makeLinks($linkArray) {
    $myReturn =
            '
    <nav class="navcontainer">
    	<ul id="nav">
    ';

    foreach ($linkArray as $url => $text) {
        if ($url == THIS_PAGE) {//current page - add class reference
            $myReturn .= '<li ><a id="current" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
        } else {
            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
        }
    }

    $myReturn .=
            '
    	</ul>
    </nav>
    ';

    return $myReturn;
}

?>
