<?php
// ฟังก์ชันสำหรับดึงข้อมูลนักเรียนจากฐานข้อมูล
function getStudents(): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'select * from students';
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function getStudentsByKeyword(string $keyword): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'select * from students where first_name like ? or last_name like ?';
    $stmt = $conn->prepare($sql);
    $keyword = '%'. $keyword .'%';
    $stmt->bind_param('ss',$keyword, $keyword);
    $res = $stmt->execute();
    $result = $stmt->get_result();
    $conn->close();
    return $result;
}

function getStudentById(int $id): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'select * from students where id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $conn->close();
    return $result;
}

function deleteStudentsById(int $id): bool
{
    $conn = getConnection();
    $sql = 'delete from students where id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    try {
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    } catch (Exception $e) {
        $conn->close();
        return false;
    }
}

function updateStudentPassword(int $id, string $hashed_password): bool
{
    $conn = getConnection();
    $sql = 'update students set password = ? where id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $hashed_password, $id);
    $stmt->execute();
    $result = $stmt->affected_rows > 0;
    $conn->close();
    return $result;
}

function checkLogin(string $email, string $password): bool
{
    $conn = getConnection();
    $sql = 'select password from students where email = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $conn->close();
        return password_verify($password, $row['password']);
    }
    $conn->close();
    return false;
}
