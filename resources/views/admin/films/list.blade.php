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
                    <form method="POST" action="{{route('filmsSave')}}">
                        {{ csrf_field() }}
                        <div class="row">
                            @empty($films)
                                <div class="col-12">
                                    <label for="validationDefaultUsername">Фильм</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"> 
                                        <input type="text" class="form-control" placeholder="Ссылка youtube" required name="link[]">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Название" required name="name[]" >
                                        <div class="input-group-append">
                                            <input type="text" class="form-control"  placeholder="Год" required name="year[]" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="validationDefaultUsername">Фильм</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"> 
                                        <input type="text" class="form-control" placeholder="Ссылка youtube" required name="link[]">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Название" required name="name[]" >
                                        <div class="input-group-append">
                                            <input type="text" class="form-control"  placeholder="Год" required name="year[]" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="validationDefaultUsername">Фильм</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"> 
                                        <input type="text" class="form-control" placeholder="Ссылка youtube" required name="link[]">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Название" required name="name[]" >
                                        <div class="input-group-append">
                                            <input type="text" class="form-control"  placeholder="Год" required name="year[]" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="validationDefaultUsername">Фильм</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"> 
                                        <input type="text" class="form-control" placeholder="Ссылка youtube" required name="link[]">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Название" required name="name[]" >
                                        <div class="input-group-append">
                                            <input type="text" class="form-control"  placeholder="Год" required name="year[]" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="validationDefaultUsername">Фильм</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"> 
                                        <input type="text" class="form-control" placeholder="Ссылка youtube" required name="link[]">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Название" required name="name[]" >
                                        <div class="input-group-append">
                                            <input type="text" class="form-control"  placeholder="Год" required name="year[]" >
                                        </div>
                                    </div>
                                </div>
                            @endempty
                            @isset($films)
                                @foreach($films as $film)
                                    <div class="col-12">
                                        <label for="validationDefaultUsername">Фильм</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"> 
                                            <input type="text" class="form-control" placeholder="Ссылка youtube" required name="link[]" value="{{$film->link}}">
                                            </div>
                                            <input type="text" class="form-control" placeholder="Название" required name="name[]"  value="{{$film->name}}">
                                            <div class="input-group-append">
                                                <input type="text" class="form-control"  placeholder="Год" required name="year[]"  value="{{$film->year}}">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                        </div>    
                        <div class="d-flex justify-content-end mt-5">
                            <input type="submit" class="btn btn-success" value="Сохранить" name='savenew'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
