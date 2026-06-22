<?php
include 'db.php';
$sql='SELECT * FROM marks';
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
            <th>Index_num</th>
            <th>Name</th>
            <th>Science</th>
            <th>Maths</th>
            <th>Islam</th>
            <th>History</th>
            <th>Tamil</th>
            <th>English</th>
            <th>B1</th>
            <th>B2</th>
            <th>B3</th>
        </tr>

<?php
if($result && $result->num_rows > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['Index_num']."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Science']."</td>";
        echo "<td>".$row['Maths']."</td>";
        echo "<td>".$row['Islam']."</td>";
        echo "<td>".$row['History']."</td>";
        echo "<td>".$row['Tamil']."</td>";
        echo "<td>".$row['English']."</td>";
        echo "<td>".$row['B1']."</td>";
        echo "<td>".$row['Islam']."</td>";
        echo "<td>".$row['B3']."</td>";
        echo "</tr>";
    }
}
else{
    echo "<tr><td colspan='11'>data is not store</td></tr>";
}
?>

</table>
</body>
</html>