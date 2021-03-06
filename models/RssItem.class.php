<?php
/**
 * The RSS Model
 */
class RssItem {
	var $title = "";
	var $link = "";
	var $description = "";
	var $pubDate = "";
	
	/**
	 * Constructor
	 */
	function __construct($title, $link, $description, $pubDate) {
		$this->title = $title;
	    $this->link = $link;
		$this->description = $description;
		$this->pubDate = $pubDate;
    	}
	
	/**
	 * RSSItem title getter
	 */
	function getTitle() {
		return $this->title;
	}
	
	/**
	 * RSSItem link getter
	 */
	function getLink() {
		return $this->link;
	}
	
	/**
	 * RSSItem description getter
	 */
	function getDescription() {
		return $this->description;
	}
	
	/**
	 * RSSItem publication date getter
	 */
	function getPubDate() {
		return $this->pubDate;
	}
	
	/**
	 * RSSItem title setter
	 */
	function setTitle($title) {
		$this->title = $title;
	}
	
	/**
	 * RSSItem link setter
	 */
	function setLink($link) {
		$this->link = $link;
	}
	
	/**
	 * RSSItem publication date setter
	 */
	function setPubDate($pubDate) {
		$this->pubDate = pubDate;
	}
} 
?>
