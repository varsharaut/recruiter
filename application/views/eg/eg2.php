<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<form action="<?=site_url('admin/addinterview')?>" method="post">
  <div class="input_fields_wrap">
     <p class="formSep"><span class="muted">Other Payment Terms:</span>
    <?php  if(!empty($getinterview_schedule[0]['interview_schedule'])) { $interview_schedule = json_decode($getinterview_schedule[0]['interview_schedule']);   ?>
        <div class="row-fluid">
            <div class="span12  clearfix input_fields_wrap" >
                <?php foreach ($interview_schedule as $key=>$data):  ?>
                <div class="row-fluid">
                <div class="span4">
                    <input type="text" name="interviewschedule" class="span12" placeholder="Date" value="<?=$data[0]?>">
                </div>
                <div class="span4" >
                    <input type="text" name="interviewschedule" class="span12" placeholder="Time" value="<?=$data[1]?>">
                </div>
                <div class="span4" >
                    <input type="text" name="interviewschedule" class="span12" placeholder="Status" value="<?=$data[2]?>">
                </div>
                </div>
                <?php endforeach ?>
                <input type="text" name="interview" value='<?=$getinterview_schedule[0]['interview_schedule']?>'>
                <div class="span3 ">
                    <?php if(!empty($getinterview_schedule[0]['interview_schedule'])) {?>
                    <input type="text" name="total1" class="total1" value="<?=count(json_decode($getinterview_schedule[0]['interview_schedule']))?>">
                    <?php }?>
                    
                </div>
            </div>
        </div>
    <?php }?>
      <button class="add_field_button">Add More Fields</button>
        <div>
            <input type="text" name="total" class="total">
            <div id="dateTab" class="dateTab">
                <!-- <label>Select Date</label><input type="text" class="getDate id_1" name="name[]" /> -->
            </div>
            <button>Save</button>
  <!-- </div>
  <div> -->
   

        </div>
</form>



<script>
  $(document).ready(function() {

    var max_fields      = 10; 
    var wrapper         = $(".dateTab"); 
    var add_button      = $(".add_field_button"); 
    
    var x = 1; //initlal text box count
    var counter = 0;
    var i = $("#dateTab input") .length + 1;
    $(add_button).click(function(e){
        counter++;
        e.preventDefault();
        $.post('<?=site_url('recruiter/gettime')?>',function(data){
        var new_var = JSON.parse(data);
        for (var i = 0; i < new_var.length;  i++) {
                var appenddata = "<option value = '" + new_var[i].id + " '>" + new_var[i].time + " </option>";
                console.log(appenddata);
                $('#time' + counter + '').append(appenddata);
            }
        });
        $.post('<?=site_url('recruiter/getpositionstatus')?>',function(e){
        var new_var = JSON.parse(e);
        for (var i = 0; i < new_var.length;  i++) {
                var appenddata = "<option value = '" + new_var[i].id + " '>" + new_var[i].status + " </option>";
                console.log(appenddata);
                $('#status' + counter + '').append(appenddata);
            }
        });
        if(x < max_fields){ 
            x++; 
            $(wrapper).append('<div class="row-fluid"><div class="span12"><div class="span4"><input  class="getDate id_'+ i +'" type="text" name="interviewschedule' + counter + '[]" /></div><div class="span4"><select required name="interviewschedule' + counter + '[]" class="span10" id="time' + counter + '"><option value="">Select</option></select></div><div class="span4"><select name="interviewschedule' + counter + '[]" class="span10" id="status' + counter + '"><option value="">Select</option></select></div><a href="#" class="remove_field">Remove</a></div></div>'); 
             $( ".getDate" ).datepicker({dateFormat: 'dd-mm-yy'});
             $('.total').val(counter);

        }
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--; i--;counter--;
        $('.total').val(counter);
    })
});
</script>

