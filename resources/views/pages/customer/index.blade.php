<x-app-layout>
    <x-slot name="header">{{ __('Manage Customer') }}</x-slot>
    <x-slot name="subheader">{{ __('You can manage your customer and register new customer here') }}</x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;Register New Customer
                            </button>
                        </span>
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr style="cursor: pointer">
                                    <th width="20">#</th>
                                    <th>Customer Name</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Complete Address</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $data)
                                    <tr>
                                    <td>1.</td>
                                    <td> {{ $data->cus_last_name }}, {{ $data->cus_first_name }}</td>
                                    <td>{{ $data->cus_phone_number }}</td>
                                    <td> {{ $data->cus_email }} </td>
                                    <td> {{ $data->cus_address }} </td>
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
                        <h1 class="nk-block-title page-title">Register New Customer</h1>
                        <hr class="mt-2 mb-2">

                        <form action="{{ route ('customer.save') }}" method="POST">
                            @csrf

                            <!-- First Name -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_fn">First Name <b class="text-danger">*</b></label>
                                        <span class="form-note">Specify the First Name here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-info"></em>
                                        </div>
                                        <input type="text" class="form-control" id="inp_fn" name="inp_fn" placeholder="Enter First Name here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Last Name -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_ln">Last Name <b class="text-danger">*</b></label>
                                        <span class="form-note">Specify the Last Name here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-info"></em>
                                        </div>
                                        <input type="text" class="form-control" id="inp_ln" name="inp_ln" placeholder="Enter Last Name here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_email">Email <b class="text-danger">*</b></label>
                                        <span class="form-note">Specify the email address here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-mail"></em>
                                        </div>
                                        <input type="email" class="form-control" id="inp_email" name="inp_email" placeholder="Enter Email here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_phone">Phone Number</label>
                                        <span class="form-note">Specify the phone number here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-call"></em>
                                        </div>
                                        <input type="text" class="form-control" id="inp_phone" name="inp_phone" placeholder="Enter Phone Number here...">
                                    </div>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_address">Address</label>
                                        <span class="form-note">Specify the address here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-map-pin"></em>
                                        </div>
                                        <input type="text" class="form-control" id="inp_address" name="inp_address" placeholder="Enter Address here...">
                                    </div>
                                </div>
                            </div>

                            <!-- City -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_city">City</label>
                                        <span class="form-note">Specify the city here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_city" name="inp_city" placeholder="Enter City here...">
                                    </div>
                                </div>
                            </div>

                            <!-- State -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_state">State</label>
                                        <span class="form-note">Specify the state here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_state" name="inp_state" placeholder="Enter State here...">
                                    </div>
                                </div>
                            </div>

                            <!-- Postal Code -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_postal">Postal Code</label>
                                        <span class="form-note">Specify the postal code here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_postal" name="inp_postal" placeholder="Enter Postal Code here...">
                                    </div>
                                </div>
                            </div>

                            <!-- Country -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_country">Country</label>
                                        <span class="form-note">Specify the country here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_country" name="inp_country" placeholder="Enter Country here...">
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row mt-4">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <em class="icon ni ni-save"></em>&ensp;
                                        Submit New Customer
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
