<?php
namespace App\Http\Controllers;
use App\Models\Pelanggan; use Illuminate\Http\Request; use Illuminate\Validation\Rule;
class PelangganController extends Controller {
 public function index(Request $r){$q=Pelanggan::query();if($r->filled('cari')){$s=$r->cari;$q->where(fn($x)=>$x->where('nama','like',"%$s%")->orWhere('no_hp','like',"%$s%")->orWhere('no_ktp','like',"%$s%"));}return view('pelanggan.index',['data'=>$q->latest()->paginate(8)->withQueryString()]);}
 public function create(){return view('pelanggan.create');}
 public function store(Request $r){$d=$r->validate(['nama'=>'required|max:100','alamat'=>'required','no_hp'=>'required|max:20','no_ktp'=>'required|digits_between:12,20|unique:pelanggan,no_ktp']);Pelanggan::create($d);return redirect()->route('pelanggan.index')->with('success','Data pelanggan berhasil ditambahkan.');}
 public function edit(Pelanggan $pelanggan){return view('pelanggan.edit',compact('pelanggan'));}
 public function update(Request $r,Pelanggan $pelanggan){$d=$r->validate(['nama'=>'required|max:100','alamat'=>'required','no_hp'=>'required|max:20','no_ktp'=>['required','digits_between:12,20',Rule::unique('pelanggan','no_ktp')->ignore($pelanggan->id)]]);$pelanggan->update($d);return redirect()->route('pelanggan.index')->with('success','Data pelanggan berhasil diperbarui.');}
 public function destroy(Pelanggan $pelanggan){$pelanggan->delete();return redirect()->route('pelanggan.index')->with('success','Data pelanggan berhasil dihapus.');}
}
