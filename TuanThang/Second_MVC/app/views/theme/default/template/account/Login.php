
<form action="<?php echo HTTP_SERVER; ?>account/Login/run" method="POST" class="form">
    <?php if(isset($this->error)):
        echo $this->component->error($this->error);
    endif; ?>
    <p><label>User name: </label><input type="text" name="user_name"> </p>
    <p><label>Password: </label><input type="password" name="user_password"> </p>
    <p><label>&nbsp;</label><input type="submit" name="submit" value="Login"></p>
</form>

