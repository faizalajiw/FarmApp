<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Breeder;
use App\Models\Cage;
use App\Models\Group;
use App\Models\Institution;
use App\Models\Livestock;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $lembaga = Institution::count();

        $kelompok = Group::count();

        $peternak = Breeder::count();

        $kandang = Cage::count();

        $hewan = Livestock::count();

        return view('admin.dashboard.index', compact('lembaga', 'kelompok', 'peternak', 'kandang', 'hewan'));
    }
}
