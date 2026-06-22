<?php
include "db.php";

$upload_dir='uploads/';
if(!is_dir($upload_dir)) mkdir($upload_dir,0777,true);

if($_SERVER['REQUEST_METHOD']== 'POST'){
    if(isset($_POST['add'])){
        $title = $_POST['title'];
        $file = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],$upload_dir . $file);
        $conn->query("INSERT INTO master_image(image_name,title) VALUES('$file','$title')");
    }
       if(isset($_POST['delete'])){
        $id = $_POST['id'];
        $row = $conn->query("SELECT image_name FROM master_image WHERE id=$id")->fetch_assoc();
        unlink($upload_dir . $row['image_name']);
        $conn->query("DELETE FROM master_image WHERE id=$id");
    }
       if(isset($_POST['update'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $conn->query("UPDATE master_image SET title='$title' WHERE id ='$id'");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Image Manager</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Image title" required>
        <input type="file" name="image" required>
        <button type="submit" name="add">upload</button>
    </form>
    <table border="1">
        <tr><th>Image</th><th>Title</th><th>Action</th></tr>
        <?php
        $res = $conn->query("SELECT * FROM master_image");
        while($row = $res->fetch_assoc()):?>
        <tr>
            <td><img src="uploads/<?php echo $row['image_name']; ?>" width="50"></td>
            <td>
                <form method="post" style='display: inline;'>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="text" name="title" value="<?php echo $row['title']; ?>">
                    <button type="submit" name="update">update</button>
                </form>
            </td>
            <td>
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <button type="submit" name="delete">Delete</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>