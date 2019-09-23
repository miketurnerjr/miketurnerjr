<?php

use App\Http\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Mike',
            'last_name' => 'Turner',
            'email' => 'miketurnerjr78@gmail.com',
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now()
        ]);
    }
}
