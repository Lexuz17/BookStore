@extends('template.master')

@section('konten')
    <style>
        .form-registration input {
            border-radius: 5;
            margin-bottom: -1px;
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration my-5">
                <h1 class="h3 mb-1 pb-2 fw-bold text-left">Add new book</h1>
                <form action="{{ route('addBook') }}" method="post">
                    @csrf
                    <label class="form-label fw-bold my-2">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">

                    <label class="form-label fw-bold my-2">Author</label>
                    <input type="text" name="author" class="form-control" value="{{ old('author') }}">

                    <label class="form-label fw-bold my-2">Cover</label>
                    <input type="text" name="cover" class="form-control" placeholder="Type your link image" value="{{ old('cover') }}">

                    <label class="form-label fw-bold my-2">Language</label>
                    <input type="text" name="language" class="form-control" value="{{ old('language') }}">

                    <div class="form-group row my-2 fw-bold">
                        <div class="col">
                            <label>Price</label>
                            <input class="form-control" name="price" type="text" value="{{ old('price') }}">
                        </div>
                        <div class="col">
                            <label>Genre</label>
                            <input class="form-control" name="genre" type="text">
                        </div>
                        <div class="col">
                            <label>Publication Date</label>
                            <input class="form-control" name="publication_date" type="date">
                        </div>
                        <div class="col">
                            <label>Publisher</label>
                            <input class="form-control" name="publisher" type="text">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold my-2">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary rounded-top my-3 border-0" style="background-color: #AA9172" type="submit">
                        Add Book
                    </button>
                </form>
            </main>
        </div>
    </div>
@endsection
