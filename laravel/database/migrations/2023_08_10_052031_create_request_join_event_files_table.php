<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\RequestJoinEvent;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('request_join_event_files', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('file_path');
            $table->foreignIdFor(RequestJoinEvent::class);
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_join_event_files');
    }
};
