@extends('template.template')
@section('title', 'employee list')
@section('container')

    <div class="card w-100">
        <div class="card-body p-4">
            <div style="display: flex; justify-content:space-between">
                <h5 class="card-title fw-semibold mb-4">Employee List</h5>
                <div>
                    <a href="/employee/create" class="btn btn-info">Add Employee</a>
                </div>

            </div>
            <div class="table-responsive" data-simplebar>
                <table class="table text-nowrap align-middle table-custom mb-0">

                    <thead>
                        <tr>
                            <th scope="col" class="text-dark fw-normal">No</th>
                            <th scope="col" class="text-dark fw-normal">Name</th>
                            <th scope="col" class="text-dark fw-normal">Email</th>
                            <th scope="col" class="text-dark fw-normal">Departement</th>
                            <th scope="col" class="text-center text-dark fw-normal">Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employee as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td class="ps-0">
                                    <div class="d-flex align-items-center gap-6">
                                        <img src="{{ $data->avatar }}" alt="prd1" width="48" class="rounded" />
                                        <div>
                                            <h6 class="mb-0">{{ $data->name }}</h6>
                                            <span>
                                                {{ $data->position }}
                                            </span>
                                        </div>
                                    </div>
                                </td>

                                <td>{{ $data->email }}</td>

                                <td>{{ $data->departement }}</td>


                                <td class="d-flex justify-content-center">
                                    <a href="employee/{{ $data->id }}" class="btn btn-success mx-2">Detail</a>

                                    <form action="employee/{{ $data->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Detele</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
