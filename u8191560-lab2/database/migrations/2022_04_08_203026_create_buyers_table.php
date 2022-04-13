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
        Schema::create('buyers', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->boolean('blocked');
            $table->string('surname');
            $table->string('phone');
            $table->string('email')->unique();
            $table->dateTime('registration');
            $table->timestamps();
        });

        //Проверка на наличие таблицы и её атрибутов
        if (Schema::hasTable('buyers')) {
            echo "buyers exists! \n";

            if (Schema::hasColumn('buyers', 'name')) {
                echo "attribute 'name' exists! \n";
            }
            if (Schema::hasColumn('buyers', 'blocked')) {
                echo "attribute 'blocked' exists! \n";
            }
            if (Schema::hasColumn('buyers', 'surname')) {
                echo "attribute 'surname' exists! \n";
            }
            if (Schema::hasColumn('buyers', 'phone')) {
                echo "attribute 'phone' exists! \n";
            }
            if (Schema::hasColumn('buyers', 'email')) {
                echo "attribute 'email' exists! \n";
            }
            if (Schema::hasColumn('buyers', 'registration')) {
                echo "attribute 'registration' exists! \n";
            }
            if (Schema::hasColumn('buyers', 'id')) {
                echo "attribute 'id' exists! \n";
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
        Schema::dropIfExists('buyers');
    }
};
