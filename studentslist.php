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
     <button onclick="location.href='<?php echo base_url();?>Welcome/add_form'">Register</button>


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
    <td><button >Update</button><button>Delete</button></td>
  </tr>

<?php } ?>
 
 	</table>
 	<br>  




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
 