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
            $table->string('full_name');
            $table->string('full_name2');
            $table->string('simple_name');
            $table->string('simple_name2');
            $table->string('own_industry');
            $table->string('enterprise_grade');
            $table->string('enterprise_type');
            $table->string('subdividing_area');
            $table->string('enterprise_type2');
            $table->string('subdividing_area2');
            $table->string('company_website');
            $table->string('company_phone');
            $table->text('company_introduction');
            $table->boolean('special_marker');
            $table->string('contact_grade');
            $table->string('name')->unique();
            $table->string('nickname');
            $table->string('name2');
            $table->boolean('gender');
            $table->string('department');
            $table->string('position');
            $table->string('department2');
            $table->string('position2');
            $table->string('email');
            $table->string('cellphone');
            $table->string('email2');
            $table->string('telephone');
            $table->string('function_distribution');
            $table->string('we_chat');
            $table->string('other_contact');
            $table->string('qq');
            $table->string('resource');
            $table->string('address');
            $table->string('remark');
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
