<?php 
	if (!isset($_GET['et_fb'])) { 
		function dh_showhidecontent_code() { ?>
			<script id="dh_showhidecontent_scripts">
				jQuery(document).ready(function($) {
					$('.closeable[class*="keep-hidden-"]').each(function(){
						var pThis = $(this)
						, hiddenclass = Array.prototype.find.call(this.classList, function(clazz){
					    	return clazz.indexOf('keep-hidden-') > -1;
						});
						
						var hiddensuffix = hiddenclass.split('keep-hidden-')[1];
						pThis.append("<div id='closebutton'></div>");
						
						$("."+hiddenclass).toggle(!$.cookie(hiddenclass)); // Hide if cookie there
						
						if ( !$.cookie( hiddenclass ) ) {
							
							pThis[0].style.setProperty( 'display', 'block' );
							pThis[0].style.setProperty( 'visibility', 'visible' );
						}
						
						$("."+hiddenclass).children("#closebutton").on("click", function (event) {
						    $(this).parent().slideUp();
						    $.cookie(hiddenclass, 'true'); //Remember it was hidden
						});
						$("."+hiddenclass).find(".close-button").on("click", function (event) {
						    $(this).closest(".closeable").slideUp();
						    $.cookie(hiddenclass, 'true'); //Remember it was hidden
						});
					});
					$('.closeable:not([class*="keep-hidden-"])').each(function(){
						$(this).append("<div id='closebutton'></div>");
						$(this).children("#closebutton").on("click", function (event) {
						    $(this).parent().slideUp();
						});
						$(this).find(".close-button").on("click", function (event) {
						    $(this).closest(".closeable").slideUp();
						});
					});
					$('[class*="showit-"],[class*="hideit-"]').each(function(){
						var showclass = Array.prototype.find.call(this.classList, function(clazz){
					    	return clazz.indexOf('showit-') > -1;
						});
						
						if ( typeof showclass !== 'undefined' ) {
							
							var showsuffix = showclass.split('showit-')[1];
							if (showsuffix.indexOf("+") > -1) {
								var showday = showsuffix.split("+", 1);
								var showtime = showsuffix.split("+",)[1];
								var showdaytime = showday + " " + showtime;
							} else {
								var showdaytime = showsuffix;
							}
							
							$(this).attr('data-start', showdaytime);
						}
						
					    var hideclass = Array.prototype.find.call(this.classList, function(clazz){
					    	return clazz.indexOf('hideit-') > -1;
						});
						
						if ( typeof hideclass !== 'undefined' ) {
							
							var hidesuffix = hideclass.split('hideit-')[1];
							if (hidesuffix.indexOf("+") > -1) {
								var hideday = hidesuffix.split("+", 1);
								var hidetime = hidesuffix.split("+",)[1];
								var hidedaytime = hideday + " " + hidetime;
							} else {
								var hidedaytime = hidesuffix;
							}
							
							$(this).attr('data-end', hidedaytime);
						}
					});
				
				function timeit(){var t=[],e=new Date;Date.prototype.yyyymmdd=function(){var t=this.getMonth()+1,e=this.getDate();return[this.getFullYear(),(t>9?"":"0")+t,(e>9?"":"0")+e].join("-")};var i=e.yyyymmdd();if($("[class*='showit-'],[class*='hideit-']").each(function(){var a=$(this).data("end"),s=d($(this).data("start"),this),n=d(a,this);function r(i){var a=i-e;a<864e5&&a>1e3&&t.push(a)}function d(t,a){if(t){String(t).length<6&&String(t).indexOf(":")>-1&&(t=i+" "+String(t)),-1==String(t).indexOf(":")&&(t+=" 00:00");var s=t.split(":"),n=String(s.slice(0,1)),r=n.substr(n.length-2),d=s.slice(1),o=r<24&&d<60;if("Invalid Date"==(l=new Date(t)))var l=function(t){var e,i=new Date(NaN);return t.substr(0,t.indexOf(" ")),parts=/^\s*(\d{4})-(\d\d)-(\d\d)?.(\d\d)?.(\d\d)\s*$/.exec(t),parts&&(e=+parts[2],i.setFullYear(parts[1],e-1,parts[3]),e!=i.getMonth()+1&&i.setTime(NaN),i=new Date(parts[1],e-1,parts[3],parts[4],parts[5])),i}(t);return"Invalid Date"!=l&&o||$(a).addClass("error").attr("title",'"'+t+'" date is incorrect; please use YYYY-MM-DD HH:MM format'),l.getTime()}return e.getTime()}r(s),r(n),s<n&&(s>e||n<e)||s>n&&s>=e&&n<=e?$(this).addClass("hidden").removeClass("show").hide():$(this).addClass("show").removeClass("hidden").show()}),t.length>0){var a=Math.min.apply(null,t);console.log("next run of timeit function is in "+a/1e3+"seconds"),setTimeout(function(){timeit()},a)}}timeit();

				});
			</script> 
			<?php 
		}
		add_action( 'wp_head', 'dh_showhidecontent_code' );
	}