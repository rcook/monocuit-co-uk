<?php

    echo '<div id="pageHeader">';
    echo "monocuit.co.uk";
    echo '</div>';

    echo '<div id="menuContainer">';

        if ($currentPage=="index")
        {
            echo '<div id="menuItemActive">';
        }
        else
        {
            echo '<div id="menuItem">';
        }
        echo '<a id="menuButton" href="index.php">Home</a>';
        echo '</div>';

        if ($currentPage=="about")
        {
            echo '<div id="menuItemActive">';
        }
        else
        {
            echo '<div id="menuItem">';
        }
        echo '<a id="menuButton" href="about.php">About</a>';
        echo '</div>';

        if ($currentPage=="blog")
        {
            echo '<div id="menuItemActive">';
        }
        else
        {
            echo '<div id="menuItem">';
        }
        echo '<a id="menuButton" href="blog.php">Blog</a>';
        echo '</div>';

        if ($currentPage=="music")
        {
            echo '<div id="menuItemActive">';
        }
        else
        {
            echo '<div id="menuItem">';
        }
        echo '<a id="menuButton" href="music.php">Music</a>';
        echo '</div>';

        if ($currentPage=="contact")
        {
            echo '<div id="menuItemActive">';
        }
        else
        {
            echo '<div id="menuItem">';
        }
        echo '<a id="menuButton" href="contact.php">Contact</a>';
        echo '</div>';

    echo '</div>';

    echo '<br><br>';
?>