@extends("layouts.dashboard")

@section("contact")
    {{ $currentdata->name }}<br>
    {{ $currentdata->email }}<br>
    {{ $currentdata->phone }}<br>
    {{ $currentdata->message }}<br>
@endsection
