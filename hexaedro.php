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

<title><?php echo _("About the Project"); ?> – Hexaedro</title>

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
					<img src="img/hexaedro-mini.png" alt="About the Project" class="cat-mini" />
                </a>
            </div>
        </div>
    </div>
            
    <div class="page overthrow" id="about">
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
	        <?php if (isSet($_GET["locale"])) $locale = $_GET["locale"]; ?>
        
            <div class="bigcall preload">
                <div class="row">
                    <div class="three-col prefix-one-half">
                        <h1><?php echo _("Hexaedro is a 360º video installation, projected on the walls of an hexagonal prism. A video-based artwork centered in mankind evolution."); ?></h1>
                    </div>
                </div>
            </div>
            
            <div class="clear"></div>
            
            <div class="earth">
            
                <div class="row">
	                <div class="centeredblock">
                        <div class="three-col prefix-one-half textblock">
                            <h2><?php echo _("The Humanist Concept"); ?></h2>
							<p><?php echo _("Hexaedro sums up the global concepts that have been determinant in makind's evolutional process. They are abstract concepts that can be found on the most distinctive areas, contributing for the human evolution, where mathematics plays the main role as a universal language system, making it fundamental for decoding the natural environment. These are abstract and omnipresent ideas that are based on four fundamental pillars: evolution, singularity, creativity and knowledge. These concepts connect and intertwine, creating a continuous chain of thought. From science to philosophy, from mathematics to history, they prove a unifying theory: the concept that \"everything is connected\"."); ?></p>
                        </div>
                    </div>
		            <div class="clear"></div>
                </div>
                
                <div class="clear"></div>
            
                <div class="row">
                    <div class="six-col last-col everything">
                        <h1><?php echo _("Everything is Connected"); ?></h1>
                    </div>
                </div>
                
                <div class="clear"></div>
                
                <div class="row concepts">
                    <div class="one-col prefix-one">
                        <img src="img/evolution.png" />
                        <h3><?php echo _("Evolution"); ?></h3>
                        <ul>
                            <li><?php echo _("Growth"); ?></li>
                            <li><?php echo _("Metamorphosis"); ?></li>
                            <li><?php echo _("Multiplication"); ?></li>
                            <li><?php echo _("Life Cycle / Death"); ?></li>
                            <li><?php echo _("Past / Future"); ?></li>
                        </ul>
                    </div>
                    
                    <div class="one-col selected">
                        <img src="img/singularity.png" />
                        <h3><?php echo _("Singularity"); ?></h3>
                        <ul style="display: block;">
                            <li><?php echo _("Singular / Plural"); ?></li>
                            <li><?php echo _("Individual / Society"); ?></li>
                            <li><?php echo _("Species / Element"); ?></li>
                            <li><?php echo _("Self-Knowledge"); ?></li>
							<li><?php echo _("Consciousness"); ?></li>
                        </ul>
                    </div>
                    
                    <div class="one-col">
                        <img src="img/creativity.png" />
                        <h3><?php echo _("Creativity"); ?></h3>
                        <ul>
                            <li><?php echo _("Curiosity"); ?></li>
                            <li><?php echo _("Transformation"); ?></li>
                            <li><?php echo _("Domain"); ?></li>
                            <li><?php echo _("Composition"); ?></li>
                            <li><?php echo _("Design"); ?></li>
                        </ul>
                    </div>
                    
                    <div class="one-col suffix-one">
                        <img src="img/knowledge.png" />
                        <h3><?php echo _("Knowledge"); ?></h3>
                        <ul>
                            <li><?php echo _("Share"); ?></li>
                            <li><?php echo _("Transmission"); ?></li>
                            <li><?php echo _("Learning"); ?></li>
                            <li><?php echo _("Legacy"); ?></li>
                            <li><?php echo _("University"); ?></li>
                        </ul>
                    </div>
                </div>
                
                <div class="clear"></div>
            
                <div class="greycontainer">
                    <div class="noise-fadeout"></div>
                    <div class="hexagrid">
                    
                        <div class="row structure">
                            <div class="one-col prefix-one main-img">
                                <img src="img/physical.png" />
                            </div>
                            <div class="three-col prefix-half textblock">
                                <h2><?php echo _("Physical Structure"); ?></h2>
                                <p><?php echo _("The Hexaedro project is, in its essence, a motion-design artwork, only with a peculiar set of technical features that make it an out-of-the-ordinary piece. The installation is actually a seamless, 360-degree video. Its presentation is, thus, inseparable from the physical structure that supports it, since the entire video has been produced and edited with the immersive qualities of the final installation in mind, which strives to draw the viewer into the piece itself, establishing a relationship of extreme proximity between the artwork and the viewer. These factors make this an immersive-design piece."); ?></p>
                            </div>
                         
                            <div class="clear"></div>
                         </div>
                    
                        <div class="row">
                            <div class="one-col-half prefix-half textblock">
                                <h3><?php echo _("Arena Configuration"); ?></h3>
                                <p><?php echo _("The hexagonal-shaped structure the project depends on consists of an arena of six, concentrically laid out projection screens, with a 4:3 display ratio each."); ?></p>
                                <ul class="viewselector">
                                    <li id="isometric" class="selected"><span><?php echo _("Isometric View"); ?></span></li>
                                    <li id="top"><span><?php echo _("Top View"); ?></span></li>
                                    <li id="side"><span><?php echo _("Left View"); ?></span></li>
					                <div class="clear"></div>
                                </ul>
                            </div>
                            <div class="four-col largeview last-col">
                                <img src="img/largeview-px.png" />
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
                    	<li class="selected"><a href="hexaedro.php?locale=<?php echo($locale); ?>"><?php echo _("Hexaedro"); ?></a></li>
                    	<li><a href="trailer.php?locale=<?php echo($locale); ?>"><?php echo _("Trailer"); ?></a></li>
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
                    	<li <?php if($locale=="pt_PT") echo("class=\"selected\""); ?>><a href="hexaedro.php?locale=pt_PT">PRT</a></li>
                    	<li <?php if($locale=="en_GB") echo("class=\"selected\""); ?>><a href="hexaedro.php?locale=en_GB">ENG</a></li>
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
