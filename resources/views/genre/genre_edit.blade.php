@extends('dashboard')
@section('content')
    <form action="{{ route('update.genre') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $genre->id }}">
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="genre" value="{{ $genre->genre }}" class="form-control" />
        </div>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        <br />
        <button type="submit">Редактирай</button>
    </form>
@endsection
