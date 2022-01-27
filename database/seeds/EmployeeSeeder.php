<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        factory(Employee::class, 100)->create();
=======
        factory(Employee::class, 10)->create();
>>>>>>> 6ce0066140b6f3579137b6d836015345b9d4a64f
    }
}
