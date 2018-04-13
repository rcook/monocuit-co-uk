<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Monocuit</title>
        <link href="styles/site.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $db_handle = mysql_connect("localhost", "jcook", "jamesjamesjames");
            $db_found = mysql_select_db("monocuit_co_uk", $db_handle);

            $currentPage="index";

            include 'header.php';

            if($db_found)
            {
                $latestBlogNumber = mysql_query("SELECT MAX(id) AS max FROM blogs WHERE isPublic = 1");
                $row = mysql_fetch_assoc($latestBlogNumber);
                $blogId = $row["max"];
                $latestBlog = mysql_query("SELECT id, timestamp, title, content FROM blogs WHERE id=$blogId");

                include 'showSelectedBlogs.php';

                mysql_close($db_handle);
            }
            else
            {
                print "There was a problem connecting to the database. Please try again later.";
            }

            include 'copyright.php';
        ?>
    </body>
</html>
