@extends('adminpnlx.layouts.layout')
@section('content')
    <div class="subheader py-3 subheader-solid">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ Route('Admin.Dashboard') }}">Dashboard</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ Route($modelName . '.index') }}">{{$sectionName}}</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Assign Permission
                    </li>
                </ol>
            </nav>
            <div class="d-flex align-items-center">

            </div>
        </div>
    </div>

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route($modelName . '.assignPermission') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf()
                            <div class="card card-custom gutter-b example example-compact">
                                <div class="card-header">
                                    <h3 class="card-title"> Role :- {{ $modalDetail->name ?? '' }}</h3>
                                    <div class="card-toolbar"> 
                                        <input type="hidden" name="role_id" value="{{ $modalDetail->id }}">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-muted">
                                                <th>Module Name</th>
                                                <th>Permission List</th>
                                                <th>Permission Create</th>
                                                <th>Permission Update</th>
                                                <th>Permission Delete</th>
                                                <th>Permission Other</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($module_lists as $index => $module)
                                                <tr>
                                                    <td>
                                                        {{ $module->name }}
                                                        <input type="hidden" name="permissions[{{ $index }}][module_id]"
                                                            value="{{ $module->id }}">
                                                    </td>

                                                    <td><input type="checkbox" name="permissions[{{ $index }}][list]" value="1">
                                                    </td>
                                                    <td><input type="checkbox" name="permissions[{{ $index }}][create]"
                                                            value="1"></td>
                                                    <td><input type="checkbox" name="permissions[{{ $index }}][update]"
                                                            value="1"></td>
                                                    <td><input type="checkbox" name="permissions[{{ $index }}][delete]"
                                                            value="1"></td>
                                                    <td><input type="checkbox" name="permissions[{{ $index }}][other]"
                                                            value="1"></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Module Name</th>
                                                <th>Permission List</th>
                                                <th>Permission Create</th>
                                                <th>Permission Update</th>
                                                <th>Permission Delete</th>
                                                <th>Permission Other</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection