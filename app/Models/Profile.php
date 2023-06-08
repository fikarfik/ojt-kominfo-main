<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;


class Profile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function validateSingleData(array $data) {
        $validate = Validator::make($data, [
            'namaFromTableProfile' => 'unique:profiles'
        ]);

        $validate->after(function ($validate) use ($data){

            if($this->exists) {
                $existingData = $this->where('id', '!=' , $this->id)
                ->where('namaFromTableProfile', $data['namaFromTableProfile'])->first();

                if($existingData) {
                    $validate->errors()->add('namaFromTableProfile', 'Hanya Satu Data Yang Dapat Di Isi');
                }
            }

            return $validate;
        });
    }


    public function user(){

        return $this->belongsTo(User::class);

    }

} 
