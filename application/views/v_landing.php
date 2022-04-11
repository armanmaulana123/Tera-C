<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tera-C | Terasi Udang Asli Probolinggo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .masuk:hover {
            color: white;
        }
    </style>

</head>

<body>
    <div class="container-fluid p-3" style="background-color: #F19066;">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 style="color: white; margin-left:10%;">Tera-C</h3>
            </div>
            <div class="col-md-4">
                <ul class="nav">
                    <li class="nav-item" style="margin-left: 10%;">
                        <a class="nav-link active" aria-current="page" href="#" style="color: white;">Beranda</a>
                    </li>
                    <li class="nav-item" style="padding-left: 5%;">
                        <a class="nav-link" href="#" style="color: black;">Produk</a>
                    </li>
                    <li class="nav-item" style="padding-left: 5%;">
                        <a class="nav-link" href="#" style="color: black;">Tentang</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url("Landing/login") ?>" class="btn btn-link-dark masuk" style="text-decoration: none; margin-left:20%; margin-right:2%;">Masuk</a>|
                <a href="#" class="btn btn-outline-dark" style="margin-left: 5%;">Daftar</a>
            </div>
        </div>
    </div>
</body>

</html>