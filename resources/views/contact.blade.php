@extends('layouts.main')
@section('titlename')
Addproduct
@endsection
@section('contantbox')
@if( session("success"))
    <div>{{ ( session("success")) }}</div>
@endif
    <form action="/enquirydata" method="post" >
        @csrf
        Name: <input type="text" name="name"><br>
        @error("name")
        <div>{{ $message}}</div>
        @enderror
         Email: <input type="email" name="email"><br>
         @error("email")
        <div>{{ $message}}</div>
        @enderror
        Phone: <input type="number" name="phone" ><br>
          @error('phone')
        <div>{{ $message}}</div>
        @enderror
        Message: <textarea name="message" id=""></textarea><br>
            @error("message")
        <div>{{ $message}}</div>
        @enderror
            <input type="submit" name="send message">
    </form>
@endsection