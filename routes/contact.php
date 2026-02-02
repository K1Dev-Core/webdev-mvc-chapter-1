<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        get();
        break;
    case 'POST':
        post();
        break;
    // กรณีอื่นๆ เช่น PUT, DELETE สามารถเพิ่มได้ที่นี่
}

function get(): void
{
    renderView('contact', ['title' => 'ติดต่อเรา']);
}

function post(): void
{
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
    if (empty($name) || empty($email) || empty($message)) {
        $message = "กรุณากรอกข้อมูลให้ครบถ้วน";
        echo "<script type='text/javascript'>alert('$message');window.history.back();</script>";
        return;
    }
    
    $email = preg_replace('/(?<=.).(?=[^@]*?.@)/', '*', $email);
    renderView('thank', ['name' => $name, 'email' => $email, 'message' => $message]);
}
