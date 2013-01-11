<?php 
    
    $collaborators = array(
        "me" => array(
            "Name" => "John Doe",
            "Gravatar" => "MD5-Hash-Of-Email",
            "URL" => "http://example.com"
        )
    );

    $projects = array(
        "example-project" => array(
            "Title" => "Example",
            "Summary" => "This is a test.",
            "Description" => "Lorem Ipsum...",
            "Authors" => array(
                "me"
            ),
            "Start_Date" => 0000000000,
            "End_Date" => "Present",
            "Tags" => array(
                "Awesome"
            ),
            "Links" => array(
                array(
                    "Title" => "Example",
                    "URL" => "http://example.com"
                )
            ),
            "Media" => array(
                array(
                    "Title" => "Example 1",
                    "Type" => "img",
                    "URL" => "http://example.com/example.png"
                ),
                array(
                    "Title" => "Example 2",
                    "Type" => "youtube",
                    "URL" => "dQw4w9WgXcQ"
                )
            )
        )
    );

?>