@extends('app')

@section('titile')
    Настройки
@endsection

@section('content')
    <div class="container d-flex flex-column my-4">
        <h4 class="text-center">Настройки</h4>
        <hr>
        <div class="row">
            <div class="col-lg-4">
                <div class="text-center w-100">
                </div>

                <form action="{{ route('UserSettingUpd', Auth::id()) }}" class="m-auto" method="post">
                    @csrf
                    <div class="d-flex flex-column mx-sm-auto mx-xxl-0">
                        <h5 class="mb-3">Основные сведения</h5>
                        <label for="fio" class="mb-1">ФИО</label>
                        <input type="text" name="fio" id="fio" class="form-input mb-3" autocomplete="off"
                            placeholder="Иван Иванов Иванович"
                            value="{{ Auth::user()->fio != null ? Auth::user()->fio : '' }}">

                        <label for="phone" class="mb-1">Номер телефона</label>
                        <input type="text" name="phone" id="phone" class="form-input mb-4" autocomplete="off"
                            placeholder="+79876543210"
                            value="{{ Auth::user()->phone != null ? Auth::user()->phone : '' }}">

                        <h5 class="mb-3">Изменение почты и пароля</h5>
                        <label for="email" class="mb-1">Почта</label>
                        <input type="email" name="email" id="email" class="form-input mb-3" autocomplete="off"
                            placeholder="examle@examle.ru" value="{{ Auth::user()->email }}" required>

                        <label for="old_password" class="mb-1">Старый пароль</label>
                        <input type="password" name="old_password" id="old_password" class="form-input mb-3"
                            autocomplete="off" placeholder="*******">

                        <label for="password" class="mb-1">Новый пароль</label>
                        <input type="password" name="password" id="password" class="form-input mb-3" autocomplete="off"
                            placeholder="*******">

                        <label for="password_confirmation" class="mb-1">Подтверждение пароля</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-input mb-3" autocomplete="off" placeholder="*******">

                        <h5 class="mb-3">Дополнительные сведения</h5>
                        <p>Роль: {{ Auth::user()->role->role }}</p>
                        <p>Подтверждение почты:
                            @if (!Auth::user()->email_verified_at == null)
                                Да
                            @else
                                Нет
                                <a href="{{route('verification.send', Auth::user())}}" class="btn-green text-decoration-none text-light">Подтвердить</a>
                            @endif
                        </p>
                        <hr>

                        <button type="submit" class="btn-green m-auto px-5">Сохранить</button>
                    </div>
                </form>
            </div>

            <div class="col-lg ms-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection