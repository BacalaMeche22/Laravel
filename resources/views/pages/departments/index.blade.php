<x-app-layout>
    <x-slot name="header">{{ __('Manage Departments') }}</x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;Add New Department
                            </button>
                        </span>
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr style="cursor: pointer">
                                    <th width="20">#</th>
                                    <th>Department Name</th>
                                    <th>Manager ID</th>
                                    <th>Location</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $departments as $data )
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $data->department_name }}</td>
                                        <td>{{ $data->manager_id }}</td>
                                        <td>{{ $data->location }}</td>
                                        <td class="text-center">
                                            <button class="btn btn-xs btn-block btn-light bg-white text-dark">
                                                <em class="icon ni ni-edit"></em>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="registration">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <a href="#" class="close" data-bs-dismiss="modal">
                        <em class="icon ni ni-cross-sm"></em>
                    </a>
                    <div class="modal-body">
                        <h1 class="nk-block-title page-title">Add New Department</h1>
                        <hr class="mt-2 mb-2">

                        <form action="{{ route('departments.save') }}" method="POST">
                            @csrf

                            <!-- Department Name -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_department_name">Department Name</label>
                                        <span class="form-note">Specify the name of the department here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_department_name" name="inp_department_name" placeholder="Enter department name here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Manager ID -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_manager_id">Manager ID</label>
                                        <span class="form-note">Specify the Manager ID for this department.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_manager_id" name="inp_manager_id" placeholder="Enter Manager ID here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_location">Location</label>
                                        <span class="form-note">Specify the location of the department.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_location" name="inp_location" placeholder="Enter location here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row mt-4">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <em class="icon ni ni-save"></em>&ensp;
                                        Submit New Department
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
