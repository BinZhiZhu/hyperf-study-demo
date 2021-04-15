<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

/**
 * Class AddColumnOnSoulEntityTable
 */
class AddColumnOnSoulEntityTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('soul_entity', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('soul_entity', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
}
