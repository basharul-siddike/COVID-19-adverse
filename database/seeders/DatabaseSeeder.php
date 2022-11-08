<?php

namespace Database\Seeders;

use Database\Seeders\Backend\AdminRegisterSeeder;
use Database\Seeders\Backend\SARegisterSeeder;
use Database\Seeders\Backend\Setting\PermissionSeeder;
use Database\Seeders\Backend\Setting\RolePermissionSeeder;
use Database\Seeders\Backend\Setting\RoleSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $basePath = base_path('database/data/');
        $years = ['2019/'/*, '2020/', '2021/', '2022/'*/];

        /*        $this->call([
                    PermissionSeeder::class,
                    RoleSeeder::class,
                    RolePermissionSeeder::class,
                    SARegisterSeeder::class,
                    AdminRegisterSeeder::class]);*/

        $this->call(VaccineSeeder::class, false, ['basePath' => $basePath, 'years' => $years]);
        $this->call(PatientSeeder::class, false, ['basePath' => $basePath, 'years' => $years]);
        $this->call(SymptomSeeder::class, false, ['basePath' => $basePath, 'years' => $years]);

        Model::reguard();
    }
}
