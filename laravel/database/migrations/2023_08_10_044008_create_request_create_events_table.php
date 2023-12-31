<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('request_create_events', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string("name");
            $table->integer("num_member");
            $table->integer("num_staff");
            $table->enum('category',['outdoor','indoor','concert','sport','academic']);
            $table->integer("budget");
            $table->date('date_register');
            $table->date('date_start');
            $table->date('date_close');
            $table->string('location');
            $table->string("description"); 
            $table->enum('status',['approved','denied'])->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_create_events');
    }
};
