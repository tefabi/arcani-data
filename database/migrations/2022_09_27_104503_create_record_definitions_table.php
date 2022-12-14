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
    Schema::create('record_definitions', function (Blueprint $table) {
      $table->bigIncrements('id');

      $table->string('title');
      $table->text('description')->nullable();

      $table->softDeletes();
      $table->timestamps();

      $table->index('title');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('record_definitions');
  }
};
