<?php
$url = "https://www.bausermangroup.com/feed";
require_once(ABSPATH . WPINC . '/rss-functions.php');
$rss = fetch_rss($url);
echo "<ul>";
foreach ($rss->items as $item ) {
    echo "<li><a target='_blank' href=".$item['link'].">".$item['title']."</a></li>";
}
echo "</ul>";
