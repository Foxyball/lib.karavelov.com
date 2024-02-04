@extends('dashboard')
@section('title')
    Моята библиотека | Всички книги
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-action">
                    <span class="card-title">Всички книги</span>
                </div>
                <div class="card-content">

                    <form action="{{ route('search.book') }}" method="GET">
                        <div class="input-field">
                            <input id="search" type="search" placeholder="Търси по име на книга" name="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>

                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th>Име</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $book->book }}</td>
                                    <td>
                                        <a href="{{ route('edit.book', $book->id) }}"><i
                                                class="fa-solid fa-edit"></i></a>
                                        <a href="{{ route('delete.book', $book->id) }}" id="delete"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            @if (count($books) == 0)
                                <tr>
                                    <td style="color:red;" colspan="2">Няма намерени резултати</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $books->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    @endsection
