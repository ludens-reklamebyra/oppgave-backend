<?php
    /*
        Grabs all content from our JSON-file,
        and can specify offset in the array.
        Ex.
        To output the title:
        echo getContent('title');
    */
    function getContent($type = false) {
        $currentFolder = dirname(__FILE__);
        $content = get_JSON($currentFolder.'/json/content.json');

        if ($type) {
            $data = $content[0][$type];
        } else {
            $data = $content[0];
        }

        return $data;
    }

    /*
        Opens a JSON-file, and returns the data as a PHP-array
    */
    function get_JSON($fileString) {
        $get_file = $fileString; // Get the file
        $handle_file = fopen($get_file, "r"); // Open the file
        $contents_file = fread($handle_file, filesize($get_file)); // Read the file

        fclose($handle_file); // Close the file

        $content_from_file = json_decode($contents_file, true); // Decode JSON data

        return $content_from_file; // Return JSON data as a PHP array
    }
