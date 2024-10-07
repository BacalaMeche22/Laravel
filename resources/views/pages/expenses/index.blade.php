<x-app-layout>
    <x-slot name="header">{{ __('Manage Expenses') }}</x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;Add New Expense
                            </button>
                        </span>
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr style="cursor: pointer">
                                    <th width="20">#</th>
                                    <th>Expense Category</th>
                                    <th>Amount</th>
                                    <th>Date Incurred</th>
                                    <th>Employee ID</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td> 
                                        <td>{{ $data->expense_category }}</td> 
                                        <td>{{ $data->amount }}</td> 
                                        <td>{{ $data->date_incurred }}</td> 
                                        <td>{{ $data->employee_id }}</td> 
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
                        <h1 class="nk-block-title page-title">Add New Expense</h1>
                        <hr class="mt-2 mb-2">

                        <form action="{{ route('expenses.save') }}" method="POST">
                            @csrf

                            <!-- Expense Category -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_expense_category">Expense Category</label>
                                        <span class="form-note">Specify the Expense Category here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_expense_category" name="inp_expense_category" placeholder="Enter Expense Category here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Amount -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_amount">Amount</label>
                                        <span class="form-note">Specify the amount spent.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="number" step="0.01" class="form-control" id="inp_amount" name="inp_amount" placeholder="Enter Amount here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Date Incurred -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_date_incurred">Date Incurred</label>
                                        <span class="form-note">Specify the date when the expense was incurred.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="date" class="form-control" id="inp_date_incurred" name="inp_date_incurred" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Employee ID -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_employee_id">Employee ID</label>
                                        <span class="form-note">Enter the ID of the employee who incurred the expense (optional).</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_employee_id" name="inp_employee_id" placeholder="Enter Employee ID here...">
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row mt-4">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <em class="icon ni ni-save"></em>&ensp;
                                        Submit New Expense
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
