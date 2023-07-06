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
        Schema::create('spip_work_letter', function (Blueprint $table) {
            $table->id();
            $table->string('work_letter_title');
            $table->datetime('created_date');
            $table->string('thumbnail');
            $table->string('work_letter_file');
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
        Schema::dropIfExists('spip_work_letter');
    }
};
