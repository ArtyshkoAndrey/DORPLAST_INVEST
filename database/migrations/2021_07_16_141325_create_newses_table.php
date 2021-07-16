<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('newses', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title')->unique();
      $table->text('content');
      $table->text('description');
      $table->text('baner')->nullable();
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
    Schema::dropIfExists('newses');
  }
}
