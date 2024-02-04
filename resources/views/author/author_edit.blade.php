@extends('dashboard')
@section('title')
    Моята библиотека | Редактиране на автор
@endsection
@section('content')

<form action="{{route('update.author')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$author->id}}">
    <div class="form-group col-sm-9 text-secondary">
        <input type="text" name="author" value="{{$author->author}}" class="form-control" />
    </div>
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
    <br />
    <button type="submit">Редактирай</button>
</form>

@endsection