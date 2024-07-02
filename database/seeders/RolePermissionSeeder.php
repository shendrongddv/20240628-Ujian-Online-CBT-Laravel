<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $permissions = ['view courses', 'create courses', 'edit courses', 'delete courses'];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
            ]);
        }

        $teacherRole = Role::create([
            'name' => 'teacher',
        ]);

        $teacherRole->givePermissionTo(['view courses', 'create courses', 'edit courses', 'delete courses']);

        $studentRole = Role::create([
            'name' => 'student',
        ]);

        $studentRole->givePermissionTo(['view courses']);

        // Membuat data user super admin
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole($teacherRole);

        $studentA = User::create([
            'name' => 'Naruto',
            'email' => 'naruto@mail.com',
            'password' => bcrypt('password'),
        ]);

        $studentA->assignRole($studentRole);

        $studentB = User::create([
            'name' => 'Sasuke',
            'email' => 'sasuke@mail.com',
            'password' => bcrypt('password'),
        ]);

        $studentB->assignRole($studentRole);

        $studentC = User::create([
            'name' => 'Sakura',
            'email' => 'sakura@mail.com',
            'password' => bcrypt('password'),
        ]);

        $studentC->assignRole($studentRole);
    }
}
