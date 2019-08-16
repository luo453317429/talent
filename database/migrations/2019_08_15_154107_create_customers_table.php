<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name')->nullable();
            $table->string('simple_name')->nullable();
            $table->string('full_name2')->nullable();
            $table->string('simple_name2')->nullable();
            $table->string('own_industry')->nullable();
            $table->string('enterprise_grade')->nullable();
            $table->string('enterprise_type')->nullable();
            $table->string('enterprise_type2')->nullable();
            $table->string('subdividing_area')->nullable();
            $table->string('subdividing_area2')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_phone')->nullable();
            $table->text('company_introduction')->nullable();
            $table->string('special_marker')->nullable();
            $table->string('contact_grade')->nullable();
            $table->string('name')->unique();
            $table->string('name2')->nullable();
            $table->string('nickname')->nullable();
            $table->string('gender')->nullable();
            $table->string('department')->nullable();
            $table->string('department2')->nullable();
            $table->string('position')->nullable();
            $table->string('position2')->nullable();
            $table->string('email')->nullable();
            $table->string('email2')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('telephone')->nullable();
            $table->string('function_distribution')->nullable();
            $table->string('we_chat')->nullable();
            $table->string('qq')->nullable();
            $table->string('other_contact')->nullable();
            $table->string('resource')->nullable();
            $table->string('address')->nullable();
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
