<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('user_type_id')->references('id')->on('user_types');
        });

        Schema::table('workout_plans', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('workouts', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('workout_plan_id')->references('id')->on('workout_plans');
        });

        Schema::table('messages', function (Blueprint $table) {
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('recipient_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('message_threads', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('message_id')->references('id')->on('messages')->onDelete('cascade');
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
            $table->dropForeign(['user_type_id']);
        });

        Schema::table('workout_plans', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('workouts', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['workout_plan_id']);
        });

        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign(['sender_id']);
            $table->dropForeign(['recipient_id']);
        });

        Schema::table('message_threads', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['message_id']);
        });
    }
}
