<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <h1 class="text-xl font-bold text-green-600">KasebChi</h1>
                    </div>
                </div>
                <div class="flex items-center">
                    @auth
                        <a href="{{ route('profile.show') }}" class="text-sm text-gray-700 mr-4">پروفایل من</a>
                        <a href="{{ route('logout') }}" class="text-sm text-red-600">خروج</a>
                    @else
                        <a href="{{ route('login.form') }}" class="text-sm text-gray-700">ورود</a>
                        <a href="{{ route('register.form') }}" class="text-sm text-green-600 mr-4">ثبت نام</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white shadow mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} KasebChi.com - تمامی حقوق محفوظ است.
        </div>
    </footer>
</body>
</html>
