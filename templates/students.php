<?php include 'header.php' ?>

    <main class="container mx-auto px-6 py-12 flex-grow">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="bg-gradient-to-r from-emerald-600 to-teal-700 text-white py-8 px-6">
                <h2 class="text-3xl font-bold text-center"><?= $title ?></h2>
            </div>
            <div class="p-8">
                <form action="/students" method="get" class="mb-6" id="searchForm">
                    <div class="flex gap-2">
                        <input type="text" name="keyword" placeholder="ค้นหาชื่อนักเรียน..." value="<?= htmlspecialchars($_GET['keyword'] ?? '') ?>" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                        <button type="submit" class="px-6 py-2 bg-gradient-to-r from-emerald-600 to-teal-600 text-white rounded-lg hover:from-emerald-700 hover:to-teal-700 transition">ค้นหา</button>
                    </div>
                </form>
                
                <?php
                if ($result && $result->num_rows > 0) {
                    echo '<div class="space-y-4">';
                    while ($row = $result->fetch_object()) {
                ?>
                        <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 hover:shadow-lg transition">
                            <div class="flex justify-between items-start">
                                <div class="flex-grow">
                                    <p class="text-sm text-gray-600 mb-2"><strong>ID:</strong> <?= $row->id ?></p>
                                    <p class="text-lg font-semibold text-gray-800 mb-1"><strong>ชื่อ:</strong> <?= htmlspecialchars($row->first_name) ?></p>
                                    <p class="text-lg font-semibold text-gray-800 mb-1"><strong>นามสกุล:</strong> <?= htmlspecialchars($row->last_name) ?></p>
                                    <p class="text-gray-600 mb-1"><strong>เบอร์โทร:</strong> <?= htmlspecialchars($row->phone_number) ?></p>
                                    <p class="text-gray-600"><strong>อีเมล:</strong> <?= htmlspecialchars($row->email) ?></p>
                                </div>
                                <div class="ml-4 flex flex-col gap-2">
                                    <a href="/students-chgpwd?id=<?= $row->id ?>" 
                                       class="inline-block px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition text-center">
                                        เปลี่ยนรหัสผ่าน
                                    </a>
                                    <a href="/students-delete?id=<?= $row->id ?>" 
                                       onclick="return confirmSubmission()" 
                                       class="inline-block px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700 transition text-center">
                                        ลบข้อมูล
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                    echo '</div>';
                } else {
                    echo '<p class="text-gray-600 mt-4">ไม่พบข้อมูลนักเรียน</p>';
                }
                ?>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>
    
    <script>
        function confirmSubmission() {
            return confirm("ยืนยันการลบข้อมูล ?");
        }
    </script>

</body>

</html>
