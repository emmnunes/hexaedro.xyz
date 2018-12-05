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

<title><?php echo _("Credits"); ?> – Hexaedro</title>

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
					<img src="img/credits-mini.png" alt="Credits" class="cat-mini" />
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
            
            <div class="pedro preload">
        
                <div class="greycontainer">
                    <div class="noise-fadeout nf-offset"></div>
                    <div class="hexagrid offset">
                    
                        <div class="row vertical-one">
                            <div class="one-col prefix-half main-img">
                                <img src="img/hexuc.png" />
                            </div>
                            <div class="three-col prefix-half textblock">
                                <h2><?php echo _("About"); ?></h2>
                                <p><?php echo _("Hexaedro is an immersive video-art installation, derived from Pedro Vaz's homonymous graduation project at the University of Coimbra Design & Multimedia master's degree."); ?></p>
								<p><?php echo _("Although the project is conceptually based on the corporate book Fight Gravity - An history of the concepts that radically changed our ways of thinking (Brandia Central, 2009), it is not sponsored by, nor affiliated to, any for-profit organization, and exclusively makes use of either original or licensed resources. As a result, the final artwork is itself licensed for use under a <a href=\"http://creativecommons.org/licenses/by-nc/3.0/deed.en_US\" target=\"_blank\">Creative Commons Attribution-NonCommercial 3.0 Unported License</a>."); ?></p>
                            </div>
                         
                            <div class="clear"></div>
                         </div>
                    
                        <div class="row vertical-one">
                            <div class="one-col prefix-half main-img">
                                <img src="img/author.png" />
                            </div>
                            <div class="three-col prefix-half textblock">
                                <h2><?php echo _("About the Author"); ?></h2>
                                <p><?php echo _("Born on the 15th of June 1985, in the Portuguese city of Coimbra, Pedro Vaz soon surrounds himself of transformation processes: of shape, figure and senses. At the age of 15 dreams of doing comic books, and at 17 of being an artist. From then on, he starts experimenting with graphic design, illustration, animation and moviemaking. In 2009, he's awarded, along with the Nefasto collective, the Young Portuguese Director award at the Cinanima film festival. In 2010, he joins the University of Coimbra's Design & Multimedia master's degree, where he becomes even more familiar with motion design, all the while gaining professional experience in branding, editorial design, video production and illustration. He sees motion design as the ultimate canvas for his creative ambitions."); ?></p>
                            </div>
                         
                            <div class="clear"></div>
                         </div>
                    
                        <div class="row vertical-one">
                            <div class="one-col prefix-half main-img">
                                <img src="img/thanks.png" />
                            </div>
                            <div class="three-col prefix-half textblock">
                                <h2><?php echo _("Powered by People"); ?></h2>
                                <p><?php echo _("This is not a \"one man show\". This project would be impossible without the precious help of those that, from the start, believed Hexaedro could come to life – a vast team driven by friendship and the sharing of a will: to do more with less. I am deeply grateful to all of you, especially to a friend of mine without whom, unquestionably, none of this would be possible: Eduardo Nunes, to whom I am happy to return all of the help and, more importantly, the friendship! Not less important: Maria de Lurdes, José Vaz, João Góis, Tiago Andrade, José Monsanto, Ana Baptista, Tiago Ribeiro, Daniel Vaz, Filipe Pires, Nuno Rodrigues, Fernanda Antunes, Miguel Soares, João Bicker, Paulo Gama, Pedro Casaleiro, Carlota Simões, Gilberto Pereira, José Neto, Pedro Rodrigues, Ana Rosa, Rui Valente and Elisabete Maia."); ?></p>
                            </div>
                         
                            <div class="clear"></div>
						</div>
                    	
                        <div class="clear"></div>
                        
                        <div class="row">
                            <div class="one-col prefix-half main-img">
                                <img src="img/marinetti.png" />
                            </div>
                            <div class="three-col-half prefix-half last-col textblock">
                                <h2><?php echo _("Credits"); ?></h2>
                                <p><?php echo _("To ensure a seamless video experience, the following credits have been omitted from the final artwork:"); ?></p>
                                
                                <div class="row final-credits">
                                	<div class="one-col-half">
                                    	<h4><?php echo _("Written, directed and edited by"); ?></h4>
                                        <p><strong>Pedro Vaz</strong></p>
                                        
                                    	<h4><?php echo _("Supervised by"); ?></h4>
                                        <p><strong>Miguel Soares, Filipe Mesquita</strong></p>
                                        
                                    	<h4><?php echo _("Image Shooting by"); ?></h4>
                                        <p><strong>Pedro Vaz, João Góis, Ana Baptista</strong></p>
                                        
                                    	<h4><?php echo _("Technical Support by"); ?></h4>
                                        <p><strong>Eduardo Nunes, João Góis, Filipe Pires, José Nuno Monsanto, Tiago Ribeiro, Ana Baptista, Nuno Rodrigues</strong></p>
                                        
                                    	<h4><?php echo _("Web Development"); ?></h4>
                                        <p><strong>Eduardo Nunes, Daniel Vaz, Pedro Vaz</strong></p>
                                        
                                    	<h4><?php echo _("Institutional Support"); ?></h4>
                                        <p><strong>Department of Informatics Engineering</strong></p>
                                        <p><strong>University of Coimbra</strong></p>
                                        <p><strong>Teatro da Cerca de São Bernardo</strong></p>
                                        <p><strong>Museu da Ciência, Coimbra</strong></p>
                                        <p><strong>Baptista e Soares, SA.</strong></p>
                                    </div>
                                	<div class="one-col-half">
                                    	<h4><?php echo _("References and Resources"); ?></h4>
                                        <p><strong>Fight Gravity- Uma História dos conceitos que mudaram radicalmente a nossa forma de pensar</strong>, Brandia Central, 2009</p>
                                        <p><strong>Allegory of the cave</strong>, Plato, 380 BC</p>
                                        <p><strong>The Code</strong>, Dan Child, 2011</p>
                                        <p><strong>Tree of Life</strong>, Terrence Malick, 2010</p>
                                        <p><strong>Vogel's net</strong>, Alfred Gell, 1992</p>
                                        <p><strong>Walking with cavemen</strong>, Richard Dale, 2003</p>
                                        <p><strong>Ballet mécanique</strong>, Fernand Léger, 1924</p>
                                        <p><strong>Le voyage dans la lune</strong>, Georges Méliès, 1902</p>
                                        <p><strong>Anémic cinéma</strong>, Marcel Duchamp, 1926</p>
                                        <p><strong>Le retour à la maison</strong>, Man Ray, 1923</p>
                                        
                                        <p class="footnote"><?php echo _("Considering the high number of references used in the project, the previous list includes only the most relevant."); ?></p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                
                            </div>
                            
                            <div class="clear"></div>
                        
                            <div class="row contacts">
                                <div class="prefix-two three-col textblock">
                                    <h2><?php echo _("Contacts"); ?></h2>
                                    <p><?php echo _("Please feel free to send any questions you may have through to <a href=\"http://log.hexaedro.eu/ask\" target=\"_blank\">our tumblr</a>, or just get in touch directly with Pedro using any of the following contacts:"); ?></p>
                                    <p>E-mail: <a href="mailto:info@hexaedro.eu" title="E-mail address">info@hexaedro.eu</a><br />
                                    Phone: +351 934 678 184</p>
                                </div>
                             
                                <div class="clear"></div>
                            </div>
                            
                            <div class="clear"></div>
                                
                            <div class="row institutional-logos prefix-two four-col last-col">
                                <h5><?php echo _("Sponsors"); ?></h5>
                                <a href="http://www.uc.pt" target="_blank"><img src="img/uc.png" alt="Universidade de Coimbra" /></a>
                                <a href="http://museudaciencia.pt/" target="_blank"><img src="img/mcuc.png" alt="Museu da Ciência da Universidade de Coimbra" /></a>
                                <a href="http://tcsb.aescoladanoite.pt/" target="_blank"><img src="img/tcsb.png" alt="Teatro da Cerca de São Bernardo" class="last-col" /></a>
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
                    	<li><a href="press.php?locale=<?php echo($locale); ?>"><?php echo _("Press Kit"); ?></a></li>
                    	<li class="selected"><a href="credits.php?locale=<?php echo($locale); ?>"><?php echo _("Credits"); ?></a></li>
                    </ul>
                </div>
            	<div class="footlang">
                	<ul>
                    	<li class="header-li">Language</li>
                    	<li <?php if($locale=="pt_PT") echo("class=\"selected\""); ?>><a href="credits.php?locale=pt_PT">PRT</a></li>
                    	<li <?php if($locale=="en_GB") echo("class=\"selected\""); ?>><a href="credits.php?locale=en_GB">ENG</a></li>
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
