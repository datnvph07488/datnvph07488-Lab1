<?php
	class SinhVien{
     var $name;
     var $branch;
     var $masv;
     function __construct($name="" , $branch="", $masv="")
    {
        $this->name = $name;
        $this->branch = $branch;
        $this->masv =	 $masv;
    }

    function getName(){
        echo "Tôi tên là $this->name - tôi học ngành $this->branch - mã sinh viên của tôi là $this->masv ";
    }
	}
	class SinhVienPoly extends SinhVien{

	}
$Dat = new SinhVienPoly('Đạt',"WEB","PH07488");
$Dat->getName();
echo "<br>";
?>
<?php
class ConVit{
	var $ten;
    var $cannang;
    var $ngaysinh;
    var $masochuong;
    function __construct($ten="",$cannang="",$ngaysinh="",$masochuong="")
    {
    	$this->ten =$ten;
    	$this->cannang=$cannang;
    	$this->ngaysinh=$ngaysinh;
    	$this->masochuong=$masochuong;
    }

    function getTen(){
    	echo "Tên: $this->ten - Cân nặng: $this->cannang - Ngày sinh: $this->ngaysinh - Mã chuồng: $this->masochuong";
    }
}
class ConVitPoly extends ConVit{}
$Poly = new ConVitPoly('Poly','3kg','2020-04-20','001');
$Poly->getTen();


?>
