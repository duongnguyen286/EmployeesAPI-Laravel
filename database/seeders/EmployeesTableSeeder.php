<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $employees = [
            ['LastName'=>'Nguyễn', 'FirstName'=>'Dương', 'Email'=>'duong@gmail.com', 'Phone'=>'0362893369'],
            ['LastName'=>'Hoàng Thị', 'FirstName'=>'Ngọc Anh']
        ];
        foreach ($employees as $employee){
            DB::table('employees')->insert($employee);
        }
    }
}
