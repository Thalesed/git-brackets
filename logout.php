<?php
    session_destroy();
    setcookie("login");
    header("Location: /index.html");
?>