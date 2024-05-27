<?php

namespace App\Http\Controllers;

use App\Models\GroupSchedule;
use App\Models\GroupTeacher;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $schedules = GroupSchedule::where('teacher_id', auth()->user()->id)
            ->groupBy(['date','teacher_id']);
        return view('attendance.index',[
            'schedules' => $schedules,
        ]);
    }


}
