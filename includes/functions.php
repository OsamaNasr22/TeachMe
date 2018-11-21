<?php


include '../includes/autoload.php';
try {
    //<!--`site_name`, `site_desc`, `site_email`, `site_tags`, `site_homepanal`, `fb`, `tw`, `rss`, `yt`, `username` -->

    $ob=new Display("settings");
    $displaymain=$ob->displayLastRecord();
    
} catch (Exception $ex) {
    echo $ex->getMessage();
}

