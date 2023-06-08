<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{

    public function index()
    {
        return view('admin.profile.index', [
            'showProfileFromController' => Profile::all()
        ]);

    }

        public function create()
        {
             return view('admin.profile.create');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
    
            $request->validate([
            'namaFromTableProfile' => 'required|string|max:255',
            'user_id' => 'required|string|max:255',
            'gambarFromTableProfile' => 'required|image|max:4096',
            'alamatFromTableProfile' => 'required|string|max:255',
            'emailFromTableProfile' => 'required|string|max:255',
            'teleponFromTableProfile' => 'required|numeric',
            'aboutFromTableProfile' => 'required|string',
            'bodyFromTableProfile' => 'required|string',
            'titleVisimisiFromTableProfile' => 'required|string',
            'bodyVisimisiFromTableProfile' => 'required|string',
        ]);
    
            $nm = $request->gambarFromTableProfile;
            $namafile = $nm->getClientOriginalName();
    
            $profileDataFromController = new Profile;
            $profileDataFromController->user_id = $request->user_id;
            $profileDataFromController->namaFromTableProfile = $request->namaFromTableProfile;
            $profileDataFromController->gambarFromTableProfile = $namafile;
            $profileDataFromController->alamatFromTableProfile = $request->alamatFromTableProfile;
            $profileDataFromController->emailFromTableProfile = $request->emailFromTableProfile;
            $profileDataFromController->teleponFromTableProfile = $request->teleponFromTableProfile;
            $profileDataFromController->aboutFromTableProfile = $request->aboutFromTableProfile;
            $profileDataFromController->bodyFromTableProfile = $request->bodyFromTableProfile;
            $profileDataFromController->titleVisimisiFromTableProfile = $request->titleVisimisiFromTableProfile;
            $profileDataFromController->bodyVisimisiFromTableProfile = $request->bodyVisimisiFromTableProfile;
    
            $nm->move(public_path().'/img', $namafile);
            $profileDataFromController->save();
            return redirect('admin/profile')->withSuccess('Data berhasil di tambahkan');

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
        public function edit($id)
        {
            // return dd('test');
            // $dtprofils = profil::all();
            $dt = Profile::find($id);
            return view('profile.edit-profiles'
            , compact ('dt'));
    
    
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id)
        {
            $ubah = Profile::find($id);
            $awal = $ubah->gambarFromTableProfile;
    
            $dt = [
                'namaFromTableProfile' =>$request['namaFromTableProfile'],
                'user_id' =>$request['user_id'],
                'gambarFromTableProfile' => $awal,
                'alamatFromTableProfile' =>$request['alamatFromTableProfile'],
                'emailFromTableProfile' =>$request['emailFromTableProfile'],
                'teleponFromTableProfile' =>$request['teleponFromTableProfile'],
                'aboutFromTableProfile' =>$request['aboutFromTableProfile'],
                'bodyFromTableProfile' =>$request['bodyFromTableProfile'],
                'titleVisimisiFromTableProfile' =>$request['titleVisimisiFromTableProfile'],
                'bodyVisimisiFromTableProfile' =>$request['bodyVisimisiFromTableProfile'],
    
            ];
            $request->gambarFromTableProfile->move(public_path().'/img', $awal);
            $ubah->update($dt);
            return redirect('data-profiles')->with('toast_success', 'Data Berhasil Di Ubah');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Profile $profile)
        {
           Profile::destroy($profile->id);
           return redirect('/admin/profile')->with('success', 'Berhasil di hapus');
        }
       
    
}
    /**
     * Display a listing of the resource.
     */
   

    /**
     * Show the form for creating a new resource.
     */
   



