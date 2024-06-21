@extends('template.template')
@section('title', 'Create Employee')
@section('container')
    <div class="card p-5">
        <h1>This Created Employee</h1>

        <form method="POST" action="{{ url('/employee') }}" id="form">
            @csrf
            <div class="mb-3">
                <label for="input_name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="input_name" maxlength="50">
                <div id="name_error" class="form-text text-danger">
                    @if ($errors->has('name'))
                        {{ $errors->first('name') }}
                    @endif
                </div>

            </div>
            <div class="mb-3">
                <label for="input_name" class="form-label">Gender</label>
                <select class="form-select" name="gender" aria-label="Default select example">
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
                <div id="gender_error" class="form-text text-danger">
                    @if ($errors->has('gender'))
                        {{ $errors->first('gender') }}
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <label for="input_email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="input_email" maxlength="20">
                <div id="email_error" class="form-text text-danger">
                    @if ($errors->has('email'))
                        {{ $errors->first('email') }}
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <label for="input_phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="input_phone" maxlength="13">
                <div id="phone_error" class="form-text text-danger">
                    @if ($errors->has('phone'))
                        {{ $errors->first('phone') }}
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <label for="input_address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="input_address">
                <div id="address_error" class="form-text text-danger">
                    @if ($errors->has('address'))
                        {{ $errors->first('address') }}
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <label for="input_departement" class="form-label">Departement</label>
                <input type="text" class="form-control" name="departement" id="input_departement">
                <div id="departement_error" class="form-text text-danger">
                    @if ($errors->has('departement'))
                        {{ $errors->first('departement') }}
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <label for="input_position" class="form-label">Position</label>
                <input type="text" class="form-control" name="position" id="input_position">
                <div id="position_error" class="form-text text-danger">
                    @if ($errors->has('position'))
                        {{ $errors->first('position') }}
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <label for="input_salary" class="form-label">Salary</label>
                <input type="text" class="form-control" name="salary" id="input_salary" maxlength="8">
                <div id="salary_error" class="form-text text-danger">
                    @if ($errors->has('salary'))
                        {{ $errors->first('salary') }}
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <label for="input_avatar" class="form-label">Avatar</label>
                <input type="text" class="form-control" name="avatar" id="input_avatar">
                <div id="avatar_error" class="form-text text-danger">
                    @if ($errors->has('avatar'))
                        {{ $errors->first('avatar') }}
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

@section('script')
    <script src="{{ asset('js/form_employee_validation.js') }}"></script>
@endsection
