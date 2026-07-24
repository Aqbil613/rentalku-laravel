<?php
namespace App\Http\Controllers;
use App\Models\Mobil; use App\Models\Pelanggan;
class DashboardController extends Controller { public function index(){ return view('dashboard',[ 'totalMobil'=>Mobil::count(), 'mobilTersedia'=>Mobil::where('status','Tersedia')->count(), 'mobilDisewa'=>Mobil::where('status','Disewa')->count(), 'totalPelanggan'=>Pelanggan::count() ]); } }
