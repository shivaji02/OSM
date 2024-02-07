<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->id();


            $table->unsignedInteger('admin_id')->default(0);


            $table->string('hero_title')->nullable();
            $table->string('hero_subtitle')->nullable();
            $table->string('background_image')->nullable();
            $table->text('hero_paragraph')->nullable();


            $table->string('feature1_title')->nullable();
            $table->string('feature1_subtitle')->nullable();

            $table->string('feature1_one')->nullable();
            $table->text('feature1_one_paragraph')->nullable();

            $table->string('feature1_two')->nullable();
            $table->text('feature1_two_paragraph')->nullable();

            $table->string('feature1_three')->nullable();
            $table->text('feature1_three_paragraph')->nullable();


            $table->string('feature1_image')->nullable();
            $table->string('feature1_image_title')->nullable();
            $table->string('feature1_image_subtitle')->nullable();




            $table->string('feature2_one')->nullable();
            $table->text('feature2_one_paragraph')->nullable();

            $table->string('feature2_two')->nullable();
            $table->text('feature2_two_paragraph')->nullable();

            $table->string('feature2_three')->nullable();
            $table->text('feature2_three_paragraph')->nullable();


            $table->string('feature2_image')->nullable();
            $table->string('feature2_image_title')->nullable();
            $table->string('feature2_image_subtitle')->nullable();


            $table->string('partners_title')->nullable();
            $table->string('partners_subtitle')->nullable();
            $table->text('partners_paragraph')->nullable();



            $table->string('partners_avatar1')->nullable();
            $table->string('partners_avatar2')->nullable();
            $table->string('partners_avatar3')->nullable();
            $table->string('partners_avatar4')->nullable();
            $table->string('partners_avatar5')->nullable();
            $table->string('partners_avatar6')->nullable();
            $table->string('partners_avatar7')->nullable();
            $table->string('partners_avatar8')->nullable();

            $table->string('story1_title')->nullable();
            $table->text('story1_paragrapgh')->nullable();
            $table->string('story1_image')->nullable();

            $table->string('story2_title')->nullable();
            $table->text('story2_paragrapgh')->nullable();
            $table->string('story2_image')->nullable();

            $table->string('number1')->nullable();
            $table->string('number1_title')->nullable();
            $table->text('number1_paragraph')->nullable();

            $table->string('number2')->nullable();
            $table->string('number2_title')->nullable();
            $table->text('number2_paragraph')->nullable();

            $table->string('number3')->nullable();
            $table->string('number3_title')->nullable();
            $table->text('number3_paragraph')->nullable();

            $table->string('newsletter_title')->nullable();
            $table->text('newsletter_paragraph')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landing_pages');
    }
}
