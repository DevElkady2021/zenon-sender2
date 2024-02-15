<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Branch;
use Illuminate\Database\Seeder;
use App\Models\MainDirect;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Setting extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branch = Branch::create(['name' => 'all']);
        User::create([
            'name' => 'superadmin',
            'email' => 'admin@admin.com',
            'password' => bcrypt(123456789),
            'role' => 'superAdmin',
            'branch_id' => $branch->id,
        ]);
       
    }
}
