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
        <div class="logo">Header</div><br>
        <a href="<?php echo HTTP_SERVER; ?>index">Index</a>  <a href="<?php echo HTTP_SERVER; ?>help">Help</a>
        <?php if(Session::get("loggedIn")!=false): ?>
             <a href="<?php echo HTTP_SERVER; ?>wall/View">My Wall</a>
             <a href="<?php echo HTTP_SERVER; ?>account/Logout">Log out</a>
            <?php if(Session::get("loggedIn")=="admin"): ?>
             <a href="<?php echo HTTP_SERVER; ?>admin/index.php?url=Dashboard/index" class="special">Administrator</a>
            <?php endif ?>
        <?php else: ?>
             <a href="<?php echo HTTP_SERVER; ?>account/Login">Login</a>
             <a href="<?php echo HTTP_SERVER; ?>account/Register">Register</a>
        <?php endif ?>
    </div>
    <div class="maincontainer">

