<?php
// app/Http/Controllers/LanguageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setLocale($locale)
    {
        // Yalnız dəstəklənən dillərə icazə ver
        if (in_array($locale, ['az', 'ru', 'en'])) {
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
