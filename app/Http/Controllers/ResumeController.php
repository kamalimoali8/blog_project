<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        // می‌توانید اطلاعات رزومه خود مثل تحصیلات، تجربیات و مهارت‌ها را به ویو ارسال کنید
        return view('resume');
    }
}
