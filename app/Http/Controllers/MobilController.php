<?php
namespace App\Http\Controllers;
use App\Models\Mobil; use Illuminate\Http\Request; use Illuminate\Validation\Rule;
class MobilController extends Controller {
 public function index(Request $r){$q=Mobil::query(); if($r->filled('cari')){$s=$r->cari;$q->where(fn($x)=>$x->where('nama_mobil','like',"%$s%")->orWhere('merk','like',"%$s%")->orWhere('plat_nomor','like',"%$s%"));} return view('mobil.index',['data'=>$q->latest()->paginate(8)->withQueryString()]);}
 public function create(){return view('mobil.create');}
 public function store(Request $r){$d=$r->validate(['nama_mobil'=>'required|max:100','merk'=>'required|max:100','tahun'=>'required|integer|min:1990|max:'.(date('Y')+1),'plat_nomor'=>'required|max:20|unique:mobil,plat_nomor','harga_sewa'=>'required|numeric|min:0','status'=>'required|in:Tersedia,Disewa,Perawatan']); Mobil::create($d); return redirect()->route('mobil.index')->with('success','Data mobil berhasil ditambahkan.');}
 public function edit(Mobil $mobil){return view('mobil.edit',compact('mobil'));}
 public function update(Request $r,Mobil $mobil){$d=$r->validate(['nama_mobil'=>'required|max:100','merk'=>'required|max:100','tahun'=>'required|integer|min:1990|max:'.(date('Y')+1),'plat_nomor'=>['required','max:20',Rule::unique('mobil','plat_nomor')->ignore($mobil->id)],'harga_sewa'=>'required|numeric|min:0','status'=>'required|in:Tersedia,Disewa,Perawatan']);$mobil->update($d);return redirect()->route('mobil.index')->with('success','Data mobil berhasil diperbarui.');}
 public function destroy(Mobil $mobil){$mobil->delete();return redirect()->route('mobil.index')->with('success','Data mobil berhasil dihapus.');}
}
