<x-app-layout>
    <x-slot name="header">
        <span class="font-semibold leading-tight">
            {{ __('Academic Records') }}
        </span>
    </x-slot>
    <x-slot name="subHeader">
            {{ __('Documentation of student academic performance, including grades and assessments.') }}
    </x-slot>

    <div class="nk-block ">
        <div class="row g-gs">
            <div class="col-sm-12">
                <div class="card h-100">
                    <div class="card-inner">
                        <span style="float: right">
                            <button data-bs-toggle="modal" data-bs-target="#modalDefault"
                                class="btn btn-primary btn-round">
                                <em class="icon ni ni-plus-circle"></em> &ensp;
                                Register New Record
                            </button>
                        </span>
                        <table class="datatable-init table">
                            <thead>
                                <tr>
                                    <th>Course Description</th>
                                    <th width="50">Unit/Type</th>
                                    <th width="50">Midterm</th>
                                    <th width="50">Final</th>
                                    <th width="100">Remarks</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
