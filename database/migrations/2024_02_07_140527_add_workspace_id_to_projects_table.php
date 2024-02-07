<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWorkspaceIdToProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            // Add the 'workspace_id' column as an unsigned integer
            $table->unsignedBigInteger('workspace_id')->after('id')->nullable();
            // Optionally, add a foreign key constraint if 'workspaces' table exists
            // $table->foreign('workspace_id')->references('id')->on('workspaces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            // Drop the foreign key constraint first if it was added
            // $table->dropForeign(['workspace_id']);
            // Then drop the 'workspace_id' column
            $table->dropColumn('workspace_id');
        });
    }
}
