<x-app-layout>
    <x-slot name="header">{{ __('Manage Attendance') }}</x-slot>
    {{-- <x-slot name="subheader">{{ __('You can manage your inventory and register add customer here') }}</x-slot> --}}

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;Add New Attendance
                            </button>
                        </span>
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr style="cursor: pointer">
                                    <th width="20">#</th>
                                    <th>Attendance Date</th>
                                    <th>Employee ID</th>
                                    <th>Status</th>
                                    <th>Check-in Time</th>
                                    <th>Check-out Time</th>

                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($attendance as $data)
                                    <tr>
                                    <td>{{ $loop->iteration }}.</td>
                                    <td> {{ $data->attendance_date }}</td>
                                    <td>{{ $data->employee_id }}</td>
                                    <td> {{ $data->status }} </td>
                                    <td> {{ $data->check_in_time }} </td>
                                    <td> {{ $data->check_out_time }} </td>
                                    <td>
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
                        <h1 class="nk-block-title page-title">Add New Attendance</h1>
                        <hr class="mt-2 mb-2">

                        <form action="{{ route ('attendance.save') }}" method="POST">
                            @csrf

                            <!-- Attendance Date -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_attendance_date">Attendance Date</label>
                                        <span class="form-note">Specify the Attendance Date here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="date" class="form-control" id="inp_attendance_date" name="inp_attendance_date" placeholder="Enter Item Name here..." required>
                                    </div>
                                </div>
                            </div>


                             <!-- Employee ID -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_employee_id">Employee ID</label>
                                        <span class="form-note">Specify Employee ID here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_employee_id" name="inp_employee_id" placeholder="Enter Quantity here..." required>
                                    </div>
                                </div>
                            </div>

                             <!-- Status -->
                             <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_status">Status</label>
                                        <span class="form-note">Specify the Status of the Employee.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <select class="form-control" id="inp_status" name="inp_status" required>
                                            <option value="">Select Status</option>
                                            <option value="present">Present</option>
                                            <option value="absent">Absent</option>
                                            <option value="leave">Leave</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
 <!-- Check in time -->
 <div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_check_in_time">Check in time</label>
            <span class="form-note">Specify the Check in time here..</span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="time" class="form-control" id="inp_check_in_time" name="inp_check_in_time" placeholder="Enter Time in..." required>
        </div>
    </div>
</div>

 <!-- Check in Out -->
 <div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_check_in_out">Check in Out</label>
            <span class="form-note">Specify the Check in out here</span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="time" class="form-control" id="inp_check_in_out" name="inp_check_in_out" placeholder="Enter time out..." required>
        </div>
    </div>
</div>


                            <!-- Submit Button -->
                            <div class="row mt-4">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <em class="icon ni ni-save"></em>&ensp;
                                        Submit New Attendance
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
