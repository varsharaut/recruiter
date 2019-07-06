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
                                    <li><a href="<?=site_url('admin');?>">Home</a></li>
                                    <li class="crumb_sep"><i class="elusive-icon-play"></i></li>
                                    <li><a href="<?=site_url('admin/client_list');?>">Client List</a></li>
                                    <li class="crumb_sep"><i class="elusive-icon-play"></i></li>
                                    <li><span>Client Edit Profile</span></li>                                    
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
                            <form method="post" action="<?=site_url('admin/editCompanyBoarding')?>" enctype="multipart/form-data">
                                <!-- main content -->
                                <input type="hidden" name="id" value="<?=$companyOnboardingprofile[0]['id']?>">
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="box_a">
                                            <div class="box_a_heading">
                                                <h3>Add New Client</h3>
                                            </div>
                                            <div class="box_a_content cnt_a">
                                                <div class="row-fluid">
                                                    <div class="span6 clearfix">
                                                        <h4 class="heading_b">Company Name</h4>
                                                        <input type="text" id="company_name" class="span12" name="company_name" required value="<?=$companyOnboardingprofile[0]['company_name']?>">
                                                    </div>
                                                    <div class="span6 clearfix">
                                                        <h4 class="heading_b">Company Website</h4>
                                                        <input type="text" id="" class="span12" name="company_website" required value="<?=$companyOnboardingprofile[0]['company_website']?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="box_a">
                                            <div class="box_a_heading">
                                                <h3>Address 1</h3>
                                            </div>
                                            <div class="box_a_content cnt_a">
                                                <div class="row-fluid">
                                                    <div class="span6 clearfix">
                                                        <h4 class="heading_b">Address Line 1</h4>
                                                        <input type="text" id="address1" class="span12" name="address1" required value="<?=$companyOnboardingprofile[0]['address1']?>">
                                                    </div>
                                                    <div class="span6 clearfix">
                                                        <h4 class="heading_b">Address Line 1</h4>
                                                        <input type="text" id="address2" class="span12" name="address2" value="<?=$companyOnboardingprofile[0]['address2']?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box_a_content cnt_a">
                                                <div class="row-fluid">
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">City</h4>
                                                        <input type="text" id="city1" class="span12" name="city1" value="<?=$companyOnboardingprofile[0]['city1']?>">
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Pin Code</h4>
                                                        <input type="text" id="pin1" class="span12" name="pin1" value="<?=$companyOnboardingprofile[0]['pin1']?>">
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">State</h4>
                                                        <input type="hidden" class="span12" name="state" value="<?=$companyOnboardingprofile[0]['state'][0]['id']?>" >
                                                         <input type="text" name="" value="<?=ucwords($companyOnboardingprofile[0]['state'][0]['state'])?>" class="span12" id="state">
                                                        <select class="span10 state1" name="state1" id="" style="display: none">
                                                            <option value="">Select</option>
                                                            <?php foreach ($state as $state): ?>
                                                                <option value="<?=$state['id']?>"><?=$state['state']?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                        <a href="" class="reset" style="display: none">Reset</a>
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Landline</h4>
                                                        <input type="text" id="landline1" class="span12" name="landline1" value="<?=$companyOnboardingprofile[0]['landline1']?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="box_a">
                                            <div class="box_a_heading">
                                                <h3>Primary Contact</h3>
                                            </div>
                                            <div class="box_a_content cnt_a">
                                                <div class="row-fluid">
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Contact Person</h4>
                                                        <input type="text" id="pri_contact_person" class="span12" name="pri_contact_person" required value="<?=$companyOnboardingprofile[0]['pri_contact_person']?>">
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Designation</h4>
                                                        <input type="text" id="pri_designation" class="span12" name="pri_designation" required value="<?=$companyOnboardingprofile[0]['pri_designation']?>">
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Contact Number</h4>
                                                        <input type="text" id="pri_contact_no" class="span12" name="pri_contact_no" required value="<?=$companyOnboardingprofile[0]['pri_contact_no']?>">
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Email ID</h4>
                                                        <input type="text" id="pri_emailId" class="span12" name="pri_emailId" required value="<?=$companyOnboardingprofile[0]['pri_emailId']?>">
                                                    </div>                                           
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="box_a">
                                            <div class="box_a_heading">
                                                <h3>Secondary Contact</h3>
                                            </div>
                                            <div class="box_a_content cnt_a">
                                                <div class="row-fluid">
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Contact Person</h4>
                                                        <input type="text" id="sec_contact_person" class="span12" name="sec_contact_person" value="<?=$companyOnboardingprofile[0]['sec_contact_person']?>">
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Designation</h4>
                                                        <input type="text" id="sec_designation" class="span12" name="sec_designation" value="<?=$companyOnboardingprofile[0]['sec_designation']?>">
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Contact Number</h4>
                                                        <input type="text" id="sec_contact_no" class="span12" name="sec_contact_no" value="<?=$companyOnboardingprofile[0]['sec_contact_no']?>">
                                                    </div>
                                                    <div class="span3 clearfix">
                                                        <h4 class="heading_b">Email ID</h4>
                                                        <input type="text" id="sec_emailId" class="span12" name="sec_emailId" value="<?=$companyOnboardingprofile[0]['sec_emailId']?>">
                                                    </div>                                           
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="box_a">
                                            <div class="box_a_heading">
                                                <h3>Payment Terms</h3>
                                            </div>
                                            <div class="box_a_content cnt_a">
                                                <div class="row-fluid">
                                                    <div class="span12 clearfix">
                                                        <h4 class="heading_b">Payment Terms</h4>
                                                    </div>
                                                    
                                                    <div class="span8 clearfix closeterms">
                                                    <?php if($companyOnboardingprofile[0]['payment_terms']==1) {?>
                                                    <input type="text" name="" value="Fixed Percentage">
                                                    <input type="text" name="payment_terms" value="<?=$companyOnboardingprofile[0]['payment_terms']?>" style="display: none">
                                                    <input type="text" name="fixed_per" value="<?=$companyOnboardingprofile[0]['fixed_per']?>">
                                                    <?php } else { $data = json_decode($companyOnboardingprofile[0]['variable_range1']); $data1 = json_decode($companyOnboardingprofile[0]['variable_range2']); $data2 = json_decode($companyOnboardingprofile[0]['variable_range3']); ?>
                                                    <label>Variable Range in Percentage</label>
                                                    <!-- <input type="text" name="payment_terms" value="<?=$companyOnboardingprofile[0]['payment_terms']?>" style="display: none">
                                                    <input type="text" name="variable_range1" value='<?=$companyOnboardingprofile[0]['variable_range1']?>' style="display: none">
                                                    <input type="text" name="variable_range2" value='<?=$companyOnboardingprofile[0]['variable_range2']?>' style="display: none">
                                                    <input type="text" name="variable_range3" value='<?=$companyOnboardingprofile[0]['variable_range3']?>' style="display: none">
                                                    <table style=width:20%; >
                                                        <tr>
                                                            <th>To</th>
                                                            <th>From</th> 
                                                            <th>%</th>
                                                        </tr>
                                                        <tr align='center'>
                                                            <td><?=$data[0]?></td>
                                                            <td><?=$data[1]?></td>
                                                            <td><?=$data[2]?></td>
                                                        </tr>
                                                        <tr align='center'>
                                                            <td><?=$data1[0]?></td>
                                                            <td><?=$data1[1]?></td>
                                                            <td><?=$data1[2]?></td>
                                                        </tr>
                                                        <tr align='center'>
                                                            <td><?=$data2[0]?></td>
                                                            <td><?=$data2[1]?></td>
                                                            <td><?=$data2[2]?></td>
                                                        </tr>
                                                      
                                                    </table> -->
                                                    <div class="span12" style="display: block;">
                                                        <!-- <div class="row-fluid">
                                                            <div class="span12 clearfix">
                                                                <select name="payment_terms1" class="span3" id="payment_terms1" >
                                                                    <option value="">Select</option>
                                                                    <option value="2">Variable Range in Percentage</option>
                                                                </select>
                                                                <input type="text" name="fixed_per1" class="span3" id="fixed_percentage" style="display: none" placeholder="%">
                                                                <div class="input_fields_wrap row-fluid">
                                                                    <input type="hidden" name="total" class="total">
                                                                    <a href="" class="btn btn-primary add add_field_button" style="display: none;    margin-bottom: 10px;">ADD</a>
                                                                </div>
                                                                
                                                            </div>
                                                        </div> -->
                                                        <div class="row-fluid" style="display: block;">
                                                            <div class="span12  clearfix" >
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange1[]" class="span12" placeholder="From" value="<?=$data[0]?>">
                                                                </div>
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange1[]" class="span12" placeholder="To" value="<?=$data[1]?>">
                                                                </div>
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange1[]" class="span12" placeholder="%" value="<?=$data[2]?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid" style="display: block;">
                                                            <div class="span12  clearfix" >
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange2[]" class="span12" placeholder="From" value="<?=$data1[0]?>">
                                                                </div>
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange2[]" class="span12" placeholder="To" value="<?=$data1[1]?>">
                                                                </div>
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange2[]" class="span12" placeholder="%" value="<?=$data1[2]?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid" style="display: block;">
                                                            <div class="span12  clearfix" >
                                                                <div class="span3">
                                                                    <input type="text" name="variablerange3[]" class="span12" placeholder="From" value="<?=$data2[0]?>">
                                                                </div>
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange3[]" class="span12" placeholder="To" value="<?=$data2[1]?>">
                                                                </div>
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange3[]" class="span12" placeholder="%" value="<?=$data2[2]?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    <p class="formSep"><span class="muted">Other Payment Terms:</span>
                                                    <?php if(!empty($companyOnboardingprofile[0]['other_payment_terms'])) { $other_payment_terms = json_decode($companyOnboardingprofile[0]['other_payment_terms']);   ?>
                                                    <!-- <table style="width:60%;" > -->
                                                        <!-- <tr>
                                                            <th>Title</th>
                                                            <th>Salary Slab</th> 
                                                            <th>Fees</th>
                                                        </tr> -->
                                                        
                                                            <!-- <tr align="center">
                                                            <td><?=$data[0]?></td>
                                                            <td><?=$data[1]?></td>
                                                            <td><?=$data[2]?></td>
                                                        </tr> -->
                                                        <div class="row-fluid">
                                                            <div class="span12  clearfix input_fields_wrap" >
                                                                <?php foreach ($other_payment_terms as $key=>$data):  ?>
                                                                <div class="row-fluid">
                                                                <div class="span4">
                                                                    <input type="text" name="other_payment_terms" class="span12" placeholder="From" value="<?=$data[0]?>">
                                                                </div>
                                                                <div class="span4" >
                                                                    <input type="text" name="other_payment_terms" class="span12" placeholder="To" value="<?=$data[1]?>">
                                                                </div>
                                                                <div class="span4" >
                                                                    <input type="text" name="other_payment_terms" class="span12" placeholder="%" value="<?=$data[2]?>">
                                                                </div>
                                                                </div>
                                                                <?php endforeach ?>
                                                                <input type="hidden" name="other_payment" value='<?=$companyOnboardingprofile[0]["other_payment_terms"]?>'>
                                                                <div class="span3 ">
                                                                    <?php if(!empty($companyOnboardingprofile[0]['other_payment_terms'])) {?>
                                                                    <input type="hidden" name="total1" class="total1" value="<?=count(json_decode($companyOnboardingprofile[0]['other_payment_terms']))?>">
                                                                    <input type="hidden" name="total" class="total">
                                                                    <?php }?>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                        <a href="" class="btn btn-primary add_field_button" >ADD</a>
                                                    <!-- </table> -->

                                                    <?php }?>
                                                    <!-- <input type="hidden" name="other_payment_terms1" value='<?=$companyOnboardingprofile[0]['other_payment_terms']?>'> -->
                                                    </div>
                                                    <!-- <div class="span12 openterms" style="display: block;">
                                                        <div class="row-fluid">
                                                            <div class="span12 clearfix">
                                                                <select name="payment_terms1" class="span3" id="payment_terms1" >
                                                                    <option value="">Select</option>
                                                                    <option value="2">Variable Range in Percentage</option>
                                                                </select>
                                                                <input type="text" name="fixed_per1" class="span3" id="fixed_percentage" style="display: none" placeholder="%">
                                                                <div class="input_fields_wrap row-fluid">
                                                                    <input type="hidden" name="total" class="total">
                                                                    <a href="" class="btn btn-primary add add_field_button" style="display: none;    margin-bottom: 10px;">ADD</a>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid variable_range" style="display: none">
                                                            <div class="span12  clearfix" >
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange1[]" class="span12" placeholder="From" value="<?=$data[0]?>">
                                                                </div>
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange1[]" class="span12" placeholder="To" value="<?=$data[1]?>">
                                                                </div>
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange1[]" class="span12" placeholder="%" value="<?=$data[2]?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid variable_range" style="display: none">
                                                            <div class="span12  clearfix" >
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange2[]" class="span12" placeholder="From" value="<?=$data1[0]?>">
                                                                </div>
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange2[]" class="span12" placeholder="To" value="<?=$data1[1]?>">
                                                                </div>
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange2[]" class="span12" placeholder="%" value="<?=$data1[2]?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row-fluid variable_range" style="display: none">
                                                            <div class="span12  clearfix" >
                                                                <div class="span3">
                                                                    <input type="text" name="variablerange3[]" class="span12" placeholder="From" value="<?=$data2[0]?>">
                                                                </div>
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange3[]" class="span12" placeholder="To" value="<?=$data2[1]?>">
                                                                </div>
                                                                <div class="span3" >
                                                                    <input type="text" name="variablerange3[]" class="span12" placeholder="%" value="<?=$data2[2]?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="span6 change">
                                                        <!-- <button class="btn btn-info pull-right" type="button" onclick="changeterms();">Change</button> -->
                                                    </div>
                                                    <div class="span6 close2" style="display: none">
                                                        <button class="btn btn-info pull-right" type="button" onclick="close1();">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span7">
                                        <div class="box_a">
                                            <div class="box_a_heading">
                                                <h3>Agreement</h3>
                                            </div>
                                            <div class="box_a_content cnt_a">
                                                <div class="row-fluid agreechangetext">
                                                    <input type="" name="agreement_copy" class="span6" value="<?=$companyOnboardingprofile[0]['agreement_copy']?>">
                                                    <a class="btn btn-info agreechange" onclick="agreechange1();">Change</a>
                                                </div>
                                                <div class="row-fluid agreecopy1" style="display: none">
                                                    <div class="span3 clearfix ">
                                                        <h4 class="heading_b">Agreement Copy</h4>
                                                        <select class="span12 agreement_copy" name="agreement_copy1">
                                                        	<option value="">Select</option>
                                                        	<option value="Yes">Yes</option>
                                                        	<option value="No">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="span3 clearfix file" style="display: none">
    	                                                <div class="formSep">	
    		                                                <label class="">File</label>
    		                                                <input type="file" name="image" id="image" />
    	                                            	</div>
    	                                            </div>
                                                    <div class="span3 clearfix ">
                                                        <a class="btn btn-info agreeclose pull-right" onclick="agreeclose();"> Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span5">
                                        <div class="box_a">
                                            <div class="box_a_heading">
                                                <h3>Credit Period</h3>
                                            </div>
                                            <div class="box_a_content cnt_a">
                                                <div class="row-fluid" >
                                                     <div class="span6 clearfix">
                                                        <h4 class="heading_b">Credit Period</h4>
                                                        <input type="text" id="" class="span12" name="credit_period" value="<?=$companyOnboardingprofile[0]['credit_period']?>">
                                                    </div>
                                                    <div class="span6 clearfix">
                                                        <h4 class="heading_b">Free Replacement Period</h4>
                                                        <input type="text" id="" class="span12" name="free_replace_period" value="<?=$companyOnboardingprofile[0]['free_replace_period']?>">
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
                    <div id="footer_space"></div>
                </div>
            </section>
        </div>
        <?php include("footer.php");?>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // $("#payment_terms1").on('change', function () {
        //     if($(this).val() == 2){
        //         // $('#fixed_percentage').show();
        //         $('.variable_range').show();
        //     }
        //     else{
        //         // $('#fixed_percentage').hide();
        //         $('.variable_range').hide();
        //     }
        // });
        $(".agreement_copy").on('change', function () {
            if($(this).val() == 'Yes'){
                $('.file').show();
            }
            else{
                $('.file').hide();
            }
        }); 
    });
    function agreechange1(){
        $(".agreecopy1").show();
        $(".agreechangetext").hide();
    }
    function agreeclose(){
        $(".agreecopy1").hide();
        $(".agreechangetext").show();
    }
    function changeterms(){
        $('.closeterms').hide();
        $('.change').hide();
        $('.openterms').show();
        $('.close2').show();
        $('.add').show();
    }
    function close1(){
        $('.closeterms').show();
        $('.change').show();
        $('.openterms').hide();
        $('.close2').hide();
        $('.add').hide();
    }

</script>
<script>
    $("#state").on('click', function () {
        $('.state1').show();
        $('.reset').show();
        $('#state').hide();
    });
</script>

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
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','<?=base_url('js/analytics.js')?>','ga');
    
      ga('create', 'UA-65390203-1', 'auto');
      ga('send', 'pageview');
    
    </script>
    <script>
      $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        var a = $('.total1').val();
        var total = 1 + +a;
        var x = 0; //initlal text box count
        var counter = 0;
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            
            if(x < max_fields){ //max input box allowed
                x++; //text box increment

                counter++;
                var data = '<div class="row-fluid"><div class="span12"><div class="span4"><input class="span12" type="text" name="other_payment_terms' + x + '[]" placeholder="Title" required></div><div class="span4"><input class="span12" type="text" name="other_payment_terms' + x + '[]" placeholder="Salary Slab" required></div><div class="span4"><input class="span12" type="text" name="other_payment_terms' + x + '[]" placeholder="Fees" required></div><a href="#" class="remove_field">Remove</a></div></div>'; //add input box
                $('.total').val(x);
                $(wrapper).append(data);
                total++;
            }

        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            var a = $('.total').val();
            // var x = 0 - a;
            e.preventDefault(); $(this).parent('div').remove(); x--;counter--; a--;
            $('.total').val(x);
        })
    });
    </script>
<!-- Mirrored from hagal-admin.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 04:57:18 GMT -->
</html>