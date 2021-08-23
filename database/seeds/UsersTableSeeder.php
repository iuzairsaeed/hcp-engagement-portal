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
            'phone' => '0335669874',
            'email' => 'uzair@hcp.com',
            'is_admin' => true,
            'password' => Hash::make('secret'),
            'created_at' => now()
        ]);
        $admin->speciality()->attach([1]);
        $admin->location()->attach([1]);
        $role = Role::Where('name', 'admin')->first();
        $admin->assignRole([$role->id]);

        $user = User::create([
            'name' => 'Asim A.',
            'username' => 'asim',
            'pmdc' => '123456789',
            'phone' => '0335669874',
            'email' => 'asim@hcp.com',
            'is_admin' => true,
            'password' => Hash::make('secret'),
            'created_at' => now()
        ]);
        $user->speciality()->attach([5]);
        $user->location()->attach([2]);
        $roleN = Role::where('name', 'normal')->first();
        $user->assignRole([$roleN->id]);
    }
}
