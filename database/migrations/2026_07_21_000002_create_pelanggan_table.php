<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up():void{Schema::create('pelanggan',function(Blueprint $t){$t->id();$t->string('nama');$t->text('alamat');$t->string('no_hp',20);$t->string('no_ktp',20)->unique();$t->timestamps();});} public function down():void{Schema::dropIfExists('pelanggan');}};
