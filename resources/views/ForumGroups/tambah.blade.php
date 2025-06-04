<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Forum Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white font-sans">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6">Forum Jurusan</h2>
            
                @csrf

               

                {{-- Nama Jurusan --}}
                <div class="mb-4">
                    <label class="block mb-1 font-semibold">Nama Jurusan:</label>
                    <input type="text" name="jurusan_forum" placeholder=""
                        class="w-full px-4 py-2 bg-gray-700 text-white rounded-lg focus:outline-none" required>
                </div>

                
            </form>
        </div>
    </div>
</body>

</html>
