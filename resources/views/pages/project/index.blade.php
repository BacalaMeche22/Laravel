<x-app-layout>
    <x-slot name="header">{{ __('Manage Projects') }}</x-slot>
    {{-- <x-slot name="subheader">{{ __('You can manage your projects and register new ones here') }}</x-slot> --}}

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;Add New Project
                            </button>
                        </span>
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr style="cursor: pointer">
                                    <th width="20">#</th>
                                    <th>Project Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($project as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td> 
                                        <td>{{ $data->project_name }}</td> 
                                        <td>{{ $data->start_date }}</td> 
                                        <td>{{ $data->end_date }}</td> 
                                        <td>{{ $data->status }}</td> 
                                        <td class="text-center">
                                            <button class="btn btn-xs btn-block btn-light bg-white text-dark">
                                                <em class="icon ni ni-edit"></em>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- Repeat as necessary for other rows -->
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
                        <h1 class="nk-block-title page-title">Add New Project</h1>
                        <hr class="mt-2 mb-2">

                        <form action="{{ route('project.save') }}" method="POST">
                            @csrf

                            <!-- Project Name -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_project_name">Project Name</label>
                                        <span class="form-note">Specify the Project Name here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_project_name" name="inp_project_name" placeholder="Enter Project Name here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Date -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_start_date">Start Date</label>
                                        <span class="form-note">Specify the Start Date here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="date" class="form-control" id="inp_start_date" name="inp_start_date" required>
                                    </div>
                                </div>
                            </div>

                            <!-- End Date -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_end_date">End Date</label>
                                        <span class="form-note">Specify the End Date here (optional).</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="date" class="form-control" id="inp_end_date" name="inp_end_date">
                                    </div>
                                </div>
                            </div>

                           <!-- Status -->
                           <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_status">Status</label>
                                        <span class="form-note">Specify the current status of the project.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <select class="form-control" id="inp_status" name="inp_status" required>
                                            <option value="">Select Status</option>
                                            <option value="Pending">Pending</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="Completed">Completed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row mt-4">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <em class="icon ni ni-save"></em>&ensp;
                                        Submit New Project
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
