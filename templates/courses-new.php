<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลคอร์ส</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <?php include 'header.php' ?>

    <!-- ส่วนแสดงผลหลักของหน้า -->
    <main class="flex-grow container mx-auto px-6 py-8">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">เพิ่มข้อมูลคอร์ส</h1>
            
            <?php if (isset($data['message'])): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    <?= htmlspecialchars($data['message']) ?>
                </div>
            <?php endif; ?>
            
            <section class="bg-white rounded-lg shadow-md p-6">
                <form action="/courses-new" method="post" onsubmit="return confirmSubmission()">
                    <div class="mb-4">
                        <label for="code" class="block text-gray-700 text-sm font-bold mb-2">Course Code</label>
                        <input type="text" name="code" id="code" required 
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>
                    
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Course Name</label>
                        <input type="text" name="name" id="name" required 
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>
                    
                    <div class="mb-6">
                        <label for="instructor" class="block text-gray-700 text-sm font-bold mb-2">Instructor</label>
                        <input type="text" name="instructor" id="instructor" required 
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <button type="submit" 
                                class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Submit
                        </button>
                        <a href="/courses" class="inline-block align-baseline font-bold text-sm text-emerald-600 hover:text-emerald-800">
                            ยกเลิก
                        </a>
                    </div>
                </form>
            </section>
        </div>
    </main>
    <!-- ส่วนแสดงผลหลักของหน้า -->

    <?php include 'footer.php' ?>
    
    <script>
        function confirmSubmission() {
            return confirm("ต้องการเพิ่มข้อมูลจริงหรือไม่ ?");
        }
    </script>
</body>

</html>
