@extends('dashboard')
@section('title')
Моята библиотека | Добавяне на жанр
@endsection
@section('content')

<form id="myForm" action="{{ route('store.genre') }}" method="POST">
    @csrf
    <div class="form-group col-sm-9 text-secondary">
        <input type="text" name="genre" placeholder="Жанр" class="form-control" />
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
                genre: {
                    required: true,
                },
            },
            messages: {
                genre: {
                    required: 'Въведете име на жанр',
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