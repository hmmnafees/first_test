<link rel="stylesheet" href="style.css">
<center>
    <a href="logout.php">
        <button>logout</button>
    </a>
<form method="post">
    <h1>Students details</h1>
       Index_number:<input type="number" name="index" placeholder="Enter Student  Index_number" required><br><br>
               Name:<input type="text" name="name" placeholder="Enter Student  Name" required><br><br>
                Age:<input type="number" name="age" placeholder="Enter Student Age" required><br><br>
            Address:<input type="text" name="address" placeholder="Enter Student Address" required><br><br>
              Phone:<input type="phone" name="phone" placeholder="Enter Student phone" required><br><br>
                    <button type="submit" name="sub"> Submit the Form</button><a href="sttable.php">Go to the st_details</a>
</form>

</center>
<?php
include "db.php";
include "session.php";
if(isset($_POST['sub'])){

  $index=$_POST['index'];
  $name=$_POST['name'];
  $age=$_POST['age'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];

$sql="INSERT INTO st_details(index_num,name,age,address,phone) VALUES('$index','$name','$age','$address','$phone')";

if(mysqli_query($conn , $sql)){
    echo "data is added show it table";
}else{
    echo "data in not added can't show in table".mysqli_error($conn);
}
}
?>