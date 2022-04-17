<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container" id="profile" style="background-color: white; margin-top: 4%; max-width: 100%; height: 740px; max-height: 1080px;">
        <div class="col-md-11">
            <div class="container" style="text-align: right;">
                <h5>
                    <a style="text-decoration: none; font-size:xx-large; color: #F19066" href="<?= base_url('landing') ?>">X</a>
                </h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2" style="margin-top: 2%; margin-left: 10%;">
                <div class="container">
                    <img src="<?= base_url() ?>assets/images/lulu.png" alt="" style="max-width: 150px; border-radius: 50%">
                </div>
            </div>

            <div class="col-md-6" style="margin-top: 2%; margin-left: 5%">
                <div class="row">
                    <div class="col-md-2">
                        <h5>Nama</h5><br><br>
                        <h5>Email</h5><br><br>
                        <h5>Telepon</h5><br><br>
                        <h5>Password</h5><br><br><br>
                        <h5>Alamat</h5>
                    </div>
                    <div class="col-md-1" style="text-align: right">
                        <h5>:</h5><br><br>
                        <h5>:</h5><br><br>
                        <h5>:</h5><br><br>
                        <h5>:</h5><br><br><br>
                        <h5>:</h5>
                    </div>
                    <div class="col-md-9" style="color: grey; text-align: left">
                        <h5>Lulu Anggriani</h5>
                        <hr><br>
                        <h5>luluanggriani@gmail.com</h5>
                        <hr><br>
                        <h5>+6281234567890</h5>
                        <hr><br>
                        <h5>********</h5>
                        <hr><br>
                        <h5>Jl. Raden Inten II No.3, RW.2, Duren Sawit, Kec.Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13440</h5>
                        <hr>
                    </div>
                </div>
                <div class="col-md-11" style="text-align: right; margin-top: 3%; margin-left: 10%">
                    <button type="button" class="btn" style="background-color: #F19066; color: white">Edit Profil</button>
                </div>
            </div>

        </div>
    </div>
</body>
</html>