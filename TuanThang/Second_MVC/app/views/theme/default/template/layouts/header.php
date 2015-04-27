<meta charset="utf-8">
<html>
    <head>
        <title>This is title</title>
        <link rel="stylesheet" href="<?php echo HTTP_SERVER.DIR_APPLICATION."views/theme/default/stylesheets/"; ?>style.css">
        <script src="http://localhost/learnonline/javascripts/jquery.js"></script>
        <?php
            if(isset($this->js))
            {
                foreach($this->js as $value)
                {
                    echo "<script type='text/javascript' src='".URL."/views/".$value."'></script>";
                }
            }
        ?>
    </head>
    <body>
    <div class="header">
        Header<br>
        <a href="<?php echo HTTP_SERVER; ?>index">Index</a> || <a href="<?php echo HTTP_SERVER; ?>help">Help</a>
        <?php if(Session::get("loggedIn")!=""): ?>
            || <a href="<?php echo HTTP_SERVER; ?>notes">Notes</a>
            || <a href="<?php echo HTTP_SERVER; ?>dashboard/logout">Log out</a>
        <?php else: ?>
            || <a href="<?php echo HTTP_SERVER; ?>login">Login</a>
            || <a href="<?php echo HTTP_SERVER; ?>register">Register</a>
        <?php endif ?>
    </div>
    <div class="maincontainer">

