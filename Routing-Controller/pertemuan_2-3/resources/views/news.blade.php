<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .categoryName h5{
            margin: 2% auto;
        }

        .row{
            margin: 3% auto;
            /* height: 100px; */
            /* text-align: center; */
        }

        .categoryName{
            /* padding: 3.5%; */
            text-transform: uppercase;
            text-decoration: none;
            color: rgb(52, 52, 52);
            font-size: 16pt;
            letter-spacing: 1px;
        }

        button[class='col']{
            background-color: transparent;
            border: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">Web belajar Routing, view dan blade</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/category">Category</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/news">News</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/program">Program</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/about us">About</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container px-4 px-lg-5">
        <div class="row row-cols-1 row-cols-md-1 g-4">
            <a href="/news/Asus menjadi laptop terpopuler pertama" class="col categoryName">
              <div class="card h-100">
                  <h5 class="card-title text-center">Asus menjadi laptop terpopuler pertama</h5>
              </div>
            </a>
            <a href="/news/Lenovo menjadi laptop terpopuler kedua" class="col categoryName">
              <div class="card h-100">
                  <h5 class="card-title text-center">Lenovo menjadi laptop terpopuler kedua </h5>
              </div>
            </a>
        </div>
    </div>
</body>
</html>
