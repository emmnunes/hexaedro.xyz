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

<title><?php echo _("Trailer"); ?> – Hexaedro</title>

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
					<img src="img/trailer-mini.png" alt="Trailer" class="cat-mini" />
                </a>
            </div>
        </div>
    </div>
            
    <div class="page" id="about">
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
            
            <div class="math preload">
        
                <div class="video">
                    <iframe src="http://player.vimeo.com/video/60513605?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="1000" height="563" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
            
                <div class="greycontainer">
                    <div class="noise-fadeout nf-offset"></div>
                    <div class="hexagrid offset">
                    
                        <div class="row structure">
                            <div class="one-col prefix-half main-img">
                                <img src="img/cell.png" />
                            </div>
                            <div class="three-col">
    	                        <div class="mcluhan">
	                            	<h2>The stars are so big,<br />
                                    the Earth is so small,<br />
                                    Stay as you are.</h2><h4>Marshall McLuhan *</h4>
                                </div>
                            </div>
                            <div class="one-col main-img">
                                <img src="img/earth.png" />
                            </div>
                         
                            <div class="clear"></div>
                         </div>
            
                        <div class="row">
                            <div class="three-col prefix-one-half textblock">
                                <h2><?php echo _("Synopsis"); ?></h2>
                                <p><?php echo _("Hexaedro tells the tale of the concepts underlying the evolution of Man, as a social and unique being. From thought to practice, from the idea to the execution, the milestones that tell us \"everything is connected\". It's a story of abstract concepts, cornerstones of our Humanity: the Evolution of species, the individual's Singularity, the Creativity to shape our environment and the transmission of Knowledge."); ?></p>
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
                    	<li class="selected"><a href="trailer.php?locale=<?php echo($locale); ?>"><?php echo _("Trailer"); ?></a></li>
                    	<li><a href="gallery.php?locale=<?php echo($locale); ?>"><?php echo _("Gallery"); ?></a></li>
                    	<li><a href="makingof.php?locale=<?php echo($locale); ?>"><?php echo _("Making Of"); ?></a></li>
                    	<li><a href="log.php?locale=<?php echo($locale); ?>"><?php echo _("Log"); ?></a></li>
                    	<li><a href="press.php?locale=<?php echo($locale); ?>"><?php echo _("Press Kit"); ?></a></li>
                    	<li><a href="credits.php?locale=<?php echo($locale); ?>"><?php echo _("Credits"); ?></a></li>
                    </ul>
                </div>
            	<div class="footlang">
                	<ul>
                    	<li class="header-li">Language</li>
                    	<li <?php if($locale=="pt_PT") echo("class=\"selected\""); ?>><a href="trailer.php?locale=pt_PT">PRT</a></li>
                    	<li <?php if($locale=="en_GB") echo("class=\"selected\""); ?>><a href="trailer.php?locale=en_GB">ENG</a></li>
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
