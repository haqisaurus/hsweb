<?php
$url = $_SERVER['SCRIPT_NAME'];
$url = explode("/", $url);
define('BASE_URL', "http://" . $_SERVER["SERVER_NAME"] . "/" . $url[1] . "/");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title>Login Page</title>

        <link rel="shortcut icon" href="<?php echo BASE_URL;?>images/logo.png" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>css/login.css" />
    </head>
    <body>
        <form id="login-form" action="#" method="post">
            <fieldset>
                <legend>Log in</legend>
                <label for="login">Email</label>
                <input type="text" id="login" name="login"/>
                <div class="clear"></div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password"/>
                <div class="clear"></div>
                <br /><br />
                <input type="submit" style="margin: -20px 0 0 287px;" class="button" name="commit" value="Log in"/>
            </fieldset>
        </form>
    </body>
</html>