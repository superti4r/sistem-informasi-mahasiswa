<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISFO &mdash; Politeknik Negeri Jember</title>
    <link rel="icon" href="{{ asset('polije-logo-single.png') }}" type="image/png" />
    @vite(['resources/css/app.css', 'resources/css/login.css', 'resources/js/login.js', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-blue-800 font-poppins relative overflow-hidden">
    <div id="preloader" class="preloader">
        <div class="loading-dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <div id="mainContent"
        class="main-content min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="w-full max-w-md space-y-8">
            <div class="text-center">
                <div class="mx-auto mb-6 flex items-center justify-center">
                    <img src="{{ asset('polije-logo-single.png') }}" alt="Logo Politeknik Negeri Jember"
                        class="w-24 h-24 sm:w-28 sm:h-28 md:w-32 md:h-32 lg:w-40 lg:h-40 xl:w-48 xl:h-48 object-contain" />
                </div>
                <h2 class="text-white text-xl sm:text-2xl font-semibold">Sistem Informasi Mahasiswa</h2>
                <div class="w-16 h-1 bg-white mx-auto mt-4 rounded-full opacity-60"></div>
            </div>

            <div class="glass-effect rounded-3xl shadow-2xl p-8 sm:p-10">
                <div class="space-y-6">
                    <div class="text-center">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-2">Masuk ke Akun Anda</h2>
                        <p class="text-gray-600 text-sm">Gunakan akun Google @polije.ac.id untuk melanjutkan</p>
                    </div>

                    <div>
                        <a href="/"
                            class="google-btn w-full bg-white border-2 border-gray-200 text-gray-700 font-medium py-4 px-6 rounded-2xl hover:border-blue-800 hover:bg-gray-50 focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-50 flex items-center justify-center space-x-3 group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                                <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
                                    c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4
                                    C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20
                                    C44,22.659,43.862,21.35,43.611,20.083z" />
                                <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12
                                    c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4
                                    C16.318,4,9.656,8.337,6.306,14.691z" />
                                <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238
                                    C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025
                                    C9.505,39.556,16.227,44,24,44z" />
                                <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571
                                    c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24
                                    C44,22.659,43.862,21.35,43.611,20.083z" />
                            </svg>
                            <span class="text-base">Masuk dengan Google</span>
                        </a>
                    </div>

                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-white text-gray-500 rounded-full">Tidak bisa login?</span>
                        </div>
                    </div>

                    <div class="text-center space-y-3">
                        <p class="text-sm text-gray-600">Akun bermasalah?</p>
                        <div class="flex flex-col sm:flex-row gap-2 text-sm items-center justify-center">
                            <a href="#" class="text-blue-700 hover:text-blue-900 font-medium">Segera hubungi administrator disini.</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center text-blue-100 text-sm">
                <p class="mb-2">© 2025 Sistem Informasi Mahasiswa &mdash; POLIJE</p>
                <p class="mb-2">Build 300625.beta-development</p>
            </div>
        </div>
    </div>
</body>

</html>
