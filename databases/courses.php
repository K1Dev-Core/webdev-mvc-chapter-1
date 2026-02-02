<?php
// ฟังก์ชันสำหรับดึงข้อมูลหลักสูตรจากฐานข้อมูล
function getCourses(): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'select * from courses order by course_name';
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function getCoursesByKeyword(string $keyword): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'select * from courses where course_name like ? or course_code like ?';
    $stmt = $conn->prepare($sql);
    $keyword = '%'. $keyword .'%';
    $stmt->bind_param('ss',$keyword, $keyword);
    $res = $stmt->execute();
    $result = $stmt->get_result();
    $conn->close();
    return $result;
}
