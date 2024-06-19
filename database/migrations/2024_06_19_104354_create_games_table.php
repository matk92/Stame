<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('release_date');
            $table->string('genre');
            $table->text('summary');
            $table->string('producer');
            $table->integer('pegi');
            $table->integer('score');
            $table->text('comment');
            $table->string('cover_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.s
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};