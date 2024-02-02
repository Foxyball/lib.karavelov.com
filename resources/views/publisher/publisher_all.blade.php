@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-action">
                    <span class="card-title">Всички издатели</span>
                </div>
                <div class="card-content">

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
                            @foreach ($publishers as $publisher)
                                <tr>
                                    <td>{{ $publisher->publisher }}</td>
                                    <td>
                                        <a href="{{ route('edit.publisher', $publisher->id) }}"><i
                                                class="fa-solid fa-edit"></i></a>
                                        <a href="{{ route('delete.publisher', $publisher->id) }}" id="delete"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $publishers->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    @endsection
