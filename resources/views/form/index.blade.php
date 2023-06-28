@extends('layouts.app')

@section('content')
<h1>Form Data</h1>

<a href="{{ route('form.create') }}" class="btn btn-primary mb-3">Add New</a>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($formData as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>
                    
                        <img src="{{ asset('storage/uploads/' . $data->images) }}" alt="Image" style="max-width: 100px;">
                    
                </td>
                <td>
                    <a href="{{ route('form.show', $data->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('form.edit', $data->id) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('form.destroy', $data->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
