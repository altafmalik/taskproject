<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            // $table->string('created_at', 255);
            // $table->string('update_at', 255);
        });
       
            // Insert some stuff
            // DB::table('drivers')->insert(
            //     array(
            //         'name' => 'Altaf Malik'
            //     )
            // );

            $data =  array(
                [
                    'name' => 'Altaf Malik',
                ],
                [
                    'name' => 'Ben Rogers',
                ],
                [
                    'name' => 'Ray Ali',
                ],
                [
                    'name' => 'Ben Rogers',
                ],
                [
                    'name' => 'Dave Renshaw',
                ],
                [
                    'name' => 'Michael Haddad',
                ],
                [
                    'name' => 'Simon Zaidan',
                ],
                [
                    'name' => 'Matt Dudley',
                ],
                [
                    'name' => 'Luke Hansen',
                ],
                [
                    'name' => 'Danny May',
                ],
                [
                    'name' => 'Zak Smith',
                ],
            );
            foreach ($data as $datum){
                $driver = new App\Models\Driver(); 
                $driver->name =$datum['name'];
                $driver->save();
               
            }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
