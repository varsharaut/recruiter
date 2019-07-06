<!DOCTYPE HTML>
<html lang="en-US">
    
<!-- Mirrored from hagal-admin.tzdthemes.com/user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 04:57:32 GMT -->
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
                                    <li><a href="<?=site_url('admin/client_list');?>">Client List</a></li>
                                    <li class="crumb_sep"><i class="elusive-icon-play"></i></li>
                                    <li><span>User Profile</span></li>                                    
                                </ul>
                            </section>

                            <!-- main content -->
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box_a">
                                        <div class="box_a_heading">
                                            <h3>User profile</h3>
                                        </div>
                                        <div class="box_a_content cnt_a user_profile">
                                            <div class="row-fluid">
                                                <!-- <div class="span2">
                                                    <img class="thumbnail" alt="" src="img/avatars/avatar_14.jpg">
                                                </div> -->
                                                <div class="span12">
                                                    <div class="tabbable tabbable-bordered">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active"><a data-toggle="tab" href="#tbp_a">Basic Info</a></li>
                                                            <li><a data-toggle="tab" href="#tbp_b">Primary Contact</a></li>
                                                            <li><a data-toggle="tab" href="#tbp_c">Secondary Contact</a></li>
                                                            <li><a data-toggle="tab" href="#tbp_d">Payment Terms</a></li>
                                                            <li><a data-toggle="tab" href="#tbp_e">Agreement</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div id="tbp_a" class="tab-pane active">
                                                                <!-- <p class="formSep"><small class="muted">Verified:</small> <span class="label label-success">Yes</span></p> -->
                                                                <p class="formSep"><small class="muted">Company Name:</small> <?=ucwords($companyOnboardingprofile[0]['company_name'])?></p>
                                                                <p class="formSep"><small class="muted">Company Website:</small> <?=$companyOnboardingprofile[0]['company_website']?></p>
                                                                <p class="formSep"><small class="muted">Address 1:</small> 
                                                                <?=ucfirst($companyOnboardingprofile[0]['address1'])?>, <?=ucfirst($companyOnboardingprofile[0]['address2'])?>, <?=ucfirst($companyOnboardingprofile[0]['city1'])?>, <?=ucfirst($companyOnboardingprofile[0]['state1'])?> ,<?=ucfirst($companyOnboardingprofile[0]['pin1'])?>.</p>
                                                                <p class="formSep"><small class="muted">Landline:</small>
                                                                <?=ucfirst($companyOnboardingprofile[0]['landline1'])?>
                                                            </div>
                                                            <div id="tbp_b" class="tab-pane">
                                                                <p class="formSep"><small class="muted">Contact Person:</small> <?=ucwords($companyOnboardingprofile[0]['pri_contact_person'])?></p>
                                                                <p class="formSep"><small class="muted">Designation:</small> <?=ucwords($companyOnboardingprofile[0]['pri_designation'])?></p>
                                                                <p class="formSep"><small class="muted">Contact No.:</small> <?=$companyOnboardingprofile[0]['pri_contact_no']?></p>
                                                                <p class="formSep"><small class="muted">Email ID:</small> 
                                                                <?=$companyOnboardingprofile[0]['pri_emailId']?></p>
                                                            </div>
                                                            <div id="tbp_c" class="tab-pane">
                                                                <p class="formSep"><span class="muted">Contact Person:</span> <?=ucwords($companyOnboardingprofile[0]['sec_contact_person'])?></p>
                                                                <p class="formSep"><span class="muted">Designation:</span> 
                                                                <?=ucwords($companyOnboardingprofile[0]['sec_designation'])?></p>
                                                                <p class="formSep"><span class="muted">Contact No.:</span> 
                                                                <?=$companyOnboardingprofile[0]['sec_contact_no']?></p>
                                                                <p class="formSep"><span class="muted">Email ID:</span> 
                                                                <?=$companyOnboardingprofile[0]['sec_emailId']?></p>
                                                            </div>
                                                            <div id="tbp_d" class="tab-pane">
                                                                <p class="formSep"><span class="muted">Payment Terms:</span> <?php if($companyOnboardingprofile[0]['payment_terms'] == 1){print_r('Fixed Percentage');} else{print_r('Variable Range in percentage');} ?></p>
                                                                <?php if($companyOnboardingprofile[0]['payment_terms'] == 1){?>
                                                                <p class="formSep"><?=($companyOnboardingprofile[0]['fixed_per'])?> %</p>
                                                                <?php } else {
                                                                        $data = json_decode($companyOnboardingprofile[0]['variable_range1']);
                                                                        $data1 = json_decode($companyOnboardingprofile[0]['variable_range2']);
                                                                        $data2 = json_decode($companyOnboardingprofile[0]['variable_range3']); 
                                                                    ?>
                                                                    <table style="width:20%;" >
                                                                        <tr>
                                                                            <th>To</th>
                                                                            <th>From</th> 
                                                                            <th>%</th>
                                                                        </tr>
                                                                        <tr align="center">
                                                                            <td><?=$data[0]?></td>
                                                                            <td><?=$data[1]?></td>
                                                                            <td><?=$data[2]?></td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                            <td><?=$data1[0]?></td>
                                                                            <td><?=$data1[1]?></td>
                                                                            <td><?=$data1[2]?></td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                            <td><?=$data2[0]?></td>
                                                                            <td><?=$data2[1]?></td>
                                                                            <td><?=$data2[2]?></td>
                                                                        </tr>
                                                                      
                                                                    </table>
                                                                <?php }?>
                                                                
                                                                <p class="formSep"><span class="muted">Other Payment Terms:</span>
                                                                <?php if(!empty($companyOnboardingprofile[0]['other_payment_terms'])) { $other_payment_terms = json_decode($companyOnboardingprofile[0]['other_payment_terms']);   ?>
                                                                <table style="width:65%;" >
                                                                    <tr>
                                                                        <th>Title</th>
                                                                        <th>Salary Slab</th> 
                                                                        <th>Fees</th>
                                                                    </tr>
                                                                    <?php foreach ($other_payment_terms as $data): ?>
                                                                        <tr align="center">
                                                                        <td><?=$data[0]?></td>
                                                                        <td><?=$data[1]?></td>
                                                                        <td><?=$data[2]?></td>
                                                                    </tr>
                                                                    <?php endforeach ?>
                                                                </table>
                                                                <?php }?>
                                                            </div>
                                                            <div id="tbp_e" class="tab-pane">
                                                                <p class="formSep"><span class="muted">Agreement Copy:</span>
                                                                <?php if($companyOnboardingprofile[0]['agreement_copy'] == 'No' ){print_r($companyOnboardingprofile[0]['agreement_copy']);}else{  $data = 'Download'; echo "<a href='".base_url()."agreement/".$companyOnboardingprofile[0]['agreement_copy']."'>".$data."</a>"; }?> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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


    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','<?=base_url('js/analytics.js')?>','ga');
	
	  ga('create', 'UA-65390203-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
    </body>

<!-- Mirrored from hagal-admin.tzdthemes.com/user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 04:57:32 GMT -->
</html>