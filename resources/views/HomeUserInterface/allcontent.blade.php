@extends('layout.bone')

@section('title','ទំព័រដើម')


@section('style')

@endsection


@section('post')
    <div class="row">
        <div class="col-xl-3 col-lg-2 col-md-2 col-2"></div>
        <div  data-aos="fade-left" class="btn btn-primary rounded-pill col" >
            <h3 class="header " class="btn btn-white rounded-pill animate__animated animate__bounce" data-aos="animate text on scroll">ដំណឹងអាហារូករណ៍
                <sup><img src="https://i.ibb.co/wNMDRM4/new.png" alt="new" class="new rounded-circle animate__animated animate__swing" style="width: 7%;"></sup>
            </h3>
        </div>
        <div class="col-xl-3 col-lg-2 col-md-2 col-2"></div>
    </div>

    @include('HomeUserInterface.scholar_highschool')
    @include('HomeUserInterface.scholar_bachelor')
    @include('HomeUserInterface.scholar_master')
    @include('HomeUserInterface.scholar_phd')
    @include('HomeUserInterface.source_book')
    @include('HomeUserInterface.source_video')
    @include('HomeUserInterface.source_website')

    @endsection
