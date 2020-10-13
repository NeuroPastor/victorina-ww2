@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header">Dashboard</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @empty($members)
                        <h3 class="text-center">Пока еще нет ни одного участника</a></h3>
                    @endempty
                    @isset($members)
                        <div class="mb-5">
                            <a class="btn btn-success btn-xl" href="{{route("create")}}">добавить</a>
                        </div>
                        <ul class="nav d-flex mt-5 flex-nowrap justify-content-start">
                            <li class="nav-item">
                                <a href="{{route("members")}}" class="bth bth-disabled nav-link btn-link">Показать всех</a>
                                <a href="{{route("membersHideNoVideo")}}" class="bth bth-disabled nav-link btn-link">Показать только с видео</a>
                                <a href="{{route("membersHideFalseCodeword")}}" class="bth bth-disabled nav-link btn-link">Показать только с правильным кодовым словом без учета видео</a>
                                <a href="{{route("membersHideNoVideoFalseCodeword")}}" class="bth bth-disabled nav-link btn-link">Показать только с правильным кодовым словом и с видео и сортировать по баллам</a>
                            </li>
                            
                        </ul>
                        Анкет показано: {{count($members)}}
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th class="text-center">ФИО</th>
                                    <th class="text-center">Кодовое слово</th>
                                    <th class="text-center">Баллов</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($members as $m)
                                        <tr>
                                            <td>{{$m->id}}</td>
                                            <td>{{$m->fullname}}, {{$m->school}}, класс: {{$m->classOfSchool}}, времени затрачено: {{$m->time}}</td>
                                            <td>{{$m->codeword}}</td>
                                            <td>{{$m->rating}}</td>
                                            <td valign="middle">
                                                <a href="{{route('memberView', ['id'=>$m->id])}}">Просмотреть</a>
                                                <a href="{{route('certwinner', ['id'=>$m->id])}}" target="_blank" class="btn btn-danger">Сертификат победителя</a>
                                                <a href="{{route('certprize', ['id'=>$m->id])}}" target="_blank" class="btn btn-success">Сертификат призера</a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    @endisset 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
