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
             <a href="<?php echo HTTP_SERVER; ?>admin/index.php?url=Dashboard/index" class="special">Administrator</a>
             <a href="<?php echo HTTP_SERVER; ?>admin/index.php?url=Member/Manage" class="special">Members</a>
             <a href="<?php echo HTTP_SERVER; ?>admin/index.php?url=Dashboard/index" class="special">Notes</a>
             <a href="<?php echo HTTP_SERVER; ?>account/Logout">Log out</a>
    </div>
    <div class="maincontainer">

