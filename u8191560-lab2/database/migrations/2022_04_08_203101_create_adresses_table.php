<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('buyer_id');
            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('adress_name');
            $table->string('city');
            $table->string('street');
            $table->integer('house');
            $table->integer('floor');
            $table->integer('flat');
            $table->string('code');
            $table->dateTime('add_time');
            $table->timestamps();
        });

        //Проверка на наличие таблицы и её атрибутов
        if (Schema::hasTable('adresses')) {
            echo "adresses exists! \n";

            if (Schema::hasColumn('adresses', 'id')) {
                echo "attribute 'id' exists! \n";
            }
            if (Schema::hasColumn('adresses', 'buyer_id')) {
                echo "attribute 'buyer_id' exists! \n";
            }
            if (Schema::hasColumn('adresses', 'adress_name')) {
                echo "attribute 'adress_name' exists! \n";
            }
            if (Schema::hasColumn('adresses', 'city')) {
                echo "attribute 'city' exists! \n";
            }
            if (Schema::hasColumn('adresses', 'street')) {
                echo "attribute 'street' exists! \n";
            }
            if (Schema::hasColumn('adresses', 'house')) {
                echo "attribute 'house' exists! \n";
            }
            if (Schema::hasColumn('adresses', 'floor')) {
                echo "attribute 'floor' exists! \n";
            }
            if (Schema::hasColumn('adresses', 'flat')) {
                echo "attribute 'flat' exists! \n";
            }
            if (Schema::hasColumn('adresses', 'code')) {
                echo "attribute 'code' exists! \n";
            }
            if (Schema::hasColumn('adresses', 'add_time')) {
                echo "attribute 'add_time' exists! \n";
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
};
