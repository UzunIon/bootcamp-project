<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateContactInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE contact_info (
                `customer_id` BIGINT UNSIGNED NOT NULL,
                `phone_number` VARCHAR(20) NOT NULL,
                `email` VARCHAR(50) NOT NULL,
                PRIMARY KEY (`customer_id`),
                UNIQUE KEY (`customer_id`),
                CONSTRAINT `fk_contact_info_customers`
                FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`)
                ON DELETE CASCADE
                ON UPDATE CASCADE
            ) ENGINE=InnoDB;
        ");

        // Schema::create('contact_info', function (Blueprint $table) {
        //     $table->foreignId('customer_id')
        //     ->nullable()
        //     ->constrained()
        //     ->cascadeOnUpdate()
        //     ->cascadeOnDelete();
        //     $table->string('phone_number', 20);
        //     $table->string('email', 50)->unique();

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("
            DROP TABLE contact_info;
        ");
    }
}
