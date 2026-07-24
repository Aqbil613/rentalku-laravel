<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder; use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder { public function run():void { DB::table('mobil')->insert([['nama_mobil'=>'Avanza 1.3 G','merk'=>'Toyota','tahun'=>2022,'plat_nomor'=>'B 1234 SSM','harga_sewa'=>350000,'status'=>'Tersedia','created_at'=>now(),'updated_at'=>now()],['nama_mobil'=>'Brio Satya','merk'=>'Honda','tahun'=>2023,'plat_nomor'=>'B 5678 AQB','harga_sewa'=>300000,'status'=>'Disewa','created_at'=>now(),'updated_at'=>now()]]); DB::table('pelanggan')->insert([['nama'=>'Budi Santoso','alamat'=>'Jakarta Barat','no_hp'=>'081234567890','no_ktp'=>'3174010101010001','created_at'=>now(),'updated_at'=>now()]]); } }
