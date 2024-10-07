<x-app-layout>
    <x-slot name="header">{{ __('Manage Orders') }}</x-slot>
    {{-- <x-slot name="subheader">{{ __('You can manage your orders and register new ones here') }}</x-slot> --}}

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;Add New Order
                            </button>
                        </span>
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr style="cursor: pointer">
                                    <th width="20">#</th>
                                    <th>Client ID</th>
                                    <th>Order Date</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $data->client_id }}</td>
                                        <td>{{ $data->order_date }}</td>
                                        <td>{{ $data->total_amount }}</td>
                                        <td>{{ $data->status }}</td>
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
                        <h1 class="nk-block-title page-title">Add New Order</h1>
                        <hr class="mt-2 mb-2">

                        <form action="{{ route('orders.save') }}" method="POST">
                            @csrf

                            <!-- Client ID -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_client_id">Client ID</label>
                                        <span class="form-note">Specify the Client ID here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_client_id" name="inp_client_id" placeholder="Enter Client ID here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Order Date -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_order_date">Order Date</label>
                                        <span class="form-note">Specify the Order Date here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="date" class="form-control" id="inp_order_date" name="inp_order_date" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Amount -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_total_amount">Total Amount</label>
                                        <span class="form-note">Specify the Total Amount here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="number" step="0.01" class="form-control" id="inp_total_amount" name="inp_total_amount" placeholder="Enter Total Amount here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_status">Status</label>
                                        <span class="form-note">Specify the Status of the order.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <select class="form-control" id="inp_status" name="inp_status" required>
                                            <option value="">Select Status</option>
                                            <option value="pending">Pending</option>
                                            <option value="completed">Completed</option>
                                            <option value="cancelled">Cancelled</option>
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
                                        Submit New Order
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
