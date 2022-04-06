<?php

use App\Models\WordType;
use App\Models\Dictionary;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_word_type', function (Blueprint $table) {
            $table->foreignIdFor(Dictionary::class);
            $table->foreignIdFor(WordType::class);
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
        Schema::dropIfExists('dictionary_word_type');
    }
};
