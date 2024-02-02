@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-action">
                    <span class="card-title">Всички потребители</span>
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
                                <th>Имейл</th>
                                <th>Роля</th>
                                <th>Дата</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role == 'admin' ? 'Администратор' : 'Читател' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d.m.Y') }}</td>
                                    <td>
                                        <a href="{{ $user->id == Auth::user()->id ? '#' : route('edit.user', $user->id) }}"
                                            {{ $user->id == Auth::user()->id ? 'disabled' : '' }}>
                                            <i class="fa-solid fa-edit"></i>
                                        </a>

                                        <a href="{{ $user->id == Auth::user()->id ? '#' : route('delete.user', $user->id) }}"
                                            {{ $user->id == Auth::user()->id ? 'disabled' : '' }}>
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    @endsection
