<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index($id = null)
    {
        if ($id==null){
            return Employee::orderBy('FirstName', 'asc')->get();
        }
        else{
            return Employee::find($id);
        }
    }

    public function  create(Request $req)
    {
        try {
            $employee = new Employee();
            $employee->LastName = $req->input('LastName');
            $employee->FirstName = $req->input('FirstName');
            $employee->Email = $req->input('Email');
            $employee->Phone = $req ->input('Phone');

            $employee->save();
            return $employee;
        }catch (\Throwable $err){
            return $err->getMessage();
        }
    }

    public function  update(Request $req, $id)
    {
        try {
            $employee = Employee::find($id);

            if ($employee){
                $employee->LastName = $req->input('LastName');
                $employee->FirstName = $req->input('FirstName');
                $employee->Email = $req->input('Email');
                $employee->Phone = $req ->input('Phone');

                $employee->save();
                return $employee;
            }
            else{
                return 'Data not found';
            }

        }catch (\Throwable $err){
            return $err->getMessage();
        }
    }

    public function  delete($id)
    {
        try {
            $employee = Employee::find($id);

            if ($employee){

                $employee->delete();
                return $employee;
            }
            else{
                return 'Data not found';
            }

        }catch (\Throwable $err){
            return $err->getMessage();
        }
    }
}
