<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Uzair Saeed',
            'username' => 'uzair',
            'pmdc' => '123456789',
            'speciality' => 'speciality',
            'phone' => '0335669874',
            'location' => '64 , K0 - D L Appartment Flat 19',
            'email' => 'uzair@hcp.com',
            'is_admin' => true,
            'password' => Hash::make('secret'),
            'created_at' => now()
        ]);
        $role = Role::Where('name', 'admin')->first();
        $admin->assignRole([$role->id]);

        $user = User::create([
            'name' => 'Asim A.',
            'username' => 'asim',
            'pmdc' => '123456789',
            'speciality' => 'speciality',
            'phone' => '0335669874',
            'location' => '64 , K0 - D L Appartment Flat 19',
            'email' => 'asim@hcp.com',
            'is_admin' => true,
            'password' => Hash::make('secret'),
            'created_at' => now()
        ]);
        $roleN = Role::where('name', 'normal')->first();
        $user->assignRole([$roleN->id]);
    }
}
