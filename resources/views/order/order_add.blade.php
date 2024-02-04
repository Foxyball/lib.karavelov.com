@extends('dashboard')
@section('title', 'Моята библиотека | Направи заявка')
@section('content')
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <form id="myForm" action="{{ route('store.order') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="inputStatus" class="form-control">
                <option value="0">За връщане</option>
                <option value="1">Изпълнена</option>
            </select>

            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach

            <div class="form-group">
                <label for="date_end">End Date</label>
                <input type="date" name="date_end" id="datepicker" class="form-control">
            </div>

            <div class="form-group">
                <label for="user_id">User</label>
                <select name="user_id" id="inputUserType" class="form-control @error('user_id') is-invalid @enderror">
                    <option value="">Select User</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>

                @error('user_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="form-group">
                    <label for="book_id">Book1</label>
                    <select name="book_1_id" id="inputBook1" class="form-control">
                        <option value="">Select Book1</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->book }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="book_id">Book2</label>
                    <select name="book_2_id" id="inputBook2" class="form-control">
                        <option value="">Select Book2</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->book }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="book_id">Book3</label>
                    <select name="book_3_id" id="inputBook3" class="form-control">
                        <option value="">Select Book3</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->book }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="book_id">Book4</label>
                    <select name="book_4_id" id="inputBook4" class="form-control">
                        <option value="">Select Book4</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->book }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="book_id">Book5</label>
                    <select name="book_5_id" id="inputBook5" class="form-control">
                        <option value="">Select Book5</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->book }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit">Place Order</button>
    </form>


    <script>
        $(document).ready(function() {
            // Initialize Select2 on the book dropdown
            $('#inputProductType').select2({
                // code for book dropdown
            });

            // Initialize Select2 on the user dropdown
            $('#inputUserType').select2({
                // code for user dropdown
            });

            $('#inputBook1').select2({

            });

            $('#inputBook2').select2({

            });

            $('#inputBook3').select2({

            });

            $('#inputBook4').select2({

            });

            $('#inputBook5').select2({

            });
        });
    </script>

    <script>
        /* [B] Променя езика на jquery календара */
        $.datepicker.regional['bg'] = {
            closeText: 'затвори',
            prevText: '&#x3c;назад',
            nextText: 'напред&#x3e;',
            nextBigText: '&#x3e;&#x3e;',
            currentText: 'днес',
            monthNames: ['Януари', 'Февруари', 'Март', 'Април', 'Май', 'Юни',
                'Юли', 'Август', 'Септември', 'Октомври', 'Ноември', 'Декември'
            ],
            monthNamesShort: ['Яну', 'Фев', 'Мар', 'Апр', 'Май', 'Юни',
                'Юли', 'Авг', 'Сеп', 'Окт', 'Нов', 'Дек'
            ],
            dayNames: ['Неделя', 'Понеделник', 'Вторник', 'Сряда', 'Четвъртък', 'Петък', 'Събота'],
            dayNamesShort: ['Нед', 'Пон', 'Вто', 'Сря', 'Чет', 'Пет', 'Съб'],
            dayNamesMin: ['Не', 'По', 'Вт', 'Ср', 'Че', 'Пе', 'Съ'],
            weekHeader: 'Wk',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['bg']);
        /* [E] Променя езика на jquery календара */

        /* [B] Инциира календара datepicker към css идентификатора #datepicker */
        $("#datepicker").datepicker({
            dateFormat: 'dd.mm.yy',
            changeYear: true,
            viewMode: "years",
            minViewMode: "years"
        });
        /* [E] Инциира календара datepicker към css идентификатора #datepicker */
    </script>

@endsection
