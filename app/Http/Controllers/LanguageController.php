<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function setLanguage(Request $request)
    {
        $request->validate(['language' => 'required|in:en,fr,es']);
        $locale = $request->language;
        App::setLocale($locale);
        Session::put('locale', $locale);

        return redirect()->back();
    }
}
