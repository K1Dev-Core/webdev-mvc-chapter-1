<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Request (Error:400)</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <?php include 'header.php' ?>

    <!-- ส่วนแสดงผลหลักของหน้า -->
    <main class="flex-grow container mx-auto px-6 py-12">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="bg-gradient-to-r from-red-600 to-red-700 text-white py-8 px-6">
                    <h1 class="text-3xl font-bold text-center">Bad Request (Error:400)</h1>
                </div>
                <div class="p-8">
                    <p class="text-gray-700 text-center text-lg">
                        <?= $data['message'] ?? 'Your request is invalid.' ?>
                    </p>
                    <div class="text-center mt-6">
                        <a href="/students" class="inline-block px-6 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition">
                            กลับไปหน้านักเรียน
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ส่วนแสดงผลหลักของหน้า -->

    <?php include 'footer.php' ?>
</body>

</html>
