<?php 
if (!isSet($locale)) $locale = "en_GB";
if (isSet($_GET["locale"])) $locale = $_GET["locale"];

$currency = $locale;
putenv("LC_ALL=$locale");
setlocale(LC_ALL, $locale . ".UTF-8");
setlocale(LC_MONETARY, $currency);
bindtextdomain("messages", "./locale");
textdomain("messages"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Hexaedro</title>

<!-- META -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="<?php if ($locale == "pt_PT") echo("pt_PT"); else echo("en"); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" id="meta" />
<meta name="author" content="Pedro Vaz & Eduardo Nunes" />
<meta name="description" content="Hexaedro is a 360º installation." />
<meta name="keywords" content="installation, design, graphic, multimedia, typography" />
<meta name="robots" content="index, follow" />

<!-- FACEBOOK STUFF -->
<meta property="og:title" content="Hexaedro" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.hexaedro.eu/" />
<meta property="og:image" content="http://www.hexaedro.eu/img/hexaedro.jpg" />
<meta property="og:description" content="Hexaedro is an immersive video-art installation that tells the tale of the evolution of mankind." />

<link rel="shortcut icon" href="http://www.hexaedro.eu/favicon.ico?v=2">

<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500|Noticia+Text:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/flexslider.css" type="text/css">

</head>

<body>
	<div class="loading"></div>
    
	<div class="container">

    	<div id="container-wrapper">
        	<script type="text/javascript">

			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-38825763-1']);
			  _gaq.push(['_setDomainName', 'hexaedro.eu']);
			  _gaq.push(['_trackPageview']);
			
			  (function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
			
			</script>
            <div class="background preload" id="background"></div>
            <div class="animals preload" id="animals"></div>
            
            <div class="content" id="content" onselectstart=" return false">
                    
                <div class="menu">
                    <!-- ONE -->
                    <div class="item presskit">
                        <div class="hexa preload">
                            <a href="press.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("presskit.png"); ?>" alt="<?php echo _("Press Kit"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item log">
                        <div class="hexa preload">
                            <a href="log.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("log.png"); ?>" alt="<?php echo _("Log"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item credits">
                        <div class="hexa preload">
                            <a href="credits.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("credits.png"); ?>" alt="<?php echo _("Credits"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item hexaedro">
                        <div class="hexa preload">
                            <a href="hexaedro.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("hexaedro.png"); ?>" alt="<?php echo _("About Hexaedro"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item trailer">
                        <div class="hexa preload">
                            <a href="trailer.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("trailer.png"); ?>" alt="<?php echo _("Trailer"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item gallery">
                        <div class="hexa preload">
                            <a href="gallery.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("gallery.png"); ?>" alt="<?php echo _("Gallery"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item makingof">
                        <div class="hexa preload">
                            <a href="makingof.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("makingof.png"); ?>" alt="<?php echo _("Making Of"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    
                    <!-- TWO -->
                    <div class="item presskit">
                        <div class="hexa preload">
                            <a href="press.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("presskit.png"); ?>" alt="<?php echo _("Press Kit"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item log">
                        <div class="hexa preload">
                            <a href="log.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("log.png"); ?>" alt="<?php echo _("Log"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item credits">
                        <div class="hexa preload">
                            <a href="credits.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("credits.png"); ?>" alt="<?php echo _("Credits"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item hexaedro">
                        <div class="hexa preload">
                            <a href="hexaedro.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("hexaedro.png"); ?>" alt="<?php echo _("About Hexaedro"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item trailer">
                        <div class="hexa preload">
                            <a href="trailer.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("trailer.png"); ?>" alt="<?php echo _("Trailer"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item gallery">
                        <div class="hexa preload">
                            <a href="gallery.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("gallery.png"); ?>" alt="<?php echo _("Gallery"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item makingof">
                        <div class="hexa preload">
                            <a href="makingof.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("makingof.png"); ?>" alt="<?php echo _("Making Of"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    
                    <!-- THREE -->
                    <div class="item presskit">
                        <div class="hexa preload">
                            <a href="press.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("presskit.png"); ?>" alt="<?php echo _("Press Kit"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item log">
                        <div class="hexa preload">
                            <a href="log.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("log.png"); ?>" alt="<?php echo _("Log"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item credits">
                        <div class="hexa preload">
                            <a href="credits.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("credits.png"); ?>" alt="<?php echo _("Credits"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item hexaedro">
                        <div class="hexa preload">
                            <a href="hexaedro.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("hexaedro.png"); ?>" alt="<?php echo _("About Hexaedro"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item trailer">
                        <div class="hexa preload">
                            <a href="trailer.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("trailer.png"); ?>" alt="<?php echo _("Trailer"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item gallery">
                        <div class="hexa preload">
                            <a href="gallery.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("gallery.png"); ?>" alt="<?php echo _("Gallery"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    <div class="item makingof">
                        <div class="hexa preload">
                            <a href="makingof.php?locale=<?php echo($locale); ?>"><img src="img/<?php echo _("makingof.png"); ?>" alt="<?php echo _("Making Of"); ?>" class="preload" /></a>
                        </div>
                    </div>
                    
                </div>
                    
                <div class="signature">
                    <p><?php echo _("Know thyself and thou shalt know<br />
                    the universe and the gods.<br />
                    Man is the measurement for all things."); ?></p>
                </div>
                
                <div class="homelang">
                    <a <?php if($locale=="pt_PT") echo("class=\"selected\""); ?> href="index.php?locale=pt_PT">PRT</a></a>
                    <a <?php if($locale=="en_GB") echo("class=\"selected\""); ?> href="index.php?locale=en_GB">ENG</a></a>
                </div>
            </div>
            
		</div>
        
    </div>
    
	<div class="head">
    	<div class="goback">
        	<div class="cat-icon">
                <a href="index.php?locale=<?php echo($locale); ?>">
					<p>Menu</p>
					<img src="img/hexaedro-mini.png" alt="Index" class="cat-mini" />
                </a>
            </div>
		</div>
    </div>
            
    <div class="page">
        
    </div>
    
  
</body>

<script src='js/base_packaged.js' type='text/javascript'></script>
<script src='js/jquery-ui-1.8.21.custom.min.js' type='text/javascript'></script>
<script src='js/jquery.mousewheel.min.js' type='text/javascript'></script>
<script src='js/jquery.mobile-1.3.0.min.js' type='text/javascript'></script>
<script src="js/TweenMax.min.js"></script>
<script src='js/jquery.flexslider.min.js' type='text/javascript'></script>
<script src="js/jquery.fitvids.min.js"></script>
<script src="js/imgpreload.min.js"></script>

<script src='js/global.min.js' type='text/javascript'></script>

<!-- Oh hai!
Here, we've made it easier for you to sniff around...
<script src='js/global.js' type='text/javascript'></script> -->

</html>
