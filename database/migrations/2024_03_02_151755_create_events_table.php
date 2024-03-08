<?php

use App\Models\Place;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('date');
            $table->integer('duration_hours');
            $table->integer('duration_minutes');
            $table->boolean('acceptance')->default(0);
            $table->integer('numplaces_available')->default(0);
            $table->foreignIdFor(
                User::class
            )->constrained()->onDelete('cascade');
            $table->foreignIdFor(
                Place::class
            )->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
