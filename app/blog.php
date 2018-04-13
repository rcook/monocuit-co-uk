<link href="styles/site.css" rel="stylesheet">
<?php

    $db_handle = mysql_connect("localhost", "jcook", "jamesjamesjames");
    $db_found = mysql_select_db("monocuit_co_uk", $db_handle);

    $currentPage="blog";

    include 'header.php';

    if($db_found)
    {
        $latestBlog = mysql_query("SELECT id, timestamp, title, content FROM blogs WHERE isPublic = 1 ORDER BY id DESC");

        include 'showSelectedBlogs.php';

        mysql_close($db_handle);
    }
    else
    {
        print "There was a problem connecting to the database. Please try again later.";
    }

    include 'copyright.php';

?>
