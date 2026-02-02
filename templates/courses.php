<?php include 'header.php' ?>

    <main class="container mx-auto px-6 py-12 flex-grow">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="bg-gradient-to-r from-emerald-600 to-teal-700 text-white py-8 px-6">
                <h2 class="text-3xl font-bold text-center"><?= $title ?></h2>
            </div>
            <div class="p-8">
                <form action="/courses" method="get" class="mb-6" id="searchForm">
                    <div class="flex gap-2">
                        <input type="text" name="keyword" placeholder="ค้นหาชื่อหรือรหัสหลักสูตร..." value="<?= htmlspecialchars($_GET['keyword'] ?? '') ?>" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                        <button type="submit" class="px-6 py-2 bg-gradient-to-r from-emerald-600 to-teal-600 text-white rounded-lg hover:from-emerald-700 hover:to-teal-700 transition">ค้นหา</button>
                    </div>
                </form>
                
                <?php
                if ($result && $result->num_rows > 0) {
                    echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">';
                    while ($row = $result->fetch_object()) {
                ?>
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 hover:shadow-lg transition">
                            <p class="text-sm text-gray-600 mb-2"><strong>รหัสวิชา:</strong> <?= htmlspecialchars($row->course_code) ?></p>
                            <h3 class="text-xl font-bold text-gray-800 mb-2"><?= htmlspecialchars($row->course_name) ?></h3>
                            <p class="text-gray-600"><strong>อาจารย์:</strong> <span class="text-emerald-600"><?= htmlspecialchars($row->instructor) ?></span></p>
                        </div>
                <?php
                    }
                    echo '</div>';
                } else {
                    echo '<p class="text-gray-600 mt-4">ไม่พบข้อมูลหลักสูตร</p>';
                }
                ?>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>
