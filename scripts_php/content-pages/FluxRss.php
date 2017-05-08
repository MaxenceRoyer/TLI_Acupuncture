<?php
	include_once(dirname( __FILE__ ) . "/../../models/RssItem.class.php");

	$urlRss = "http://www.lemonde.fr/sante/rss_full.xml"; 
	$rssLoaded = simplexml_load_file($urlRss);

	$arrayRss = array();
	foreach ($rssLoaded->channel->item as $item) {
		$dateTime = date_create($item->pubDate);
		$rssItem = new RssItem($item->title, $item->link, $item->description, date_format($dateTime, 'd M Y, H\hi'));
		
		array_push($arrayRss, $rssItem);
	}
?>