<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasyarakatTable extends Migration
{
    public function up()
    {
        Schema::create('masyarakat', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Email')->unique();
            $table->string('nohp');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('masyarakat');
    }
}
