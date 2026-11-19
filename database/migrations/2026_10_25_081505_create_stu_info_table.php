
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stuinf', function (Blueprint $table) {
            $table->id();
            $table->string('stuno');
            $table->string('stname');
            $table->string('faclutly');
            $table->string('department');
            $table->string('semster');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stuinf');
    }
};
