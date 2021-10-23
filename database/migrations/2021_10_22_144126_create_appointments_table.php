<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('specialist_id')
            ->constrained('specialists')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->foreignId('doctor_id')
            ->constrained('doctors')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->text('request');
            $table->date('date');
            $table->enum('time',['Pagi','Siang']);
            $table->string('patient_name');
            $table->enum('gender',['Pria','Wanita']);
            $table->date('birth');
            $table->string('email');
            $table->string('contact');
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
        Schema::dropIfExists('appointments');
    }
}
