<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // اعتبارسنجی داده‌ها
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // اینجا می‌تونید پیام رو به ایمیل خودتون ارسال کنید یا در دیتابیس ذخیره کنید.
        // برای ارسال ایمیل، باید یک Mail class ایجاد کنید.

        // برای ذخیره پیام در دیتابیس (در صورت استفاده از پایگاه داده)
        // Message::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'message' => $request->message,
        // ]);

        // برای ارسال ایمیل (در صورت استفاده از ایمیل):
        // Mail::to('your-email@example.com')->send(new ContactMail($request));

        return redirect('/contact')->with('message', 'Your message has been sent!');
    }
}
