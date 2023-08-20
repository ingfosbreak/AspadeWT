<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Event;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Event::class);
            $table->Integer('order');
            $table->text('text')->nullable();
            $table->enum('type',['small','bold'])->default("small");
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_infos');
    }
};
