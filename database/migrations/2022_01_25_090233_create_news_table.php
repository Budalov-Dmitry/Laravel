<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade');
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->string('source', 190)->default('Admin');
            $table->enum('status', ['DRAFT', 'ACTIVE', 'BLOCKED'])->default('DRAFT');
            $table->string('image', 255)->nullable();
            $table->text('description')->nullable();
            $table->enum('display', ['true', 'false'])->default('true');
            $table->timestamps();
            $table->index(['slug', 'status', 'display']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
