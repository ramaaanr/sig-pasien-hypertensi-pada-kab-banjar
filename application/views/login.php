<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style type="text/css">
        #login-container {
            background-image: url('<?= base_url(); ?>public/bg-login.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }
    </style>
</head>
<body id="login-container" class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div  class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h1 class="text-xl font-bold  text-center">Sistem Informasi Geografis Pasien Hipertensi pada Kabupaten Banjar</h1>
        <div class="border-t border-t-gray-700 my-4">
            
        </div>
<h2 class="text-center font-semibold text-gray-700">
    Selamat Datang, Silahkan Login
</h2>
        <div id="loginForm">
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" id="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button id="loginButton" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Login</button>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#loginButton').on('click', function(e) {
                e.preventDefault();
                var username = $('#username').val();
                var password = $('#password').val();

                $.ajax({
                    url: '<?= base_url(); ?>index.php/User/login',
                    type: 'POST',
                    data: {
                        username: username,
                        password: password
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Login Successful',
                                text: 'You will be redirected shortly.',
                                timer: 1500,
                                showConfirmButton: false
                            }).then(() => {
                                window.location.href = '<?= base_url(); ?>index.php'; // Ganti 'main' dengan halaman utama Anda
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Login Failed',
                                text: response.message
                            });
                        }
                    }
                });
            });
        });
    </script>

</body>
</html>
