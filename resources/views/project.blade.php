@extends('layouts.main')
@section('titlename')
Addproduct
@endsection
@section('contantbox')
    <form action="/projectdata" method="post" >
        @csrf
        Title: <input type="text" name="title"><br>
        @error("tirle")
        <div>{{ $message}}</div>
        @enderror
         URL: <input type="text" name="url"><br>
         @error("url")
        <div>{{ $message}}</div>
        @enderror
        Tech_used: <input type="text" name="teach_used"><br>
          @error('teach_used')
        <div>{{ $message}}</div>
        @enderror
        description: <textarea name="description" id=""></textarea><br>
            @error("description")
        <div>{{ $message}}</div>
        @enderror
            <input type="submit" name="send message">
    </form>
@endsection