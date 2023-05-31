@extends('template.master')

@section('konten')
    <div style="margin: 15px 180px">
        <div class="row">
            @foreach ($books as $book)
            <div class="card" style="width: 11rem;margin:15px 8px 10px">
                <a href="{{url('detail/'.$book->id)}}">
                <img class="card-img-top" src="{{ url($book->cover) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">$ {{ $book->price }}</p>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    @if($books->lastPage() > 1 )
        <div style="justify-content:space-around; margin-top:50px" >
            <div>
                <div class="d-flex justify-content-center">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="{{ $books->previousPageUrl() }}">&laquo;</a>
                        </li>
                        @for ($i = 1; $i <= $books->lastPage(); $i++)
                            @if($i == $books->currentPage())
                                <li class="page-item active">
                                    <a class="page-link" href="#">{{ $i }}</a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $books->url($i) }}">{{ $i }}</a>
                                </li>
                            @endif
                        @endfor
                        <li class="page-item">
                            <a class="page-link" href="{{ $books->nextPageUrl() }}">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endif
@endsection
