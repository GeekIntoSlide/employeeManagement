<?php
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee data</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <table width="1000" align="center" border="5" >
      <caption>Employees List</caption>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Department</th>
        <th>SSN</th>
        <th>Date of birth</th>
        <th>Gender</th>
        <th>address</th>
        <th>Zipcode</th>
        <th>state</th>
        <th>Salary</th>
        <th>Update</th>
        <th>Delete</th>
       
        
     </tr>


    
    <?php
    global $connectionDB;
    $sql="SELECT * FROM employee";
    $stmt=$connectionDB->query($sql);
    while($DataRows=$stmt->fetch())
    {
        $id=$DataRows['id'];
        $name=$DataRows['name'];
        $gender=$DataRows['gender'];
        $salary=$DataRows['salary'];
        $address=$DataRows['address'];
        $dept=$DataRows['dept'];
        $zip=$DataRows['zipCode'];
        $state=$DataRows['state'];
        $birthDate=$DataRows['birthData'];
        $ssn=$DataRows['ssn'];
        ?>
    
           
    
   
     <tr>
        <th><?php echo $id?></th>
        <th><?php echo $name?></th>
        <th><?php echo$dept?></th>
        <th><?php echo$ssn?></th>
        <th><?php echo$birthDate?></th>
        <th><?php echo$gender?></th>
        <th><?php echo $address?></th>
        <th><?php echo$zip?></th>
        <th><?php echo$state?></th>
        <th><?php echo$salary?></th>
        <th><a href="#">Update</a></th>
        <th><a href="#">Delete</a></th>
     </tr>
     <?php }?>
</table>
</body>
</html>