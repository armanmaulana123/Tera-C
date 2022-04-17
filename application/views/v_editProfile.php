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
        <div class="row">
            <div class="col-md-2" style="margin-top: 2%; margin-left: 10%;">
                <div class="container">
                    <img src="<?= base_url() ?>assets/images/lulu.png" alt="" style="max-width: 150px; border-radius: 50%">
                    <h5 style="color: #F19066; text-align: center; margin-top: 20%; margin-right: 5%; font-weight: 300">Ubah Foto</h5>
                </div>
            </div>

            <div class="col-md-6" style="margin-top: 2%; margin-left: 5%">
                <div class="form">
                    <label for="" class="form-label">Nama      : </label>
                    <input type="name" class="form-control" id="name" style="margin-left: 15%" placeholder="Lulu Anggriani">
                    <br>

                    <label for="" class="form-label">Email      : </label>
                    <input type="email" class="form-control" id="email" style="margin-left: 15%" placeholder="luluanggriani@gmail.com">
                    <br>

                    <label for="" class="form-label">Telepon    : </label>
                    <input type="telepon" class="form-control" id="telepon" style="margin-left: 15%" placeholder="+6281234567890">
                    <br>
                    
                    <label for="" class="form-label">Password   : </label>
                    <input type="password" class="form-control" style="margin-left: 15%" id="password" placeholder="********">
                    <br>

                    <label for="" class="form-label">Alamat     : </label>
                    <textarea type="alamat" class="form-control" id="alamat" style="margin-left: 15%" placeholder="Jl. Raden Inten II No.3, RW.2, Duren Sawit, Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13440" rows="3"></textarea>
                </div>

                <div class="col-md-12" style="text-align: right; margin-top: 3%; margin-left: 15%">
                    <button type="button" class="btn" style="border: 1px solid #F19066; color: #F19066">Batal</button>
                    <button type="button" class="btn" style="background-color: #F19066; color: white; margin-left: 3%">Selesai</button>
                </div>

            </div>
        </div>
    </div>
</body>
</html>