<link href="styles/site.css" rel="stylesheet">
<?php
    $db_handle = mysql_connect("localhost", "jcook", "jamesjamesjames");
    $db_found = mysql_select_db("monocuit_co_uk", $db_handle);

    $currentPage="music";
    include 'header.php';


    if($db_found)
            {
                $musicProjectList = mysql_query("SELECT * FROM musicProjects ORDER BY id DESC");

                include 'showMusicProjects.php';

                mysql_close($db_handle);
            }
            else
            {
                print "There was a problem connecting to the database. Please try again later.";
            }


    include 'copyright.php';

?>
