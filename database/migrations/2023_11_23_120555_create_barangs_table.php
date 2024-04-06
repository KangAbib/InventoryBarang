<?php

use App\Models\Jenis;
use App\Models\Kondisi;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('namaBarang');
            $table->date('tglMasuk');
            $table->foreignIdFor(Jenis::class);
            $table->foreignIdFor(Kondisi::class);
            $table->date('tglKeluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
