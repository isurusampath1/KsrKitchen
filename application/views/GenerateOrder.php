<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Smart KSR system</title>
    
    
		<link rel="stylesheet" href="<?php echo base_url('plugins/DataTables/media/css/DT_bootstrap.css')?>"/>
		<link href="<?php echo base_url('plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css')?>"  rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('plugins/bootstrap-modal/css/bootstrap-modal.css')?>"  rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap-fileupload/bootstrap-fileupload.min.css')?>" >
		<link rel="stylesheet" href="<?php echo base_url('plugins/select2/select2.css')?>">


		
		<link rel="stylesheet" href="<?php echo base_url('plugins/datepicker/css/datepicker.css')?>" >
		<link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')?>" >
		<link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')?>" >
		<link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') ?>" >
		<link rel="stylesheet" href="<?php echo base_url('plugins/jQuery-Tags-Input/jquery.tagsinput.css')?>" >
		
		<link rel="stylesheet" href="<?php echo base_url('plugins/summernote/build/summernote.css')?>" >

		<style type="text/css">
			.table > thead:first-child > tr:first-child > th, .table > thead:first-child > tr:first-child > td, .table-striped thead tr.primary:nth-child(2n+1) th {
			    background-color: #428bca;
			    border-color: #357ebd;
			    border-top: 1px solid #357ebd;
			    color: white;
			    text-align: center;
			}

		</style>
    
    
    
    

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css"  rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url(); ?>assets/css/elegant-icons-style.css"  rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"  rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="<?php echo base_url(); ?>assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css"  rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/assets/fullcalendar/fullcalendar/fullcalendar.css"  rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo base_url(); ?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"  rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css" >
	<link href="<?php echo base_url()?>css/widgets.css"  rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css"  rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css"  rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/xcharts.min.css"  rel=" stylesheet">	
	<link href="<?php echo base_url(); ?>assets/css/jquery-ui-1.10.4.min.css"  rel="stylesheet">



  </head>

  <body>

     
  <!-- container section start -->
  <section id="container" class="">
     
    <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">
                <span class="">
                    <img alt="Our logo" src="<?php echo base_url(); ?>assets/img/logo.png" style="width:44.4px;height:30px;">
                </span><span class="lite">KSR system</span></a>
            <!--logo end-->

            

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-home"></i>
                            <span class="badge bg-important"></span>
                        </a>
                        
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-print"></i>
                            <span class="badge bg-important"></span>
                        </a>
                        
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-globe"></i>
                            <span class="badge bg-important"></span>
                        </a>
                        
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/k.jpg" style="width:40px;height:40px;">
                            </span>
                            <span class="username">RestaurantHead</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="login1.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>

                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>   

      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">   

                <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Restaurant</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="">View Stock Data</a></li>                          
                          <li><a class="" href="">Update Stock Levels</a></li>
                      </ul>
                  </li> 

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Issue Items</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                                         
                          <li><a class="" href="">Manual</a></li>
                      </ul>
                  </li> 

                 

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Generate Order</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url('index.php/GenerateOrderController');?>"">Criticle Level Order</a></li>                          
                          <li><a class="" href="">Mannul Level Order</a></li>
                      </ul>
                  </li> 
                 

                  <li>                     
                      <a class="" href="<?php echo base_url('Help');?>"">
                          <i class="icon_piechart"></i>
                          <span>Help</span>
                          
                      </a>
                                         
                  </li>
       
                  
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-home"></i> Generate Order</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                        <li><i class="fa fa-table"></i>Restaurant</li>
                        <li><i class="fa fa-th-list"></i>Generate Order</li>
												  	
					</ol>
				</div>
			</div>
              
            
		
			
           
			
              
				
			

				</div><!--/col-->

            <div class="row">
                <?php /*?><div class="col-sm-6">
                    
                        <div class="nav search-row" id="top_menu">
                            <!--  search form start -->
                            <ul class="nav top-menu">                    
                                <li>
                                    <form class="navbar-form">
                                        <input class="form-control" placeholder="Search" type="text" name="term">
                                    </form>
                                </li>                    
                            </ul>
                            <!--  search form end -->                
                        </div>
                        
                </div>
            
                <div class="col-lg-2">
                    <a class="btn btn-primary" href="" title="Search Inventory">Search</a>
                </div><?php */?>
               <!-- <div class="col-lg-2">
                    <a class="btn btn-primary" href="<?php //echo base_url('store/add_items');?>" title="Search Inventory">Add Items</a>
                </div>-->
                
                
            </div>

            


			<div>

                <!--some empty space-->
                <br>
                <br>

            </div>

            <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             bellow item reach to re-order level
                          </header>
                          <table class="table table-bordered table-condensed table-hover table-striped dataTable" id="stock_table">
                              <thead>
                              <tr>
                                  <th>Item Code</th>
                                  <th>Product Title</th>
                                  <th>Brand</th>
                                  <th>Category</th>
                                  <th>Unit</th>
                                  <th>Quantity</th>
                                  <th>Critical Level</th>
                                  <th>Order QTY</th>
                                  
                                  
                              </tr>
                              </thead>
                              <tbody>
                                    <?php
                                  /*  if (empty($result2)){
                                      while( $row = mysql_fetch_assoc( $result1 ) ){
                                        echo
                                        "<tr>
                                          <td>{$row['item_id']}</td>
                                          <td>{$row['item_name']}</td>
                                          <td>{$row['brand_name']}</td>
                                          <td>{$row['category_name']}</td>
                                          <td>{$row['unit_name']}</td>
                                          <td>{$row['qty']}</td>
                                          <td>{$row['critical_level']}</td>
                                          <td>{$row['description']}</td>
                                           
                                        </tr>\n";
                                      }
                                    }else{
                                      while( $row = mysql_fetch_assoc( $result2 ) ){
                                        echo
                                        "<tr>
                                          <td>{$row['item_id']}</td>
                                          <td>{$row['item_name']}</td>
                                          <td>{$row['brand_name']}</td>
                                          <td>{$row['category_name']}</td>
                                          <td>{$row['unit_name']}</td>
                                          <td>{$row['qty']}</td>
                                          <td>{$row['critical_level']}</td>
                                          <td>{$row['description']}</td>
                                           
                                        </tr>\n";

                                    }
                                  }
                                    */?>
                              
                              </tbody>
               
                          </table>
                           <div class="col-lg-12">
                          <button  class="btn btn-primary form-control"  id="order_btn">order</button> </div>
                          <div class="col-lg-12">&nbsp;</div>
                          
                         
                      </section>
                  </div>
                   
              
            
				

            

                  
		
		
			
			

          </section>
        <!-- ______________________________________________________Unwanted Space___________________________________________ -->


          <div class="text-right">
          <div class="credits">
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/"></a> <a href="https://bootstrapmade.com/"></a>
            </div>
        </div>

        <!--____________________________________________________END of Unwanted Space________________________________________-->

      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->
    
    <!-- javascripts -->

    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	  <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?php echo base_url(); ?>assets/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	  <script src="<?php echo base_url(); ?>assets/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url(); ?>assets/js/calendar-custom.js"></script>
	  <script src="<?php echo base_url(); ?>assets/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.customSelect.min.js" ></script>
	  <script src="<?php echo base_url(); ?>assets/assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url(); ?>assets/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easy-pie-chart.js"></script>
	  <script src="<?php echo base_url(); ?>assets/js/jquery-jvectormap-1.2.2.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/js/jquery-jvectormap-world-mill-en.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/xcharts.min.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/jquery.autosize.min.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/jquery.placeholder.min.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/gdp-data.js"></script>	
  	<script src="js/morris.min.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/sparklines.js"></script>	
  	<script src="<?php echo base_url(); ?>assets/js/charts.js"></script>
  	<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
          <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
    
    <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});
	
	
	
			jQuery(document).ready(function() {
				//TableData.init();
				loadGrid();
			});


			function loadGrid() {

					    $('#stock_table').DataTable({
					        "ajax": "<?php echo base_url('order/get_all_item') ?>",
					        "bDestroy": true,
					        "iDisplayLength": 10,
							 "order": [[ 0, "asc" ]]
					    });

					}

  </script>

  </body>
</html>
