<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وب‌سایت شخصی من</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- اگر استایل شخصی دارید -->
</head>
<body>
    <header>
        <h1>به وب‌سایت شخصی من خوش آمدید!</h1>
        <p>این صفحه اصلی وب‌سایت من است.</p>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">خانه</a></li> 
            <li><a href="{{ route('resume') }}">رزومه</a></li>
            <li><a href="{{ route('contact') }}">تماس</a></li>
        </ul>
