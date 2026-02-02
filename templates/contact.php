<?php include 'header.php' ?>

    <main class="container mx-auto px-6 py-12 flex-grow">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="bg-gradient-to-r from-emerald-600 to-teal-700 text-white py-8 px-6">
                <h2 class="text-3xl font-bold text-center">ติดต่อเรา</h2>
            </div>
            <div class="p-8">
                <form method="POST" action="/contact">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">ชื่อ</label>
                        <input type="text" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">อีเมล</label>
                        <input type="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">ข้อความ</label>
                        <textarea rows="4" name="message" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-emerald-600 to-teal-600 text-white py-2 px-4 rounded-lg hover:from-emerald-700 hover:to-teal-700 transition">ส่งข้อความ</button>
                </form>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>