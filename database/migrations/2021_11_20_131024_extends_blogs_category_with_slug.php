<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExtendsBlogsCategoryWithSlug extends Migration
{
    public function up()
    {
        Schema::table('blogs_category', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });
    }

    public function down()
    {
        Schema::table('blogs_category', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
