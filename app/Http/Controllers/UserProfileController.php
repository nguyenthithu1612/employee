<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use App\City; 
use App\Division;

class UserProfileController extends Controller
{
    public function showProfile() {
        $id = 1;
        $employee = Employee::where('id', $id)->first();
       
        $city = City::where('id', $employee->city_id)->first();
      
        $department = Department::where('id', $employee->department_id)->first();
        
        $division = Division::where('id', $employee->division_id)->first();

        return view('frontend/profile', ['employee' => $employee, 'city' => $city, 'department' => $department, 'division' => $division]);
    }
}
