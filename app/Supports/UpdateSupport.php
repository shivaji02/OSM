<?php
namespace App\Supports;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSupport
{
    public static function updateSchema()
    {

        if (!Schema::hasColumn('users', 'timezone'))
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->string('timezone',150)->nullable();
            });
        }

        if(!Schema::hasTable('landing_pages'))
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

        if(!Schema::hasTable('pricing_pages'))
        {
            Schema::create('pricing_pages', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('admin_id')->default(0);
                $table->string('hero_title')->nullable();
                $table->string('hero_subtitle')->nullable();
                $table->string('testimonial_image')->nullable();
                $table->string('testimonial_title')->nullable();
                $table->string('testimonial_subtitle')->nullable();
                $table->string('testimonial_author')->nullable();
                $table->string('testimonial_paragraph')->nullable();
                $table->timestamps();
            });
        }

        if(!Schema::hasTable('privacy_policies'))
        {
            Schema::create('privacy_policies', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('admin_id')->default(0);
                $table->string('title')->nullable();
                $table->date('date')->nullable();
                $table->text('description')->nullable();
                $table->timestamps();
            });
        }

        if(!Schema::hasTable('contact_pages'))
        {
            Schema::create('contact_pages', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('admin_id')->default(0);
                $table->string('title')->nullable();
                $table->string('subtitle')->nullable();
                $table->string('email')->nullable()->unique();
                $table->string('phone_number')->nullable()->unique();
                $table->string('twitter')->nullable()->unique();
                $table->string('facebook')->nullable()->unique();
                $table->string('linkedin')->nullable()->unique();
                $table->string('youtube')->nullable()->unique();
                $table->string('address_1')->nullable()->unique();
                $table->string('address_2')->nullable()->unique();
                $table->string('zip')->nullable()->unique();
                $table->string('city')->nullable()->unique();
                $table->string('state')->nullable()->unique();
                $table->string('country')->nullable()->unique();
                $table->timestamps();
            });
        }

        if(!Schema::hasColumn('subscription_plans','paypal_plan_id'))
        {
            Schema::table('subscription_plans', function (Blueprint $table) {
                $table->string('paypal_plan_id')->nullable();
                $table->string('stripe_plan_id')->nullable();

            });

        }
        if(!Schema::hasColumn('images','category_id'))
        {

            Schema::table('images', function (Blueprint $table) {
                $table->unsignedInteger('category_id')->default(0);


        });


        }

        if(!Schema::hasTable('vision_categories'))
        {
            Schema::create('vision_categories', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->unsignedInteger('workspace_id');
                $table->string('slug')->nullable();
                $table->unsignedSmallInteger('sort_order')->default(0);
                $table->text('description')->nullable();
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('terms'))
        {
            Schema::create('terms', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('admin_id')->default(0);
                $table->string('title')->nullable();
                $table->date('date')->nullable();
                $table->text('description')->nullable();
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('cookie_policies'))
        {
            Schema::create('cookie_policies', function (Blueprint $table) {
                $table->id();
                $table->unsignedInteger('admin_id')->default(0);
                $table->string('title')->nullable();
                $table->date('date')->nullable();
                $table->text('description')->nullable();
                $table->timestamps();
            });
        }

        if(!Schema::hasColumn('five_minute_journals','notes')) {

            Schema::table('five_minute_journals', function (Blueprint $table) {
                $table->text('notes')->nullable();


            });
        }

        if(!Schema::hasTable('brain_storms'))
        {
            Schema::create('brain_storms', function (Blueprint $table) {
                $table->id();
                $table->uuid('uuid');
                $table->unsignedInteger('workspace_id');
                $table->unsignedInteger('admin_id')->default(0);
                $table->string('title')->nullable();
                $table->string('image')->nullable();
                $table->longText('src')->nullable();
                $table->text('description')->nullable();
                $table->string('shareable_key')->nullable();
                $table->boolean('is_public')->default(0);
                $table->unsignedInteger('sort_order')->default(0);
                $table->unsignedInteger('group_id')->default(0);
                $table->timestamps();
            });
        }

    }
}
