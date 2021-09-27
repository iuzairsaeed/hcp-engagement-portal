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
            'setting-getList',
            'setting-list',
            'setting-create',
            'setting-edit',
            'setting-delete',
            'support-getList',
            'support-list',
            'support-create',
            'support-edit',
            'support-delete',
            'reaction-getList',
            'reaction-list',
            'reaction-create',
            'reaction-edit',
            'reaction-delete',
            'comment-getList',
            'comment-list',
            'comment-create',
            'comment-edit',
            'comment-delete',
            'education-getList',
            'education-list',
            'education-create',
            'education-edit',
            'education-delete',
            'experience-getList',
            'experience-list',
            'experience-create',
            'experience-edit',
            'experience-delete',

        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
