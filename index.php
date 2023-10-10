<?php
include "view/header.php";
include "model/pdo.php";
include "model/Sanpham.php";
include "model/Danhmuc.php";
include "global.php";


$spnew = loadAll_sanpham_home();
$dsdm = loadAll_danhmuc();
$dstop10 = loadAll_sanpham_top10();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        // case "":
        //     include "view/home.php";
        //     break;
        case "danhsach":
            include "view/danhsach.php";
            break;
        case "sanpham":
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
               $kyw =$_POST['kyw'];
            }else{
                $kyw="";
            }
            if(isset($_GET['iddm'])&&($_GET['iddm'])>0){
                $iddm =$_GET['iddm'];
                
            }else{
                $iddm =0;
            }
            $dssp =loadAll_sanpham($kyw, $iddm);
            $tendm =load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case "binhluan":
            include "view/binhluan.php";
            break;
        case "sanphamct":
            
            if(isset($_GET['idsp'])&&($_GET['idsp'])>0){
                $id =$_GET['idsp'];
                $onesp =loadOne_sanpham($id);
                
                extract($onesp);
                $sp_cungloai= load_sanpham_cungloai($id,$iddm);

                
                include "view/sanphamct.php";
            }else{
                include "view/home.php";
            }
            break;
            case "dangky":
                include "view/taikhoan/dangky.php";
                break;
        // case "binhluan":
        //     include "view/binhluan.php";
        //     break;
        default:
        include "view/home.php";
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
