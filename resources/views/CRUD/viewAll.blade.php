@if ($datas->count() > 0)
    @foreach ($datas as $books)
        <div class="col">
            <a href="{{ route ('ViewBook', $books->id) }}" class="text-decoration-none text-dark">
                <div class="card shadow-sm">
                    @if($books->Image)
                    <img src="{{asset('storage/'.$books->Image)}}" alt="" width="100%" height="225" style="object-fit:cover">
                    @else
                        <img src="https://st3.depositphotos.com/23594922/31822/v/600/depositphotos_318221368-stock-illustration-missing-picture-page-for-website.jpg" alt="" width="100%" height="225" style="object-fit:cover">
                    @endif
                    <div class="card-body" style="height:135px;">
                        <h5 class="card-title">{{ $books->Title}}</h5>
                        <p class="card-text" style="margin-bottom:15px !important;">{{$books->Author}} ({{$books->YearPublished}})</p>
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <small class="text-muted">{{ $books->Pages}} page(s)</small>
                            <div class="btn-group">
                            <a class="btn btn-sm btn-outline-success" href="{{ route ('UpdateForm', $books->id) }} ">Edit</a>
                            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Delete
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete {{$books->Title}}?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            This action cannot be undone!
        </div>
        <div class="modal-footer">
            <form action="{{route('DeleteBook', $books->id)}}" method="POST">
                        @csrf
                        @method('Delete')
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
    @endforeach
@endif
