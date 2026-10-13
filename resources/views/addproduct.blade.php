@extends('layouts.main')
@section('titlename')
Addproduct
@endsection
@section('contantbox')
    <form action="/savedata" method="post" >
        @csrf
        name: <input type="text" name="name"><br>
        @error("name")
        <div>{{ $message}}</div>
        @enderror
         price: <input type="number" name="price"><br>
         @error("price")
        <div>{{ $message}}</div>
        @enderror
        stock: <input type="number" name="stock"><br>
          @error('stock')
        <div>{{ $message}}</div>
        @enderror
        description: <textarea name="description" id=""></textarea><br>
            @error("description")
        <div>{{ $message}}</div>
        @enderror
            <input type="submit" name="send message">
    </form>
@endsection