<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

// A 2 mua dong ho mau hong, id = 10
// 1 cuon sach

// Đồng Hồ 
// Nếu chưa có => thì phải add vào cart => (Làm sao để biết chưa có hay là có sản phẩm) =>(check số lượng) => ID unique
// Nếu có rồi => + số lượng lên 1


$_SESSION["card"] = [
    
];

if(!isset($_SESSION["card"]["id_1"])) {
    $_SESSION["card"] = [
        "id_2" => [
            "so_luong" => 1
        ],
        "id_2" => [
            "so_luong" => 1
        ],
        "id_2" => [
            "so_luong" => 1
        ]
    
    ];
} else {
    $_SESSION["card"] = [
        "id_2" => [
            "so_luong" =>  $_SESSION["card"]['id_2']['so_luong'] + 1
        ]
    ];
}

print_r($_SESSION);

echo "12347877666";

?>

</body>
</html>

