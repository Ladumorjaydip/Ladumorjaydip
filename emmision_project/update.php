<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section>
        <h1 style="text-align: center;margin: 50px 0;">PHP CRUD operations with MySQL</h1>
        <div class="container">
            <form action="updatedata.php" method="post">
               <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="">Company Name</label>
                        <input type="text" name="name" id="name" value="<?php echo $_GET['username'];?>" class="form-control" required readonly>
                    </div>
                    <?php
                    require_once "conn.php";
                    $name=$_GET['username']; 
                    $sql_query = "SELECT * FROM user WHERE `username`='$name';";
                    if ($result = $conn ->query($sql_query)) {
                        while ($row = $result -> fetch_assoc()) { 
                            $email = $row['email'];
                            $password = $row['password'];
                ?>
                    <div class="form-group  col-lg-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control"  value="<?php echo $email;?>" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $password;?>" required>
                    </div>
                    <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div><?php }}?>
               </div>
            </form>
        </div>
    </section>
</body>
</html>