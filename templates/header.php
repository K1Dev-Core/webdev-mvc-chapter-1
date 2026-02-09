<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-gradient-to-r from-emerald-600 to-teal-700 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Enrollment System</h1>
        </div>
    </header>
    <nav class="bg-gradient-to-r from-emerald-700 to-teal-800 text-white shadow-sm">
        <div class="container mx-auto px-6 py-3">
            <a href="/" class="inline-block px-4 py-2 text-emerald-100 hover:text-emerald-200 transition-colors">หน้าแรก</a>
            <a href="/courses" class="inline-block px-4 py-2 text-emerald-300 hover:text-emerald-200 transition-colors">หลักสูตร</a>
            <a href="/courses-new" class="inline-block px-4 py-2 text-emerald-300 hover:text-emerald-200 transition-colors">เพิ่มคอร์ส</a>
            <a href="/students" class="inline-block px-4 py-2 text-emerald-300 hover:text-emerald-200 transition-colors">ข้อมูลนักเรียน</a>
            <a href="/contact" class="inline-block px-4 py-2 text-emerald-300 hover:text-emerald-200 transition-colors">ติดต่อเรา</a>
        </div>
    </nav>
