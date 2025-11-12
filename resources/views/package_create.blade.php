<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>dolnDjogja | Tambah Paket Wisata</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <form method="POST" action="/view/packages/store" class="bg-white p-6 rounded shadow w-full max-w-md">
        @csrf
        <h2 class="text-2xl font-bold mb-4 text-blue-700">Tambah Paket Wisata</h2>

        <input type="text" name="package_name" placeholder="Nama Paket" class="w-full border p-2 mb-3" required>
        <textarea name="description" placeholder="Deskripsi" class="w-full border p-2 mb-3" required></textarea>
        <input type="text" name="location" placeholder="Lokasi" class="w-full border p-2 mb-3" required>
        <input type="text" name="duration" placeholder="Durasi" class="w-full border p-2 mb-3" required>
        <input type="number" name="price" placeholder="Harga" class="w-full border p-2 mb-3" required>

        <div class="flex justify-between items-center mt-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            <a href="/view/packages" class="text-gray-500 hover:underline">Batal</a>
        </div>
    </form>
</body>

</html>