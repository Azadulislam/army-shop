<?php

use App\Models\Agency;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('successes', function (Blueprint $table) {
            $table->id('id');
            $table->string('item_name', '255');
            $table->string('slug', 255)->comment('Url format of name.');
            $table->decimal('value', 9, 2);
            $table->integer('year_start');
            $table->foreignIdFor(Agency::class);
            $table->integer('year_end');
            $table->string('web_ad_title', 255);
            $table->string('web_ad_sub_title', 255);
            $table->string('web_ad_image', 255);
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
        Schema::dropIfExists('successes');
    }
};
