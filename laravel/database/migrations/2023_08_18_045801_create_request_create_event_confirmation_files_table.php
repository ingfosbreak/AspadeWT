<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\RequestCreateEvent;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('request_create_event_confirmation_files', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('file_path');
            $table->foreignIdFor(RequestCreateEvent::class);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_create_event_confirmation_files');
    }
};
