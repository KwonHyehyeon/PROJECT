<?php
    include "../connect/connect.php";

    // 변수 설정
    $type = $_POST['type'];
    $sql = "SELECT youEmail FROM myMember ";

    if($type == "emailCheck"){
        $youEmail = $connect -> real_escape_string(trim($_POST['youEmail']));
        $sql .= "WHERE youEmail = '{$youEmail}'";
    }

    $result = $connect -> query($sql);
    $jsonResult = "bad";

    // 데이터 유무 확인
    if($result -> num_rows == 0){
        $jsonResult = "good";
    }
    
    //json good 전송  //("result => $jsonResult")데이터 값
    echo json_encode(array("result" => $jsonResult));
?>