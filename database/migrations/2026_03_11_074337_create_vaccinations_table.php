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
    Schema::create('vaccinations', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('age');
        $table->string('vaccine_type');
        $table->date('vaccination_date');
        $table->string('dose_number');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccinations');
    }
};
