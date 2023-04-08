<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class PagesController extends Controller
{
    //Controller Index
    public function homepage()
    {
        return inertia::render('home-page');
    }


    // Controller HomePage
//    public function homepage() {
//            return view('home-page');
//        }

    // Controller Halaman Profil
    public function profil() {
        return view('pages.profile-page.kepala-lab');
    }

    // Controller Halaman Jadwal Lab
    public function jadwallab() {
        $ruangan = DB::table('peminjaman_lab')
            ->join("users", "peminjaman_lab.id_user", "=", "users.id")
            ->get();
        // print("<pre>".print_r($updatedDateFormat, true)."</pre>");
        // dd($ruangan);
        return view('pages.schedule-page.jadwal',compact(['ruangan']));
    }
    // public function peminjaman()
    // {
    //     $ruangan = Peminjaman::all();
    //     dd($ruangan);
    //     // return view('schedule-page.jadwal',compact(['ruangan']));
    // }
}
