@extends('myWebSite/main')
@section('content')

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md mb-5" data-aos="fade">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Pamokos pavadinimas</th>
                            <th scope="col">Pamokos aprašymas</th>
                            <th scope="col">Nuoroda į skaidres</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($lessons as $lesson)
                                <td>{{$lesson->theme}}</td>
                                <td>{{$lesson->description}}</td>
                                <td><a href="{{$lesson->file}}" target="_blank">Skaidrės</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
