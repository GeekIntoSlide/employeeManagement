<?php
require_once("db.php");
if(isset($_POST["Submit"])){
 $fullName=$_POST["firstName"].$_POST["middleName"].$_POST["lastName"]; 
//  if(empty(($fullName)))
//  {
//     $nameError="Please enter name";
//  }
//  else{
//     $ename=test_user_name([$fullName]);
    
//  }
//  if(empty($_POST['birthDate']))
//  {
//     $birthError="Please select your D.O.B";
//  }
//  else{
//     $birthDate=test_user_name($_POST['birthDate']);
//  }
//  if(empty($_POST['address']))
//  {
//     $addressError="This field can't be empty";
//  }
//  else{
//     $address=test_user_name($_POST['address']);
//     if(!preg_match("/[A-za-z0-9()]*/",$address))
//     { 
//         $addressError="Number Alphabet and bracket are only allow";
//     }
//  }
//  if(empty($_POST['zip']))
//  {
//     $zipError="Please enter your location pincode";
//  }
//  else{
//     $zip=test_user_name($_POST['zip']);
//  }
//  if(empty($_POST['ssn']))
//  {
//     $ssnError="Please enter ssn code";
//  }
//  else{
//     $ssn=test_user_name($_POST['ssn']);
//  }
//  if(empty($_POST['dept']))
//  {
//     $deptError="Please enter employee department";
//  }
//  else{
//     $dept=test_user_name($_POST['dept']);
//     if(!preg_match("/[A-za-z]/",$dept))
//     {
//       $deptError="Alphabet are allow only";
//     }
//  }
//  if(empty($_POST['salary']))
//  {
//     $salaryError="please enter employee salary";
//  }
//  else{
//     $salary=test_user_name($_POST['salary']);
//  }
//  if(empty($_POST['gender']))
//  {
//     $genderError="select employee gender ";
//  }
//  else{
//     $gender=test_user_name($_POST['gender']);
//  }
//  if(empty($_POST['state']))
//  {
//     $genderError="select employee state ";
//  }
//  else{
//     $gender=test_user_name($_POST['state']);
//  }













if(!empty($fullName) && !empty($_POST["birthDate"])&&!empty($_POST["address"])&&!empty($_POST["zip"])&&!empty($_POST["state"])&&!empty($_POST["ssn"])&&!empty($_POST["dept"])&&!empty($_POST["salary"]))
{
$ename=$fullName;
$birthDate=$_POST["birthDate"];
$address=$_POST["address"];
$zip=$_POST["zip"];
$ssn=$_POST["ssn"];
$dept=$_POST["dept"];
$salary=$_POST["salary"];
$gender=$_POST["genders"];
$state=$_POST["state"];
global $connectionDB;
$sql="INSERT INTO employee(name,birthData,gender,address,zipCode,ssn,dept,salary,state)
VALUES(:enamE,:birthDAtE,:gendeR,:addresS,:ziP,:ssN,:depT,:salarY,:statE)";
$stmt=$connectionDB->prepare($sql);
$stmt->bindValue(':enamE',$ename);
$stmt->bindValue(':birthDAtE',$birthDate);
$stmt->bindValue(':addresS',$address);
$stmt->bindValue(':ziP',$zip);
$stmt->bindValue(':ssN',$ssn);
$stmt->bindValue(':depT',$dept);
$stmt->bindValue(':salarY',$salary);
$stmt->bindValue(':gendeR',$gender);
$stmt->bindValue(':statE',$state);
$Execute=$stmt->execute();
if($Execute){
    echo"Record added successfully";
}
else{
    echo" something went wrong";
}
}
else{
    echo"Fill all field properly";
}
}







 function test_user_name($data)
 {
    return $data;
 }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="form">
        <div class="header">
            <h1>Employee Detail Form</h1>
            <p>Fill out the form carefully </p>
        </div>
        <form action="EmpData.php" method="post">
        <div class="name">
            <p>Employee Name</p>
            <div class="name-field">
                <div>
                    <input type="text" name="firstName"/><br>
                    <label>First name</label>
                </div>
                <div>
                    <input type="text" name="middleName"/><br>
                    <label>Middel Name</label>
                </div>
                
                <div>
                    <input type="text" name="lastName"/><br>
                    <label>Last name</label>
                </div>

            </div>
        </div>
        <div class="dob">
         <div class="date">
            <label>Birth Date</label><br>
            <input type="date" name="birthDate"/>
         </div>
            <div class="gender">
                <label>Gender</label><br>
                <select name="genders" id="gender" >
                  <option value="male">Male</option>
                   <option value="female">Female</option>
                   <option value="na">NA</option>
                
                </select>
            </div>
        </div>
        <div class="address">
            <p>Address</p>
            <input type="text" name="address"/>
            <div class="zip">
                <div>
                <input type="number" name="zip"/>
                <p>Zip Code</p>
                </div>
                <div>
                <select name="state" id="state" class="form-control">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
                <p>State</p>

                </div>
            </div>
        </div>
        <div class="ssn">
            <p>Social Security Number (SSN)</p>
            <input type="number" name="ssn"/>
        </div>
        <div class="ssn">
            <p>Department</p>
            <input type="text" name="dept"/>
        </div>
        <div class="ssn">
            <p>Salary / Month</p>
            <input type="number" name="salary"/>
        </div>
        <div class="btn">
            <button type="submit" name="Submit">Submit</button>
        </div>
        </form>
    </div>
</body>
</html>