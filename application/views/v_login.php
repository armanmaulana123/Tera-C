<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Page Login</title>
</head>

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
    <div class="container-fluid" style="margin-top: 6%;">
        <div class="row justify-content-center" style="margin-left: 31%;">
            <div class="col-md-5">
                <h3 style="color:#F19066;">Tera-C</h3>
            </div>
            <div class="col-md-1" style="margin-left: 10%;">
                <a href="<?= base_url('landing') ?>" style="text-decoration: none; font-size:xx-large; color:#F19066;">x</a>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 3%;">
            <div class="col-md-4 justify-content-center">
                <div class="card text-dark bg-light mb-3 o-hidden border-0 shadow-lg" style="max-width: 100%;">
                    <div class="card-body" style="background-color: white;">
                        <div class="row justify-content-between" style="margin-top:2%;">
                            <div class="col-md-9">
                                <h5 style="font-weight: bold;">Masuk</h5>
                            </div>
                            <div class="col-md-3" style="margin-top: 1%;">
                                <a href="<?= base_url('landing/register') ?>" style="color:#F19066; text-decoration:none;">
                                    <h6>Daftar</h6>
                                </a>
                            </div>
                        </div>
                        <div style="margin-top: 5%;">
                            <form action="<?= base_url("landing/proses_login") ?>" method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                                </div>
                                <button type="submit" class="btn" style="width: 100%; margin-top:5%; background-color:#F19066; color:white;">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <center style="margin-top: 10%;">
                    <div>
                        &copy; 2022 PPLA D2 | <span style="color: #F19066;">Tera-C</span>
                    </div>
                </center>
            </div>
        </div>
    </div>
</body>

</html>