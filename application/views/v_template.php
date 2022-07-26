
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url('binary-admin/') ?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url('binary-admin/') ?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?= base_url('binary-admin/') ?>assets/css/custom.css" rel="stylesheet" />

    <!-- TABLE STYLES-->
    <link href="<?= base_url('binary-admin/') ?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url('binary-admin/') ?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url('binary-admin/') ?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url('binary-admin/') ?>assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url('binary-admin/') ?>assets/js/custom.js"></script>
    

    <!-- Library Leaflet-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    

    <!-- Draw Leaflet-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" integrity="sha512-gc3xjCmIy673V6MyOAZhIW93xhM9ei1I+gLbmFjUHIjocENRsLX/QUE1htk5q1XV2D/iie/VQ8DXI6Vu8bexvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js" integrity="sha512-ozq8xQKq6urvuU6jNgkfqAmT7jKN2XumbrX1JiB3TnF7tI48DPI4Gy1GXKD/V3EExgAs1V+pRO7vwtS1LHg0Gw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">GIS Leaflet</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?= base_url('binary-admin/') ?>assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="<?= base_url('gis/index')?>"><i class="fa fa-dashboard "></i> Home</a>
                    </li>
                      <li>
                        <a  href="<?= base_url('gis/viewmap')?>"><i class="fa fa-desktop "></i> View Map</a>
                    </li>
                    <li>
                        <a  href="<?= base_url('gis/viewbasemap')?>"><i class="fa fa-qrcode "></i> View Base Map</a>
                    </li>
						   <li  >
                        <a  href="<?= base_url('gis/marker')?>"><i class="fa fa-bar-chart-o "></i> Marker</a>
                    </li>	
                      <li>
                        <a  href="<?= base_url('gis/circle')?>"><i class="fa fa-table "></i> Circle</a>
                    </li>
                    <li>
                        <a  href="<?= base_url('gis/polyline')?>"><i class="fa fa-edit "></i> Polyline </a>
                    </li>		
                    <li>
                        <a  href="<?= base_url('gis/polygon')?>"><i class="fa fa-edit "></i> Polygon </a>
                    </li>	
                    <li>
                        <a  href="<?= base_url('gis/geojson')?>"><i class="fa fa-edit "></i> Geojson </a>
                    </li>			
					<li>
                        <a  href="<?= base_url('gis/getcoordinat')?>"><i class="fa fa-edit "></i> Get Coordinat </a>
                    </li>
                    <li>
                        <a  href="<?= base_url('gis/drawermap')?>"><i class="fa fa-edit "></i> Drawer Map </a>
                    </li>	

                    <li>
                        <a  href="<?= base_url('user/index')?>"><i class="fa fa-edit "></i> Data User </a>
                    </li>

                    <li>
                        <a  href="<?= base_url('user/input')?>"><i class="fa fa-edit "></i> Input Data User </a>
                    </li>
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i> Lokasi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?= base_url('lokasi/input') ?>">Input Lokasi</a>
                            </li>
                            <li>
                                <a href="<?= base_url('lokasi/index') ?>">Pemetaan Coordinat</a>
                            </li>
                            <li>
                                <a href="<?= base_url('lokasi/listlokasi') ?>">List Lokasi</a>
                            </li>
                            <li>
                               
                        </ul>
                      </li>  
                  <li  >
                        <a class="active-menu"  href="blank.html"><i class="fa fa-square-o"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?= $judul ?></h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <!-- /. konten  -->
                    <?php 
                    if ($page) {
                        $this->load->view($page);
                    }
                    
                    ?>
                </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url('binary-admin/') ?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url('binary-admin/') ?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url('binary-admin/') ?>assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <!-- DATA TABLE SCRIPTS -->
    <script src="<?= base_url('binary-admin/') ?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?= base_url('binary-admin/') ?>assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });   
    </script>

    <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url('binary-admin/') ?>assets/js/custom.js"></script>
</body>
</html>
