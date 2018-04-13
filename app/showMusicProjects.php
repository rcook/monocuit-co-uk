<?php

    $noMusicProjects = true;

    while ($musicProjectRow = mysql_fetch_assoc($musicProjectList))
    {
        echo '<div id="musicProjectName">';
            echo $musicProjectRow['projectName'];
        echo '</div>';
        
        $mPId = $musicProjectRow['id'];

        $albumList = mysql_query("SELECT * FROM albums WHERE albums.musicProjectid = $mPId ORDER BY year DESC");

        include 'showAlbums.php';

        $noMusicProjects = false;
    }

    if ($noMusicProjects)
    {
        echo '<div>There are currently no music projects to view. Please check back soon...</div>';
    }

?>
