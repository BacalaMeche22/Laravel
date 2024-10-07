<x-app-layout>
    <x-slot name="header">{{ __('Manage Inventory') }}</x-slot>
    {{-- <x-slot name="subheader">{{ __('You can manage your inventory and register add customer here') }}</x-slot> --}}

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;Add New Item
                            </button>
                        </span>
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr style="cursor: pointer">
                                    <th width="20">#</th>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Item Category</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventory as $data)
                                    <tr>
                                    <td>{{ $loop->iteration }}.</td>
                                    <td> {{ $data->item_name }} </td>
                                    <td>{{ $data->item_quantity }}</td>
                                    <td> {{ $data->item_category }} </td>

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
                        <h1 class="nk-block-title page-title">Add New Item</h1>
                        <hr class="mt-2 mb-2">

                        <form action="{{ route ('item.save') }}" method="POST">
                            @csrf

                            <!-- Item -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_item_name">Item Name</label>
                                        <span class="form-note">Specify the Item name here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_item_name" name="inp_item_name" placeholder="Enter Item Name here..." required>
                                    </div>
                                </div>
                            </div>


                             <!-- Quantity -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_quantity">Quantity</label>
                                        <span class="form-note">Specify the Item quantity here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_quantity" name="inp_quantity" placeholder="Enter Quantity here..." required>
                                    </div>
                                </div>
                            </div>

                             <!-- Item Category -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_item_category">Item Category</label>
                                        <span class="form-note">Specify the Item Category here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_item_category" name="inp_item_category" placeholder="Enter Item Category here..." required>
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
