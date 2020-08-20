<?php
declare(strict_types = 1);

include 'includes/class-autoload.inc.php';


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Records</title>
    <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        </ul>
    </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1>Food Records <small>By Dante Frank</small></h1>
        </div>
    </div>

    <div class="container">
      <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6 card">
            <div class="card-body">
                <h1 class="card-title">Records Of Items</h1>
                <form method="POST" action="includes/process.inc.php">
                    <div class="form-group">
                    <label for="Food Item">Food Item</label>
                    <input type="text" class="form-control" name="food" >
                    </div>
                    <div class="form-group">
                    <label for="qty">Quantity</label>
                    <input type="text" class="form-control" name="qty">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submit">Store</button>
                </form>
            </div>
          </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Food Item</th>
                        <th>Available</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rice</td>
                        <td><b>20</b></td>
                        <td><a href="#" class="btn btn-info">Edit</a></td>
                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>