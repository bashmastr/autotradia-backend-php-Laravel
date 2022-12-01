<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'list',
            'create',
            'edit',
            'delete',
            'view',
            'pages',
            'sittings',
            'dashboard',
            'roles',
            'permissions',
            'users',
            'orders',
            'product_review_report',
            'buy',
            'status_update',
            'finance',
            'marketing',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
