<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_permission = Permission::where('slug','view')->first();
		$admin_permission = Permission::where('slug', 'create')->first();

		//RoleTableSeeder.php
		$admin_role = new Role();
		$admin_role->slug = 'admin';
		$admin_role->name = 'Admin';
		$admin_role->save();
		$admin_role->permissions()->attach($admin_permission);

		$user_role = new Role();
		$user_role->slug = 'user';
		$user_role->name = 'User';
		$user_role->save();
		$user_role->permissions()->attach($user_permission);

		$ad_role = Role::where('slug','admin')->first();
		$us_role = Role::where('slug', 'user')->first();

		$createTasks = new Permission();
		$createTasks->slug = 'user';
		$createTasks->name = 'User';
		$createTasks->save();
		$createTasks->roles()->attach($us_role);

		$editUsers = new Permission();
		$editUsers->slug = 'admin';
		$editUsers->name = 'Admin';
		$editUsers->save();
		$editUsers->roles()->attach($ad_role);

		$dev_role = Role::where('slug','admin')->first();
		$manager_role = Role::where('slug', 'user')->first();
		$dev_perm = Permission::where('slug','create')->first();
		$manager_perm = Permission::where('slug','view')->first();
		$admin = new User();
		$admin->name = 'Nguyen Quoc Trung';
		$admin->email = 'mina0902@gmail.com';
		$admin->password = bcrypt('12345678');
		$admin->addresss=' TP.Hai Duong';
		$admin->save();
		$admin->roles()->attach($dev_role);
		$admin->permissions()->attach($dev_perm);
	

		// $manager = new User();
		// $manager->name = 'Pham Thi Thao';
		// $manager->email = 'thaopham@gmail.com';
		// $manager->password = bcrypt('123456789');
		// $manager->addresss=' TP.Thai Binh';
		// $manager->save();
		// $manager->roles()->attach($manager_role);
		// $manager->permissions()->attach($manager_perm);

		
    }
}
