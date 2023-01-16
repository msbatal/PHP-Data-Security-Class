<?php

    require_once ('SunFilter.php'); // Call 'SunFilter' class

    $filter = new SunFilter();

    /*
    // Sanitization example with Get parameter (Form or Address Bar)
    // Sample 1 (integer): index.php?val=1eX8hy6b5%g2
    // Sample 2 (string): index.php?val=<script>alert('Hello, my name is XSS!');</script>
    $data = $filter->sanitize($_GET['val'], 'string')->result(); // Types: string, float, integer, url, email, special
    echo 'Get Value: ' . $_GET['val']. '<br>';
    echo 'Sanitized: '. $data;
    */

    /*
    // Sanitization example with Post parameter (Form)
    $data = $filter->sanitize($_POST['val'], 'string')->result(); // Types: string, float, integer, url, email, special
    echo 'Post Value: ' . $_POST['val']. '<br>';
    echo 'Sanitized: '. $data;
    */

    /*
    // Sanitization example with Cookie parameter
    setcookie('val', '<b>SunFilter Class</b>', time()+60*60);
    $data = $filter->sanitize($_COOKIE['val'], 'string')->result(); // Types: string, float, integer, url, email, special
    echo 'Cookie Value: ' . $_COOKIE['val']. '<br>';
    echo 'Sanitized: '. $data;
    */

    /*
    // Sanitization example with Session parameter
    $_SESSION['val'] = '<b>SunFilter Class</b>';
    $data = $filter->sanitize($_SESSION['val'], 'string')->result(); // Types: string, float, integer, url, email, special
    echo 'Session Value: ' . $_SESSION['val']. '<br>';
    echo 'Sanitized: '. $data;
    */

    /*
    // Sanitization example with encoding HTML special chars
    $data = $filter->sanitize($_GET['val'], 'special')->result(); // Html-encode '"<>& and characters with ascii value less than 32
    echo 'Get Value: ' . $_GET['val']. '<br>';
    echo 'Sanitized: '. $data;
    */

    /*
    // Validation example with Get parameter (Form or Address Bar)
    // Sample 1 (integer): index.php?val=Test
    // Sample 2 (integer): index.php?val=333
    $result = $filter->validate($_GET['val'], 'integer')->result(); // Types: boolean, float, integer, email, url, domain, ip, mac
    if ( $result == true ) {
        echo $_GET['val'] . ' is an Integer value.';
    } else {
        echo $_GET['val'] . ' is not an Integer value.';
    }
    */
    
    /*
    // Validation example with Post parameter (Form)
    $result = $filter->validate($_POST['val'], 'integer')->result(); // Types: boolean, float, integer, email, url, domain, ip, mac
    if ( $result == true ) {
        echo $_POST['val'] . ' is an Integer value.';
    } else {
        echo $_POST['val'] . ' is not an Integer value.';
    }
    */

    /*
    // Validation example with Cookie parameter
    setcookie('val', 'sample@domain.com', time()+60*60);
    $result = $filter->validate($_COOKIE['val'], 'email')->result(); // Types: boolean, float, integer, email, url, domain, ip, mac
    if ( $result == true ) {
        echo $_COOKIE['val'] . ' is an Email.';
    } else {
        echo $_COOKIE['val'] . ' is not an Email.';
    }
    */

    /*
    // Validation example with Session parameter
    $_SESSION['val'] = 'sample@domain.com';
    $result = $filter->validate($_SESSION['val'], 'email')->result(); // Types: boolean, float, integer, email, url, domain, ip, mac
    if ( $result == true ) {
        echo $_SESSION['val'] . ' is an Email.';
    } else {
        echo $_SESSION['val'] . ' is not an Email.';
    }
    */

?>