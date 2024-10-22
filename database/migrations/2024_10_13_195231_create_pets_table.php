<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('users')->onDelete('cascade'); // Eigenaar van het huisdier
            $table->string('name'); // Naam van het huisdier
            $table->string('animal_type'); // Soort huisdier
            $table->string('profile_picture')->nullable(); // Profielfoto van het huisdier
            $table->timestamp('when')->nullable(); // Wanneer het huisdier beschikbaar is
            $table->decimal('hourly_price', 8, 2); // Uurtarief voor oppas
            $table->integer('time')->nullable(); // Duur (bijvoorbeeld in uren) voor oppas
            $table->timestamps(); // Timestamps voor created_at en updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
