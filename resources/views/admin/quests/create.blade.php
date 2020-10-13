@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Новый вопрос</div>

                <div class="card-body">
                    <form action="{{route("saveNew")}}" method='POST'>
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
                                        <option value="1" selected>1941 год</option>
                                        <option value="2">1942 год</option>
                                        <option value="3">1943 год</option>
                                        <option value="4">1944 год</option>
                                        <option value="5">1945 год</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12"> 
                                <div class="form-group">
                                    <label for="question">Текст вопроса</label>
                                    <textarea id="question" class="form-control" name="text" rows="30"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p>Варианты ответа: </p>
                                <div class="input-group mt-1">
                                    <div class="input-group mt-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">1.</span>
                                        </div>
                                        <input class="form-control" type="text" name="answer[]" placeholder="Текст" aria-label="1."
                                            required>
                                        <div class="input-group-append">
                                            <div class="form-check ml-3">
                                                <input type="radio" class="form-check-input" name="correctAnswer[]"
                                                    id="correctAnswer1" value="1" required >
                                                <label class="form-check-label" for="correctAnswer1">
                                                    Правильный ответ
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mt-1">
                                    <div class="input-group mt-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">2.</span>
                                        </div>
                                        <input class="form-control" type="text" name="answer[]" placeholder="Текст" aria-label="2."
                                            required>
                                        <div class="input-group-append">
                                            <div class="form-check ml-3">
                                                <input type="radio" class="form-check-input" name="correctAnswer[]"
                                                    id="correctAnswer2" value="2" required>
                                                <label class="form-check-label" for="correctAnswer2">
                                                    Правильный ответ
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mt-1">
                                    <div class="input-group mt-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">3.</span>
                                        </div>
                                        <input class="form-control" type="text" name="answer[]" placeholder="Текст" aria-label="3."
                                            required>
                                        <div class="input-group-append">
                                            <div class="form-check ml-3">
                                                <input type="radio" class="form-check-input" name="correctAnswer[]"
                                                    id="correctAnswer3" value="3" required>
                                                <label class="form-check-label" for="correctAnswer3">
                                                    Правильный ответ
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mt-1">
                                    <div class="input-group mt-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">4.</span>
                                        </div>
                                        <input class="form-control" type="text" name="answer[]" placeholder="Текст" aria-label="4."
                                            required>
                                        <div class="input-group-append">
                                            <div class="form-check ml-3">
                                                <input type="radio" class="form-check-input" name="correctAnswer[]"
                                                    id="correctAnswer4" value="4" required>
                                                <label class="form-check-label" for="correctAnswer4">
                                                    Правильный ответ
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-5">
                                <label>Задавать вопрос?</label>
                                <div class="input-group mt-1">
                                    <div class="form-check ml-3">
                                        <input type="checkbox" class="form-check-input" name="active" id="active" value="1"
                                            checked="checked">
                                        <label class="form-check-label" for="active">
                                            Да
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-5 form-group">
                                <label>Баллы за вопрос</label>
                                <input type="number" class="form-control w-100" name="questionsRating" id="questionsRating"
                                    value="10">
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