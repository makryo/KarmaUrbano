<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class rolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1 = Role::create(['name' => 'admin']);
        $rol2 = Role::create(['name' => 'cajero']);

        $per1 = Permission::create(['name' => 'admin.publicacion.index'])->syncRoles([$rol1]);
        Permission::create(['name' => 'admin.ventas.index'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'admin.ventas.create'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'admin.ventas.show'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'admin.ventas.edit'])->syncRoles([$rol1, $rol2]);
        Permission::create(['name' => 'admin.ventas.destroy'])->syncRoles([$rol1, $rol2]);

    }
}
