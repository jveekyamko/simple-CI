<?php
	$DB1 = $this->load->database('default', TRUE);

$query = $this->db->get('student');


 ?>
<!DOCTYPE html>  
<html>  
    <head>  
        <title>List of Students Registered:</title>  
    </head>  
    <style type="text/css">
    	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
    <body>   
       <h2>Master List Registered Students:</h2>

<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>School</th>
    <th>Action</th>
     
  </tr>

     <?php
     foreach ($query->result() as $row){ ?>
   <tr>
    <td><?php echo $row->fname?></td>
    <td><?php echo $row->lname?></td>
    <td><?php echo $row->school?></td>
    <td><button>Update</button><button>Delete</button></td>
  </tr>

<?php } ?>
 
 	</table>
 	<br>  

 	<div class="main">
<div id="content">
<h3 id='form_head'>Codelgniter Form Submit </h3><br/>
<div id="form_input">
<?php

// Open form and set URL for submit form
echo form_open('form/data_submitted');

// Show Name Field in View Page
echo form_label('First Name :', 'fname');
$data= array(
'name' => 'fname',
'placeholder' => 'Please Enter First Name',
'class' => 'input_box'
);
echo form_input($data);
echo "<br>";
// Show Email Field in View Page
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



<?php if(isset($fname) && isset($lname) && isset($school)){


$data = array(
	'fname' => $fname,
	'lname' => $lname,
	'school' => $school,
	
	);
$this->db->insert('student',$data);
} ?>

    </body>  
</html>
 