<?php
    session_start();
    session_destroy();

    header('Refresh:0; URL=http://localhost/pet-store2/src/login.html');
?>