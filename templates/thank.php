<?php include 'header.php' ?>

    <main class="container mx-auto px-6 py-12 flex-grow">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="bg-gradient-to-r from-emerald-600 to-teal-700 text-white py-8 px-6">
                <h2 class="text-3xl font-bold text-center">ขอบคุณคุณ <?= $name ?></h2>
            </div>
            <div class="p-8">
                <p class="text-gray-600 mb-2"><strong>อีเมล:</strong> <?= $email ?></p>
                <p class="text-gray-600"><strong>ข้อความ:</strong> <?= $message ?></p>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>
