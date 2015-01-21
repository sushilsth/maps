<html>
    <head>
        <title></title>
         <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/bootstrap/css/bootstrap.min.css"; ?>">
        <script src="<?php echo base_url()."content/bootstrap/js/bootstrap.js"?>" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/styles.css"; ?>">
        <script src="<?php echo base_url().'content/jqueryEngine/jquery.js'; ?>" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
//                 alert("Asdf");
                 $("#menu").click(function() { 
                     
            animate(".demo", 'bounce');  
            return false;  
        });  
   
      
    function animate(element_ID, animation) {  
        alert("Asfd");
        $(element_ID).addClass(animation);  
        var wait = window.setTimeout( function(){  
            $(element_ID).removeClass(animation)}, 1300);  
    }  
     });
       
        </script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-static-top" style="padding: 0px;margin: 0px;">
                <div class="container">
                
                    <a href="#" id="menu" class="toggle-nav btn nav navbar-nav navbar-inverse" title="Toggle Menu"><h4><span class="glyphicon glyphicon-align-justify"  style="margin-left:12px;"></span></h4></a>
                    <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li></li>
                        <li class="active"></li>
                    </ul>
                    
                    </div>
                </div>
            </div>
        <div class="demo animated">
        <div style="height: 100%;width: 20%;border: solid 1px;background: #222;" class="lightSpeedIn">
            <ul class="list-group">
                <li class="list-group-item">hotels</li>
                <li class="list-group-item">hotels</li>
                <li class="list-group-item">hotels</li>
                <li class="list-group-item">hotels</li>
                <li class="list-group-item">hotels</li>
            </ul>
            
              
          </div>
        </div>
       
    </body>
</html>