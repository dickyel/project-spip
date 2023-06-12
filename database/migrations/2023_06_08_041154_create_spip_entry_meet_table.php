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
        Schema::create('spip_entry_meet', function (Blueprint $table) {
            $table->id();
            $table->string('meet_name');
            $table->longText('meet_description');
            $table->longText('meet_message');
            $table->date('meet_date');
            $table->date('meet_time'); 
            $table->string('meet_link'); 
            
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
        Schema::dropIfExists('spip_entry_meet');
    }
};
