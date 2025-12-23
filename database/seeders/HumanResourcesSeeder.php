<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\support\Facades\DB;
class HumanResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Faker = Faker::create();;
        DB::table('departments')->insert([
            [
            'name'=> 'HR',
            'description'=>'Human Resources',
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'name'=> 'IT',
            'description'=>'Department of Information Technology',
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'name'=> 'Sales',
            'description'=>'Department of Sales and Marketing',
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
        ]);

        DB::table('roles')->insert([
            [
            'title'=> 'HR',
            'description'=>'Handles recruitment and employee relations',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'title'=> 'Developer',
            'description'=>'handles software development and maintenance',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'title'=> 'Sales',
            'description'=>'handles client acquisition and relationship management',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
        ]);

        DB::table('employees')->insert([
            [
                'fullname' => $Faker->name(),
                'email' => $Faker->unique()->safeEmail(),
                'phone_number' => $Faker->phoneNumber(),
                'address' => $Faker->address(),
                'birth_date' => $Faker->dateTimeBetween('-40 years', '-20 years'),
                'hire_date' => Carbon::now(),
                'department_id' => 1,
                'role_id' => 1,
                'status' => 'active',
                'salary' => $Faker->randomFloat(2, 3000, 80000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'fullname' => $Faker->name(),
                'email' => $Faker->unique()->safeEmail(),
                'phone_number' => $Faker->phoneNumber(),
                'address' => $Faker->address(),
                'birth_date' => $Faker->dateTimeBetween('-40 years', '-20 years'),
                'hire_date' => Carbon::now(),
                'department_id' => 1,
                'role_id' => 1,
                'status' => 'active',
                'salary' => $Faker->randomFloat(2, 3000, 80000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ]
        ]);

        DB::table('tasks')->insert([
            [
                'title' => $Faker->sentence(3),
                'description' => $Faker->paragraph(),
                'assigned_to' => 1,
                'due_date' => Carbon::parse('2025-12-31'),
                'status' => 'pending',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
               
            ],
            [
                'title' => $Faker->sentence(3),
                'description' => $Faker->paragraph(),
                'assigned_to' => 1,
                'due_date' => Carbon::parse('2025-12-31'),
                'status' => 'pending',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ]
        ]);

        DB::table('payroll')->insert([
            [
                'employee_id' => 1,
                'amount' => $Faker->randomFloat(2, 3000, 80000),
                'bonuses' => $Faker->randomFloat(2, 500, 5000),
                'deductions' => $Faker->randomFloat(2, 100, 2000),
                'net_salary' => $Faker->randomFloat(2, 3000, 80000),
                'pay_date' => Carbon::parse('2025-12-31'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => 2,
                'amount' => $Faker->randomFloat(2, 3000, 80000),
                'bonuses' => $Faker->randomFloat(2, 500, 5000),
                'deductions' => $Faker->randomFloat(2, 100, 2000),
                'net_salary' => $Faker->randomFloat(2, 3000, 80000),
                'pay_date' => Carbon::parse('2025-12-31'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
           
           
        ]);
        DB::table('presence')->insert([
            [
                'employee_id' => 1,
                'check_in' => Carbon::parse('2025-02-10 09:00:00'),
                'check_out' => Carbon::parse('2025-02-10 17:00:00'),
                'date' => Carbon::parse('2025-02-10'),
                'status' => 'present',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'employee_id' => 2,
                'check_in' => Carbon::parse('2025-02-10 09:00:00'),
                'check_out' => Carbon::parse('2025-02-10 17:00:00'),
                'date' => Carbon::parse('2025-02-10'),
                'status' => 'present',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
           
           
        ]);

        DB::table('leave_requests')->insert([
           [
                'employee_id' => 1,
                'leave_type' => 'Sick leave',
                'start_date' => Carbon::parse('2025-03-20'),
                'end_date' => Carbon::parse('2025-03-23'),
                'status' => 'pending',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
           [
                'employee_id' => 2,
                'leave_type' => 'Vacation leave',
                'start_date' => Carbon::parse('2025-03-20'),
                'end_date' => Carbon::parse('2025-03-23'),
                'status' => 'pending',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            
           
           
        ]);
    }
}
