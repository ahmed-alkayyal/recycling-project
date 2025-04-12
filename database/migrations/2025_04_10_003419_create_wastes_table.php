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
        Schema::create('wastes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('img');
            $table->enum('type',array('لابتوب','شاشه','هاتف','بطاريه'));
            $table->enum('status',array('جديد','مستعمل','مكسور'));
            $table->enum('consent',array('0','1'))->default('0');
            $table->string('description')->nullable();
            $table->decimal('price')->nullable();
            $table->unsignedBigInteger('client_id')->nullable(); 
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('set null')->onUpdate('cascade');
            // $table->integer('client_id');
            // $table->foreign('client_id')->references('id')->on('clients');
						// ->onDelete('no action')
			// 			// ->onUpdate('no action');
            // $table->integer('client_id');
            // $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wastes');
    }
};
