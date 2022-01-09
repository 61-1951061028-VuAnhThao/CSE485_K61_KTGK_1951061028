<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuanLiThuVien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body style="background-color: #fff;">
    <div class="container mb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">THƯ VIỆN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center mb-3">
                    <h3 class="text-center text-primary mt-5">HỆ THỐNG QUẢN LÍ THƯ VIỆN</h3>
                </div>
                <div class="col-md-12 mb-3">
                    <a href="index.php?controller=dongia&action=admin"><button class="btn btn-primary">Xem chi tiết</button></a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã độc giả</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Giới tính</th>
                                <th scope="col">Năm sinh</th>
                                <th scope="col">Nghề nghiệp</th>
                                <th scope="col">Ngày cấp thẻ</th>
                                <th scope="col">Ngày hết hạn</th>
                                <th scope="col">Địa chỉ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($dongia as $dg) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $dg['madg'] ?></th>
                                    <td><?php echo $dg['hovaten'] ?></td>
                                    <td><?php echo $dg['gioitinh'] ?></td>
                                    <td><?php echo $dg['namsinh'] ?></td>
                                    <td><?php echo $dg['nghenghiep'] ?></td>
                                    <td><?php echo $dg['ngaycapthe'] ?></td>
                                    <td><?php echo $dg['ngayhethan'] ?></td>
                                    <td><?php echo $dg['diachi'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>