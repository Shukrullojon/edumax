@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Show Role</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-striped dataTable dtr-inline table-responsive-lg" user="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <td>{{ $role->name }}</td>
                            </tr>
                            <tr>
                                <th>Permissions</th>
                                <td>
                                    @if(!empty($rolePermissions))
                                        @foreach($rolePermissions as $v)
                                            {{ $v->name }}@if(!$loop->last),@endif
                                        @endforeach
                                    @endif
                                </td>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
