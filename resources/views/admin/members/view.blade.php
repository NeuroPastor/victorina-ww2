@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="form-froup">
                        <label><b>Уникальный номер участника:</b> {{$member->id}}</label>
                    </div>
                    <div class="form-froup">
                        <label><b>ФИО:</b> {{$member->fullname}}</label>
                    </div>
                    <div class="form-froup">
                        <label><b>Номер школы:</b> {{$member->school}}</label>
                    </div>
                    <div class="form-froup">
                        <label><b>Класс:</b> {{$member->classOfSchool}}</label>
                    </div>
                    <div class="form-froup">
                        <label><b>Дата рождения:</b> {{$member->birthDate}}</label>
                    </div>
                    <div class="form-froup">
                        <label><b>ФИО учителя:</b> {{$member->TeacherFullname}}</label>
                    </div>
                    <div class="form-froup">
                        <label><b>Кодовое слово:</b> {{$member->codeword}}</label>
                    </div>
                    <div class="form-froup">
                        <label><b>Ссылка на поздравление:</b> {{$member->greeting}}</label>
                    </div>
                    <div class="form-froup">
                        <label><b>Набрано баллов:</b> {{$member->rating}}</label>
                    </div>
                    <div class="form-froup">
                        <label><b>Викторина пройдена за:</b> {{$member->time}}</label>
                    </div>
                    <div class="form-froup">
                        <label><b>Вопросов пройдено:</b> {{count($member->result)}}</label>
                    </div>
                    <p class="mt-5 mb-2">
                        <h3>Вопросы и ответы:</h3>
                    </p>
                    
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <th>Номер вопроса</th>
                                <th>Текст вопроса</th>
                                <th>Ответ</th>
                                <th>Верно?</th>
                                <th>Баллы за вопрос</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($member->result as $r)
                                <tr class="@if($r->isCorrect == 1) bg-success @else bg-danger @endif ">
                                    <td>{{$r->answerId}}</td>
                                    <td>{!!$quest[$r->answerId]!!}</td>
                                    <td>{{$r->answer}}</td>
                                    <td>@if($r->isCorrect == 1) да @else нет @endif</td>
                                    <td>@if($r->isCorrect == 1) {{$r->answerRating}} @else 0 @endif</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                  
            </div>
        </div>
    </div>
</div>
@endsection
