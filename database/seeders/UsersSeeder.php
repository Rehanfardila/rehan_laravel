<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru1 = User::create([
            'name' => 'Edwin',
            'role' => 'guru',
            'email' => 'Ed@gmail.com',
            'password' => bcrypt('password123'),
        ]);
        $guru1->assignRole('guru');

        $siswa1 = User::create([
            'name' => 'Maulana',
            'role' => 'siswa',
            'email' => 'Maulana@gmail.com',
            'password' => bcrypt('password123'),
        ]);
        $siswa1->assignRole('siswa');

        $admin1 = User::create([
            'name' => 'Rehan',
            'role' => 'admin',
            'email' => 'Rehan@gmail.com',
            'password' => bcrypt('password123'),
        ]);
        $admin1->assignRole('admin');
    }
}
