<meta charset="utf-8">
<html>
    <head>
        <title>This is title</title>
        <link rel="stylesheet" href="<?php echo URL; ?>/public/style.css">
        <script src="http://localhost:8089/learnonline/javascripts/jquery.js"></script>
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
        <a href="<?php echo URL; ?>/index">Index</a> || <a href="<?php echo URL; ?>/help">Help</a>
        <?php if(Session::get("loggedIn")!=""): ?>
            || <a href="<?php echo URL; ?>/notes">Notes</a>
            || <a href="<?php echo URL; ?>/dashboard/logout">Log out</a>
        <?php else: ?>
            || <a href="<?php echo URL; ?>/login">Login</a>
            || <a href="<?php echo URL; ?>/register">Register</a>
        <?php endif ?>
    </div>
    <div class="maincontainer">

