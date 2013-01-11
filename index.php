<?php 

    define("Peerdea", "0.1");

    if (file_exists("admin/init/index.php")){
        require("admin/init/index.php")
    }
    else {
        require("render.php")
    }

?>