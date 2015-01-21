<!doctype html>
<html  ng-app id="ng-app">
    <head>
        <link rel="stylesheet" href="<?php echo base_url().'content/styles/cmsStyles.css' ?>" type="text/css"> 
        <script src="<?php echo base_url().'content/scripts/jqueryEngine/jquery.js' ?>" type="text/javascript"></script>
        <script src="<?php echo base_url().'content/scripts/cmsScripts.js' ?>" type="text/javascript"></script>
       <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/bootstrap/css/bootstrap-theme.css"; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/bootstrap/css/bootstrap.min.css"; ?>">
        <script src="<?php echo base_url()."content/bootstrap/js/bootstrap.js"?>" type="text/javascript"></script>
        <script src="<?php echo base_url()."content/scripts/timeago.js"?>" type="text/javascript"></script>
         
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/scripts/data-table/jquery.dataTables.min.css"; ?>">
        <script src="<?php echo base_url()."content/scripts/data-table/jquery.dataTables.min.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url()."content/scripts/canvasjs.min.js"; ?>" type="text/javascript"></script>
          <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/scripts/data-table/bootstrap-datatable.css"; ?>">
        <script src="<?php echo base_url()."content/scripts/data-table/bootstrap-datatable.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo base_url()."content/scripts/magiczoom/magiczoom.js"; ?>" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/scripts/magiczoom/magiczoom.css"; ?>">
       
        <script src="<?php echo base_url()."content/scripts/angular.min.js"; ?>" type="text/javascript"></script> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/font-awesome/css/font-awesome.css"; ?>">
       
              
        
        <script type="text/javascript">
           
            
            $(document).keyup(function(e) {
    if (e.keyCode == 27) {
           
            // Assuming you used the function I made from the demo
            toggleNav();   
    }
    
    if (e.keyCode == 37) {
        
            // Assuming you used the function I made from the demo
            toggleNav();
    }
    
    if (e.keyCode == 39) {
      
            // Assuming you used the function I made from the demo
            toggleNav();
        
    }
});
      /*====================================
=            ON DOM READY            =
====================================*/
$(function() {
  $('#show-menu').click(function() {
        // Calling a function in case you want to expand upon this.
        toggleNav();
    });  


//datepicker
 $('.input-daterange').datepicker();
//datepicker

    
  //timeago
  jQuery("abbr.timeago").timeago();
  //timeago  
    
    //searching for data in table
      $('#tbl_product').DataTable();
      $('#tbl_user').DataTable();
      $('#date_refined_product').DataTable();
      $('#tbl_postcount').DataTable();
      //searching for data in table
      
      
        $('.selectpicker').selectpicker();
});

/*========================================
=            CUSTOM FUNCTIONS            =
========================================*/




        function uppercase() {      //for first letter capitalization.
          var textbox = document.getElementById('txt');
          textbox.value = textbox.value.charAt(0).toUpperCase() + textbox.value.slice(1);
        }
        
        function uppercas() {      //for first letter capitalization.
          var textbox = document.getElementById('txtx');
          textbox.value = textbox.value.charAt(0).toUpperCase() + textbox.value.slice(1);
        }
        
        //called function
         function toggleNav() {
    if ($('#site-wrapper').hasClass('show-nav')) {
        // Do things on Nav Close
        $('#site-wrapper').removeClass('show-nav');
    } else {
        // Do things on Nav Open
        $('#site-wrapper').addClass('show-nav');
    }
}

       </script>
    </head>
    <body>
       
<?php if (!$this->session->userdata('logged_in')) { ?>            
            <div class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <a class="navbar-brand">CMS</a>
                    <a href="#" class="toggle-nav btn nav navbar-nav navbar-inverse" title="Toggle Menu"><h4><span class="glyphicon glyphicon-align-justify"  style="margin-left:12px;"></span></h4></a>
                    <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#login" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login | Register</a></li>
                    
                    </ul>
                    </div>
                </div>
            </div>
<?php } else { ?>
          <div class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <a class="navbar-brand">CMS</a>
                    <a href="#" id="show-menu" class="toggle-nav btn nav navbar-nav navbar-inverse" title="Toggle Menu"><h4><span class="glyphicon glyphicon-align-justify"  style="margin-left:12px;"></span></h4></a>
                    <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><div class="calender"><script type="text/javascript">client=10000000;addon="daysmall";theme="default"; </script><script type="text/javascript" src="http://nepalipatro.com.np/addon/get"> </script></div></li>
                        <li class="active"><a href="<?php echo base_url().'index.php/cms/logout';?>"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                    </ul>
                    
                    </div>
                </div>
            </div>
        
  
                        
         <!--slided content start-->
        <div id="main">
       
        
         <div id="site-wrapper">

        <div id="site-canvas">

            

            <div id="site-menu">
               
                
               
                
<div class="accordion" id="leftMenu">
     <a href="javascript:void(0);" style="text-decoration:none;"><span class="glyphicon glyphicon-remove-circle toggle-nav" style="background:#353535;display: block;padding: 2%;text-align: right; font-size: 20px;"></span></a>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                          
                                <a href="<?php echo base_url().'index.php/cms'; ?>"><i class="icon-dashboard"></i>&nbsp;  Dashboard</a>
                          
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseTwo">
                                <span class="glyphicon glyphicon-user"></span>&nbsp; User</a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li><a href="<?php echo base_url().'index.php/cms/user'; ?>">&rsaquo;&rsaquo; User</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseThree">
                                <span class="glyphicon glyphicon-tags"></span> &nbsp; Products
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li><a href="<?php echo base_url().'index.php/cms/product'; ?>">&rsaquo;&rsaquo; Product Details</a></li>
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFour">
                                <span class="glyphicon glyphicon-align-justify"></span>&nbsp; Menu
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li><a href="<?php echo base_url().'index.php/cms/menu'; ?>">&rsaquo;&rsaquo; Manage Menu</a></li>
                                    <li><a href="<?php echo base_url().'index.php/cms/widget'; ?>">&rsaquo;&rsaquo; Manage Widget.</a></li>
                                  
                                </ul>                 
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="<?php echo base_url().'index.php/cms/location'; ?>">
                                <i class="icon-location-arrow"></i>&nbsp; Location
                            </a>
                        </div>
                       
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
                                <i class="icon-file"></i> Google Analytics
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li><a href="<?php echo base_url().'index.php/cms/ga'; ?>">Website Info</a></li>
<!--                                    <li>This is two</li>
                                    <li>This is Three</li>-->
                                </ul>                 
                            </div>
                         </div>
                    </div>
                </div>
            </div>
       
                <!--slided content finished-->

        
<?php } ?>
        <!--model-->
        
         <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="btn btn-default pull-right" data-dismiss="modal"><span class="icon-cancel-circle"></span></a>
                </div>
                <div class="modal-body">

		<div class="well">
			<ul class="nav nav-tabs nav-justified" role="tablist">
				<li class="active"><a href="#login" role="tab" data-toggle="tab"><span class="glyphicon glyphicon glyphicon-log-in"></span> Login</a></li>
				<li><a href="#create" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user"></span> Create Account</a></li>
                                <li><a href="#forgot" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-eye-close"></span> Forgot Password</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active" id="login">
                                        <?php 
                                            if (isset($account_created))
                                            {
                                                echo $account_created; 
                                            }
                                            if (isset($error_message))
                                            {
                                                echo $error_message;
                                            }

                                        ?>
            
                                        <?php echo validation_errors('<p class="error">'); ?>
            
            
            
					<?php echo form_open('cms/login'); ?>
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Email address</label>
                                              <input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>" id="exampleInputEmail1">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputPassword1">Password</label>
                                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                           
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox"> Remember me 
                                              </label>
                                            </div>
                                            <button type="submit" class="btn btn-default">Log In</button>
                                           <?php echo form_close(); ?>           
                                            
				</div>
				<div class="tab-pane fade" id="create">
					<form role="form">
                                            <div class="form-group">
						<label>Username</label>
                                                <input type="text" value="" class="form-control" placeholder="Username">
                                            </div>
                                                 <div class="form-group">
						<label>First Name</label>
                                                <input type="text" value="" class="form-control" placeholder="First Name">
                                                 </div>
                                             <div class="form-group">
						<label>Last Name</label>
                                                <input type="text" value="" class="form-control" placeholder="Last Name">
                                             </div>
                                             <div class="form-group">
						<label>Email</label>
                                                <input type="text" value="" class="form-control" placeholder="E-mail">
                                             </div>
                                                 <div class="form-group">
						<label>Address</label>
                                                <textarea value="Smith" rows="3" class="form-control" placeholder="Address">
						</textarea>
                                            </div>    
						<div>
							<button class="btn btn-primary">Create Account</button>
						</div>
					</form>
				</div>
                            
                            <div class="tab-pane fade" id="forgot">
					<form role="form">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Email address</label>
                                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                            </div>
                                           
                                            <button type="submit" class="btn btn-default">Submit</button>
                                          </form>            
				</div>
                            
			</div>  <!-- tab content -->
	






                </div>
                <div class="modal-footer">
                        
                    </div>
            </div>
        </div>
        
    </div>
    </div>
        <!--model finished-->
        
        
         
        
           
            
            
  