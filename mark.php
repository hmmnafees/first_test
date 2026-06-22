<link rel="stylesheet" href="style.css">
<center>
  <a href="index.php">Home page</a>
    <form action="" method="post">
        <h1>Marks of Students</h1>
        Index Number:<input type="number" name="index" placeholder="Enter student index" required><br><br>
                Name:<input type="text" name="name" placeholder="Enter student name" required><br><br>
             Science:<input type="number" name="science" placeholder="Enter science marks" required><br><br>
               Maths:<input type="number" name="maths" placeholder="Enter maths marks" required><br><br>
               Islam:<input type="number" name="islam" placeholder="Enter islam marks" required><br><br>
             History:<input type="number" name="history" placeholder="Enter history marks" required><br><br>
               Tamil:<input type="number" name="tamil" placeholder="Enter tamil marks" required><br><br>
             English:<input type="number" name="english" placeholder="Enter english marks" required><br><br>
                  B1:<input type="number" name="b1" placeholder="Enter b1 marks" required><br><br>
                  B2:<input type="number" name="b2" placeholder="Enter b2 marks" required><br><br>
                  B3:<input type="number" name="b3" placeholder="Enter b3 marks" required><br><br>
                     <button type="submit" name="submit">Submit</button><a href="marktable.php">Go to the mark table</a>
    </form>
</center>

<?php
include 'db.php';
if(isset($_POST['submit'])){
$index=$_POST['index'];
$name=$_POST['name'];
$science=$_POST['science'];
$maths=$_POST['maths'];
$islam=$_POST['islam'];
$history=$_POST['history'];
$tamil=$_POST['tamil'];
$english=$_POST['english'];
$b1=$_POST['b1'];
$b2=$_POST['b2'];
$b3=$_POST['b3'];
$sql="INSERT INTO marks(Index_Num,Name,Science,Maths,Islam,History,Tamil,English,B1,B2,B3) 
VALUES('$index','$name','$science','$maths','$islam','$history','$tamil','$english','$b1','$b2','$b3')";
if(mysqli_query($conn , $sql)){
    echo "data is added";
}else{
    echo "data in not added".mysqli_error($conn);
}
}
?>