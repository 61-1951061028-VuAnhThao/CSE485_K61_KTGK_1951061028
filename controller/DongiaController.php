<?php

require_once 'model/DongiaModel.php';
class DongiaController{
    function index(){
        $dgModal = new DongiaModal();
        $dongia = $dgModal->getAllDG();
        require_once 'view/Dongia/index.php';
    }
    function admin(){
        $dgModal = new DongiaModal();
        $dongia = $dgModal->getAllDG();
        require_once 'view/Dongia/admin.php';
    }
    function add(){
        $error = '';
        if(isset($_POST['submit'])){
            $hovaten = $_POST['hovaten'];
            $gioitinh = $_POST['gioitinh'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngayhethan'];
            $diachi = $_POST['diachi'];
            if(empty($hovaten) || empty($_POST['gioitinh'])|| empty($namsinh) || empty($nghenghiep) || empty($ngaycapthe) || empty($ngayhethan) || empty($diachi)){
                $error = 'Thông tin chưa đầy đủ!';
            }else{
                $gioitinh = $_POST['gioitinh'];
                $dgModal = new DongiaModal();
                $dgArr = [
                    'hovaten' => $hovaten,
                    'gioitinh' => $gioitinh,
                    'namsinh' => $namsinh,
                    'nghenghiep' => $nghenghiep,
                    'ngaycapthe' => $ngaycapthe,
                    'ngayhethan' => $ngayhethan,
                    'diachi' => $diachi,
                ];
                $isAdd = $dgModal->insert($dgArr);
                if ($isAdd) {
                    $TT=  "Thêm mới thành công";
                }
                else {
                    $TT= "Thêm mới thất bại";
                }
                header("Location: index.php?controller=dongia&action=admin&tt=$TT");
                exit();
            }

        }
        require_once 'view/Dongia/add.php';
    }
    function edit(){
        if (!isset($_GET['madg'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=book&action=admin");
            return;
        }
        if (!is_numeric($_GET['madg'])) {
            $_SESSION['error'] = "Mã phải là số";
            header("Location: index.php?controller=book&action=admin");
            return;
        }
        $madg = $_GET['madg'];
        $dgModal = new DongiaModal();
        $DG = $dgModal->getDGById($id);
        $error = '';
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $gioitinh = $_POST['gioitinh'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngayhethan'];
            $diachi = $_POST['diachi'];
            if(empty($hovaten) || empty($_POST['gioitinh'])|| empty($namsinh) || empty($nghenghiep) || empty($ngaycapthe) || empty($ngayhethan) || empty($diachi)){
                $error = 'Thông tin chưa đầy đủ!';
            }
            else {
                
                $gioitinh = $_POST['gioitinh'];
                $dgModal = new DongiaModal();
                $dgArr = [
                    'hovaten' => $hovaten,
                    'gioitinh' => $gioitinh,
                    'namsinh' => $namsinh,
                    'nghenghiep' => $nghenghiep,
                    'ngaycapthe' => $ngaycapthe,
                    'ngayhethan' => $ngayhethan,
                    'diachi' => $diachi,
                ];
                $isAdd = $dgModal->update($dgArr);

                if ($isAdd) {
                    $TT= "Sửa thành công";
                }
                else {
                    $TT = "Sửa thất bại";
                }
                header("Location: index.php?controller=dongia&action=admin&tt=$TT");
                exit();
            }
        }
        require_once 'view/Dongia/edit.php';
    }
    function delete(){
        $madg = $_GET['madg'];
        if (!is_numeric($madg)) {
            header("Location: index.php?controller=book&action=index");
            exit();
        }
        $dgModal = new DongiaModal();
        $isDelete = $dgModal->delete($madg);
        if ($isDelete) {
            $TT=  "Xóa bản ghi thành công";
        }
        else {
            //báo lỗi
            $TT = "Xóa bản ghi thất bại";
        }
        header("Location: index.php?controller=dongia&action=admin&tt=$TT");
        exit();
    }
}

?>