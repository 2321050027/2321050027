<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1 in ra màn hình
    echo "hello world! <br>";
     
    echo "hi";

    // 2 biến
    // cú pháp : $ + tên biến = giá trị của biến
    $ten ="phan tuan";
    $tuoi= 20;

    echo $ten. "" . $tuoi . "tuổi";

    //3 hằng
    define("soPi","3.14");
    echo soPi;
     
    // 4 phân biệt '' và ""
    echo '$ten'. "br";
    echo "$ten"."br";

    //5 chuỗi
    #5,1 kiểm tra độ dài của chuỗi
    echo strlen($ten);."br";
    #5.2 điếm số từ
    echo  str_word_count($ten)."br";
    #5.3 tìm kiếm kí tụ trong chuỗi
    echo strpos($ten,"a");
    #5.4 thay thế kí tự
    echo str_replace("tuan","huhu",$ten);
    // 6 toán tử
    $soThuThat=10;
    $soThuHai=20;
    # + - * /
    # += -= *= /=
    # < > <== >==
    echo $soThuNhat < $soThuHai;

    // 7 Câu điều kiện
    // if (" điều kiện"){
    //logic
    //}
    //elseif("điều kiện" ){
        //logic
    //}
    //else{
    //logic
    //}
    $soThuNhat+$soThuHai=$tong
    if ("$tong<15"){
        echo ("nhỏ hơn 15");
    }
    elseif ("$tong==15"){
        echo ("tổng=15");
    }
    else{
        in ra so con lai
    }
    // switch case
    $color = "red";
    switch ($color){
        case "red":
            echo "is red";
            break;
        case"blue":
            echo"is blue";
            break;
            default:
            echo "no color"
            break;

    }
    // 9 for
    for ($i=0;$i<100;$i++){
        echo $i ."br";
    }
    
    // 10 Mảng
    $mang =["an","nhat anh","vu anh"];

    // đếm phần tử
    echo count($mang);
    echo $mang[1];
    print_r



    ?>
</body>
</html>