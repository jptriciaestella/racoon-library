@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                @if($books->Image)
                    <img class="card-img-top mb-5 mb-md-0 rounded" src="{{asset('storage/'.$books->Image)}}" alt="" style="object-fit:cover">
                @else
                    <img class="card-img-top mb-5 mb-md-0 rounded border border-dark" src="https://st3.depositphotos.com/23594922/31822/v/600/depositphotos_318221368-stock-illustration-missing-picture-page-for-website.jpg" alt="" style="object-fit:cover">
                @endif
            </div>
            <div class="col-md-6">
                <div class="small mb-1">Last Updated:  {{$books->updated_at}}</div>
                <h1 class="display-5 fw-bolder">{{$books->Title}}</h1>
                <div class="fs-5 mb-5">
                    <span>{{$books->Author}}</span>
                </div>
                <p class="lead">This book is written by {{$books->Author}} and was published in {{$books->YearPublished}}. There are {{$books->Pages}} page(s) in this book. Go back to the main menu to update or delete this book from the database.<br><br></p>
                <div class="d-flex">
                    <a class="btn btn-outline-dark flex-shrink-0" href="{{route('home')}}">Back To Main Menu</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="margin:50px"></div>
@endsection