<?php
require_once 'config/db.php';
class DongiaModal{
    private $madg;
    private $hovaten;
    private $gioitinh;
    private $namsinh;
    private $nghenghiep;
    private $ngaycapthe;
    private $ngayhethan;
    private $diachi;
    public function getAllDG(){
        $conn = $this->connectDb();
        $sql = "SELECT * FROM dongia";
        $result = mysqli_query($conn, $sql);
        $arr_dg = [];
        if(mysqli_num_rows($result)>0){
            $arr_dg = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return $arr_dg;
    }
    public function insert($param = []) {
        $connection = $this->connectDb();
        //tạo và thực thi truy vấn
        $queryInsert = "INSERT INTO dongia (hovaten, gioitinh, namsinh, nghenghiep, ngaycapthe, ngayhethan, diachi)
        VALUES ('{$param['hovaten']}', '{$param['gioitinh']}', '{$param['namsinh']}', '{$param['nghenghiep']}', '{$param['ngaycapthe']}', '{$param['ngayhethan']}', '{$param['diachi']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);

        return $isInsert;
    }
    public function connectDb() {
        $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }

        return $connection;
    }
    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
    public function getDGById($madg = null) {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM dongia WHERE madg={$madg}";
        $results = mysqli_query($connection, $querySelect);
        $dgArr = [];
        if (mysqli_num_rows($results) > 0) {
            $dgs = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $dgArr = $dgs[0];
        }
        $this->closeDb($connection);

        return $dgArr;
    }
    public function update($dg = []) {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE dongia 
        SET hovaten = '{$dg['hovaten']}', gioitinh = '{$dg['gioitinh']}', namsinh = '{$dg['namsinh']}', nghenghiep = '{dg['nghenghiep']}', ngaycapthe = '{$dg['ngaycapthe']}', ngayhethan = '{$dg['ngayhethan']}', diachi = '{$dg['diachi']}'  WHERE madg = {$dg['madg']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }
    public function delete($madg = null) {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM blood_donor WHERE madg = {$madg}";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }
}

?>