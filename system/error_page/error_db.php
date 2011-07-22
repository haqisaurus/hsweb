<?php
session_start();
session_register("check");
?>
<html>
    <head>
        <title>Error</title>
    </head>
    <body>
        <h1>Data Base Error!!</h1>
        <p>Maaf kami tidak bisa memproses request anda.</p>
        <p>Pesan Error: <?php echo $_SESSION['error_msg']; ?></p>
    </body>
</html>
<?php
session_destroy();
?>