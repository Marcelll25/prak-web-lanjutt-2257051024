<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'Irfan Marcellino',
            'kelas' => 'A',
            'npm' => '2257051054'
        ];

        return view('profile', $data);
        }
}
