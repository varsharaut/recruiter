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
    <link rel="stylesheet" href="<?=base_url('img/flags.css')?>">
<!-- elusive webicons -->
    <link rel="stylesheet" href="<?=base_url('css/elusive-webfont.css')?>">
 <!-- datatables -->
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.dataTables.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/TableTools.css')?>">

<!-- aditional stylesheets -->
<!-- jQuery UI theme -->
    <link rel="stylesheet" href="<?=base_url('css/Aristo.css')?>">
<!-- 2col multiselect -->
    <link rel="stylesheet" href="<?=base_url('css/multi-select.css')?>">
<!-- enhanced select -->
    <link rel="stylesheet" href="<?=base_url('css/select2.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/select2-bootstrap.css')?>">
<!-- datepicker -->
    <link rel="stylesheet" href="<?=base_url('css/datepicker.css')?>">
<!-- timepicker -->
    <link rel="stylesheet" href="<?=base_url('css/bootstrap-timepicker.css')?>">
<!-- colorpicker -->
    <link rel="stylesheet" href="<?=base_url('css/colorpicker.css')?>">
<!-- iCheck -->
    <link href="<?=base_url('css/square.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/green.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/blue.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/red.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/grey.css')?>" rel="stylesheet">
    <link href="<?=base_url('css/purple.css')?>" rel="stylesheet">
<!-- bootstrap switch -->
    <link rel="stylesheet" href="<?=base_url('css/bootstrapSwitch.css')?>">
<!-- UI Spinners -->
    <link rel="stylesheet" href="<?=base_url('css/jqamp-ui-spinner.css')?>">
<!-- multiupload -->
    <link rel="stylesheet" href="<?=base_url('css/plupload-hagal.css')?>">
<!-- main stylesheet -->
    <link rel="stylesheet" href="<?=base_url('css/style.css')?>">

<!-- theme -->
    <link rel="stylesheet" href="<?=base_url('css/blue.css')?>" id="theme">

<!-- custom fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300&amp;subset=latin,latin-ext' rel='stylesheet'>

</head>
    <body>        
        <div id="main-wrapper">
            <!-- header -->
            <?php include('header.php');?>
            <section id="main_section">
                <div class="container-fluid">
                    <div id="contentwrapper">
                        <div id="content">
                            <!-- breadcrumbs -->
                            <section id="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li class="crumb_sep"><i class="elusive-icon-play"></i></li>
                                    <li><a href="#">Interview Schedule</a></li>
                                    <li class="crumb_sep"><i class="elusive-icon-play"></i></li>
                                    <li><span>Interview Schedule List</span></li>                                    
                                </ul>
                            </section>
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
                            <form method="post" action="<?=site_url('admin/interview_schedule')?>" enctype="multipart/form-data">
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="box_a">
                                            <div class="box_a_heading">
                                                <h3>Interview Schedule List</h3>
                                            </div>
                                            <div class="box_a_content cnt_a">
                                                <div class="row-fluid">
                                                    <div class="span6 clearfix">
                                                        <h4 class="heading_b">Select Recruiter</h4>
                                                        <select class="span12" id="recruiterid" name="recruiterid">
                                                            <option value="">Select</option>
                                                            <?php foreach ($recruiter as $data): ?>
                                                                <option value="<?=$data['id']?>"><?=ucwords($data['recruiter_name'])?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                    <div class="span6 clearfix" style="margin-top: 39px;">
                                                        <button class="btn btn-primary float-right">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form><br>
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box_a">
                                        <div class="box_a_heading">
                                            <h3>Interview Schedule List</h3>
                                        </div>
                                        <div class="box_a_content">
                                            <?php if($data != null) {?>
                                            <table id="dt_basic" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>Candidate Name</th>
                                                        <th>Company Name</th>
                                                        <th>Position Title</th>
                                                        <th>Email ID</th>
                                                        <th>Mobile No.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1; foreach($position as $data) {?>
                                                    <tr>
                                                        <td><?=$i++?></td>
                                                        <td><a href="<?=site_url('admin/interschedule/').$data['id']?>"><?=$data['candidate_name']?></a></td>
                                                        <td><?=$data['company_name'][0]['company_name']?></td>
                                                        <td><?=$data['position']?></td>
                                                        <td><?=$data['emailid']?></td>
                                                        <td><?=$data['contact_no']?></td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #content end -->
                    </div>
                    <?php include('sidebar.php');?>
                    <div id="footer_space"></div>
                </div>
            </section>
        </div>
        <?php include("footer.php");?>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
    <script>
        // function recruiter(){
        //     var id = $('#recruiterid').val();
        //     $.post('<?=site_url('admin/getinterviewscheduledata')?>',{id:id},function(e){
        //         var new_var = JSON.parse(e);
        //         console.log(new_var);
        //         var j = 1;
        //         for (var i = 0;i < new_var.length; i++) {
                    
        //            tr = $('<tr />');
        //            tr.append("<td>" + j + "</td>");
        //            tr.append("<td>" + new_var[i].company_name[i].company_name + "</td>");
        //            tr.append("<td>" + new_var[i].position_title + "</td>");
        //            $('.position').append(tr);
        //            j++;
        //         }

        //     });
        // }
    </script>
<!-- Mirrored from hagal-admin.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 04:57:18 GMT -->
</html>