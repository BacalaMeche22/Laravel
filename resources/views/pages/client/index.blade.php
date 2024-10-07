<x-app-layout>
    <x-slot name="header">{{ __('Manage Clients') }}</x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;Add New Client
                            </button>
                        </span>
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr style="cursor: pointer">
                                    <th width="20">#</th>
                                    <th>Client Name</th>
                                    <th>Contact Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td> 
                                        <td>{{ $data->client_name }}</td> 
                                        <td>{{ $data->contact_email }}</td> 
                                        <td>{{ $data->phone_number }}</td> 
                                        <td>{{ $data->address }}</td> 
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
                        <h1 class="nk-block-title page-title">Add New Client</h1>
                        <hr class="mt-2 mb-2">

                        <form action="{{ route('clients.save') }}" method="POST">
                            @csrf

                            <!-- Client Name -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_client_name">Client Name</label>
                                        <span class="form-note">Enter the client name here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_client_name" name="inp_client_name" placeholder="Enter Client Name here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Email -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_contact_email">Contact Email</label>
                                        <span class="form-note">Enter the contact email here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" id="inp_contact_email" name="inp_contact_email" placeholder="Enter Contact Email here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_phone_number">Phone Number</label>
                                        <span class="form-note">Enter the phone number here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_phone_number" name="inp_phone_number" placeholder="Enter Phone Number here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_address">Address</label>
                                        <span class="form-note">Enter the client address here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="inp_address" name="inp_address" placeholder="Enter Address here..." required></input>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row mt-4">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <em class="icon ni ni-save"></em>&ensp;
                                        Submit New Client
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
