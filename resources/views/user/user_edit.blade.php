@extends('dashboard')
@section('title') 
Моята библиотека | Редактиране на потребител
@endsection
@section('content')
    <form id="myForm" action="{{ route('update.user',$user->id) }}" method="POST">
        @csrf

        <label for="user" class="col-sm-3 col-form-label text-secondary">Потребител</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="name" placeholder="Потребител" value="{{ $user->name }}" class="form-control" />
        </div>

        <label for="email" class="col-sm-3 col-form-label text-secondary">Имейл</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="email" name="email" placeholder="Имейл" value="{{ $user->email }}" class="form-control" />
        </div>


        <label for="role" class="col-sm-3 col-form-label text-secondary">Смяна на парола</label>
        <div class="form-group col-sm-9 text-secondary">
            <a href="{{ route('change.password',$user->id) }}" class="btn btn-primary">Смяна на парола</a>
        </div>

        <label for="active" class="col-sm-3 col-form-label text-secondary">Статус</label>
        <div class="form-group col-sm-9 text-secondary">
            <select name="active" class="form-control">
                <option value="">Изберете статус..</option>
                <option value="1" {{ $user->active == 1 ? 'selected' : '' }}>Активен</option>
                <option value="0" {{ $user->active == 0 ? 'selected' : '' }}>Неактивен</option>
            </select>
        </div>


        <label for="gsm" class="col-sm-3 col-form-label text-secondary">Телефон</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="gsm" placeholder="Телефон" value="{{ $user->gsm }}" class="form-control" />
        </div>

        <label for="address" class="col-sm-3 col-form-label text-secondary">Адрес</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="text" name="address" placeholder="Адрес" value="{{ $user->address }}" class="form-control" />
        </div>

        <label for="birth_date" class="col-sm-3 col-form-label text-secondary">Дата на раждане</label>
        <div class="form-group col-sm-9 text-secondary">
            <input type="date" name="birth_date" placeholder="Дата на раждане" value="{{ $user->birth_date }}"
                class="form-control" />
        </div>

        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        <button type="submit">Добави</button>
    </form>

@endsection
