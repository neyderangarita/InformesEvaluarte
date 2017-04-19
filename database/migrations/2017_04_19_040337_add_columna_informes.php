<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnaInformes extends Migration
{

    public function up()
    {
        
        Schema::table('informes', function(Blueprint $table)
        {
            $table->string('Mat3Componentes1', 50);
            $table->string('Mat3Componentes2', 50);
            $table->string('Mat3Componentes3', 50);
            $table->string('Mat3Competencia1', 50);
            $table->string('Mat3Competencia2', 50);
            $table->string('Mat3Competencia3', 50);
            $table->string('Mat4Componentes1', 50);
            $table->string('Mat4Componentes2', 50);
            $table->string('Mat4Componentes3', 50);
            $table->string('Mat5Componentes1', 50);
            $table->string('Mat5Componentes2', 50);
            $table->string('Mat5Componentes3', 50);
        });
    }

    public function down()
    {
        Schema::table('informes', function(Blueprint $table)
        {
            $table->dropColumn('Mat3Componentes1', 50);
            $table->dropColumn('Mat3Componentes2', 50);
            $table->dropColumn('Mat3Componentes3', 50);
            $table->dropColumn('Mat3Competencia1', 50);
            $table->dropColumn('Mat3Competencia2', 50);
            $table->dropColumn('Mat3Competencia3', 50);
            $table->dropColumn('Mat4Componentes1', 50);
            $table->dropColumn('Mat4Componentes2', 50);
            $table->dropColumn('Mat4Componentes3', 50);
            $table->dropColumn('Mat5Componentes1', 50);
            $table->dropColumn('Mat5Componentes2', 50);
            $table->dropColumn('Mat5Componentes3', 50);
        }); 
    }
}
