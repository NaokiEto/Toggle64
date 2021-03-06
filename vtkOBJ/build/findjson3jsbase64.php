<?php

    foreach (glob("*.json") as $filename)
    {
        // read file into array

        $howdy = file_get_contents($filename) or die('Could not read file!');

        $feed = json_decode($howdy);

        // if base 64 encoded data, echo the data
        if($feed->encoding == "base64")
        {
            echo $feed->data;
        }

        // if vtk data, echo the file name of the js file
        if($feed->format == "vtk")
        {
	    foreach (glob("*.js") as $filename)
	    {
		echo $filename;
	    }
        }
    }
?>
