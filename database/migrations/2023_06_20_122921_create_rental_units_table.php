// database/migrations/2023_06_11_000000_create_rental_units_table.php

public function up()
{
    Schema::create('rental_units', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('tenant_id')->unsigned();
        $table->integer('room_number');
        $table->date('date_occupied');
        // Add other columns as needed
        $table->timestamps();

        $table->foreign('tenant_id')->references('id')->on('tenants');
    });
}
