@extends('dashboard')
@section('title', 'Моята библиотека | Начало')
@section('content')
    <div class="dashboard-cards">
        <div class="row">

            @php
                $return_book = App\Models\Order::where('status', '1')->get();
                $books = App\Models\Book::all();
                $users = App\Models\User::where('active', 1)->get();

                $orders = App\Models\Order::where('status', '0')
                    ->orderBy('id', 'desc')
                    ->take(10)
                    ->get();
            @endphp

            <div class="col-xs-12 col-sm-6 col-md-3">

                <div class="card horizontal cardIcon waves-effect waves-dark">
                    <div class="card-image orange">
                        <i class="material-icons dp48">queue</i>
                    </div>
                    <div class="card-stacked orange">
                        <div class="card-content">
                            <h3>{{ count($return_book) }}</h3>
                        </div>
                        <div class="card-action">
                            <strong>Заявки</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card horizontal cardIcon waves-effect waves-dark">
                    <div class="card-image blue">
                        <i class="material-icons dp48">book</i>
                    </div>
                    <div class="card-stacked blue">
                        <div class="card-content">
                            <h3>{{ count($books) }}</h3>
                        </div>
                        <div class="card-action">
                            <strong>Книги</strong>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">

                <div class="card horizontal cardIcon waves-effect waves-dark">
                    <div class="card-image green">
                        <i class="material-icons dp48">supervisor_account</i>
                    </div>
                    <div class="card-stacked green">
                        <div class="card-content">
                            <h3>{{ count($users) }}</h3>
                        </div>
                        <div class="card-action">
                            <strong>Потребители</strong>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /. ROW  -->









    <div class="row">
        <div class="col-md-6">
            <!--   Kitchen Sink -->
            <div class="card">
                <div class="card-action">
                    Последни 10 бр. заявки
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th>
                                        <center>Дата на връщане</center>
                                    </th>
                                    <th>
                                        <center>Читател</center>
                                    </th>
                                    <th>
                                        <center>Редактиране</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            <center>
                                                {{ $date_end = \Carbon\Carbon::parse($order->date_end)->format('d.m.Y') }}
                                            </center>
                                        </td>
                                        <td>
                                            <center> {{ $order->user->name }}</center>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="{{ route('details.order', $order->id) }}" type="button" 
                                                    class="btn mb-2 mb-md-0 btn-secondary btn-block btn-round">Детайли</a>
                                            </center>
                                        </td>
                                    </tr>
                                @endforeach
                                @if (count($orders) == 0)
                                    <tr>
                                        <td colspan="3">
                                            <center>Няма налични заявки</center>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End  Kitchen Sink -->

        </div>
        <!-- /. ROW  -->



    </div>
@endsection
