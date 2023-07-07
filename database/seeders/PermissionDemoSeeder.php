<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // reset cahced roles and permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'view surat_masuk']);
        Permission::create(['name' => 'create surat_masuk']);
        Permission::create(['name' => 'view surat_ditakahkan']);
        Permission::create(['name' => 'surat_masuk ditakahkan']);
        Permission::create(['name' => 'view diposisi']);
        Permission::create(['name' => 'create diposisi']);
        

        //create roles and assign existing permissions
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo('view surat_masuk');
        $adminRole->givePermissionTo('create surat_masuk');
        $adminRole->givePermissionTo('view surat_ditakahkan');
        $adminRole->givePermissionTo('surat_masuk ditakahkan');
        $adminRole->givePermissionTo('view diposisi');
        $adminRole->givePermissionTo('create diposisi');
        

        $kamusRole = Role::create(['name' => 'kamus']);
        $kamusRole->givePermissionTo('view surat_masuk');
        $kamusRole->givePermissionTo('create surat_masuk');
        $kamusRole->givePermissionTo('view surat_ditakahkan');
        $kamusRole->givePermissionTo('surat_masuk ditakahkan');
        $kamusRole->givePermissionTo('view diposisi');
        $kamusRole->givePermissionTo('create diposisi');

        $adminTaudRole = Role::create(['name' => 'admintaud']);
        $adminTaudRole->givePermissionTo('view surat_masuk');
        $adminTaudRole->givePermissionTo('create surat_masuk');
        $adminTaudRole->givePermissionTo('view surat_ditakahkan');
        $adminTaudRole->givePermissionTo('surat_masuk ditakahkan');
        // $adminTaudRole->givePermissionTo('view diposisi');
        // $adminTaudRole->givePermissionTo('create diposisi');

        $stafftaudRole = Role::create(['name' => 'stafftaud']);
        $stafftaudRole->givePermissionTo('view surat_masuk');
        $stafftaudRole->givePermissionTo('create surat_masuk');
        $stafftaudRole->givePermissionTo('view surat_ditakahkan');
        // $stafftaudRole->givePermissionTo('surat_masuk ditakahkan');
        // $stafftaudRole->givePermissionTo('view diposisi');
        // $stafftaudRole->givePermissionTo('create diposisi');

        $superadminRole = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule

        // create superadmintaud
        $user = User::factory()->create([
            'name' => 'SuperAdmin',
            'email' => 'superadmintaud@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($adminRole);

        // create kamus
        $user = User::factory()->create([
            'name' => 'Revanza Marsapala',
            'email' => 'revanzamarsapala11@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($kamusRole);

        // create admintaud
        $user = User::factory()->create([
            'name' => 'Admin Taud',
            'email' => 'admintaud@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($adminTaudRole);

        // create stafftaud
        $user = User::factory()->create([
            'name' => 'Staff Taud ',
            'email' => 'stafftaud@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($stafftaudRole);
    }
}
