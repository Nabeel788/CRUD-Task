@extends('layouts.app')

@section('content')
<h1>Form Data Details</h1>

<div>
    <h2>Name: {{ $formData->name }}</h2>
    <p>Email: {{ $formData->email }}</p>

    @if ($formData->images)
        <p>Image:</p>
        <img src="{{ asset('storage/uploads/' . $formData->images) }}" alt="Image" style="max-width: 200px;">
    @endif
</div>

<div>
    <a href="{{ route('form.index') }}" class="btn btn-secondary">Back</a>
    <a href="{{ route('form.edit', $formData->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('form.destroy', $formData->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
    </form>
</div>

@endsection