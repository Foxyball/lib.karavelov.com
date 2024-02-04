@extends('dashboard')
@section('title')
    Моята библиотека | Всички заявки
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-action">
                    <span class="card-title">Текущи заявки</span>
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
                                <th>Дата на връщане</th>
                                <th>Статус</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->user_fullname }}</td>
                                    <td>{{ \Carbon\Carbon::parse($order->date_end)->format('d.m.Y') }}</td>
                                    <td>
                                        @if ($order->status == 0)
                                            <span style="color:red"> За връщане </span>
                                        @elseif ($order->status == 1)
                                            <span>Изпълнена</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('edit.order', $order->id) }}"><i class="fa-solid fa-edit"></i></a>
                                        <a href="{{ route('delete.order', $order->id) }}" id="delete"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $orders->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    @endsection
