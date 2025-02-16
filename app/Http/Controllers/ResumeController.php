<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function resume()
    {
        return view('resume'); // فایل ویو resume.blade.php باید در resources/views باشد
    }
}
