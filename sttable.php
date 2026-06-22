<?php
include 'db.php';
$sql='SELECT * FROM st_details';
$result=mysqli_query($conn , $sql)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students Deatails</title>
</head>
<style>
    table{
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
    }
    th,td{
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }
    th{
        background: #4caf50;
        color: #fff;
    }
</style>
<body>
    <h2 style="text-align:center;">2026 exam result</h2>
    <table>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>

<?php
if($result && $result->num_rows > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['Index_num']."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Age']."</td>";
        echo "<td>".$row['Address']."</td>";
        echo "<td>".$row['Phone']."</td>";
        echo "</tr>";
    }
}
else{
    echo "<tr><td colspan='5'>data is not store</td></tr>";
}
?>

</table>
</body>
</html>