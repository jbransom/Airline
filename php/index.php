<!DOCTYPE HTML>
<html>
<head>
	<title>SnagaFlight</title>
	<link style="text/css" rel="stylesheet" href="Home.css"/>
	<link type="text/css"  rel="stylesheet" href="RSSstyles.css"  />
</head>
<body>
<?php
	session_start();
	require_once("menu.html");
	if(!isset($_SESSION['id'])) {
		require_once("loginBox.html");
		}
	?>

<!-------------------------------------
		RSS FEED ON TRAVEL NEWS. 
		Source: http://www.script-tutorials.com/import-rss-feeds-using-jfeed-jquery/ 
						--------------------------------------------->
<script language="javascript" type="text/javascript" src="Javascript/jquery-1.4.2.min.js"></script>
<script language="javascript" type="text/javascript" src="Javascript/jquery.jfeed.js"></script>
<script language="javascript" type="text/javascript" src="Javascript/jquery.aRSSFeed.js"></script>

<div class="RSSAggrCont" rssnum="5" rss_url="http://travelchannel-cms.feeds.theplatform.com/ps/getRSS?client=Standard&PID=3RJi3f44L8ChyBdEYLqZeB2WxyB43X2a&startIndex=1&endIndex=500&sortField=lastModified&sortDescending=true">
	<h1>Travel News</h1>
    <div class="loading_rss">
        <img alt="Loading..." src="./images/loading.gif" />
    </div>
</div>
<script language="javascript" type="text/javascript">
	$(document).ready( function() {
		$('div.RSSAggrCont').aRSSFeed();
	} );
</script>
<!-- END RSS FEED PORTION -->
</body>
</html>
