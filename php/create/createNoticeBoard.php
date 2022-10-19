<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myNoticeBoard (";
    $sql .= "myNoticeBoardID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "myAdminMemberID int(10) unsigned NOT NULL,";
    $sql .= "NoticeTitle varchar(50) NOT NULL,";
    $sql .= "NoticeContents longtext NOT NULL,";
    $sql .= "NoticeView int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myNoticeBoardID)";
    $sql .= ") charset=utf8;";

    $connect -> query($sql);
?>