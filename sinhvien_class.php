<?php
class class_sinhvien{
  public $mssv;
	public $hoTenSV;
	public $ngaySinh;
	public function __construct($mssv,$hoTen, $ngaySinh){
    $this->$mssv=$mssv;
		$this->hoTen=$hoTen;
		$this->ngaySinh=$ngaySinh;

	}
	public function __destruct(){
		echo "<br/>Hủy sinh viên ";
	}
}
class sinhvien extends class_sinhvien{
	public $tuoi;
	public function __construct($mssv,$hoTen, $ngaySinh, $tuoi){
		parent::__construct($mssv,$hoTen, $ngaySinh);
		$this->tuoi=$tuoi;
	}
}
$sv=new sinhvien("B1906313","Võ Huỳnh Đức","11/02/2001","21");
echo ("Họ tên: {$sv->hoTen}.<br/>Tuổi hiện tại: {$sv->tuoi}.");
?>