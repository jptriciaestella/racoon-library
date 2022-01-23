@extends('layouts.app')

@section('content')
    <!-- CAROUSEL -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect><img src="https://i.pinimg.com/originals/67/18/22/671822c2f63dd5f65d8fd15c9710420b.jpg" style="filter: brightness(30%); object-fit:cover" alt=""></svg>

            <div class="container">
            <div class="carousel-caption text-start">
                <h1>Manage the Library collections.</h1>
                <p>Edit or delete outdated book that no longer available in the library.</p>
                <p><a class="btn btn-warning" href="#view-books">View Books</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item active carousel-item-start">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect><img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwxNjUzNTU2fHxlbnwwfHx8fA%3D%3D&w=1000&q=80" style="filter: brightness(30%); object-fit:cover" alt=""></svg>

            <div class="container">
            <div class="carousel-caption">
                <h1>View the library collections.</h1>
                <p>Browse all books available in Racoon Library</p>
                <p><a class="btn btn-warning" href="#view-books">View Books</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item carousel-item-next carousel-item-start">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect><img src="https://img.freepik.com/free-photo/book-background-old-books-library-flatlay-top-view_427771-2311.jpg?size=626&ext=jpg" style="filter: brightness(20%); object-fit:cover" alt=""></svg>

            <div class="container">
            <div class="carousel-caption text-end">
                <h1>Add new book to library.</h1>
                <p>Expand Racoon Library's collection by adding new books to the database.</p>
                <p><a class="btn btn-warning" href="#view-books">View Books</a></p>
            </div>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- VIEW BOOKS -->
    @if(Session::get('success'))
        <div class = "container">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{Session::get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <div class="album py-5" id="view-books">
        <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <!-- ADD NEW BOOK -->
            <a href = "{{route('create')}}" class="text-decoration-none">
                <div class="col add">
                    <div class="card shadow-sm">
                        <img src="https://cdn.pixabay.com/photo/2017/04/20/07/07/add-2244771_960_720.png" alt="" width="100%" height="225" style="object-fit:cover">
                        <div class="card-body d-flex flex-column justify-content-center" style="height:135px;">
                        <h5 class="card-title text-dark">Click here to add a new book to the website.</h5>
                        </div>
                    </div>
                </div>
            </a>

            <!-- VIEW ALL BOOK -->
            @include('CRUD.viewAll')

            <div style="margin:100px"></div>
        </div>
        </div>
    </div>

@endsection

    