@extends('dashboard')
@section('content')
    <form id="myForm" action="{{ route('update.password') }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $user->id }}" />


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
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        <button type="submit">Промени</button>
    </form>
@endsection