@extends("layouts.dashboard")

@section("contact")
<form action="/admin/enquiries/search">
    <input type="search" name="searchkiyakya" placeholder="search">
    <input type="submit" value="searchbar">
</form>
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
                <a href="/admin/viewenquiry/{{$enquiry->id}}">VIEW</a>
            </div>
            
        </form>
    @endforeach
@endsection