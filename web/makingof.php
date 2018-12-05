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

<title><?php echo _("Making Of"); ?> – Hexaedro</title>

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
					<img src="img/makingof-mini.png" alt="Making Of" class="cat-mini" />
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
            
            <div class="shell preload">
        
                <div class="video">
                    <iframe src="http://player.vimeo.com/video/48647799?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="1000" height="563" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
            
                <div class="greycontainer">
                    <div class="noise-fadeout"></div>
                    
                    <div class="hexagrid">
            
                        <div class="row vertical-one">
                            <div class="three-col prefix-one-half textblock">
                                <h2><?php echo _("Production Process"); ?></h2>
                                <p><?php echo _("While being essentially a video-based work, Hexaedro is not a traditional short film – despite the fact that its execution has gone through similar production processes. Completed in the course of six months, the piece has gone through several production stages: from research and script writing, to video capture, post-production and animation. The software setup used to produce the final piece consisted of Adobe Photoshop, Adobe Illustrator, Adobe After Effects, Maxon Cinema 4D and Sony Vegas."); ?></p>
                            </div>
                        </div>
            
                        <div class="row concepts proccess">
                            <div class="one-col prefix-one selected" id="research">
                                <img src="img/research.png" />
                        		<h3><?php echo _("Research<br />and Writing"); ?></h3>
                            </div>
                            <div class="one-col" id="conceptart">
                                <img src="img/conceptart.png" />
                        		<h3><?php echo _("Concept Art<br />and Storyboard"); ?></h3>
                            </div>
                            <div class="one-col" id="editing">
                                <img src="img/editing.png" />
                        		<h3><?php echo _("Animating<br />and Editing"); ?></h3>
                            </div>
                            <div class="one-col" id="assembly">
                                <img src="img/assembly.png" />
                       	 		<h3><?php echo _("Construction<br />and Assembly"); ?></h3>
                            </div>
                            
                            <div class="clear"></div>
                        </div>
            
                        <div class="proccess-full" id="research-full">
                            <div class="row">
                                <div class="three-col prefix-one-half">
                                    <p><?php echo _("Production was preceeded by a research process, which went through the main concepts behind the theory of evolution. This allowed the storyboard to take form, while providing valuable theoretical and visual resources, which would be employed at a later stage."); ?></p>
                                </div>
                            </div>
                            
                            <div class="clear"></div>
                            
                            <div class="row conceptimages">
                                <div class="gallery-img prefix-one">
                                    <div class="flexslider">
                                        <ul class="slides">
                                            <li><img src="img/research01.jpg" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="proccess-full" id="conceptart-full">
                            <div class="row">
                                <div class="three-col prefix-one-half">
                                    <p><?php echo _("Having finished the script, all of the scenes were visually rehearsed. Both the tone and style of the movie were carefully tested, and validated through the use of quick sketches and concept-art."); ?></p>
                                </div>
                            </div>
                            
                            <div class="clear"></div>
                            
                            <div class="row conceptimages">
                                <div class="gallery-img prefix-one">
                                    <div class="flexslider">
                                        <ul class="slides">
                                            <li><img src="img/concept01.jpg" /></li>
                                            <li><img src="img/concept02.jpg" /></li>
                                            <li><img src="img/concept03.jpg" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="proccess-full" id="editing-full">
                            <div class="row">
                                <div class="three-col prefix-one-half">
                                    <p><?php echo _("Taking advantage of a vast array of graphical resources, the seven main scenes were produced and edited in a continuous, yet non-linear storyline. While some of the scenes are entirely computer-generated, others make use of live action video."); ?></p>
                                </div>
                            </div>
                            
                            <div class="clear"></div>
                            
                            <div class="row conceptimages">
                                <div class="gallery-img prefix-one">
                                    <div class="flexslider">
                                        <ul class="slides">
                                            <li><img src="img/editing01.jpg" /></li>
                                            <li><img src="img/editing02.jpg" /></li>
                                            <li><img src="img/editing03.jpg" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="proccess-full" id="assembly-full">
                            <div class="row">
                                <div class="three-col prefix-one-half">
                                    <p><?php echo _("The projection setup was initially built at a smaller scale, for testing and concept-validation purposes, during the production proccess. A larger, real-scale prism was then built for public exhibition. The projection equipment consists of six Benq MX660 video projectors and two Matrox ThreeHead2go video cards."); ?></p>
                                </div>
                            </div>
                            
                            <div class="clear"></div>
                            
                            <div class="row conceptimages">
                                <div class="gallery-img prefix-one">
                                    <div class="flexslider">
                                        <ul class="slides">
                                            <li><img src="img/assembly01.jpg" /></li>
                                            <li><img src="img/assembly02.jpg" /></li>
                                            <li><img src="img/assembly03.jpg" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
                    	<li class="selected"><a href="makingof.php?locale=<?php echo($locale); ?>"><?php echo _("Making Of"); ?></a></li>
                    	<li><a href="log.php?locale=<?php echo($locale); ?>"><?php echo _("Log"); ?></a></li>
                    	<li><a href="press.php?locale=<?php echo($locale); ?>"><?php echo _("Press Kit"); ?></a></li>
                    	<li><a href="credits.php?locale=<?php echo($locale); ?>"><?php echo _("Credits"); ?></a></li>
                    </ul>
                </div>
            	<div class="footlang">
                	<ul>
                    	<li class="header-li">Language</li>
                    	<li <?php if($locale=="pt_PT") echo("class=\"selected\""); ?>><a href="makingof.php?locale=pt_PT">PRT</a></li>
                    	<li <?php if($locale=="en_GB") echo("class=\"selected\""); ?>><a href="makingof.php?locale=en_GB">ENG</a></li>
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
