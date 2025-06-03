<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
</head>

<body>
     <div class="bg-white p-8 rounded shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center">Sign In</h2>

        <form action="" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block mb-1 font-semibold">Email:</label>
                <input type="email" name="email" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-500" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Password:</label>
                <input type="password" name="password" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-500" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white py-2 rounded">Sign In</button>
        </form>

        <div class="mt-4 text-sm text-center">
            <a href="#" class="text-blue-600 hover:underline">Sign Up</a> |
            <a href="#" class="text-blue-600 hover:underline">Forgot Password?</a>
        </div>
    </div>
</body>

</html>