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
                    @empty($quests)
                    <h3 class="text-center">Пока еще нет ни одного вопроса, но его можно <a
                            href="{{route("create")}}">добавить</a></h3>
                    @endempty
                    @isset($quests)
                    <div class="mt-2 mb-2">
                        <a class="btn btn-success btn-xl nav-link" href="{{route("create")}}">добавить</a>
                    </div>
                    <ul class="nav d-flex mt-5 flex-nowrap justify-content-around">
                        <li class="nav-item">
                            <a href="{{route("getList")}}" class="bth bth-disabled nav-link btn-link">Вопросы по годам
                                (сбросить):</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("getListCategory",['category'=>1])}}" class="nav-link">1941</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("getListCategory",['category'=>2])}}" class="nav-link">1942</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("getListCategory",['category'=>3])}}" class="nav-link">1943</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("getListCategory",['category'=>4])}}" class="nav-link">1944</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("getListCategory",['category'=>5])}}" class="nav-link">1945</a>
                        </li>
                    </ul>
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th class="text-center">Текст вопроса</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($quests as $q)
                            <tr>
                                <td>{{$q->id}}</td>
                                <td>{!!$q->short_text!!}</td>
                                <td valign="middle">
                                    <a href="{{route('view', ['id'=>$q->id])}}">Редактировать</a>
                                    <a href="{{route('destroy', ['id'=>$q->id])}}">Удалить</a>
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