<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brides', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->constrained('invitations');
            $table->string('name');
            $table->string('image');
            $table->string('father');
            $table->string('mother');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brides');
    }
};
