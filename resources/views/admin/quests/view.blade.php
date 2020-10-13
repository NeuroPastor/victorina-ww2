@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Новый вопрос</div>

                <div class="card-body">
                    <form action="{{route("save",['id'=>$q->id])}}" method='POST'>
                        {{ csrf_field() }}
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="my-select">Блок</label>
                                    <select id="my-select" class="form-control" name="category">
                                        <option value="1" @if($q->category == 1) selected='selected' @endif>1941 год</option>
                                        <option value="2" @if($q->category == 2) selected='selected' @endif>1942 год</option>
                                        <option value="3" @if($q->category == 3) selected='selected' @endif>1943 год</option>
                                        <option value="4" @if($q->category == 4) selected='selected' @endif>1944 год</option>
                                        <option value="5" @if($q->category == 5) selected='selected' @endif>1945 год</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="question">Текст вопроса</label>
                                    <textarea id="question" class="form-control" name="text" rows="30">{{$q->text}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p>Варианты ответа: </p>
                                @foreach($q->answer as $a)
                                    <div class="input-group mt-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">{{$loop->iteration}}.</span>
                                        </div>
                                        <input class="form-control" type="text" name="answer[]" placeholder="Текст" aria-label="{{$loop->iteration}}."
                                            required value="{{$a->text}}">
                                        <div class="input-group-append">
                                            <div class="form-check ml-3">
                                                <input type="radio" class="form-check-input" name="correctAnswer[]"
                                                    id="correctAnswer{{$loop->iteration}}" value="{{$loop->iteration}}" required @if($a->correct == 1) checked='checked' @endif>
                                                <label class="form-check-label" for="correctAnswer{{$loop->iteration}}">
                                                    Правильный ответ
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-5">
                                <label>Задавать вопрос?</label>
                                <div class="input-group mt-1">
                                    <div class="form-check ml-3">
                                        <input type="checkbox" class="form-check-input" name="active" id="active" value="1"
                                            required @if($q->active == 1) checked='checked' @endif>
                                        <label class="form-check-label" for="active">
                                            Да
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-5 form-group">
                                <label>Баллы за вопрос</label>
                                <input type="number" class="form-control w-100" name="questionsRating" id="questionsRating"
                                    value="{{$q->questionsRating}}">
                                <small class="form-text text-muted">По умолчанию 10</small>


                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-5">
                            <a href="{{route("home")}}" class="btn btn-danger">К списку без сохранения</a>

                            <input type="submit" class="btn btn-success" value="Сохранить" name='savenew'>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection