<?php

    require("admin/data.php");

    $output = array(
        "Collaborators" => $collaborators,
        "Projects" => $projects
    );

    $json_output = json_encode($output);

    echo($json_output);

?>