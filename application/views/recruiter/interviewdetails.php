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
                                    <li><a href="<?=site_url('recruiter/candidate_table')?>">Candidate List</a></li>
                                    <li class="crumb_sep"><i class="elusive-icon-play"></i></li>
                                    <li><span>Interview Schedule</span></li>                                    
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
                            <form method="post" action="<?=site_url('recruiter/interviewscheduledate')?>">
                                <!-- main content -->
                                <input type="hidden" name="id" value="<?=$id?>" >
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="box_a">
                                            <div class="box_a_heading">
                                                <h3>Interview Schedule</h3>
                                            </div>
                                            <div class="box_a_content cnt_a">
                                                <div class="row-fluid">
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Round</h4>
                                                        <label>1st Round :</label>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Select Date</h4>
                                                        <div class="input-append date bs_datepicker" data-date-format="dd-mm-yyyy" >
                                                            <input class="span12" type="text" name="f-date[]">
                                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Select Time</h4>
                                                        <!-- div class="input-append bootstrap-timepicker">
                                                            <input id="tp-default" type="text" class="input-small span12 tp-default" name="f-time">
                                                            <span class="add-on"><i class="icon-time"></i></span>
                                                        </div> -->
                                                        <select class="span12">
                                                            <option value="">Select</option>
                                                            <?php foreach ($time as $time): ?>
                                                                <option value="<?=$time['id']?>"><?=$time['time']?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Status</h4>
                                                        <select class="span12" name="f-status">
                                                            <option value="">Select</option>
                                                            <?php foreach ($status as $data): ?>
                                                                <option value="<?=$data['id']?>"><?=$data['status']?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="f-datetime" value="<?=date('Y-m-d H:i:s')?>">
                                                </div>
                                                <a href="" class="btn btn-primary add_field_button" >ADD</a>
                                                <div class="input_fields_wrap row-fluid">
                                                    <input type="hidden" name="total" class="total">
                                                </div>
                                                
                                            </div>
                                            <!-- <div class="box_a_content cnt_a">
                                                <div class="row-fluid">
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Round</h4>
                                                        <label>2nd Round :</label>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Select Date</h4>
                                                        <div class="input-append date bs_datepicker" data-date-format="dd-mm-yyyy" >
                                                            <input class="span12" type="text" name="s-date">
                                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Select Time</h4>
                                                        <select class="span12">
                                                            <option value="">Select</option>
                                                            <?php foreach ($time as $time2): ?>
                                                                <option value="<?=$time['id']?>"><?=$time2['time']?></option>
                                                            <?php endforeach ?>\
                                                        </select>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Status</h4>
                                                        <select class="span12" name="s-status">
                                                            <option value="">Select</option>
                                                            <?php foreach ($status as $data): ?>
                                                                <option value="<?=$data['id']?>"><?=$data['status']?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="s-datetime" value="<?=date('Y-m-d H:i:s')?>">
                                                </div>
                                            </div> -->
                                            <!-- <div class="box_a_content cnt_a">
                                                <div class="row-fluid">
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Round</h4>
                                                        <label>3rd Round :</label>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Select Date</h4>
                                                        <div class="input-append date bs_datepicker" data-date-format="dd-mm-yyyy" >
                                                            <input class="span12" type="text" value="t-date">
                                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Select Time</h4>
                                                        <select class="span12">
                                                            <option value="">Select</option>
                                                            <?php foreach ($time as $time3): ?>
                                                                <option value="<?=$time['id']?>"><?=$time3['time']?></option>
                                                            <?php endforeach ?>\
                                                        </select>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Status</h4>
                                                        <select class="span12" name="t-status">
                                                            <option value="">Select</option>
                                                            <?php foreach ($status as $data): ?>
                                                                <option value="<?=$data['id']?>"><?=$data['status']?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="t-datetime" value="<?=date('Y-m-d H:i:s')?>">
                                                </div>
                                            </div> -->
                                            
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
                    <div id="footer_space"></div>
                </div>
            </section>
        </div>
        <?php include("footer.php");?>
    </body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->

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
        $(document).ready(function() {
            $("#payment_terms1").on('change', function () {
                if($(this).val() == 1){
                    $('#fixed_percentage').show();
                    $('.variable_range').hide();
                }
                else{
                    $('#fixed_percentage').hide();
                    $('.variable_range').show();
                }
            });
            $(".agreement_copy").on('change', function () {
                if($(this).val() == 'Yes'){
                    $('.file').show();
                }
                else{
                    $('.file').hide();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        
        var x = 0; //initlal text box count
        var counter = 0;
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                counter++;
                var data = '<div class="span3 clearfix"><h4 class="heading_b">Select Date</h4><div class="input-append date bs_datepicker" data-date-format="dd-mm-yyyy" ><input class="span12" type="text" name="f-date[]"><span class="add-on"><i class="icon-calendar"></i></span></div></div>'; //add input box
                $('.total').val(x);
                $(wrapper).append(data);
            }

        });
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;counter--;
            $('.total').val(x);
        })
    });
    </script>
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