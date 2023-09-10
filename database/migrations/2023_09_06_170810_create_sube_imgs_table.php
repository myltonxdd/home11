<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sube_imgs', function (Blueprint $table) {
            $table->id();
            $table->binary('dataUp')->nullable();
            $table->string('tittle');
            $table->string('text');
            $table->string('autor_name');
            $table->date('date');

            $table->timestamps();

        });
        DB::statement("ALTER TABLE sube_imgs MODIFY COLUMN dataUp LONGBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sube_imgs');
    }
};
