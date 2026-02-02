<?php

$result = [];
$keyword = $_GET['keyword'] ?? '';
if ($keyword == '') {
    // ดึงข้อมูลนักเรียนทั้งหมด
    $result = getStudents();
} else {
    // ค้นหาข้อมูลนักเรียนตามคำค้นหา
    $result = getStudentsByKeyword($keyword);
}

renderView('students', ['title' => 'ข้อมูลนักเรียน', 'result' => $result]);
