<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::rename('blog', 'blogs'); // Rename table from 'blog' to 'blogs'
    }

    public function down()
    {
        Schema::rename('blogs', 'blog'); // Rollback function to rename back
    }
};
