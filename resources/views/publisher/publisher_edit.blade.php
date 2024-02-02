@extends('dashboard')
@section('content')
    <form action="{{ route('update.publisher') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $publisher->id }}">
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="publisher" value="{{ $publisher->publisher }}" class="form-control" />
        </div>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        <br />
        <button type="submit">Редактирай</button>
    </form>
@endsection
