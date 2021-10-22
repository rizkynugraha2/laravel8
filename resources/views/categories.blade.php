@extends('layouts.main')

 @section('penampung')
    <h1 class="mb-5">Post Categories</h1>

    @foreach ($categories as $category)
    <ul>
        <li> 
            <a href="/posts?category=/{{ $category->slug }}" class="text-decoration-none">{{$category->name}}</a>      
        </li>
    </ul>    
    @endforeach

 @endsection