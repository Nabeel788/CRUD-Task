@extends('layouts.app')

@section('content')
    <h1>Edit Form Data</h1>

    <form action="{{ route('form.update', $formData->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $formData->name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $formData->email }}" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        @if ($formData->images)
            <p>Current Image:</p>
            <img src="{{ asset('storage/uploads/' . $formData->images) }}" alt="Image" style="max-width: 200px;">
        @endif

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection