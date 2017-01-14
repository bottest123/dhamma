<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeyValueStorageModel extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_value_storage', function (Blueprint $table) {
            $table->string('key');
            $table->text('value');
            $table->timestamps();

            $table->primary(['key']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('key_value_storage');
    }
}
