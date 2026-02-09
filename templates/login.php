<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <?php include 'header.php' ?>

    <!-- ส่วนแสดงผลหลักของหน้า -->
    <main class="flex-grow container mx-auto px-6 py-12">
        <div class="max-w-md mx-auto">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white py-8 px-6">
                    <h1 class="text-3xl font-bold text-center">เข้าสู่ระบบ</h1>
                </div>
                <div class="p-8">
                    <?php if (isset($data['error'])): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <?= htmlspecialchars($data['error']) ?>
                        </div>
                    <?php endif; ?>
                    
                    <form action="/login" method="post">
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">อีเมลผู้ใช้</label>
                            <input type="email" name="email" id="email" required 
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>
                        
                        <div class="mb-6">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">รหัสผ่าน</label>
                            <input type="password" name="password" id="password" required 
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <button type="submit" 
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                เข้าสู่ระบบ
                            </button>
                        </div>
                    </form>
                    
                    <div class="mt-6 text-center">
                        <p class="text-gray-600 text-sm">
                            ทดสอบ: ใช้อีเมลและรหัสผ่านของนักเรียนในระบบ
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ส่วนแสดงผลหลักของหน้า -->

    <?php include 'footer.php' ?>
</body>

</html>
