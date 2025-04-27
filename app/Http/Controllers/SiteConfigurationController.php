<?php

namespace App\Http\Controllers;

use App\Models\SiteConfiguration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SiteConfigurationController extends Controller
{
    public function edit()
    {
        $config = SiteConfiguration::firstOrCreate([]);
        return view('back.site-configuration', compact('config'));
    }

    public function update(Request $request)
    {
        $config = SiteConfiguration::first();

        $request->validate([
            'site_name' => 'required|string|max:255',
            'site_email' => 'nullable|email|max:255',
            'site_phone' => 'nullable|string|max:50',
            'currency_code' => 'required|string|max:10',
            'currency_symbol' => 'required|string|max:5',
            'currency_position' => 'required|in:left,right',
            'site_favicon' => 'nullable|image|max:512',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'is_maintenance_mode' => 'nullable|boolean',
        ]);

        $data = $request->except(['site_favicon']);

        if ($request->hasFile('site_favicon')) {
            $data['site_favicon'] = $request->file('site_favicon')->store('site', 'public');
        }

        $config->update($data);

        Cache::forget('site_currency_config');
        Cache::forget('site_config');

        return redirect()->back()->with('success', 'Site configuration updated successfully.');
    }
}
