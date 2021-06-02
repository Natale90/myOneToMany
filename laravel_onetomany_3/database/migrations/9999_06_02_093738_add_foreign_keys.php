<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {

            $table -> foreign('tag_id', 'postTag')
                   -> references('id')
                   -> on('tags');
        });

        Schema::table('details', function (Blueprint $table) {

            $table -> primary('post_id');
            $table -> foreign('post_id', 'detailpost')
                   -> references('id')
                   -> on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {

            $table -> dropForeign('postTag');
        });

        Schema::table('details', function (Blueprint $table) {

            $table -> dropForeign('detailpost');
        });
    }
}
