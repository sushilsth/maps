<html>
    <head>
        <title></title>
         <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/bootstrap/css/bootstrap.min.css"; ?>">
        <script src="<?php echo base_url()."content/bootstrap/js/bootstrap.js"?>" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/styles/styles.css"; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/styles/animate.css"; ?>">
        <script src="<?php echo base_url().'content/jqueryEngine/jquery.js'; ?>" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>

        <script>
            $(document).ready(function(){
                
                 $("#toggle").live("click" , function() {
                     var thiss = $(this);
                   var b = $("#menu").hasClass('animated fadeOutLeft'); 
                   var a = $("#menu").hasClass('animated fadeInLeft');
                   if(a===false) {
                       $("#menu").removeClass("animated fadeOutLeft");
                       $("#menu").css("display","block");
                       $("#menu").addClass('animated fadeInLeft');
                       var list_width = $("#list").width();
                        var lef = list_width - 20;
                                       
                            thiss.animate({
                                left: lef
                                }, 1000, "linear", function(){
                                    thiss.removeClass("arrow-right");
                                    thiss.addClass("arrow-left");
                                });
                            
                    
                       
                       
                   }
                   else if(a===true){             
                   $("#menu").removeClass("animated fadeInLeft");
                   $("#menu").addClass('animated fadeOutLeft');
                    setTimeout(function(){                   
                        $("#menu").css("display","none"); 
                    }, 1000);
                    $(this).css("left", 0);
                    $(this).removeClass("arrow-left");
                    $(this).addClass("arrow-right");  
                   }
                   
                   else if(b===false) {   
                       $("#menu").addClass('animated fadeOutLeft');
                       setTimeout(function(){ $("#menu").css("display","none"); }, 1000);
                   }
                   else if(b===true){  
                   $("#menu").removeClass("animated fadeOutLeft");
                   $("#menu").css("display","block");
                   $("#menu").addClass('animated fadeInLeft');
                   }
                   else {
                       
                   }
        });  
        
        
     });
       
        </script>
        
<style>
    html, body {
    height: 100%;
}
* {
padding: 0;
margin: 0;
}
.arrow-left {
	width: 0; 
	height: 0; 
	border-top: 20px solid transparent;
	border-bottom: 20px solid transparent;
	border-right:20px solid blue; 
        position: absolute;
        z-index: 999;
        top: 45%;
}
.arrow-right {
	width: 0; 
	height: 0; 
	border-top: 20px solid transparent;
	border-bottom: 20px solid transparent;
	border-left: 20px solid blue;
        position: absolute;
        z-index: 999;
        top: 45%;
}
    </style>

    </head>
    <body>
       
        
               <div class="arrow-right" id="toggle" title="Toggle Menu"></div>   
                 
        <div id="menu" style="min-height: 100%;display: none;position: absolute;z-index: 10;width: 100%;">
            <div id="list" style="width: 20%;background: #fff;position: absolute;z-index: 11;overflow-y: scroll;">
            <ul class="list-group" style="border-radius: 0px;font-size: 20px;font-weight: 100;">
                <li class="list-group-item">Sauraha</li>
                <li class="list-group-item">Kasara</li>
                <li class="list-group-item">Kankali samudhyak baan</li>
                <li class="list-group-item">Siraichulli Uppardangadi</li>
                <li class="list-group-item">Someshwor kalika</li>
                <li class="list-group-item">Triveni</li>
                <li class="list-group-item">Baikunthsor Daam</li>
                <li class="list-group-item">Bikram Baba</li>
                <li class="list-group-item">Megauli</li>
                <li class="list-group-item">Bishajari Lake</li>
                <li class="list-group-item">Gyanisowr</li>
                <li class="list-group-item">Devghat Daam</li>
                <li class="list-group-item">Godak Parsuram Kunda</li>
                <li class="list-group-item">Lamo Jharna</li>
                <li class="list-group-item">Pandav Nagar</li>
                <li class="list-group-item">Sita Gufa</li>
            </ul>
            
            
          </div>
        </div>
        
        
      

    </body>
</html>