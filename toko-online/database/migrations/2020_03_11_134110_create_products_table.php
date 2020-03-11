<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('products', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->timestamps();
        // });
        Schema::table('products', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $cekDeskripsi = $table->hasColumn('description');
            // if($cekDeskripsi){
            //     return 'sudah ada';
            // } else {
            //     $table->string("description");
            // }
            // $table->timestamps();
            $table->string('id', 11)->nullable()->change();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
