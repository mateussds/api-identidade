<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('people_id')->contrained();
            $table->string('rg_number',20);
            $table->date('dispatch_date');
            $table->string('dispatch_organ',120);
            $table->text('digital');
            $table->text('photo');
            $table->text('signature');
            $table->foreignId('law_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
