@extends('dashboard')
@section('title')
    Моята библиотека | Добавяне на книга
@endsection
@section('content')
    <form id="myForm" action="{{ route('store.book') }}" method="POST">
        @csrf
        <label for="book">Име на книга</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="book" placeholder="книга" class="form-control" />
        </div>
        <label for="author">Автор</label>
        <div class="form-group col-sm-9 text-secondary">
            <select name="author_id" class="form-control">
                <option value="">Избери автор</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->author }}</option>
                @endforeach
            </select>
        </div>
        <label for="genre" class="col-sm-3 col-form-label text-secondary">Жанр</label>
        <div class="form-group col-sm-9 text-secondary">
            <select name="genre_id" class="form-control">
                <option value="">Избери жанр</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                @endforeach
            </select>
        </div>
        <label for="publisher" class="col-sm-3 col-form-label text-secondary">Издател</label>
        <div class="form-group col-sm-9 text-secondary">
            <select name="publisher_id" class="form-control">
                <option value="">Избери издател</option>
                @foreach ($publishers as $publisher)
                    <option value="{{ $publisher->id }}">{{ $publisher->publisher }}</option>
                @endforeach
            </select>
        </div>
        <label for="year" class="col-sm-3 col-form-label text-secondary">Година на издаване</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="date_publisher_year" placeholder="Година" class="form-control" />
        </div>
        <label for="qty" class="col-sm-3 col-form-label text-secondary">Количество</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="qty" placeholder="Количество" class="form-control" />
        </div>
        <label for="isbn" class="col-sm-3 col-form-label text-secondary"> ISBN номер </label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="isbn_number" placeholder=" ISBN номер " class="form-control" />
        </div>
        <label for="pages" class="col-sm-3 col-form-label text-secondary"> Брой страници </label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="pages" placeholder=" Брой страници " class="form-control" />
        </div>
        <label for="annotation" class="col-sm-3 col-form-label text-secondary"> Анотация </label>
        <div class="form-group col-sm-9 text-secondary">
            <textarea name="resume" placeholder=" Анотация " class="form-control"></textarea>
        </div>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        <button type="submit">Добави</button>
    </form>
@endsection
