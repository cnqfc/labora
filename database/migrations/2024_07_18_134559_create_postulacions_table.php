<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('postulacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('oferta_laboral_id')->constrained()->onDelete('cascade');
            $table->string('applicant_name');
            $table->string('applicant_email');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulacions');
    }
};
