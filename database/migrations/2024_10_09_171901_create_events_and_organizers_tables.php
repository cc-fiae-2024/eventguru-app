<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('organizers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name');
            $table->string('terms_and_conditions_url')->nullable();
            $table->string('website_url')->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });

        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('event_places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('area_id')
                ->nullable()
                ->references('id')->on('areas')
                ->nullOnDelete()
                ->cascadeOnUpdate();
        });

        Schema::create('event_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('event_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('name');
        });

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description', 4096);
            $table->foreignId('event_type_id')
                ->nullable()
                ->references('id')->on('event_types')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('event_category_id')
                ->nullable()
                ->references('id')
                ->on('event_categories')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('event_place_id')
                ->nullable()
                ->references('id')
                ->on('event_places')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->string('slug')->unique();
            $table->foreignId('organizer_id')
                ->nullable()
                ->references('id')->on('organizers')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->timestamp('starts_at');
            $table->timestamp('ends_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
        Schema::dropIfExists('event_categories');
        Schema::dropIfExists('event_types');
        Schema::dropIfExists('event_places');
        Schema::dropIfExists('areas');
        Schema::dropIfExists('organizers');
    }
};
