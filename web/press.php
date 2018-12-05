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

<title><?php echo _("Press Kit"); ?> – Hexaedro</title>

<!-- META -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="<?php if ($locale == "pt_PT") echo("pt_PT"); else echo("en"); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" id="meta" />
<meta name="author" content="Pedro Vaz & Eduardo Nunes $ Daniel Vaz" />
<meta name="description" content="Hexaedro is an immersive video-art installation that tells the tale of the evolution of mankind." />
<meta name="keywords" content="installation, design, graphic, multimedia, typography" />
<meta name="robots" content="index, follow" />

<!-- FACEBOOK STUFF -->
<meta property="og:title" content="Hexaedro" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.hexaedro.eu/" />
<meta property="og:image" content="http://www.hexaedro.eu/img/hexaedro.jpg" />
<meta property="og:description" content="Hexaedro is an immersive video-art installation that tells the tale of the evolution of mankind." />

<link rel="Shortcut Icon" href="http://www.hexaedro.eu/favicon.ico">

<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500|Noticia+Text:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/flexslider.css" type="text/css">

</head>

<body>
	<div class="loading"></div>
    
	<div class="container">
            
    </div>
    
	<div class="head">
    	<div class="goback">
        	<div class="cat-icon">
                <a href="index.php?locale=<?php echo($locale); ?>">
					<p>Menu</p>
					<img src="img/press-mini.png" alt="Press Kit" class="cat-mini" />
                </a>
            </div>
        </div>
    </div>
            
    <div class="page overthrow" id="press">
	    <div class="page-wrapper">
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
            
            <div class="press preload">

                <div class="bigcall-press">
                    <div class="row">
                        <div class="four-col prefix-one">
                            <h1 class="press-heading"><?php echo _("\"The extension of any one sense alters the way we think and act, the way we perceive the world\""); ?></h1>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="greycontainer">
	                <div class="noise-fadeout"></div>
                        
                    <div class="hexagrid">   
                        <div class="row">                     
                            <div class="press-img four-col prefix-half">
                                <img src="img/press_image.jpg" class="preload" />
                            </div>
                            <div class="clear"></div>
                        
                            <div class="row press-text">
                               
                                <div class="three-col prefix-half textblock">
                                    <h2><?php echo _("A 360º immersive installation"); ?></h2>
                                    <p><?php echo _("Born out of a graduation project, at the University of Coimbra's Design & Multimedia master's degree, Hexaedro reflects its author's ambition to go beyond the traditional frontiers imposed by video: it's an immersive design installation, composed of six, sequentially contiguous projection walls, together forming an hexagonal prism, without a floor or a ceiling, on which a seamless 360º video is projected. The viewers are invited into the center of the structure, from where they're able to watch, from all directions, the unfolding of a concise history of mankind. The concentric setup, by putting the viewer right at the center of the piece, begins to unveil the work's central theme: a humanist overview of concepts relating to the evolution of mankind, as unique and social beings, as an individual and as species. It's a non-narrated, purely-visual art piece, that seeks to tell its tale exclusively through the power of images and universal symbology: the evolution of the species, the discovery of fire, the progress and achievemnts that make our species unique."); ?></p>
                                </div>
    
                                <div class="one-col-half prefix-half press-kit">
                                    <div class="download-press-kit">
                                    	<a href="http://www.hexaedro.eu/presskit.rar">
                                        <div>
                                        <img src="img/down-ico.png" />
                                        <h5><?php echo _("DOWNLOAD PRESS KIT"); ?></h5>
                                        <div class="clear"></div>
                                        </div>
                                        </a>
                                        <div class="clear"></div>
                                        <ul>
                                            <li><?php echo _("Press release, in English and Portuguese"); ?></li>
                                            <li><?php echo _("Author biography"); ?></li>
                                            <li><?php echo _("High resolution photos"); ?></li>
                                            <li><?php echo _("Technical project description"); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>   
	                        <div class="clear"></div>
                        </div>
                    </div>
                    
                </div>
            
            </div>
            
            <div class="footer">
            	<div class="footmenu">
                	<ul>
                    	<li class="header-li">Menu</li>
                    	<li><a href="hexaedro.php?locale=<?php echo($locale); ?>"><?php echo _("Hexaedro"); ?></a></li>
                    	<li><a href="trailer.php?locale=<?php echo($locale); ?>"><?php echo _("Trailer"); ?></a></li>
                    	<li><a href="gallery.php?locale=<?php echo($locale); ?>"><?php echo _("Gallery"); ?></a></li>
                    	<li><a href="makingof.php?locale=<?php echo($locale); ?>"><?php echo _("Making Of"); ?></a></li>
                    	<li><a href="log.php?locale=<?php echo($locale); ?>"><?php echo _("Log"); ?></a></li>
                    	<li class="selected"><a href="press.php?locale=<?php echo($locale); ?>"><?php echo _("Press Kit"); ?></a></li>
                    	<li><a href="credits.php?locale=<?php echo($locale); ?>"><?php echo _("Credits"); ?></a></li>
                    </ul>
                </div>
            	<div class="footlang">
                	<ul>
                    	<li class="header-li">Language</li>
                    	<li <?php if($locale=="pt_PT") echo("class=\"selected\""); ?>><a href="press.php?locale=pt_PT">PRT</a></li>
                    	<li <?php if($locale=="en_GB") echo("class=\"selected\""); ?>><a href="press.php?locale=en_GB">ENG</a></li>
                    </ul>
                </div>
				
                <div class="clear"></div>
                
                <div class="sponsors">
                	<a href="http://www.uc.pt" target="_blank"><img src="img/uc-foot.png" /></a>
                	<a href="http://museudaciencia.pt/" target="_blank"><img src="img/mcuc-foot.png" /></a>
                </div>
                
                <div class="tinytext">
                	<img src="img/cc-foot.png" class="cc" />
                    <div class="credits">
                        <h5><?php echo _("Project by"); ?> <a href="http://dropr.com/pedrovaz" target="_blank">Pedro Vaz</a> <a href="mailto:info@hexaedro.eu">info@hexaedro.eu</a><br />
                        <?php echo _("Web development by"); ?> <a href="http://www.eduardonunes.me" target="_blank">Eduardo Nunes</a> & <a href="http://danielvaz.eu" target="_blank">Daniel Vaz</a></h5>
                    </div>
                </div>
				
                <div class="clear"></div>
                
            </div>
            
		</div>
        
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
