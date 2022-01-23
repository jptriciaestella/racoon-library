@extends('layouts.app')

@section('content')

<div style="margin:80px"></div>

<div class="container">
    <form method="POST" action="{{ route('Update', $books->id) }}" enctype="multipart/form-data">
        <div class="card">
            <h3 class="card-header" style="padding:1rem">{{ __('Update Book') }}</h3>
            
                <div class="card-body px-5">
                    @csrf
                    @method('Patch')
                    <div style="margin:20px"></div>
                    <div class="form-row">
                        <div class="name mb-2 h5">{{ __('Book Title *') }}</div>
                        <div class="col-md-20">
                            <input id="Title" type="text" class="form-control" name="Title" placeholder="Enter Book Title" value="{{ old( 'Title', $books->Title) }}">

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
                            <input id="Author" type="text" class="form-control" name="Author" placeholder="Enter Book Author" value="{{ old( 'Author', $books->Author) }}">

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
                            <input id="Pages" type="text" class="form-control" name="Pages" placeholder="Enter Number of Pages" value="{{ old( 'Pages', $books->Pages) }}">

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
                            <input id="YearPublished" type="text" class="form-control" name="YearPublished" placeholder="Enter Year Published" value="{{ old( 'YearPublished', $books->YearPublished) }}">

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
                            @if($books->Image)
                            <img src="{{asset('storage/'.$books->Image)}}" class=" img-preview img-fluid col-sm-3" style="margin-bottom:10px;">
                            @else
                                <img class="img-preview img-fluid col-sm-3" style="margin-bottom:10px;">
                            @endif
                            <input type="file" class="form-control" id="Image" name="Image" onchange="previewImage()">
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
                        <button class="btn btn-warning" type="submit">Update Book</button>
                </div>
        </div>
    </form>
</div>

<div style="margin:60px"></div>

@endsection