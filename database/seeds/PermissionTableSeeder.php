<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'post-getList',
            'post-list',
            'post-create',
            'post-edit',
            'post-delete',
            'activity-getList',
            'activity-list',
            'activity-create',
            'activity-edit',
            'activity-delete',
            'event-getList',
            'event-list',
            'event-create',
            'event-edit',
            'event-delete',
            'settings-getList',
            'settings-list',
            'settings-create',
            'settings-edit',
            'settings-delete',
            'notifications-getList',
            'notifications-list',
            'notifications-create',
            'notifications-edit',
            'notifications-delete',

        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
