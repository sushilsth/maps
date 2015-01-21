<html>
    <head>
        <title></title>
         <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/bootstrap/css/bootstrap.min.css"; ?>">
        <script src="<?php echo base_url()."content/bootstrap/js/bootstrap.js"?>" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/styles/styles.css"; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/styles/animate.css"; ?>">
        <script src="<?php echo base_url().'content/jqueryEngine/jquery.js'; ?>" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
//                 alert("Asdf");
                 $("#toggle").click(function() { 
                   $("#menu").css("display","block");
                   $("#menu").addClass('animated fadeInLeft');
        });  
     });
       
        </script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-static-top" style="padding: 0px;margin: 0px;">
                <div class="container">
                
                    <a href="#" id="toggle" class="toggle-nav btn nav navbar-nav navbar-inverse" title="Toggle Menu"><h4><span class="glyphicon glyphicon-align-justify"  style="margin-left:12px;"></span></h4></a>
                    <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li></li>
                        <li class="active"></li>
                    </ul>
                    
                    </div>
                </div>
            </div>
        <div id="menu" style="display: none;">
        <div style="height: 100%;width: 20%;border: solid 1px;background: #222;">
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