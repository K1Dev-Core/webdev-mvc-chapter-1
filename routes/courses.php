<?php

$result = [];
$keyword = $_GET['keyword'] ?? '';
if ($keyword == '') {
    // ดึงข้อมูลหลักสูตรทั้งหมด
    $result = getCourses();
} else {
    // ค้นหาข้อมูลหลักสูตรตามคำค้นหา
    $result = getCoursesByKeyword($keyword);
}

renderView('courses', ['title' => 'หลักสูตรทั้งหมด', 'result' => $result]);
