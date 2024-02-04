@extends('dashboard')
@section('title')
    Моята библиотека | Промяна на парола
@endsection
@section('content')
    <form id="myForm" action="{{ route('admin.update_password') }}" method="POST">
        @csrf

        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Стара парола</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="password" name="old_password"
                    class="form-control @error('old_password') is-invalid @enderror"
                    id="current_password" placeholder="Въведи стара парола">

                {{-- @error('old_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror --}}
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Нова парола</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="password" name="new_password"
                    class="form-control @error('new_password') is-invalid @enderror"
                    id="new_password" placeholder="Въведи нова парола">

                {{-- @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror --}}
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Повтори парола</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="password" name="new_password_confirmation" class="form-control"
                    id="new_password_confirmation" placeholder="Повтори парола">

            </div>
        </div>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        <button type="submit">Промени</button>
    </form>
@endsection