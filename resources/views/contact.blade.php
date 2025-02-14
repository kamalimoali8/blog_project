<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تماس با من</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- اگر استایل شخصی دارید -->
</head>
<body>
    <header>
        <h1>تماس با من</h1>
    </header>

    <section>
        <form action="{{ route('sendMessage') }}" method="POST">
            @csrf
            <div>
                <label for="name">نام:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">ایمیل:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">پیام:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">ارسال پیام</button>
        </form>
    </section>

    <nav>
        <ul>
            <li><
