<x-app-layout>
    <x-slot name="header">{{ __('Manage Events') }}</x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;Add New Event
                            </button>
                        </span>
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr style="cursor: pointer">
                                    <th width="20">#</th>
                                    <th>Event Name</th>
                                    <th>Event Date</th>
                                    <th>Location</th>
                                    <th>Host Employee ID</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td> 
                                        <td>{{ $data->event_name }}</td> 
                                        <td>{{ $data->event_date }}</td> 
                                        <td>{{ $data->location }}</td> 
                                        <td>{{ $data->host_employee_id }}</td> 
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
                        <h1 class="nk-block-title page-title">Add New Event</h1>
                        <hr class="mt-2 mb-2">

                        <form action="{{ route('events.save') }}" method="POST">
                            @csrf

                            <!-- Event Name -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_event_name">Event Name</label>
                                        <span class="form-note">Specify the event name here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_event_name" name="inp_event_name" placeholder="Enter event name here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Event Date -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_event_date">Event Date</label>
                                        <span class="form-note">Specify the date of the event.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="date" class="form-control" id="inp_event_date" name="inp_event_date" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_location">Location</label>
                                        <span class="form-note">Specify the event location here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_location" name="inp_location" placeholder="Enter location here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Host Employee ID -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_host_employee_id">Host Employee ID</label>
                                        <span class="form-note">Enter the ID of the employee hosting the event (optional).</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="inp_host_employee_id" name="inp_host_employee_id" placeholder="Enter host employee ID here...">
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row mt-4">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <em class="icon ni ni-save"></em>&ensp;
                                        Submit New Event
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
