<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotesToFiveMinuteJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('five_minute_journals', function (Blueprint $table) {
            // First, check if the 'notes' column does not exist
            if (!Schema::hasColumn('five_minute_journals', 'notes')) {
                // Only add the 'notes' column if it doesn't exist
                $table->text('notes')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('five_minute_journals', function (Blueprint $table) {
            // Check if the 'notes' column exists before attempting to drop it
            if (Schema::hasColumn('five_minute_journals', 'notes')) {
                // Drop the 'notes' column if it exists
                $table->dropColumn('notes');
            }
        });
    }
}
