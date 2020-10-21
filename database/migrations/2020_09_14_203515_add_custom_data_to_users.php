<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomDataToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname')
                  ->nullable()
                  ->default(null)
                  ->after('name');
            $table->string('position')
                  ->nullable()
                  ->default(null)
                  ->after('lastname');
            $table->string('position_group')
                  ->nullable()
                  ->default(null)
                  ->after('position');
            $table->string('position_class')
                  ->nullable()
                  ->default(null)
                  ->after('position_group');
            $table->string('organizational_unit')
                  ->nullable()
                  ->default(null)
                  ->after('position_class');
            $table->string('cost_center')
                  ->nullable()
                  ->default(null)
                  ->after('organizational_unit');
            $table->integer('chief_id')
                  ->nullable()
                  ->default(null)
                  ->after('cost_center');
            $table->string('managment')
                  ->nullable()
                  ->default(null)
                  ->after('chief_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profession');
            $table->dropColumn('lastname');
            $table->dropColumn('position');
            $table->dropColumn('position_group');
            $table->dropColumn('position_class');
            $table->dropColumn('organizational_unit');
            $table->dropColumn('cost_center');
            $table->dropColumn('chief_id');
            $table->dropColumn('managment');
        });
    }
}
