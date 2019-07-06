<!DOCTYPE HTML>
<html lang="en-US">
    
<!-- Mirrored from hagal-admin.tzdthemes.com/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 04:59:49 GMT -->
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
        <!-- datatables -->
            <link rel="stylesheet" href="<?=base_url('css/bootstrap.dataTables.css')?>">
            <link rel="stylesheet" href="<?=base_url('css/TableTools.css')?>">
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
                                    <li><a href="#">Candidate</a></li>
                                    <li class="crumb_sep"><i class="elusive-icon-play"></i></li>
                                    <li><span>Candidate List</span></li>                                    
                                </ul>
                            </section>

                            <!-- main content -->
                            <?php  if(isset($success)) { ?> 
                                <div class="alert alert-success" role="alert">
                                    <a class="close" data-dismiss="alert" href="#"><i class="fa fa-check fa-fw"></i></a>
                                    <?=$success?>
                                </div>
                            <?php } ?>
                            <?php if(isset($error)) { ?> 
                                <div class="alert alert-danger" role="alert">
                                    <a class="close" data-dismiss="alert" href="#"><i class="fa fa-times fa-fw"></i></a>
                                    <?=$error?>
                                </div>
                            <?php } ?>
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box_a">
                                        <div class="box_a_heading">
                                            <h3>Candidate List</h3>
                                        </div>
                                        <div class="box_a_content">
                                            <table id="dt_basic" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>Company Name</th>
                                                        <th>Position</th>
                                                        <th>Contact No.</th>
                                                        <th>Email ID</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <!-- <a title="Afghanistan at the Olympics" href="http://en.wikipedia.org/wiki/Afghanistan_at_the_Olympics">Afghanistan</a> -->
                                                <tbody>
                                                    <?php $i=1; foreach($candidate as $data) {?>
                                                    <tr>
                                                        <td><?=$i++?></td>
                                                        <td><a href="<?=site_url('recruiter/candidateprofile/').$data['id']?>"><?=ucwords($data['company_name'][0]['company_name'])?></a></td>
                                                        <td><?=$data['position']?></td>
                                                        <td><?=$data['contact_no']?></td>
                                                        <td><?=$data['emailid']?></td>
                                                        <td><a href="<?=site_url('recruiter/interviewschedule/').$data['id']?>"><button class="btn btn-info">Interview Schedule</button></a></td>
                                                    </tr>
                                                    <?php }?>
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
                    <?php include('sidebar.php');?>
                    <!-- sticky footer space -->
                    <div id="footer_space"></div>
                </div>
            </section>
        </div>
        <!-- #main-wrapper end -->

        <!-- footer -->
        <?php include('footer.php');?>
        
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

    <!-- datatables scripts -->
        <!-- datatables -->
            <script src="<?=base_url('js/jquery.dataTables.min.js')?>"></script>
        <!-- datatables column reorder -->
            <script src="<?=base_url('js/ColReorder.min.js')?>"></script>
        <!-- datatables column toggle visibility -->
            <script src="<?=base_url('js/ColVis.min.js')?>"></script>
        <!-- datatable table tools -->
            <script src="<?=base_url('js/TableTools.min.js')?>"></script>
            <script src="<?=base_url('js/ZeroClipboard.js')?>"></script>
        <!-- bootstrap -->
            <script src="<?=base_url('js/bootstrap.dataTables.js')?>"></script>

            <script src="<?=base_url('js/hagal_datatables.js')?>"></script>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','<?=base_url('js/analytics.js')?>','ga');
	
	  ga('create', 'UA-65390203-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
    </body>

<!-- Mirrored from hagal-admin.tzdthemes.com/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 04:59:53 GMT -->
</html>