<?php

    foreach (glob("*.json") as $filename)
    {
        // read file into array

        $howdy = file_get_contents($filename) or die('Could not read file!');

        $feed = json_decode($howdy);

        if($feed->encoding == "base64")
        {
            echo $feed->data;
        }
    }
?>
