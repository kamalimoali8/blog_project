<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // متد index برای نمایش صفحه اصلی
    public function index()
    {
        return view('welcome'); // اینجا می‌تونید به هر ویو دیگری که می‌خواهید اشاره کنید
    }
}
