$(function(){
	var app = {
		init: function() {
			app.init_effect();
			app.init_event();
		},
		
		//sweetalert
		

//word less
		init_effect: function() {
			$("#head_tagline").height(200);
			$("#head_tagline>h1").hide().fadeIn(700);
			$("#head_tagline>p:first").hide().delay(700).fadeIn(700);
			$("#head_tagline>p:last").hide();
			$("#head_tagline>a").hide().delay(1400).fadeIn(700);
			$(".error").hide();
			
		},
		
//word more

		init_event: function() {
			$("#head_tagline>a:first").on("click",function(){
				
				$("#head_tagline>p:last").fadeIn(700);
					$("#head_tagline").height(320);
				});
				
//open again
			$("#head_tagline>a:last").on("click",function()
					{
			$("#head_tagline>p:last").hide();
		    $("#head_tagline").height(200);
					
					});
//invalid phone number
			$("#form-submit").on("click",function(){
					var phone = $("#form-number").val();
						if(!$.isNumeric(phone)){
							$(".error:first").show();
		}
		            else{
								$(".error:first").hide();
								}	
var msg = $("#form-message").val();

if(msg.indexOf("badwords") != -1){
								$(".error:last").show();
							}	else{
								$(".error:last").hide();
								}
					
}
);		
//flip image
$(".image-flip").flip(
					{axis:'y',
					trigger:'hover'
						}
					)
					
					
jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
         
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
           		 ScaleSlider();
           				 $(window).bind("load", ScaleSlider);
           				 $(window).bind("resize", ScaleSlider);
          				  $(window).bind("orientationchange", ScaleSlider);
          				  //responsive code end
       				 });
   					//image slider function-----------------------------------------------
		}
		
//init event end

				

	};
	app.init();
	
});								
						
					



	
