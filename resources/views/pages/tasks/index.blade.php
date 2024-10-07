<x-app-layout>
    <x-slot name="header">{{ __('Manage Tasks') }}</x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <span style="float: right">
                            <button class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                                <em class="icon ni ni-plus-circle"></em>&ensp;Add New Task
                            </button>
                        </span>
                        <table class="datatable-init table table-hover">
                            <thead>
                                <tr style="cursor: pointer">
                                    <th width="20">#</th>
                                    <th>Project ID</th>
                                    <th>Assigned To</th>
                                    <th>Task Description</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th width="100" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $task->project_id }}</td>
                                        <td>{{ $task->assigned_to }}</td>
                                        <td>{{ $task->task_description }}</td>
                                        <td>{{ $task->due_date }}</td>
                                        <td>{{ $task->status }}</td>
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
                        <h1 class="nk-block-title page-title">Add New Task</h1>
                        <hr class="mt-2 mb-2">

                        <form action="{{ route('tasks.save') }}" method="POST">
                            @csrf

                            <!-- Project ID -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_project_id">Project ID</label>
                                        <span class="form-note">Specify the Project ID here.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_project_id" name="inp_project_id" placeholder="Enter Project ID here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Assigned To -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_assigned_to">Assigned To</label>
                                        <span class="form-note">Specify the Employee ID to assign this task.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_assigned_to" name="inp_assigned_to" placeholder="Enter Employee ID here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Task Description -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_task_description">Task Description</label>
                                        <span class="form-note">Provide a description for the task.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="inp_task_description" name="inp_task_description" placeholder="Enter task description here..." required>
                                    </div>
                                </div>
                            </div>

                            <!-- Due Date -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_due_date">Due Date</label>
                                        <span class="form-note">Specify the due date for this task.</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-control-wrap">
                                        <input type="date" class="form-control" id="inp_due_date" name="inp_due_date" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="row mt-2 align-center">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="inp_status">Status</label>
                                        <span class="form-note">Specify the current status of the task.</span>
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
                                        Submit New Task
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
