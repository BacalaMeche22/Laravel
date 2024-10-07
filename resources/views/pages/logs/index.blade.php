<x-app-layout>
    <x-slot name="header">{{ __('Manage Logs') }}</x-slot>
    {{-- <x-slot name="subheader">{{ __('You can manage your logs and register add customer here') }}</x-slot> --}}

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;Add New Logs
                            </button>
                        </span>
            <table class="datatable-init table table-hover">
            <thead>
            <tr style="cursor: pointer">
            <th width="20">#</th>
            <th>Employee ID</th>
            <th>Log Type</th>
            <th>Log Date</th>
            <th>Description</th>
            <th width="100" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($logs as $data)
            <tr>
                <td>{{ $loop->iteration }}.</td> <!-- Using $loop->iteration for row numbers -->
                <td>{{ $data->employee_id }}</td> <!-- Display Employee ID -->
                <td>{{ $data->log_type }}</td> <!-- Display Log Type (e.g., Check-in, Check-out) -->
                <td>{{ $data->log_date }}</td> <!-- Display Log Date -->
                <td>{{ $data->description }}</td> <!-- Display Description -->
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
                        <h1 class="nk-block-title page-title">Add New Logs</h1>
                        <hr class="mt-2 mb-2">

                        <form action="{{ route ('logs.save') }}" method="POST">
                            @csrf

                          <!-- Employee ID -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_employee_id">Employee ID</label>
            <span class="form-note">Specify the Employee ID here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_employee_id" name="inp_employee_id" placeholder="Enter Employee ID here..." required>
        </div>
    </div>
</div>



<!-- Log Date -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_log_date">Log Date</label>
            <span class="form-note">Specify the Log Date here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" id="inp_log_date" name="inp_log_date" placeholder="Enter Log Date here..." required>
        </div>
    </div>
</div>

<!-- Log Type -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_log_type">Log Type</label>
            <span class="form-note">Specify the Log Type here (e.g., Check-in, Check-out).</span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_log_type" name="inp_log_type" placeholder="Enter Log Type here..." required>
        </div>
    </div>
</div>

<!-- Description -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_description">Description</label>
            <span class="form-note">Provide additional details for this log.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_description" name="inp_description" placeholder="Enter description here...">
        </div>
    </div>
</div>

                            <!-- Submit Button -->
                            <div class="row mt-4">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <em class="icon ni ni-save"></em>&ensp;
                                        Submit New Item
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
