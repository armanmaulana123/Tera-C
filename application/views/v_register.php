<body>
    <?php
    $pesan = $this->session->flashdata('pesan');
    if ($pesan['status_pesan'] == true && !empty($pesan)) {
        echo '
				<script>
					Swal.fire({
						title: "Berhasil",
                        text: "' . $pesan['isi_pesan'] . '",
						type: "success",
						confirmButtonText: "Close"
					});
				</script>';
    } else if ($pesan['status_pesan'] == false && !empty($pesan)) {
        echo '
				<script>
					Swal.fire({
						title: "Gagal",
                        text: "' . $pesan['isi_pesan'] . '",
						type: "error",
						confirmButtonText: "Close"
					});
				</script>';
    }
    ?>

    <div class="container-fluid">
        <div class="row justify-content-around" style="margin-top: 4%;">
            <div class="col-md-6">
                <div class="card text-dark bg-light o-hidden border-0 shadow-lg" style="max-width: 100%;">
                    <div class="card-body" style="background-color: white;">
                        <div style="margin-top: 5%;">
                            <form action="<?= base_url("landing/proses_register") ?>" method="POST">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="" cols="20" rows="5" name="alamat" required></textarea>
                                </div>
                                <button type="submit" class="btn" style="width: 100%; margin-top:5%; background-color:#F19066; color:white;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5" style="margin-top: 1%;">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-10">
                            <h3 style="color: #F19066;">Tera-C</h3>
                        </div>
                        <div class="col-md-2">
                            <a href="<?= base_url('Landing') ?>" style="font-size: xx-large; text-decoration:none; color:#F19066">x</a>
                        </div>
                    </div>
                    <h3 style="margin-top: 18%;">Daftar Sekarang</h3>
                    <h5 style="margin-top: 3%;">Sudah Memiliki Akun? <a href="#" style="text-decoration: none; color:#F19066;">Masuk!</a></h5>
                    <p style="margin-top: 12%;">Dengan menekan tombol Daftar, Anda dapat menikmati layanan kami untuk membeli terasi udang dengan kualitas terbaik dan cita rasa yang lezat langsung dari produsen. Kami hadir untuk menjadi jembatan bagi anda dalam memesan terasi udang secara online tanpa perlu keluar rumah.</p>
                    <center style="margin-top: 20%;">&copy; 2022 PPLA D2 | <span style="color: #F19066;">Tera-C</span></center>
                </div>
            </div>
        </div>
    </div>
</body>

</html>