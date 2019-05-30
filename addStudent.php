<?php $DB1 = $this->load->database('default', TRUE); ?>
<div class="main">
<div id="content">
<h3 id='form_head'>Codelgniter Form Submit </h3><br/>
<div id="form_input">
<?php


echo form_open('form/data_submitted');


echo form_label('First Name :', 'fname');
$data= array(
'name' => 'fname',
'placeholder' => 'Please Enter First Name',
'class' => 'input_box'
);
echo form_input($data);
echo "<br>";

echo form_label('Last Name:', 'lname');
$data= array(
'name' => 'lname',
'placeholder' => 'Please Enter Last Name',
'class' => 'input_box'
);
echo form_input($data);
echo "<br>";
echo form_label('School:', 'school');
$data= array(
'name' => 'school',
'placeholder' => 'Please Enter School Name',
'class' => 'input_box'
);
echo form_input($data);
echo "<br>";
?>
</div>


<div id="form_button">
<?php
$data = array(
'type' => 'submit',
'value'=> 'Submit',
'class'=> 'submit'
);
form_submit($data); ?>
</div>


<?php echo form_close();?>