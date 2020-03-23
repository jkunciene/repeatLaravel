@extends('myWebSite/main')
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md mb-5" data-aos="fade">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <h1>Pamokos</h1>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <a href="/lesson_form" class="btn btn-primary py-2 px-4 text-white">Patalpinti naują pamoką</a>
                        </div>
                    </div>

                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Pamokos pavadinimas</th>
                            <th scope="col">Pamokos aprašymas</th>
                            <th scope="col">Nuoroda į skaidres</th>
                            <th scope="col">Koreguoti</th>
                            <th scope="col">Trinti</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($lessons as $lesson)
                                <td>{{$lesson->theme}}</td>
                                <td>{{$lesson->description}}</td>
                                <td><a href="{{$lesson->file}}" target="_blank">Skaidrės</a></td>

                                <td><a href="/lessons_update/{{$lesson->id}}" class="btn btn-warning">Koreguoti</a></td>

                                <td><a href="/lessons_delete/{{$lesson->id}}" class="btn btn-danger">Trinti</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$lessons->links()}}
                </div>

            </div>
        </div>
    </div>
@stop
