<?php

namespace App\Http\Controllers;

use App\Models\GroupSchedule;
use App\Models\GroupTeacher;
use App\Models\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $schedules = GroupSchedule::where('teacher_id', auth()->user()->id)
            ->groupBy(['group_id','teacher_id'])
            ->get();
        $datas = [];
        foreach ($schedules as $schedule){
            $sub_data = [
                'group' => [
                    'id' => $schedule->group_id,
                    'name' =>$schedule->group->name ?? '',
                    'cource' => $schedule->group->cource->name ?? '',
                    'day' => $schedule->day->name ?? '',
                    'time' => date("H:i", strtotime($schedule->begin_time))."-".date("H:i", strtotime($schedule->end_time)),
                    'lang' => $schedule->group->lang->name ?? '',
                    'direction' => $schedule->direction->name ?? ''
                ],
                'days' => [],
                'students' => [],
            ];
            foreach ($schedule->days as $d){
                $students = GroupSchedule::where('group_id',$schedule->group_id)
                    ->where('teacher_id',$d->teacher_id)
                    ->where('date',$d->date)
                    ->orderByDesc('student_id')
                    ->get();
                $std = [];
                foreach ($students as $s){
                    $std[$s->student_id] = [
                        'attendance' => $s->attend,
                        'homework' => $s->homework,
                        'ball' => $s->ball,
                    ];
                }
                $sub_data['days'][$d->date] = [
                    'teacher' => $d->teacher->name,
                    'students' => $std,
                ];
            }
            foreach ($schedule->students as $stu){
                $uStd = User::find($stu->student_id);
                $sub_data['students'][] = [
                    'id' => $stu->student_id,
                    'name' => $uStd->name ?? '',
                    'surname' => $uStd->surname ?? '',
                    'age' => 30,
                ];
            }

            $datas[]=$sub_data;
        }

        /*$datas = [
            [
                'group' => [
                    'id' => 1,
                    'name' => 'S0101',
                    'cource' => '6 month',
                    'day' => 'Du-se-cho',
                    'time' => '13:00-14:00',
                    'lang' => 'uz',
                    'direction' => 'speaking',
                ],
                'days' => [
                    '06.05.2024' => [
                        'teacher' => 'F.Ahmad',
                        'students' => [
                            7 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            6 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            5 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                        ],
                    ],
                    '07.05.2024' => [
                        'teacher' => 'F.Ahmad',
                        'students' => [
                            7 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            6 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            5 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                        ],
                    ],
                    '08.05.2024' => [
                        'teacher' => 'F.Ahmad',
                        'students' => [
                            7 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            6 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            5 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                        ],
                    ],
                    '09.05.2024' => [
                        'teacher' => 'F.Ahmad',
                        'students' => [
                            7 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            6 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            5 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                        ],
                    ],
                    '10.05.2024' => [
                        'teacher' => 'F.Ahmad',
                        'students' => [
                            7 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            6 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            5 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                        ],
                    ],
                    '11.05.2024' => [
                        'teacher' => 'F.Ahmad',
                        'students' => [
                            7 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            6 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            5 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                        ],
                    ],
                ],
                'students' => [
                    [
                        'id' => 7,
                        'name' => 'Yahyo 1',
                        'surname' => 'Baxtiyorov 1',
                        'age' => 25,
                    ],
                    [
                        'id' => 6,
                        'name' => 'Yahyo 2',
                        'surname' => 'Baxtiyorov 2',
                        'age' => 20,
                    ],
                    [
                        'id' => 6,
                        'name' => 'Yahyo 3',
                        'surname' => 'Baxtiyorov 3',
                        'age' => 20,
                    ],
                ],
            ],

            [
                'group' => [
                    'id' => 1,
                    'name' => 'S0101',
                    'cource' => '6 month',
                    'day' => 'Du-se-cho',
                    'time' => '13:00-14:00',
                    'lang' => 'uz',
                    'direction' => 'speaking',
                ],
                'days' => [
                    '06.05.2024' => [
                        'teacher' => 'F.Ahmad',
                        'students' => [
                            7 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            6 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            5 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                        ],
                    ],
                    '07.05.2024' => [
                        'teacher' => 'F.Ahmad',
                        'students' => [
                            7 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            6 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            5 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                        ],
                    ],
                    '08.05.2024' => [
                        'teacher' => 'F.Ahmad',
                        'students' => [
                            7 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            6 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            5 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                        ],
                    ],
                    '09.05.2024' => [
                        'teacher' => 'F.Ahmad',
                        'students' => [
                            7 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            6 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            5 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                        ],
                    ],
                    '10.05.2024' => [
                        'teacher' => 'F.Ahmad',
                        'students' => [
                            7 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            6 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            5 => [
                                'attendance' => 3,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                        ],
                    ],
                    '11.05.2024' => [
                        'teacher' => 'F.Ahmad',
                        'students' => [
                            7 => [
                                'attendance' => 2,
                                'homework' => 2,
                                'ball' => 0,
                            ],
                            6 => [
                                'attendance' => 10,
                                'homework' => 5,
                                'ball' => 0,
                            ],
                            5 => [
                                'attendance' => 7,
                                'homework' => 7,
                                'ball' => 0,
                            ],
                        ],
                    ],
                ],
                'students' => [
                    [
                        'id' => 7,
                        'name' => 'Yahyo 1',
                        'surname' => 'Baxtiyorov 1',
                        'age' => 25,
                    ],
                    [
                        'id' => 6,
                        'name' => 'Yahyo 2',
                        'surname' => 'Baxtiyorov 2',
                        'age' => 20,
                    ],
                    [
                        'id' => 5,
                        'name' => 'Yahyo 3',
                        'surname' => 'Baxtiyorov 3',
                        'age' => 20,
                    ],
                ],
            ]
        ];*/


        return view('attendance.index',[
            'schedules' => $schedules,
            'datas' => $datas
        ]);
    }


}
