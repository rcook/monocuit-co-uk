<?php

    $noSongs = true;

    while ($songRow = mysql_fetch_assoc($songList))
    {
        echo '<li>';
            echo $songRow['songTitle'];
        echo '</li>';

        $noSongs = false;
    }

    if ($noSongs)
    {
        echo '<div>There are currently no songs listed on this album. Please check back soon...</div>';
    }

?>
