<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="" method="post" enctype="multipart/form-data" >
            <label for="">
                nhập tên
                <input type="text" name="name">
            </label>
            <br>
            <label for="">
                mật khẩu
                <input type="text" name="passwork">
            </label>
            <br>
            <label for="">

                <input type="file" name="file-up">
            </label>
            <br>
            <input type="submit" name="btn">
        </form>
        <?php
        if (isset($_POST['btn'])) {
            $name=$_POST['name'];
            $passwokr=$_POST['passwork'];

            $file=$_FILES['file-up']['name'];
            $nameFile= $_FILES['file-up']['tmp_name'];

            move_uploaded_file($nameFile,$file);
            
            $n=count($_SESSION['array']);
            $_SESSION['array'][$n]['name']=$name;
            $_SESSION['array'][$n]['pass']=$passwokr;
            $_SESSION['array'][$n]['file']=$file;
            header("Location: index.php");
        }
        ?>
    </div>
</body>

</html>