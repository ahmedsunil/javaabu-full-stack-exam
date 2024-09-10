<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;

class SettingsController extends Controller
{
    public function __invoke()
    {
        $api_key = ApiKey::first()->api_key;

        return view('settings', compact('api_key'));
    }
}
