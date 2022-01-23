@extends('layouts.app')

@section('content')

<div style="margin:80px"></div>

<div class="container">
    <form method="POST" action="{{ route('createForm') }}" enctype="multipart/form-data">
        <div class="card">
            <h3 class="card-header" style="padding:1rem">{{ __('Create Book') }}</h3>
            
                <div class="card-body px-5">
                    @csrf
                    <div style="margin:20px"></div>
                    <div class="form-row">
                        <div class="name mb-2 h5">{{ __('Book Title *') }}</div>
                        <div class="col-md-20">
                            <input id="Title" type="text" class="form-control" name="Title" placeholder="Enter Book Title" value="{{old('Title')}}">

                            @error('Title')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <hr style="margin: 1.5rem 0">

                    <div class="form-row">
                        <div class="name mb-2 h5">{{ __('Author *') }}</div>
                        <div class="col-md-20">
                            <input id="Author" type="text" class="form-control" name="Author" placeholder="Enter Book Author" value="{{old('Author')}}">

                            @error('Author')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <hr style="margin: 1.5rem 0">

                    <div class="form-row">
                        <div class="name mb-2 h5">{{ __('Pages *') }}</div>
                        <div class="col-md-20">
                            <input id="Pages" type="text" class="form-control" name="Pages" placeholder="Enter Number of Pages" value="{{old('Pages')}}">

                            @error('Pages')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <hr style="margin: 1.5rem 0">

                    <div class="form-row">
                        <div class="name mb-2 h5">{{ __('Year Published *') }}</div>
                        <div class="col-md-20">
                            <input id="YearPublished" type="text" class="form-control" name="YearPublished" placeholder="Enter Year Published" value="{{old('YearPublished')}}">

                            @error('YearPublished')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <hr style="margin: 1.5rem 0">

                    <div class="form-row">
                        <div class="name mb-2 h5">{{ __('Book Picture (Optional)') }}</div>
                        <div class="form-group">
                            <img class="img-preview img-fluid col-sm-3" style="margin-bottom:10px;">
                            <input type="file" class="form-control" id="Image" name="Image" value="" onchange="previewImage()">
                        </div>
                        @error('Image')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                        @enderror
                    </div>

                    <div style="margin:50px"></div>
                </div>

                <div class="card-footer d-flex flex-row-reverse" style="padding:1rem">
                        <button class="btn btn-warning" type="submit">Create Book</button>
                </div>
        </div>
    </form>
</div>

<div style="margin:60px"></div>

@endsection