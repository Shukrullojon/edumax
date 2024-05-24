<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = User::select(
            'users.id as id',
            'users.id_code as id_code',
            'users.image as image',
            'users.name as name',
            'users.surname as surname',
            'users.phone as phone',
            'users.status as status',
            'users.interes_cource_id as interes_cource_id',
            'users.interes_day_id as interes_day_id',
            'users.interes_time as interes_time',
        )
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
            ->where('roles.name', 'Student')
            ->where('model_has_roles.model_type', User::class);
        if (isset($request->status) and !empty($request->status)){
            $students = $students->where('users.status', $request->status);
        }
        if (isset($request->name) and !empty($request->name)) {
            $students = $students->where('users.name', 'LIKE', '%' . $request->name . '%');
        }
        if (isset($request->surname) and !empty($request->surname)) {
            $students = $students->where('users.surname', 'LIKE', '%' . $request->surname . '%');
        }
        if (isset($request->phone) and !empty($request->phone)) {
            $request->merge(
                ['phone' => str_replace(['(', ')', '-'], '', $request->phone)]
            );
            $students = $students->where('users.phone', 'LIKE', '%' . $request->phone . '%');
        }

        if (isset($request->group_id) and !empty($request->group_id)) {
            $students = $students->join('group_student','group_student.student_id','=','users.id');
            $students = $students->where('group_student.group_id', $request->group_id);
        }
        $students = $students
            ->latest('users.updated_at')
            ->groupBy('users.phone')
            ->paginate(30);

        $groups = Group::whereIn('status', [1, 2, 3])->get()->pluck('name', 'id');
        $cnt = User::select("users.status",DB::raw("count(users.id) as number"))
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
            ->where('roles.name', 'Student')
            ->where('model_has_roles.model_type', User::class)
            ->groupBy('users.status')
            ->get()
            ->pluck('number','status');

        return view('student.index',[
            'students' => $students,
            'cnt' => $cnt,
            'groups' => $groups
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
