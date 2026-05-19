@extends('layouts.app')

@section('title', 'Create Student')

@section('content')
    <div class="bg-[#48E]">
        <form method="POST" action="{{ route('students.store') }}" class="p-4">
            @csrf

            {!-- Name --}
            <label>
                <input type="text" name="first_name" value="">
            </label>
            <label>
                <input type="text" name="last_name" value="">
            </label>
            {!-- Document Info --}
            <label>
                <input type="text" name="document_type" value="">
            </label>
            <label>
                <input type="text" name="document_number" value="">
            </label>
            <label>
                <input type="date" name="birth_date" value="">
            </label>
        </form>
    </div>
@endsection
