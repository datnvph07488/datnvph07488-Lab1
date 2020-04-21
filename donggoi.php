<?php
class Sinhvien{
    private $name = 'DatNV';
    protected $masv = '';
    public function setName($newName){
        $this->name = $newName;
    }
    public function getName(){
        return $this->name;
    }
    public function setMasv($masv){
        $this->masv = $masv;
    }
}
class Poly extends Sinhvien{
  
    public function getMasv(){
        return $this->masv;
    }
}

$Dat = new Poly;
$Dat->setName('Nguyễn Viết Đạt -');
echo $Dat->getName();
$Dat->setMasv('PH07488');
echo $Dat->getMasv();
echo "<br>";

?>

<?php
class ConVit{
    private $name = 'Poly';
    protected $ngaysinh = '';
    public function setName($newName){
        $this->name = $newName;
    }
    public function getName(){
        return $this->name;
    }
    public function setNgaySinh($ngaysinh){
        $this->ngaysinh = $ngaysinh;
    }
}
class ConVitPoly extends ConVit{
  
    public function getNgaySinh(){
        return $this->ngaysinh;
    }
}

$Duck = new ConVitPoly;
$Duck->setName('Con vịt FPoly-');
echo $Duck->getName();
$Duck->setNgaySinh('2020-04-20');
echo $Duck->getNgaySinh();

?>