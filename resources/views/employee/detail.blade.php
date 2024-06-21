@extends('template.template')
@section('title', 'Detail employee')
@section('container')

    <div class="d-flex justify-content-between">
        <h5 class="card-title fw-semibold mb-4 text-dark">Detail Employee</h5>
        <div>
            <a href="/employee/{{ $detail->id }}/edit" class="btn btn-info">Edit</a>
        </div>
    </div>

    <div class="d-flex align-items-start gap-2">
        <img src="{{ $detail->avatar }}" class="img-thumbnail w-25 m-0" alt="avatar">
        <table class="table table-striped">
            <tr>
                <td class="text-dark">
                    Name :
                </td>

                <td class="text-dark">
                    {{ $detail->name }}
                </td>
            </tr>
            <tr>
                <td class="text-dark">
                    Gender :
                </td>

                <td class="text-dark">
                    @if ($detail->gender == 0)
                        Female
                    @else
                        Male
                    @endif
                </td>
            </tr>
            <tr>
                <td class="text-dark">
                    Email :
                </td>

                <td class="text-dark">
                    {{ $detail->email }}
                </td>
            </tr>
            <tr>
                <td class="text-dark">
                    Phone :
                </td>

                <td class="text-dark">
                    {{ $detail->phone }}
                </td>
            </tr>
            <tr>
                <td class="text-dark">
                    Address :
                </td>

                <td class="text-dark">
                    {{ $detail->address }}
                </td>
            </tr>
            <tr>
                <td class="text-dark">
                    Departement :
                </td>

                <td class="text-dark">
                    {{ $detail->departement }}
                </td>
            </tr>
            <tr>
                <td class="text-dark">
                    Position :
                </td>

                <td class="text-dark">
                    {{ $detail->position }}
                </td>
            </tr>
            <tr>
                <td class="text-dark">
                    Salary :
                </td>

                <td class="text-dark">
                    {{ $detail->salary }}
                </td>
            </tr>
        </table>

    </div>

@endsection
