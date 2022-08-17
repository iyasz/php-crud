<?php  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Test</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg">
                    <div class="card-header text-bg-dark ps-4">
                        <h1>Input Data</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="col-lg-6">
                                <div class="form-group my-3">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" placeholder="Masukan Username " class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="kontak">Kontak</label>
                                    <input type="text" id="kontak" placeholder="Masukan Nama Kontak" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="telp">No. Telp</label>
                                    <input type="number" id="telp" placeholder="Masukan No. Telp " class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" id="alamat" placeholder="Masukan Alamat " class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" placeholder="Masukan Email " class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="telp">No. Telp</label>
                                    <input type="number" id="telp" placeholder="Masukan No. Telp " class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="telp">No. Telp</label>
                                    <input type="number" id="telp" placeholder="Masukan No. Telp " class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p class="text-center mb-0">&copy;Login Page - All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-11">
                <div class="card">
                    <div class="card-header text-bg-dark">
                        <h3 class="ps-3">Data Public</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Kontak</th>
                                    <th>No. Telp</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Elaina</td>
                                    <td>Avellia</td>
                                    <td>089245345</td>
                                    <td>Kahuripan mas</td>
                                    <td>elaina@gmail.com</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>