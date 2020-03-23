@extends('myWebSite/main')
@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-8 text-center">
            <h1>Pamokos informacijos koregavimas</h1>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md mb-5" data-aos="fade">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif

                    <form method="post" action="/lessonDataUpdate/{{$lesson->id}}" enctype="multipart/form-data"  class="p-5 bg-white">
                        @csrf
                        <input name="id" type="hidden" value="{{$lesson->id}}">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="lygis" >Lygis</label>
                                <input type="text" name="lygis" value="{{$lesson->level}}"   >
                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="pavadinimas">Pavadinimas</label>
                                <input type="text" id="pavadinimas" name="pavadinimas" class="form-control" value="{{$lesson->theme}}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="aprasymas">Aprašymas</label>
                                <textarea name="aprasymas" id="aprasymas" cols="30" rows="7" class="form-control">{{$lesson->description}} </textarea>
                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="skaidres">Nuoroda į skaidres</label>
                                <input type="text" id="skaidres" name="skaidres" class="form-control" value="{{$lesson->file}}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Atnaujinti duomenis" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>




@stop
