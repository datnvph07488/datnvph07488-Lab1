<?php

class SinhVien {
    function view(){
        echo "Tôi là sinh viên trường FPT PolyTechnic";
    }
}
class SinhVienPoly extends SinhVien{
    
}

class Test extends SinhVien{
    function view(){
        echo "Tôi là học sinh FPT";
    }
}


$Dat = new SinhVienPoly();
$Dat->view();
echo "<br>";
$Test = new Test();
$Test->view();
echo "<br>";
?>

<?php

class Web{
    function view(){
        echo "Tôi là sinh viên nghành Web - Lớp PT14312 - Web";
    }
}
class Poly extends Web{
    
}

class Ungdung extends Web{
    function view(){
        echo "Tôi là sinh viên nghành ứng dụng - Lớp UD13443 - UD";
    }
}


$Web = new Poly();
$Web->view();
echo "<br>";
$UD = new Ungdung();
$UD->view();
?>