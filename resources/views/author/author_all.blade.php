@extends('dashboard')
@section('title')
    Моята библиотека | Всички автори
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-action">
                    <span class="card-title">Всички автори</span>
                </div>
                <div class="card-content">

                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <form action="{{ route('search.author') }}" method="GET">
                        <div class="input-field">
                            <input id="search" type="search" name="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>

                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th>Име</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $author)
                                <tr>
                                    <td>{{ $author->author }}</td>
                                    <td>
                                        <a href="{{ route('edit.author', $author->id) }}"><i
                                                class="fa-solid fa-edit"></i></a>
                                        <a href="{{ route('delete.author', $author->id) }}" id="delete"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                            @if (count($authors) == 0)
                                <tr>
                                    <td style="color:red;" colspan="2">Няма намерени резултати</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
                {{ $authors->links('vendor.pagination.custom') }}
            </div>
        </div>
    @endsection
