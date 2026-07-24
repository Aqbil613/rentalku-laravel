<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up():void{Schema::create('mobil',function(Blueprint $t){$t->id();$t->string('nama_mobil');$t->string('merk');$t->year('tahun');$t->string('plat_nomor')->unique();$t->decimal('harga_sewa',12,2);$t->enum('status',['Tersedia','Disewa','Perawatan'])->default('Tersedia');$t->timestamps();});} public function down():void{Schema::dropIfExists('mobil');}};
