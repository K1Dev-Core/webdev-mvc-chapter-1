<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เปลี่ยนรหัสผ่าน</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <?php include 'header.php' ?>

    <!-- ส่วนแสดงผลหลักของหน้า -->
    <main class="flex-grow container mx-auto px-6 py-12">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white py-8 px-6">
                    <h1 class="text-3xl font-bold text-center">เปลี่ยนรหัสผ่าน</h1>
                </div>
                <div class="p-8">
                    <?php
                    if (isset($data['result'])) {
                        $row = $data['result']->fetch_object();
                    ?>
                        <div class="mb-6">
                            <h2 class="text-xl font-semibold text-gray-800">
                                นักเรียน: <?= htmlspecialchars($row->first_name) ?> <?= htmlspecialchars($row->last_name) ?>
                            </h2>
                            <p class="text-gray-600">ID: <?= $row->id ?></p>
                        </div>
                        
                        <form action="/students-chgpwd?id=<?= $row->id ?>" method="post" onsubmit="return validatePassword()">
                            <div class="mb-4">
                                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">รหัสผ่านใหม่</label>
                                <input type="password" name="password" id="password" required 
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                            </div>
                            
                            <div class="mb-6">
                                <label for="confirm_password" class="block text-gray-700 text-sm font-bold mb-2">ยืนยันรหัสผ่าน</label>
                                <input type="password" name="confirm_password" id="confirm_password" required 
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <button type="submit" 
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    อัพเดทรหัสผ่าน
                                </button>
                                <a href="/students" class="inline-block align-baseline font-bold text-sm text-blue-600 hover:text-blue-800">
                                    ยกเลิก
                                </a>
                            </div>
                        </form>
                    <?php
                    } else {
                        echo '<p class="text-red-600">ไม่พบข้อมูลนักเรียน</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <!-- ส่วนแสดงผลหลักของหน้า -->

    <?php include 'footer.php' ?>
    
    <script>
        function validatePassword() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            
            if (password !== confirmPassword) {
                alert('รหัสผ่านและยืนยันรหัสผ่านไม่ตรงกัน');
                return false;
            }
            
            if (password.length < 6) {
                alert('รหัสผ่านต้องมีความยาวอย่างน้อย 6 ตัวอักษร');
                return false;
            }
            
            return true;
        }
    </script>
</body>

</html>
