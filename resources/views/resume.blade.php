<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رزومه من</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- اگر استایل شخصی دارید -->
</head>
<body>
    <header>
        <h1>رزومه من</h1>
    </header>

    <section>
        <h2>تحصیلات</h2>
        <ul>
            <li>لیسانس مهندسی کامپیوتر، دانشگاه XYZ، 2023</li>
            <li>فوق‌لیسانس مهندسی نرم‌افزار، دانشگاه ABC، 2025</li>
        </ul>

        <h2>تجربیات کاری</h2>
        <ul>
            <li>توسعه‌دهنده وب جونیور در شرکت A، 2023-2024</li>
            <li>توسعه‌دهنده وب ارشد در شرکت B، 2024-2025</li>
        </ul>

        <h2>مهارت‌ها</h2>
        <ul>
            <li>PHP، Laravel، JavaScript، HTML، CSS</li>
            <li>مدیریت پایگاه داده (MySQL، PostgreSQL)</li>
            <li>کنترل نسخه (Git، GitHub)</li>
        </ul>
    </section>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">خانه</a></li>
            <li><a href="{{ route('contact') }}">تماس</a></li>
        </ul>
    </nav>
</body>
</html>
