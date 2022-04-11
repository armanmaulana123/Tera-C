<body style="background-color: #e1e1e1;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navigasi" style="background-color: #F19066; height: 80px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:white; padding-left: 3%;">
                Tera-C</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left: 32%;">
                <div class="navbar-nav">
                    <a class="nav-link" href="#beranda" style="color:white">Beranda</a>
                    <a class="nav-link" href="#produk" style="color: black; margin-left: 5%;">Produk</a>
                    <a class="nav-link" href="#tentang" style="color: black; margin-left: 5%">Tentang</a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left: 25%;">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?= base_url("landing/login") ?>" style="color:black">Masuk</a>
                    <button type="button" class="btn btn-outline-dark" style="margin-left: 5%;">Daftar</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container " id="beranda" style="background-color: white; margin-top: 6.5%; max-width: 100%; height: 740px; max-height: 1080px;">
        <div class="row">
            <div class="col-md-4" style="margin-top: 10%; margin-left: 6%;">
                <div class="container">
                    <img src="<?= base_url() ?>assets/images/terasi.png" alt="" style="max-width: 550px;  border-radius: 5%; box-shadow: 2px 2px 5px #333333;">
                </div>
            </div>

            <div class="col-md-5" style="margin-top: 10%; margin-left: 13%;">
                <div class="container" style="text-align: justify;">
                    <h3>Terasi Pilihan Terbaik</h3>
                    <br>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam, explicabo facere. Id, error aperiam odio quod ad eos, doloribus eaque sed ducimus, nesciunt unde vel. Inventore sit architecto quam a! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum impedit optio soluta neque quia vitae aut et voluptatum quas quo velit, similique deleniti facilis rerum dolor nisi animi qui minus.</p>
                    <br>
                    <div class="container" style="color: #F19066; text-align: right;">
                        <h3>Beli Sekarang <i class="fa fa-arrow-right"></i></h3>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>