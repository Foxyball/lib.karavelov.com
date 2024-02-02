@extends('dashboard')
@section('content')
    <form id="myForm" action="{{ route('store.user') }}" method="POST">
        @csrf

        <label for="user" class="col-sm-3 col-form-label text-secondary">Потребител</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="name" placeholder="Потребител" class="form-control" />
        </div>

        <label for="email" class="col-sm-3 col-form-label text-secondary">Имейл</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="email" name="email" placeholder="Имейл" class="form-control" />
        </div>

        <label for="password" class="col-sm-3 col-form-label text-secondary">Парола</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="password" name="password" placeholder="Парола" class="form-control" />
        </div>

        <label for="role" class="col-sm-3 col-form-label text-secondary">Роля</label>
        <div class="form-group col-sm-9 text-secondary">
            <select name="role" class="form-control">
                <option value="">Изберете роля..</option>
                <option value="admin">Администратор</option>
                <option value="user">Читател</option>
            </select>
        </div>

        <label for="active" class="col-sm-3 col-form-label text-secondary">Статус</label>
        <div class="form-group col-sm-9 text-secondary">
            <select name="active" class="form-control">
                <option value="">Изберете статус..</option>
                <option value="1">Активен</option>
                <option value="0">Неактивен</option>
            </select>
        </div>


        <label for="gsm" class="col-sm-3 col-form-label text-secondary">Телефон</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="gsm" placeholder="Телефон" class="form-control" />
        </div>

        <label for="address" class="col-sm-3 col-form-label text-secondary">Адрес</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="address" placeholder="Адрес" class="form-control" />
        </div>

        <label for="birth_date" class="col-sm-3 col-form-label text-secondary">Дата на раждане</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="date" name="birth_date" placeholder="Дата на раждане" class="form-control" />
        </div>

        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        <button type="submit">Добави</button>
    </form>

    <!-- validation -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Въведете име на потребител',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
