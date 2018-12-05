/*******************************************************

	HEXAEDRO.eu
	Web Design & Development by
	Eduardo Nunes, Pedro Vaz & Daniel Vaz

*******************************************************/


var index;
	
jQuery(function($) {
		
	var upAndOut = -$(".content").height();
	TweenLite.to(".background", 0, {y:upAndOut});
	TweenLite.to(".animals", 0, {y:upAndOut});
	TweenLite.to(".menu", 0, {y:upAndOut});
	
	$(window).bind('hashchange', function(){
		hashChange();
	});
	
	// Trigger Hash Change
	var filename 	=	window.location.hash.substring(1);
	if (filename == "") {
		var url = window.location.pathname;
		var filename = url.substring(url.lastIndexOf('/')+1);
		if(filename == "") filename = "index.php";
	}
	window.location.hash = filename;
	$(window).trigger('hashchange');

})

/*-----------------------
	FUNCTIONS
-----------------------*/

/* BIND HASH CHANGE */
function hashChange() {	
	var newHash 	=	window.location.hash.substring(1);	
	var file		=	newHash.split("?")
	
	if(file[0] == "index.php" || file[0] == "") {
		
		$('title').load(newHash + ' title', '', function(data) {
			document.title = $(this).text();
		});
	
		$('.container').load(newHash+' #container-wrapper', function() {
				
			index = true;
	
			$(".signature").hide();
			$(".homelang").hide();
		
			var upAndOut = -$(".content").height();
			TweenLite.to(".background", 0, {y:upAndOut});
			TweenLite.to(".animals", 0, {y:upAndOut});
			TweenLite.to(".menu", 0, {y:upAndOut, onComplete: function() {
				$(".container").show();
				$(".loading").fadeIn();
			}});
			
			$(".page").fadeOut(function() {
				
				$('.preload').imgpreload(function(){
					$(".loading").fadeOut(function(){
						TweenLite.to(".background", 1, {y:0});
						TweenLite.to(".animals", 0.8, {y:0});
						TweenLite.to(".menu", 1, {y:0, onComplete: function() {
							if($(".content").height() > 600) $(".signature").fadeIn('slow');
							$(".homelang").fadeIn('slow');
						}});
					});
				});
		
			});
			
			/********************************
			*	RESIZE WINDOW				*
			********************************/
			$(window).bind('resize', function(){
				if (index == true) {
					var newPos = -($(".content").width() / 2) + ($(window).width() / 2)
					scene.currentPosition = newPos;
					background.currentPosition = newPos;
					animals.currentPosition = newPos;
				}
			});
			
			
		
			if( navigator.userAgent.match(/MSIE/i) || navigator.userAgent.match(/AppleWebKit/) ) document.getElementById('content').className = 'content custom_cursor';
			
		/*	VARIABLES */
			var scene = {
				'id': $("#content"),
				'dragging': false,
				'prevMouseX': '',
				'scrollOffset': '',
				'touch_x': '',
				'startPosition': -($(".content").width() / 2) + ($(window).width() / 2),
				'currentPosition': '0',
				'newPosition': '',
				'scrollDelta': '',
				'bgWidth': 3500
			};
			var background = {
				'id': $("#background"),
				'startPosition': -($(".background").width() / 2) + ($(window).width() / 2),
				'currentPosition': '0',
				'newPosition': '',
				'bgWidth': 3500
			};
			var animals = {
				'id': $("#animals"),
				'startPosition': -($(".animals").width() / 2) + ($(window).width() / 2),
				'currentPosition': '0',
				'newPosition': '',
				'bgWidth': 3500
			};
			
		
		/*	SET INITIAL POSITION	*/
			scene.currentPosition = scene.startPosition;
			background.currentPosition = background.startPosition;
			animals.currentPosition = animals.startPosition;
		
		/*	TAKE CARE OF DECELERATION	*/
			setInterval(function(e) {
				if (scene.dragging == true) {
					return false;
				} 
				scene.scrollDelta =  scene.scrollDelta * .80;
				if (Math.abs(scene.scrollDelta) <= 1) scene.scrollDelta = 0;
				moveBackground(e);
				
			}, 20);	
			
			$('#content').bind('vmousedown', function(e) {
				if (scene.dragging) { 
					return false;
				}
				scene.dragging = true;
				scene.prevMouseX = e.clientX;
				$(this).addClass("grabbing");
			}).bind('vmouseup', function(e) {
				scene.dragging = false;
				scene.scrollDelta = scene.scrollDelta * 0.60;	
				$(this).removeClass("grabbing");
			}).bind('vmousemove', function(e) {
				if (!scene.dragging) { 
					return false;
				}
				$(".signature").fadeOut();
				scene.scrollDelta = parseInt((e.clientX - scene.prevMouseX));
				scene.prevMouseX = e.clientX;
				moveBackground(e);
			}).bind('mousewheel', function(e,distance) {
				$(".signature").fadeOut();
				var delta = Math.ceil(Math.sqrt(Math.abs(distance)));
				delta = distance < 0 ? -delta : delta;
				scene.scrollDelta = scene.scrollDelta + delta * 3;
				return false;
			});
			
			$("body").bind('vmouseout', function(e) {
				scene.dragging = false;
			});
			
			$('.item a').on('click', function(event) {
				if (index) index = false
				else index = true;
				
				var newLink = $(this).attr("href");
				
				window.location.hash = newLink;
				
				if ("onhashchange" in window) {
					return false;
				}
			});
			
			$('.homelang a').on('click', function(event) {
				var newLink = $(this).attr("href");
				
				window.location.hash = newLink;
				
				if ("onhashchange" in window) {
					return false;
				}
			});		
		
			function moveBackground(e) {
				/* MOVE FOREGROUND */
				scene.newPosition = parseInt(scene.currentPosition + scene.scrollDelta * 2);
				TweenLite.to(scene.id, 0, {left:scene.currentPosition});
				
				scene.currentPosition = scene.newPosition;
				
				// If scene is near out of bounds
				if(scene.currentPosition >= scene.startPosition + scene.bgWidth) {
					scene.currentPosition = scene.startPosition;
				}
				if(scene.currentPosition <= scene.startPosition - scene.bgWidth) {
					scene.currentPosition = scene.startPosition;
				}
				
				
				/* MOVE BACKGROUND */
				background.newPosition = parseInt(background.currentPosition + scene.scrollDelta);
				TweenLite.to(background.id, 0, {left:background.currentPosition / 2});
				
				background.currentPosition = background.newPosition;
				
					// If background is near out of bounds
					if(background.currentPosition >= background.startPosition + background.bgWidth) {
						background.currentPosition = background.startPosition;
					}
					if(background.currentPosition <= background.startPosition - background.bgWidth) {
						background.currentPosition = background.startPosition;
					}
				
				/* MOVE ANIMALS */
				animals.newPosition = parseInt(animals.currentPosition + scene.scrollDelta);
				TweenLite.to(animals.id, 0, {left:animals.currentPosition});
				
				animals.currentPosition = animals.newPosition;
				
					// If background is near out of bounds
					if(animals.currentPosition >= animals.startPosition + animals.bgWidth) {
						animals.currentPosition = animals.startPosition;
					}
					if(animals.currentPosition <= animals.startPosition - background.bgWidth) {
						animals.currentPosition = animals.startPosition;
					}
					
			}
			
		});
		
		$(".page").html("");
		
	} else {
		$(".signature, .homelang").fadeOut();
		index = false;
		
		$(".page").hide();
		
		var upAndOut = -$(".content").height();
		
		TweenLite.to(".background", 1, {y:upAndOut});
		TweenLite.to(".animals", 0.8, {y:upAndOut});
		TweenLite.to(".menu", 1, {y:upAndOut, onComplete: function() {
			
			$(".loading").fadeIn();
				
			$('title').load(newHash + ' title', '', function(data) {
				document.title = $(this).text();
			});
		
			$('.page').load(newHash+' .page-wrapper', function() {

				$('.preload').imgpreload(function(){
					$('.goback').load(newHash + ' .cat-icon', function() {
						
						$('.goback a').on('click', function(event) {
							var newLink = $(this).attr("href");
							
							$(".goback").removeClass('active');
							
							window.location.hash = newLink;
							
							if ("onhashchange" in window) {
								return false;
							}
						});
						
						$('.footmenu a, .footlang a').on('click', function(event) {
							var newLink = $(this).attr("href");
							
							window.location.hash = newLink;
							
							if ("onhashchange" in window) {
								return false;
							}
						});
						
						$(".loading").fadeOut(function() {
							$(".page").fadeIn(function() {
								$(".goback").addClass('active');
							});
							$('.flexslider').flexslider({
								directionNav: false,
								keyboard: true,
								touch: true
							});
						});
						
					});
				});
		
				$('.concepts div').bind('click', function(e) {
					$(this).toggleClass("selected").find("ul").show();
					$(this).siblings().removeClass("selected").find("ul").hide()
				});
				
				$('#research').bind('click', function(e) {
					$('.proccess-full').hide();
					$('#research-full').show();
				});
				
				$('#conceptart').bind('click', function(e) {
					$('.proccess-full').hide();
					$('#conceptart-full').show();
				});
				
				$('#editing').bind('click', function(e) {
					$('.proccess-full').hide();
					$('#editing-full').show();
				});
				
				$('#assembly').bind('click', function(e) {
					$('.proccess-full').hide();
					$('#assembly-full').show();
				});
				
				$('#isometric').bind('click', function(e) {
					$('.viewselector .selected').removeClass("selected");
					$(this).addClass("selected");
					$('.largeview').css({
					  'background-position': '0 0'
					}, 200, 'linear');
				});
				
				$(".video").fitVids();
				
				$('#top').bind('click', function(e) {
					$('.viewselector .selected').removeClass("selected");
					$(this).addClass("selected");
					$('.largeview').css({
					  'background-position': '0 50%'
					}, 200, 'linear');
				});
				
				$('#side').bind('click', function(e) {
					$('.viewselector .selected').removeClass("selected");
					$(this).addClass("selected");
					$('.largeview').css({
					  'background-position': '0 100%'
					}, 200, 'linear');
				});
			
			});
			
			$(".container").html("");
		
			
		}});		
	}
	
}


/*****************************************
	PREVENT SELECTION ON DRAGGABLE DIVS
*****************************************/
function disableSelection(target)
{
    //For IE This code will work
    if (typeof target.onselectstart!="undefined") 
    target.onselectstart=function(){return false}
    
    //For Firefox This code will work
    else if (typeof target.style.MozUserSelect!="undefined") 
    target.style.MozUserSelect="none"
    
    //All other  (ie: Opera) This code will work
    else 
    target.onmousedown=function(){return false}
    target.style.cursor = "default"
}


/**
 * @author Henri MEDOT
 * 
 * Edited by Tiago Roldão
 * TODO Insert into directive
 */

$.fn.extend({
  scrollbarPaper: function() {
    this.each(function(i) {
      var $this = $(this);
      var paper = $this.data('paper');
      if (paper == null) {

        var barWidth = function() {
          var div = $('<div style="width:50px;height:50px;overflow:hidden;position:absolute;top:-200px;left:-200px;"><div style="height:100px;"></div></div>');
          $('body').append(div);
          var w1 = $('div', div).innerWidth();
          div.css('overflow-y', 'scroll');
          var w2 = $('div', div).innerWidth();
          div.remove();
          return Math.max(w1 - w2, 17);
        }.call();

        $this.after('<div class="scrollbarpaper-container" style="width:' + barWidth + 'px"><div class="scrollbarpaper-track"><div class="scrollbarpaper-drag"><div class="scrollbarpaper-drag-top"></div><div class="scrollbarpaper-drag-bottom"></div></div></div></div>');
        paper = $this.next();
        $this.append('<div style="clear:both;"></div>');
        var content = $('> :first', $this);
        content.css('overflow', 'hidden');

        $this.data('barWidth',   barWidth);
        $this.data('paper',      paper);
        $this.data('track',      $('.scrollbarpaper-track', paper));
        $this.data('drag',       $('.scrollbarpaper-drag', paper));
        $this.data('dragTop',    $('.scrollbarpaper-drag-top', paper));
        $this.data('dragBottom', $('.scrollbarpaper-drag-bottom', paper));
        $this.data('content',    content);
        $this.data('clearer',    $('> :last', $this));
        //paper.hide();
      }

      var barWidth =   $this.data('barWidth');
      var track =      $this.data('track');
      var drag =       $this.data('drag');
      var dragTop =    $this.data('dragTop');
      var dragBottom = $this.data('dragBottom');
      var content =    $this.data('content');
      var clearer =    $this.data('clearer');

      var contentHeight = clearer.position().top - content.position().top;
      $this.data('height', $this.height());
      $this.data('contentHeight', contentHeight);
      $this.data('offset', $this.offset());

      //$this.unbind();
      var ratio = $this.height() / contentHeight;
      if (ratio < 1) {
        paper.show();
        paper.removeClass("hidden-scroll");
        content.addClass('scrollbarpaper-visible');
        content.width($this.width() - content.innerWidth() + content.width() - barWidth);
        paper.height($this.height());
        var offset = $this.offset();
        paper.css('left', ($this.outerWidth(true) - paper.width()) + 'px').css('top', 0);

        var dragHeight = Math.max(Math.round($this.height() * ratio), dragTop.height() + dragBottom.height());
        drag.height(dragHeight);
        var updateDragTop = function() {
          drag.css('top', Math.min(Math.round($this.scrollTop() * ratio), $this.height() - dragHeight) + 'px');
        };
        updateDragTop();

        $this.scroll(function(event) {
          updateDragTop();
        });

        var unbindMousemove = function() {
          $('html').unbind('mousemove.scrollbarpaper');
        };
        drag.mousedown(function(event) {
          unbindMousemove();
          var offsetTop = event.pageY - drag.offset().top;
          $('html').bind('mousemove.scrollbarpaper', function(event) {
            $this.scrollTop((event.pageY - $this.offset().top - offsetTop) / ratio);
            return false;
          }).mouseup(unbindMousemove);
          return false;
        });
      }
      else {
        //$this.unbind();
        // Don't hide, don't resize content
        //paper.hide();
        paper.addClass("hidden-scroll");
        content.removeClass('scrollbarpaper-visible');
        //content.width($this.width() - content.innerWidth() + content.width());
        // maintain calculations of position
        content.width($this.width() - content.innerWidth() + content.width() - barWidth);
        paper.height($this.height());
        var offset = $this.offset();
        paper.css('left', ($this.outerWidth(true) - paper.width()) + 'px').css('top', 0);
      }

      var setTimeout = function() {
        window.setTimeout(function() {
          var offset = $this.offset();
          var dataOffset = $this.data('offset');
          if (($this.height() != $this.data('height'))
           || (clearer.position().top - content.position().top != $this.data('contentHeight'))
           || (offset.top != dataOffset.top)
           || (offset.left != dataOffset.left)) {
            $this.scrollbarPaper();
            $(window).resize();
          }
          else {
            setTimeout();
          }
        }, 100);
      };
      setTimeout();
    });
  }
});
;

