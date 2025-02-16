<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// در فایل ContactController.php




class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
        
    }
    public function sendMessage(Request $request)
    {
        // اعتبارسنجی داده‌ها
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

}
}
