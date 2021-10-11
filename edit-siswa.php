<!DOCTYPE html>
<html lang="en">
    <
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="edit-siswa-post.php?id=<?php echo $_GET['id'] ?>" method="post">
    <?php
    include './connection.php';
    $sql = 'select * from students where id = ' . $_GET['id'];
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    ?>

    <div>
    <div>
            <span>Name : </span>
            <input type="text" name="name" value="<?php echo $data['name'] ?>">
        </div>
        <div>
            <span>Address :</span>
            <input type="text" name="address" value="<?php echo $data['address'] ?>">
        </div>
        <br>
        <button type="submit">Updatee</button>
    </div>



</form>
</body>
</html>