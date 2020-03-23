@extends('myWebSite/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(img/remembers.jpg);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Paieškos rezultatai</h1>
                            <p class="mb-0">Pamokų sąrašas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
