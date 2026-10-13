@extends("layouts.dashboard")

@section("contact")
@if( session("success"))
    <div>{{ ( session("success")) }}</div>
@endif
    <form action="/update_enquiry/{{ $currentdata->id }}" method="post" >
        @csrf
        @method("put")
        Name: <input type="text" name="name"  value="{{ $currentdata->name }}"><br>
        @error("name")
        <div>{{ $message}}</div>
        @enderror
         Email: <input type="email" name="email" value="{{ $currentdata->email }}"><br>
         @error("email")
        <div>{{ $message}}</div>
        @enderror
        Phone: <input type="number" name="phone" value="{{ $currentdata->phone }}"><br>
          @error('phone')
        <div>{{ $message}}</div>
        @enderror
        Message: <textarea name="message" >{{ $currentdata->message }}</textarea><br>
            @error("message")
        <div>{{ $message}}</div>
        @enderror
            <input type="submit" name="update">
    </form>
@endsection