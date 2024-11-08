<?php

namespace App\Http\Controllers\Backend;

use App\Models\Branch;
use App\Models\Config;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ConfigWebsiteController extends Controller
{
    public function edit()
    {
        $title = 'Cấu hình Website';
        $config = Config::with('branches')->first();

        return view('backend.config.config-website', compact('title', 'config'));
    }

    public function update(Request $request)
    {
        // Validation rules
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'hotline' => 'required|string|max:20',
            'tax_code' => 'required|string|max:200',
            'title_seo' => 'required|string|max:255',
            'keywords_seo' => 'nullable|string|max:255',
            'description_seo' => 'nullable|string|max:1000',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required|string|max:500',
            'link_fb' => 'nullable|string|max:255',
            'link_video_v1' => 'nullable|string',
            'link_video_v2' => 'nullable|string',
            'custom_header' => 'nullable|string|',
            // 'branch_names.*' => 'required|string|max:255',
            // 'branch_addresses.*' => 'required|string|max:500',
            // 'deleted_branch_ids.*' => 'nullable|exists:branches,id' // Ensure the deleted branch IDs are valid
        ]);

        $config = Config::first();

        // Handle logo and icon upload if provided
        if ($request->hasFile('logo')) {
            deleteImage($config->logo);
            $logoPath = $request->file('logo')->store('uploads/logo', 'public');
            $validated['logo'] = $logoPath;
        }

        if ($request->hasFile('icon')) {
            deleteImage($config->icon);
            $iconPath = $request->file('icon')->store('uploads/icon', 'public');
            $validated['icon'] = $iconPath;
        }

        // // Handle the branches update/addition
        // foreach ($request->branch_names as $index => $branchName) {
        //     // Find existing branch by ID or create new one
        //     $branch = Branch::find($index);
        //     if ($branch) {
        //         $branch->name = $branchName;
        //         $branch->address = explode('|', $request->branch_addresses[$index]);
        //         $branch->save();
        //     } else {
        //         // New branch
        //         $branch = new Branch();
        //         $branch->name = $branchName;
        //         $branch->address = explode('|', $request->branch_addresses[$index]);
        //         $branch->config_id = $config->id;
        //         $branch->save();
        //     }
        // }

        // Delete branches that are marked for removal
        // if ($request->has('deleted_branch_ids')) {
        //     foreach ($request->deleted_branch_ids as $branchId) {
        //         $branch = Branch::find($branchId);
        //         if ($branch) {
        //             $branch->delete();
        //         }
        //     }
        // }

        // Update the main config with the new data
        $config->update($validated);

        // Return the success message
        return redirect()->back()->with('success', 'Cấu hình đã được cập nhật thành công');
    }

    public function contact()
    {
        $title = "Danh sách thông tin liên hệ";
        $contacts = Contact::latest()->get();
        return view('backend.config.contact', compact('title', 'contacts'));
    }

    public function mails()
    {
        $title = "Cấu hình email";

        return view('backend.config.mails', compact('title'));
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        $envFile = base_path('.env');
        $envContent = file_get_contents($envFile);

        $envContent = preg_replace("/^MAIL_TO=.*/m", "MAIL_TO={$validated['email']}", $envContent);

        File::put($envFile, $envContent);


        return redirect()->back()->with('success', 'Cấu hình email đã được cập nhật thành công');
    }
}
