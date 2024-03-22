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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('meta_title');
            $table->string('meta_keyword');
            
            $table->timestamps();
        });

        $categories = ['Shape&Tone', 'Full Body', 'Abs', 'Booty', 'Legs'];

        foreach($categories as $category) {
            Category::created([
                'name' => $category,
            ]);

        }
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
