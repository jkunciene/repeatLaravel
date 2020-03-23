@extends('myWebSite/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/img/remembers.jpg);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Įdėti naujos pamokos aprašymą</h1>
                            <p class="mb-0">Prasmė dalintis</p>
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
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="/lesson_store" enctype="multipart/form-data" class="p-5 bg-white">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="lygis">Lygis</label>
                                <select name="lygis" class="custom-select">
                                    @foreach($levels as $level)
                                        <option value="{{$level->id}}">{{$level->name}}</option>
                                    @endforeach;
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="pavadinimas">Pamokos pavadinimas, tema</label>
                                <input type="text" id="pavadinimas" name="pavadinimas" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="aprasymas">Aprašymas</label>
                                <textarea name="aprasymas" id="aprasymas" cols="30" rows="7" class="form-control"
                                          placeholder="Parašykite pamokos temą, paskirtį, naudas, uždavinius..."></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="skaidres">Skaidrės</label>
                                <textarea name="skaidres" id="skaidres" cols="30" rows="7" class="form-control"
                                          placeholder="Įklijuoti skaidrių nuorodą google diske..."></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Add lesson" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop