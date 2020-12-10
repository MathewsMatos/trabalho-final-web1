<?php
session_start();
session_destroy();
header("location: ../../public/src/pages/home/index.php");
exit();
