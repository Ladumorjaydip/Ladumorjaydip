<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - CRUD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>
<header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary bg-nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="photo/favicon.png" target="_blank">
            <img src="photo/favicon.png" alt="Logo" style="width:40px;margin-left:10px;" class="rounded-pill">
          </a>
          <a class="navbar-brand" href="#">Carbon-Emission-Footprint</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="offset.html">offset</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_us.html">Contact Us</a>
              </li>
            </ul>
            <a class="navbar-brand" href="profile.html">
              <img src="photo/img_avatar3.png" alt="Logo" style="width:40px;" class="rounded-pill">
            </a>
          </div>
        </div>
      </nav>
    </header> 
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Admin Panel</h1>
        <div class="container">
            <form action="adddata.php" method="post">
               <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="">Company Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group  col-lg-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>
               </div>
            </form>
        </div>
    </section>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <!-- <th scope="col">Id</th> -->
                    <th scope="col">Company Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <!-- <th scope="col">Credits</th> -->
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM user";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                // $Id = $row['id'];
                                $Name = $row['username'];
                                $email = $row['email'];
                                $password = $row['password'];
                                // $credits=$row[`credits`];
                    ?>
                    
                    <tr class="trow">
                        <!-- <td><?php echo $Id; ?></td> -->
                        <td><?php echo $Name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $password; ?></td>
                        <!-- <td><?php echo $credits; ?></td> -->
                        <td><a href="update.php?username=<?php echo $Name; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="deletedata.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>
</body>

</html>