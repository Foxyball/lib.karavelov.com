@extends('dashboard')
@section('title', 'Моята библиотека | Заявка')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-action">
                    <span class="card-title
                    ">Заявка</span>
                </div>
              
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-action">
                                    <span class="card-title
                                    ">Детайли</span>
                                </div>
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>Статус:</strong>
                                                @if ($order->status == '0')
                                                    <span style="color:red"> За връщане </span>
                                                @elseif ($order->status == '1')
                                                    <span>Изпълнена</span>
                                                @endif
                                            </p>
                                            <p><strong>Дата на връщане:</strong> {{ \Carbon\Carbon::parse($order->date_end)->format('d.m.Y') }}</p>
                                        </div>

                                        <h3>Читател </h3>
                                        <div class="col-md-6">
                                            <p><strong>Име:</strong> {{ $order->user->name }}</p>
                                            <p><strong>Имейл:</strong> {{ $order->user->email }}</p>
                                            <p><strong>Телефон:</strong> {{ $order->user->gsm }}</p>
                                            <p><strong>Дата на раждане:</strong> {{ \Carbon\Carbon::parse($order->user->birth_date)->format('d.m.Y') }}</p>
                                            <p><strong>Адрес:</strong> {{ $order->user->address }}</p>
                                        </div>
                                    </div>

                                    <h3>Книги</h3>
                                        @if ($order->book_1_id)
                                            <p><strong>Книга 1:</strong> {{ $order->book1->book }}</p>
                                        @endif
                                        @if ($order->book_2_id)
                                            <p><strong>Книга 2:</strong> {{ $order->book2->book }}</p>
                                        @endif
                                        @if ($order->book_3_id)
                                            <p><strong>Книга 3:</strong> {{ $order->book3->book }}</p>
                                        @endif
                                        @if ($order->book_4_id)
                                            <p><strong>Книга 4:</strong> {{ $order->book4->book }}</p>
                                        @endif
                                        @if ($order->book_5_id)
                                            <p><strong>Книга 5:</strong> {{ $order->book5->book }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

