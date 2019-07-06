<!DOCTYPE HTML>
<html lang="en-US">
    
<!-- Mirrored from hagal-admin.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 04:56:57 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Hagal Admin Template v1.0</title>

        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="icon" type="image/ico" href="favicon.ico">

        
    <!-- common stylesheets-->
        <!-- bootstrap framework css -->
            <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>">
        <!-- flag icons -->
            <link rel="stylesheet" href="<?=base_url('css/flags.css')?>">
        <!-- elusive webicons -->
            <link rel="stylesheet" href="<?=base_url('css/elusive-webfont.css')?>">

    <!-- aditional stylesheets -->
        <!-- fullcalenar -->
            <link rel="stylesheet" href="<?=base_url('css/fullcalendar.css')?>">
        <!-- main stylesheet -->
            <link rel="stylesheet" href="<?=base_url('css/style.css')?>">

        <!-- theme -->
            <link rel="stylesheet" href="<?=base_url('css/blue.css')?>" id="theme">

        <!-- custom fonts -->
            <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300&amp;subset=latin,latin-ext' rel='stylesheet'>

    </head>
    <body>
        <!-- main wrapper (without footer) -->
        <div id="main-wrapper">

            <!-- top bar -->
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <div id="mobileNav" class="pull-left"></div>
                        <ul class="nav nav_right">
                            <li class="divider-vertical"></li>
                            <li class="dropdown dropdown-right">
                                <a data-toggle="dropdown" href="#">John Smith <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="user_profile.html">Settings</a></li>
                                    <li><a href="login.html">Logout</a></li>
                                </ul>
                            </li>
                            <li class="divider-vertical"></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- header -->
            <?php include('header.php');?>
            
            <!--  messages modal  -->
            <div id="bar_tasks" class="modal hide fade" role="dialog">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Tasks</h3>
                </div>
                <div class="modal-body modal-body-a">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Priority</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="label label-success">Low</span>
                                </td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">
                                        <div class="progress progress-success progress-small"><div style="width: 40%" class="bar"></div></div>
                                    </div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                            <tr>
                                <td>
                                    <span class="label label-important">High</span>
                                </td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">
                                        <div class="progress progress-danger progress-small"><div style="width: 80%" class="bar"></div></div>
                                    </div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                            <tr>
                                <td>
                                    <span class="label label-success">Low</span>
                                </td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">
                                        <div class="progress progress-success progress-small"><div style="width: 40%" class="bar"></div></div>
                                    </div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                            <tr>
                                <td>
                                    <span class="label label-warning">Medium</span>
                                </td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">
                                        <div class="progress progress-warning progress-small"><div style="width: 60%" class="bar"></div></div>
                                    </div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                            <tr>
                                <td>
                                    <span class="label label-important">High</span>
                                </td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">
                                        <div class="progress progress-danger progress-small"><div style="width: 80%" class="bar"></div></div>
                                    </div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!--  alerts modal  -->
            <div id="bar_messages" class="modal hide fade" role="dialog">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Messages</h3>
                </div>
                <div class="modal-body modal-body-a">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width:16px">lp</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">24.10.2014</div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                            <tr>
                                <td>2.</td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">24.10.2014</div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                            <tr>
                                <td>3.</td>
                                <td>
                                    <a href="#" class="message-title">Lorem ipsum dolor sit amet...</a>
                                    <div class="message-info">24.10.2014</div>
                                </td>
                                <td><a href="#"><i class="icon-eye-open"></i></a> <a href="#"><i class="icon-share-alt"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                            </tr>   
                        </tbody>
                    </table>
                </div>
            </div>

            <section id="main_section">
                <div class="container-fluid">
                    <div id="contentwrapper">
                        <div id="content">

                            <!-- breadcrumbs -->
                            <section id="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li class="crumb_sep"><i class="elusive-icon-play"></i></li>
                                    <li><a href="#">Dashboard</a></li>                                    
                                </ul>
                            </section>

                            <!-- main content -->
                            <div class="row-fluid">
                                <div class="stat_boxes">
                                    <div class="row-fluid">
                                        <div class="span3 stat_box">
                                            <div class="peity_canvas peity_bar_up">2,5,3,6,8,5</div>
                                            <h2 class="stat_title">$10 233,23</h2>
                                            <p class="stat_expl">Sale (last week)</p>
                                        </div>
                                        <div class="span3 stat_box">
                                            <div class="peity_canvas peity_bar_down">9,6,7,4,6,3</div>
                                            <h2 class="stat_title">$80 173,81</h2>
                                            <p class="stat_expl">Sale (last month)</p>
                                        </div>
                                        <div class="span3 stat_box">    
                                            <div class="peity_canvas peity_line_up">3,5,9,7,12,8,16</div>
                                            <h2 class="stat_title">13 801</h2>
                                            <p class="stat_expl">Users (last 24h)</p>
                                        </div>
                                        <div class="span3 stat_box">    
                                            <div class="peity_canvas peity_line_down">16,8,12,7,6,5,3</div>
                                            <h2 class="stat_title">346 216</h2>
                                            <p class="stat_expl">Users (last month)</p>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span3 stat_box">
                                            <div class="stat_ico"><i class="elusive-icon-tag"></i></div>
                                            <h2 class="stat_title"><a href="#">16</a></h2>
                                            <p class="stat_expl">New Products</p>
                                        </div>
                                        <div class="span3 stat_box"> 
                                            <div class="stat_ico"><i class="elusive-icon-user"></i></div>
                                            <h2 class="stat_title"><a href="#">132</a></h2>
                                            <p class="stat_expl">New Users</p>
                                        </div>
                                        <div class="span3 stat_box"> 
                                            <div class="stat_ico"><i class="elusive-icon-shopping-cart"></i></div>
                                            <h2 class="stat_title"><a href="#">234</a></h2>
                                            <p class="stat_expl">New Sales</p>
                                        </div>
                                        <div class="span3 stat_box"> 
                                            <div class="stat_ico"><i class="elusive-icon-comment"></i></div>
                                            <h2 class="stat_title"><a href="#">21</a></h2>
                                            <p class="stat_expl">New Comments</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span5">
                                    <div class="box_a">
                                        <div class="box_a_heading">
                                            <h3>Charts</h3>
                                            <ul class="nav nav-tabs pull-right" id="chTabs">
                                                <li class="active"><a href="#ch_panel_users">Users</a></li>
                                                <li><a href="#ch_panel_pages">Pageviews</a></li>
                                                <li><a href="#ch_panel_sales">Sales</a></li>
                                            </ul>
                                        </div>
                                        <div class="box_a_content cnt_a">
                                            <div class="tab-content">
                                                <div class="tab-pane in active" id="ch_panel_users">
                                                    <div id="ch_users" class="chart_a"></div>
                                                </div>
                                                <div class="tab-pane in" id="ch_panel_pages">
                                                    <div id="ch_pages" class="chart_a"></div>
                                                </div>
                                                <div class="tab-pane in" id="ch_panel_sales">
                                                    <div id="ch_sales" class="chart_a"></div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="span7">
                                    <div class="box_a">
                                        <div class="box_a_content">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span4">
                                    <div class="box_a">
                                        <div class="box_a_heading">
                                            <h3>Configuration</h3>
                                            <span class="pull-right box-toolbar">
                                                <a href="#"><i class="icon-print"></i></a>
                                                <a href="#"><i class="icon-pencil"></i></a>
                                                <a href="#"><i class="icon-refresh"></i></a>
                                            </span>
                                        </div>
                                        <div class="box_a_content no_sp">
                                            <table class="table table_a">
                                                <tbody>
                                                    <tr>
                                                        <td>Live server</td>
                                                        <td><span class="label label-success">OK</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mail server</td>
                                                        <td><span class="label label-warning">CHECK</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>DB status</td>
                                                        <td><span class="label label-important">ERROR</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="span8">
                                    <div class="box_a">
                                        <div class="box_a_heading">
                                            <h3>TODO list</h3>
                                            <span class="label label-success pull-right">123</span>
                                        </div>
                                        <div class="box_a_content no_sp">
                                            <table class="table table_a">
                                                <tbody class="todo">
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>Lorem ipsum dolor sit amet.</td>
                                                        <td>11-05-2012</td>
                                                        <td><a href="#"><i class="icon-pencil"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.</td>
                                                        <td>Lorem ipsum dolor sit amet.</td>
                                                        <td>11-05-2012</td>
                                                        <td><a href="#"><i class="icon-pencil"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.</td>
                                                        <td>Lorem ipsum dolor sit amet.</td>
                                                        <td>11-05-2012</td>
                                                        <td><a href="#"><i class="icon-pencil"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td>Lorem ipsum dolor sit amet.</td>
                                                        <td>11-05-2012</td>
                                                        <td><a href="#"><i class="icon-pencil"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5.</td>
                                                        <td>Lorem ipsum dolor sit amet.</td>
                                                        <td>11-05-2012</td>
                                                        <td><a href="#"><i class="icon-pencil"></i></a> <a href="#"><i class="icon-trash"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- #content end -->
                    </div>
                    <!-- #contentwrapper end -->
                    <!-- side menu -->
                    <?php include("sidebar.php"); ?>

                    <div id="footer_space"></div>
                </div>
            </section>
        </div>
        <!-- #main-wrapper end -->

        <?php include("footer.php");?>
        
    <!-- common scripts -->
        <!-- jQuery library -->
            <script src="<?=base_url('js/jquery.min.js')?>"></script>
            <!-- jQuery migrate -->
            <script src="<?=base_url('js/jquery-migrate-1.2.1.min.js')?>"></script>
        <!-- bootstrap framework plugins -->
            <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
        <!-- actual width/height of hidden DOM elements -->
            <script src="<?=base_url('js/jquery.actual.min.js')?>"></script>
        <!-- jquery cookie plugin -->
            <script src="<?=base_url('js/jquery_cookie.js')?>"></script>
        <!-- jquery tooltips -->
            <script src="<?=base_url('js/jquery.powertip.min.js')?>"></script>
        <!-- off-canvas sidebar -->
            <script src="<?=base_url('js/jquery.jpanelmenu.js')?>"></script>
        <!-- mobile navigation -->
            <script src="<?=base_url('js/tinynav.js')?>"></script>

        <!-- common functions -->
            <script src="<?=base_url('js/hagal_common.js')?>"></script>

    <!-- dashboard scripts -->
        <!-- jQuery UI -->
            <script src="<?=base_url('js/jquery-ui-1.10.2.custom.min.js')?>"></script>
            <script src="<?=base_url('js/jquery.ui.touch-punch.min.js')?>"></script>
        <!-- FullCalendar -->
            <script src="<?=base_url('js/fullcalendar.js')?>"></script>
        <!-- flot (charts) -->
            <script src="<?=base_url('js/jquery.flot.min.js')?>"></script>
            <script src="<?=base_url('js/jquery.flot.resize.min.js')?>"></script>
            <script src="<?=base_url('js/jquery.flot.orderBars.js')?>"></script>
            <script src="<?=base_url('js/jquery.flot.tooltip.min.js')?>"></script>
            <script src="<?=base_url('js/jquery.flot.time.min.js')?>"></script>
        <!-- peity (small charts) -->
            <script src="<?=base_url('js/jquery.peity.min.js')?>"></script>

            <script src="<?=base_url('js/hagal_dashboard.js')?>"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','<?=base_url('js/analytics.js')?>','ga');
    
      ga('create', 'UA-65390203-1', 'auto');
      ga('send', 'pageview');
    
    </script>
    </body>

<!-- Mirrored from hagal-admin.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 04:57:18 GMT -->
</html>