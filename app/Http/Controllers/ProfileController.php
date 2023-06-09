<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function index()
    {
        return view('admin.profile.index', [
            'showProfileFromController' => Profile::where('user_id', auth()->user()->id)->latest()->get(),
        ]);

    }

        public function create()
        {
             return view('admin.profile.create');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request )
        {
             {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'namaFromTableProfile' => 'required',
            'slugFromTableProfile' => 'required',
            'titleVisiMisiFromTableProfile' => 'required',
            'gambarFromTableProfile' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add more validation rules for other fields
        ]);

        // Create a new Profile instance and populate it with the validated data
        $profile = new Profile();
        $profile->user_id = $request->user_id;
        $profile->namaFromTableProfile= $validatedData['namaFromTableProfile'];
        $profile->slugFromTableProfile = $validatedData['slugFromTableProfile'];
        $profile->titleVisiMisiFromTableProfile = $validatedData['titleVisiMisiFromTableProfile'];

        // Check if an image file is uploaded
        if ($request->hasFile('gambarFromTableProfile')) {
        $image = $request->file('gambarFromTableProfile');

        // Generate a unique filename for the image
        $filename = time() . '.' . $image->getClientOriginalExtension();

        // Store the uploaded image file in the storage/app/public directory
        $image->storeAs('public', $filename);

        // Save the image filename to the profile instance
        $profile->gambarFromTableProfile = $filename;
    
         $profile['slugFromTableProfile'] = Str::slug($request->slugFromTableProfile, '-');
        $profile['user_id'] = auth()->user()->id;
        $profile['excerptFromTableProfile'] = Str::limit(strip_tags($request->bodyFromTableProfile), 100, '...');
        $profile['excerptVisiMisiFromTableProfile'] = Str::limit(strip_tags($request->bodyVisiMisiFromTableProfile), 100, '...');

        }

        $profile->alamatFromTableProfile = $request->alamatFromTableProfile;
        $profile->emailFromTableProfile = $request->emailFromTableProfile;
        $profile->teleponFromTableProfile = $request->teleponFromTableProfile;
        $profile->aboutFromTableProfile = $request->aboutFromTableProfile;
        $profile->titleVisiMisiFromTableProfile = $request->titleVisiMisiFromTableProfile;
        $profile->bodyFromTableProfile = $request->bodyFromTableProfile;
        $profile->bodyVisiMisiFromTableProfile = $request->bodyVisiMisiFromTableProfile;
        // Add more fields as needed

        // Save the profile data
         $profile->save();

        // Redirect to the appropriate page based on the saved data
        
        return redirect('/admin/profile')->with('success', 'Data profil berhasil disimpan.');
         
    }
    //          $rules = [
    //         "namaFromTablelProfile" => "required",
    //         "slugFromTableProfile" => "required|unique:profiles",
    //         "alamatFromTableProfile" => "required",
    //         "emailFromTableProfile" => "required",
    //         "teleponFromTableProfile" => "required",
    //         "aboutFromtableProfile" => "required",
    //         "bodyFromTableProfile" => "required",
    //         "titleVisiMisiFromTableProfile" => "required",
    //         "gambarFromTableProfile" => 'image|file|max:2046',
    //         "bodyVisiMisiFromTableProfile" => "required"
    //     ];
 
    //     $validatedData = $request->validate($rules);
    //     $validatedData['gambarFromTableProfile'] = $request->file('gambarFromTableProfile')->store('profile-images');

    //      if ($request->slugFromTablePost != $profile->slugFromTablePost) {
    //     $validatedData['slugFromTableProfile'] = Str::slug($request->slugFromTableProfile, '-');
    //      }
    //     $validatedData['user_id'] = auth()->user()->id;
    //     $validatedData['excerptFromTableProfile'] = Str::limit(strip_tags($request->bodyFromTableProfile), 100, '...');
    //     $validatedData['excerptVisiMisiFromTableProfile'] = Str::limit(strip_tags($request->bodyVisiMisiFromTableProfile), 100, '...');

    // Profile::create($validatedData);
        
    //     return redirect('/admin/profile')->with('success', 'berita berhasil di tambahkan');
    
    }
    
        /**
         * Display the specified resource.
         */
        public function show(Profile $profile)
        {
        
            return view('admin.profile.showDetail', [
                'showProfileFromController' => $profile
                ]);
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Profile $profile)
        {
            // return dd('test');
            // $dtprofils = profil::all();
            // $dt = Profile::find($id);
            return view('admin.profile.edit', [
                'showProfileFromController' => $profile
            ] );
           
    
    
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Profile $profile)
        {
            // Validate the incoming request data
        $validatedData = $request->validate([
            'namaFromTableProfile' => 'required',
            'slugFromTableProfile' => 'required|unique:profiles,slugFromTableProfile,' . $profile->id,
            'titleVisiMisiFromTableProfile' => 'required',
            'gambarFromTableProfile' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add more validation rules for other fields
        ]);

        // Update the profile instance with the validated data
        $profile->namaFromTableProfile = $validatedData['namaFromTableProfile'];
        $profile->slugFromTableProfile = $validatedData['slugFromTableProfile'];
        $profile->titleVisiMisiFromTableProfile = $validatedData['titleVisiMisiFromTableProfile'];

         // Check if an image file is uploaded
        if ($request->hasFile('gambarFromTableProfile')) {
            $image = $request->file('gambarFromTableProfile');

            // Generate a unique filename for the image
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Store the uploaded image file in the storage/app/public directory
            Storage::disk('public')->put($filename, file_get_contents($image));

            // Delete the old image file
            if ($profile->gambarFromTableProfile) {
                Storage::disk('public')->delete($profile->gambarFromTableProfile);
            }

            // Save the new image filename to the profile instance
            $profile->gambarFromTableProfile = $filename;

        $profile['user_id'] = auth()->user()->id;
        $profile['excerptFromTableProfile'] = Str::limit(strip_tags($request->bodyFromTableProfile), 100, '...');
        $profile['excerptVisiMisiFromTableProfile'] = Str::limit(strip_tags($request->bodyVisiMisiFromTableProfile), 100, '...');


             // Update other fields as needed
        $profile->alamatFromTableProfile = $request->alamatFromTableProfile;
        $profile->emailFromTableProfile = $request->emailFromTableProfile;
        $profile->teleponFromTableProfile = $request->teleponFromTableProfile;
        $profile->aboutFromTableProfile = $request->aboutFromTableProfile;
        $profile->titleVisiMisiFromTableProfile = $request->titleVisiMisiFromTableProfile;
        $profile->bodyFromTableProfile = $request->bodyFromTableProfile;
        $profile->bodyVisiMisiFromTableProfile = $request->bodyVisiMisiFromTableProfile;
        // Add more fields as needed

        // Save the updated profile data
        $profile->save();

        // Redirect to the appropriate page based on the saved data
        return redirect('/admin/profile')->with('success', 'Data profil berhasil diperbarui.');
        }

          
          
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Profile $profile)
       {
        if($profile->gambarFromTableProfile) {
            Storage::delete($profile->gambarFromTableProfile);
        }

        Profile::destroy($profile->id);
        return redirect('/admin/profile')->with('success', 'Berhasil Di Hapus');
    }
       
    
}