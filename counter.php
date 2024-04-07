<?php
    $file = 'counter.txt';

    // Check if the text file exists
    if (!file_exists($file)) {
        $count = 0;
    } else {
        // Read the current count from the file
        $count = intval(file_get_contents($file));
    }

    // Increment the count
    $count++;

    // Save the new count to the file
    file_put_contents($file, $count);

    // Display the count
    echo "This page has been visited $count times.";
?>