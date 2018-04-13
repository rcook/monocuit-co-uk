<?php

    $noAlbums = true;

    while ($albumRow = mysql_fetch_assoc($albumList))
    {
        echo '<div id="album">';
            echo $albumRow['albumName'];
            echo ' (';
            echo $albumRow['year'];
            echo ')';
        echo '</div>';

        $albumId = $albumRow['id'];

        $songList = mysql_query("SELECT * FROM songs WHERE songs.AlbumId = $albumId ORDER BY trackNumber");

        echo '<ol>';
            include 'showSongs.php';
        echo '</ol>';

        $noAlbums = false;
    }

    if ($noAlbums)
    {
        echo '<div>There are currently no albums to view. Please check back soon...</div>';
    }
?>
