<?php

include("database.php");
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"  >

    <title>Istanbul Market</title>
</head>

<body>
<!-- navbar start -->
    <div class="container-fluid">

            <div class="row" >
                <div class="col-sm-4 d-flex flex-wrap align-items-center justify-content-center " >
                    <a class="navbar-brand" href="homepage.php">
                        <img src="images/logo.png" alt="" width="410" height="114" class="d-inline-block align-text-top">
                    </a>
                </div>
                <div class="col-sm-8 d-flex flex-wrap align-items-center justify-content-center " >
                    <form class="d-flex">
                        <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-info" type="submit" name="search">Search</button>
                    </form>
                    <a href="login.php">  <button class="btn btn-outline-info m-3" type="button" >Giriş</button></a>
                    <a href="register.php">  <button class="btn btn-outline-info" type="button">Kayıt</button></a>
                </div>


            </div>


    </div>
<!-- navbar end -->

<!-- kategori bar start -->

<div class="container-fluid">
    <div class="row  justify-content-center"  style=" background-color: #9c9c9c;" >

        <?php
        $kategoriler = "SELECT * FROM kategoriler";
        $query = mysqli_query($conn, $kategoriler);
        if (!$query){
            echo "Error";
        }else {
            while ($row = mysqli_fetch_array($query)) {
        ?>   <div class="col-sm d-flex flex-wrap justify-content-center homeLink">

                    <?php
                    $kAdı =$row["kategoriAdı"];
                    echo "<form action='kategoriDetay.php' method='POST'><button class='btn '
                                value=" . $row["kategoriId"] . " type='submit' name='kategoriId'>$kAdı</button></form>"
                    ?>
                </div>

                <?php
            }
        }
        ?>


    </div>


</div>


<!-- slider start -->
<div class="container">
    <div class="row h-100">
        <div class="col-sm-10 offset-1">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators"       >
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slide1.png" class="d-inline-block w-100  " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider2.png" class="d-inline-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider3.png" class="d-inline-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
</div>

<!-- slider end -->
<!-- markalar start-->

<div class="container">
    <div class="row mt-5 offset-1">
        <?php
        $marka = "SELECT * FROM marka  ";
        if (isset($conn)) {
            $queryConnMarka = mysqli_query($conn, $marka);
        if (!$queryConnMarka){
            echo "Error";
        }else{
        while($row = mysqli_fetch_array($queryConnMarka)){
        $mId= $row['markaId'];

        ?>
        <div class="col-sm-2 m-2 ">
            <a target="_blank" href="">
               <!-- <img src="images/ebebekLogo.png"  alt="Forest" style="width:150px"> -->
                <img  class="marka w-100 h-100" src="data:image/jpeg;base64,<?php echo base64_encode( $row['logo'] ); ?>" />
            </a>
        </div>




        <?php
        }
        }


        }
        ?>

    </div>
</div>
<!-- markalar end -->
<!-- kategori bar end --><!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
