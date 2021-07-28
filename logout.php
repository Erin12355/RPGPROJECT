<?php
    setcookie('user',"",time() - 3600);
    header("Location: log_in.php");
?>