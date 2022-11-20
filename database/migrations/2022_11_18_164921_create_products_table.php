<?php

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Type;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 255);
            $table->string('slug', 255)->comment('Url format of name.');
            $table->text('description');
            $table->string('code');
            $table->decimal('retail_price', 9,2);
            $table->foreignIdFor(Type::class);
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(SubCategory::class);
            $table->string('image', 255);
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
        Schema::dropIfExists('products');
    }
};
