@extends('myWebSite/main')
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md mb-5" data-aos="fade">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <h1>Lygiai</h1>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <a href="/level_form" class="btn btn-primary py-2 px-4 text-white">Patalpinti naują lygį</a>
                        </div>
                    </div>

                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Pavadinimas</th>
                            <th scope="col">Aprašymas</th>
                            <th scope="col">Šio lygio pamokos</th>
                            <th scope="col">Trinti</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($levels as $level)
                                <td>{{$level->name}}</td>
                                <td>{{$level->about}}</td>

                                <td><a href="/lessonsByLevel/{{$level->id}}">Pamokos</a></td>

                                <td><a href="/level_delete/{{$level->id}}" class="btn btn-danger">Trinti</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>




@stop
