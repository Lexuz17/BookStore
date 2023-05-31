@extends('template.master')

@section('konten')
    <div class="top">
        <div class="left" style="margin-left: 15px; margin-top: 15px; float: left">
            <img src="{{ url($book->cover) }}" alt="" class="image" style="height: 450px; width: 300px; object-fit: fill">
        </div>
        <div class="right" style="width: 75%; margin-left: auto;  ">
            <h1 style="padding-top:45px; margin-left: -40px" class="tittle">{{ $book->title }}</h1>
            <p style="margin-top: 20px; margin-left: -35px; margin-bottom: 15px;" class="desc">{{ $book->description }}</p>
            <div class="bottom-content" style="margin-left: -35px; margin-top: 60px">
                <h3>Detail</h3>
                <div class="all" style="display: inline-flex">
                    <style>
                        .block{
                            margin-top: 20px;
                            width: 150px;
                            margin-right: 25px;
                        }
                        .block h2{
                            font-size: 17px;
                            font-weight: 700;
                        }

                        .block h3{
                            color: #a2a2a2;
                            font-size: 15px
                        }
                    </style>
                    <div class="block">
                        <h3>Written by</h3>
                        <h2>{{ $book->author }}</h2>
                    </div>
                    <div class="block">
                        <h3>Published by</h3>
                        <h2>{{ $book->publisher }}</h2>
                    </div>
                    <div class="block">
                        <h3>Year</h3>
                        <h2>{{ $book->publication_date}}</h2>
                    </div>
                    <div class="block">
                        <h3>Stock</h3>
                        <h2>{{ $book->stock }}</h2>
                    </div>
                    <div class="block">
                        <h3>Genre</h3>
                        <h2>{{ $book->genre }}</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
