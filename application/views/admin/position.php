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
    <body>        <!-- main wrapper (without footer) -->
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
                                    <li><a href="#">Position Manager</a></li>
                                    <li class="crumb_sep"><i class="elusive-icon-play"></i></li>
                                    <li><span>Add New Position</span></li>                                    
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
                            <form method="post" action="<?=site_url('admin/addPosition')?>" enctype="multipart/form-data">
                                <!-- main content -->
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="box_a">
                                            <div class="box_a_heading">
                                                <h3>Add New Positions</h3>
                                            </div>
                                            <div class="box_a_content cnt_a">
                                                <div class="row-fluid">
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Comapany Name</h4>
                                                        <!-- <input type="text" id="compant_id" class="span12" name="compant_id" required> -->
                                                        <select name="compant_id" class="span12" id="compant_id" required>
                                                            <option value="">Select</option>
                                                            <?php foreach($clientName as $data){ ?>
                                                            <option value="<?=$data['id']?>"><?=ucwords($data['company_name'])?></option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Position Title</h4>
                                                        <input type="text" id="position_title" class="span12" name="position_title" required>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Experience</h4>
                                                        <input type="text" id="experience" class="span12" name="experience" required>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Salary Range</h4>
                                                        <input type="text" id="salary_range" class="span12" name="salary_range" required>
                                                    </div>
                                                </div>
                                                <div class="row-fluid">
                                                    
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">No. of Position</h4>
                                                        <input type="text" id="no_of_position" class="span12" name="no_of_position" required>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Status of the Position</h4>
                                                        <select class="span12" name="status_of_position" required>>
                                                            <option value="">Select</option>
                                                            <?php foreach ($position_status as $position_status): ?>
                                                                <option value="<?=$position_status['id']?>"><?=$position_status['name']?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Industry</h4>
                                                        <select name="industry" class="span12" name="industry" required >
                                                            <option value="">Select</option>
                                                            <?php foreach ($industry as $industry): ?>
                                                                <option value="<?=$industry['id']?>"><?=$industry['name']?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Date Opened</h4>
                                                        <div class="input-append date bs_datepicker" data-date-format="dd-mm-yyyy" >
                                                            <input class="span12" type="text" name="date_opened">
                                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row-fluid">
                                                     <div class="span2 clearfix">
                                                        <h4 class="heading_b">JD</h4>
                                                        <span>
                                                        <select class="span12 jd" name="jd" required>
                                                            <option value="">Select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="span3 clearfix file" style="display: none">
                                                        <span class="formSep">   
                                                            <label class="">File</label>
                                                            <input type="file" name="image" id="image" />
                                                        </span>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Assign to Recriter</h4>                            
                                                       <select name="assign_to_recruiter[]" id="assign_to_recruiter" class="span12" required multiple="multiple" style="height: 80px;">
                                                            <option value="">Select</option>
                                                            <?php foreach ($recruiter as $key): ?>
                                                            <option value="<?=$key['id']?>"><?=ucwords($key['recruiter_name'])?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                        
                                                    </div>
                                                    <div class="span4 clearfix">
                                                        <h4 class="heading_b">Client Requirement</h4>
                                                        <textarea type="text" id="client_requirement" class="span12" name="client_requirement" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box_a">
                                            <div class="box_a_heading">
                                                <h3>Remark</h3>
                                            </div>
                                            <div class="box_a_content cnt_a">
                                                <div class="row-fluid">
                                                    <div class="span6 clearfix">
                                                        <h4 class="heading_b">Remark from Client</h4>
                                                        <textarea type="text" id="  remark_client" class="span12" name=" remark_client" rows="4"></textarea>
                                                    </div>
                                                    <div class="span6 clearfix">
                                                        <h4 class="heading_b">Remark from Recruiter</h4>
                                                        <textarea type="text" id="remark_recruiter" class="span12" name="remark_recruiter" rows="4"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                	<button class="btn btn-primary float-right">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- #content end -->
                    </div>
                    <?php include('sidebar.php');?>
                    <!-- jPanel sidebar --> 
                    <div id="footer_space"></div>
                </div>
            </section>
        </div>
        <?php include("footer.php");?>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(".jd").on('change', function () {
            if($(this).val() == 'Yes'){
                $('.file').show();
            }
            else{
                $('.file').hide();
            }
        });
    });
</script>
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

<!-- form elements scripts -->
<!-- jQuery UI -->
    <script src="<?=base_url('js/jquery-ui-1.10.2.custom.min.js')?>"></script>
    <script src="<?=base_url('js/jquery.ui.touch-punch.min.js')?>"></script>
<!-- animated progressbar -->
    <script src="<?=base_url('js/jquery.progressbar.anim.min.js')?>"></script>
<!-- 2col multiselect -->
    <script src="<?=base_url('js/jquery.multi-select.min.js')?>"></script>
    <script src="<?=base_url('js/jquery.quicksearch.min.js')?>"></script>
<!-- combobox -->
    <script src="<?=base_url('js/combobox.js')?>"></script>
<!-- enhanced select -->
    <script src="<?=base_url('js/select2.min.js')?>"></script>
<!-- inputmask -->
    <script src="<?=base_url('js/jquery.inputmask.bundle.min.js')?>"></script>
<!-- password strength meter -->
    <script src="<?=base_url('js/jquery.complexify.banlist.js')?>"></script>
    <script src="<?=base_url('js/jquery.complexify.min.js')?>"></script>
<!-- datepicker -->
    <script src="<?=base_url('js/bootstrap-datepicker.js')?>"></script>
<!-- timepicker -->
    <script src="<?=base_url('js/bootstrap-timepicker.min.js')?>"></script>
<!-- timepicker -->
    <script src="<?=base_url('js/bootstrap-colorpicker.js')?>"></script>
<!-- iCheck -->
    <script src="<?=base_url('js/jquery.icheck.min.js')?>"></script>
<!-- bootstrap switch -->
    <script src="<?=base_url('js/bootstrapSwitch.js')?>"></script>
<!-- textarea autosize -->
    <script src="<?=base_url('js/jquery.autosize.min.js')?>"></script>
<!-- textarea counter -->
    <script src="<?=base_url('js/jquery.textareaCounter.plugin.min.js')?>"></script>
<!-- UI Spinners -->
    <script src="<?=base_url('js/globalize.min.js')?>"></script>
    <script src="<?=base_url('js/globalize.culture.fr-FR.js')?>"></script>
    <script src="<?=base_url('js/globalize.culture.ja-JP.js')?>"></script>
    <script src="<?=base_url('js/globalize.culture.zh-CN.js')?>"></script>
    <script src="<?=base_url('js/jqamp-ui-spinner.min.js')?>"></script>
    <script src="<?=base_url('js/jquery-mousewheel-3.0.6.min.js')?>"></script>
<!-- fileupload widget -->
    <script src="<?=base_url('js/bootstrap-fileupload.min.js')?>"></script>
<!-- plupload and the jQuery queue widget -->
    <script src="<?=base_url('js/plupload.full.js')?>"></script>
    <script src="<?=base_url('js/jquery.plupload.queue.js')?>"></script>
<!-- WYSIWG Editor -->
    <script src="<?=base_url('js/ckeditor.js')?>"></script>

    <script src="<?=base_url('js/hagal_form_elements.js')?>"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','<?=base_url('js/analytics.js')?>','ga');
    
      ga('create', 'UA-65390203-1', 'auto');
      ga('send', 'pageview');
    
    </script>
<!-- Mirrored from hagal-admin.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 04:57:18 GMT -->
</html>