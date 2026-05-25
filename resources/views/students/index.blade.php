@extends('app.layout')

@section('title', 'Students')

@section('content')
    <h1>Students</h1>

    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>

    @if (count($result->items) === 0)
        <p>No students found.</p>
    @else
        @dd($result)
    @endif
@endsection
