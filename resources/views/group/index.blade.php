@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Group Management</h3>

                        @can('group-create')
                            <a href="{{ route('group.create') }}" class="btn btn-success btn-sm float-right">
                                <span class="fas fa-plus-circle"></span>
                                Create
                            </a>
                        @endcan

                        @can('group-filter')
                            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#group_filter" style="margin-right: 5px">
                                <span class="fas fa-filter"></span> Filtr
                            </button>
                        @endcan
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <!-- Data table -->
                        <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg" user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Hour</th>
                                <th>Cource</th>
                                <th>Student</th>
                                <th>Teacher</th>
                                <th>Filial</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @php $i = (!empty(request()->get('page')) ? (request()->get('page') -1) * 20 : 0) + 1; @endphp
                                @foreach ($groups as $key => $group)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $group->name }}</td>
                                        <td>{{ date('H:i',strtotime($group->start_hour)) }} ({{ $group->day->name ?? '' }})</td>
                                        <td>{{ $group->cource->name ?? '' }}</td>
                                        <td>{{ $group->max_student }} ({{ count($group->students) }})</td>
                                        <td>{{ $group->max_teacher }} ({{ count($group->teachers) }})</td>
                                        <td>@if(!empty($group->filial->name)) {{ $group->filial->name ?? '' }} @endif</td>
                                        <td>{{ \App\Models\Group::$group_status[$group->status] }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                @can('group-show')
                                                    <a class="" href="{{ route('group.show',$group->id) }}"
                                                       style="margin-right: 7px">
                                                        <span class="fa fa-eye"></span>
                                                    </a>
                                                @endcan

                                                @can('group-edit')
                                                    <a class="" href="{{ route('group.edit',$group->id) }}"
                                                       style="margin-right: 2px">
                                                        <span class="fa fa-edit" style="color: #562bb0"></span>
                                                    </a>
                                                @endcan

                                                @can('group-destroy')
                                                    <form action="{{ route("group.destroy", $group->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="button"
                                                                style='display:inline; border:none; background: none'
                                                                onclick="if (confirm('Are you sure?')) { this.form.submit() } "><span
                                                                class="fa fa-trash"></span></button>
                                                    </form>
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfooter>
                                <tr>
                                    <td colspan="12">
                                        {{ $groups->withQueryString()->links()   }}
                                    </td>
                                </tr>
                            </tfooter>
                        </table>

                        <div class="modal fade" id="group_filter">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Filtr</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    {!! Form::open(['method'=>'GET']) !!}
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Name:</strong>
                                                    {!! Form::text('name', request()->get('name'), ['placeholder' => 'Name','maxlength'=> 100,'class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Cource:</strong>
                                                    {!! Form::select('cource_id', $cources,request()->get('cource_id'), ['placeholder' => '','maxlength'=> 100,'class' => 'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Day:</strong>
                                                    {!! Form::select('day_id', $days,request()->get('day_id'), ['placeholder' => '','maxlength'=> 100,'class' => 'form-control']) !!}
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Filtr</button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
