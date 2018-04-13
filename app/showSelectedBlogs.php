<?php

    $noBlogs = true;

    while ($row = mysql_fetch_assoc($latestBlog))
    {
        echo '<div id="blog">';
            echo '<h1>';
                echo $row["title"];
            echo '</h1>';
            echo '<h2>';
                echo 'Posted: ';
                echo $row["timestamp"];
                echo ' (GMT)';
            echo '</h2>';
            echo $row["content"];
        echo '</div>';
        $noBlogs = false;
    }

    if ($noBlogs)
    {
        echo '<div id="blog">There are currently no public blogs to view. Please check back soon...</div>';
    }

?>