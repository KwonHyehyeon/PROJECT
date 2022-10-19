<?php
    include "../connect/connect.php";

    for($i=1; $i<=300; $i++){
        $regTime = time();
        
        $sql = "INSERT INTO myNoticeBoard(myAdminMemberID, NoticeTitle, NoticeContents, NoticeView, regTime) VALUES('1', '공지사항 제목${i}입니다.', '공지사항 내용${i}입니다.', '857', '$regTime')";
        $connect -> query($sql);
    }
?>