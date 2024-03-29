<?php
$id=$_GET['id'];
if(!isset($_GET['id']) || $id=='home')  {
    $id='home'; //redirect the user to the homepage. i.e. not based on index.php ++ an id. I.e. make homepage.php the splash page.
}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Occupation Records</title>
	<meta content="Occupation Records" name="description" />
	<meta content="" name="keywords" />
	<link rel="stylesheet" type="text/css" href="css/occupationrecords.css" />
	<link rel="stylesheet" type="text/css" href="css/lightbox.css" />

    <meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="shortcut icon" href="favicon.png" />
  
    <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<?php
    if ( file_exists('php/'.$id.'back.php') ) {
    include_once('php/'.$id."back.php");}
?>
    <div id="wrapper">
        <div id="content">
            <div id="center">
                <div id="changes">
                <?php include_once("php/$id.php");?>
                </div>
                <div id="nav">
                    <?php include_once("php/nav.php");?> 
                </div>
                <div id="profits">
                    <img src="img/profits.png" />
                    <br /><br />
                    <img src="img/copyright.png" class="floatright" />
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript at the bottom for fast page loading -->

    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.4.min.js"><\/script>')</script>
	<script type="text/javascript" src="js/lightbox.js"></script>

    <!-- scripts concatenated and minified via build script -->
    <script defer src="js/plugins.js"></script>
    <script defer src="js/script.js"></script>
    <!-- end scripts -->

    <script>
    var _gaq=[['_setAccount',''],['_trackPageview'],['_trackPageLoadTime']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>
