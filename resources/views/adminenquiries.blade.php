@extends("layouts.dashboard")

@section("contact")
    @foreach($enquiry_table  as  $enquiry)
        <div>
            <div>{{ $enquiry->name }}</div>
            <div>{{ $enquiry->email }}</div>
            <div>{{ $enquiry->phone }}</div>
            <div>{{ $enquiry->message }}</div>
        </div>
        <form method="post" action="/delete_enquiries/{{$enquiry->id}}">
            @csrf
            @method("delete")
            <input type="submit" value="DELETE">
            <div>
                <a href="/edit_enquiry/{{ $enquiry->id }}">EDIT</a>
            </div>
        </form>
    @endforeach
@endsection