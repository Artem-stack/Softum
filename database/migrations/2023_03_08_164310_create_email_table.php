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
        Schema::create('email', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('ip')->nullable();
            $table->string('agent')->nullable();
            $table->string('emailRecipient');
            $table->string('emailBcc');
            $table->string('emailCc')->nullable();
            $table->string('emailSubject');
            $table->string('emailBody');
            $table->string('type')->nullable();
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
        Schema::dropIfExists('email');
    }
};
