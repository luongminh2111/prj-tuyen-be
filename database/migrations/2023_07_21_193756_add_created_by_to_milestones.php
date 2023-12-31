<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedByToMilestones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('milestones', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by');
        });

        // Add a foreign key constraint
        Schema::table('milestones', function (Blueprint $table) {
            $table->foreign('created_by')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('milestones', function (Blueprint $table) {
            //
        });
    }
}
