<?php
    
    if (!defined("Peerdea")){
        exit("Cannot load page outside of Peerdea enviroment.");
    }

    require("admin/data.php");

    require("portfolio/header.php");

    $homepage_urls = array("", "/", "/index.php");

    if (in_array($_PHP["REQUEST_URI"], $homepage_urls)){
        require("portfolio/projects.php");
    }
    else {
        $project = preg_replace("/^\//", "", $_PHP["REQUEST_URI"]);
        require("portfolio/project.php");
    }

    require("portfolio/footer.php");

?>