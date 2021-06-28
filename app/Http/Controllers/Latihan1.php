<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class Latihan1 extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function biodata()
    {

        $data['stat'] =  array('wn' => 'Indonesia', 
        'agama' => 'Islam', 
        'instansi' => 'PT OTW Kaya', 
        'posisi' => 'Direktur');


        $data['biodata'] =  array('name' => 'Haisyam', 
        'kelas' => 'IK19B', 
        'hobi' => 'Ngoding', 
        'cita2' => 'Programmer');

        $data['exp'] =  array('pt1' => 'PT Dialogue Group', 
        'pt2' => 'LP3I Tasikmalaya', 
        'sertifikat' => 'Junior Web Programmer', 
        'ujikom' => 'Operator Komputer');


        return  view('latihan1', $data);
    }
}