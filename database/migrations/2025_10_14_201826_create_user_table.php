<?php

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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string("name1");
            $table->string("name2");
            $table->string("last_name1");
            $table->string("last_name2");
            $table->string("email");
            $table->string("password");
            $table->unsignedBigInteger('rol_id')->nullable();
            $table->foreign('rol_id')
                ->references('id')
                ->on('roles')->onDelete('cascade');
            $table->boolean("on");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
