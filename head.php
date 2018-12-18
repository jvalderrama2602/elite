<head>
<script type="text/javascript">
if (screen.width<800) {
document.location="<?php print $canomovil ?>";
}
</script>
	<title><?php print $strTitle; ?></title>
	<meta charset="utf-8">
	<meta name="description" content=<?php print $strCaption ?>>
	<meta name="robots" content="index,follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="<?php print $canonical ?>"  />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="icon" type="image/ico" href="https://eliteescortmadrid.com/favicon.ico?v=2">
<!-- OpenGraph metadata-->

  <meta property="og:locale" content="es_ES" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php print $strTitle; ?>" />
  <meta property="og:description" content=<?php print $strCaption ?> />
  <meta property="og:url" content="<?php print $canonical ?>" />
  <meta property="og:site_name" content="Elite Escort Madrid" />
  <meta property="og:image" content="https://eliteescortmadrid.com/images/slider01.png" />
  <meta property='fb:admins' content='FB-AppID'/>

  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:description" content=<?php print $strCaption ?>/>
  <meta name="twitter:title" content="<?php print $strTitle; ?>"/>
  <meta name="twitter:site" content="@v4ld3rr4m4"/>
  <meta name="twitter:creator" content="@v4ld3rr4m4"/>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/main.min.css"> <!--id="color-switcher-link"-->
	<link rel="stylesheet" href="/css/animations.css">
	<link rel="stylesheet" href="/css/fonts.css">
	<script src="/js/vendor/modernizr-2.6.2.min.js"></script>

<script>
document.oncontextmenu = function(){return false}

$(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
        return false;
    }
});


</script>
<script>
   // A $( document ).ready() block.
	$( document ).ready(function() {
  /*if (document.cookie.indexOf('visited=true') == -1){*/
    // load the overlay
    $('#myModal').modal({show:true,keyboard:false,backdrop: 'static'});

    /*var year = 1000*60*60*24*365;
    var expires = new Date((new Date()).valueOf() + year);
    document.cookie = "visited=true;expires=" + expires.toUTCString();*/

  });
/*});*/
</script>




<meta name="google-site-verification" content="k4AlV1CQnn7bnaTU_246vuKolm02XBjTRBQHlyXZ_30" />
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "AdultEntertainment",
  "name": "Elite Escort Madrid",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "",
    "addressLocality": "Madrid",
    "addressRegion": "MA",
    "postalCode": "28001"
  },
  "image": "https://eliteescortmadrid.com/images/slider01.png",
  "email": "info@eliteescortmadrid.com",
  "telePhone": "+34693608861",
  "url": "https://eliteescortmadrid.com",
  "paymentAccepted": [ "cash", "credit card" ],
  "openingHours": "Mo,Tu,We,Th,Fr,Sa,Su 10:00-00:00",
  "openingHoursSpecification": [ {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "10:00",
    "closes": "00:00"
  } ],
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "40.4148631",
    "longitude": "-3.7050975"
  },
  "priceRange":"$"

}
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128771828-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128771828-1');
</script>
<style>
.popup {
    background-color: #ffffff;
    color: #888888;
    height: 245px;
    left: 100%;
    padding: 20px;
    position: fixed;
    right: 30%;
    top: 25%;
    width: 550px;
    z-index: 101;
    -moz-box-shadow: 0px 0px 10px 1px #888888;
    -webkit-box-shadow: 0px 0px 10px 1px #888888;
    box-shadow: 0px 0px 10px 1px #888888;
    border-radius:10px;
    -moz-border-radius:10px;
}

.overlay {
    background: #000000;
    bottom: 0;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 100;
    opacity:0.5;
}

a.close {
    background: url("cancel.png") repeat scroll left top transparent;
    cursor: pointer;
    float: right;
    height: 26px;
    left: 32px;
    position: relative;
    top: -33px;
    width: 26px;
}

	#barraaceptacion {
    display:none;
    position:fixed;
    left:0px;
    right:0px;
    bottom:0px;
    padding-bottom:20px;
    width:100%;
    text-align:center;
    min-height:40px;
    background-color: rgba(0, 0, 0, 0.5);
    color:#fff;
    z-index:99999;
}

.inner {
    width:100%;
    position:absolute;
    padding-left:5px;
    font-family:verdana;
    font-size:12px;
    top:30%;
}

.inner a.ok {
    padding:4px;
    color:#FFDF9C;
    text-decoration:none;
}

.inner a.info {
    padding-left:5px;
    text-decoration:none;
    color:#faff00;
}

</style>
</head>
