@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Welcome to my pet website</h1>
        <div class="table-responsive mt-3">
            <h3>Find by id:</h3>
            <form action="/pet" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="id" class="form-label">ID number</label>
                    <input type="number" class="form-control" id="id" name="id" required>
                    @error('id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Find</button>
            </form>
        </br>
            <h3>Find by availability:</h3>
            <form action="/status" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="isAvailable" class="form-label">Availability</label>
                    <select id="isAvailable" name="isAvailable">
                        <option value="available">available</option>
                        <option value="pending">pending</option>
                        <option value="sold">sold</option>
                      </select>
                    @error('isAvailable')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Find</button>
            </form>
        </br>
        <h3>Add image:</h3>
        <form action="/image" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID number</label>
                    <input type="number" class="form-control" id="id" name="id" required>
                    @error('id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <label for="image" class="form-label">Image URL</label>
                <input type="string" class="form-control" id="image" name="image" required>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        <h3>Add pet:</h3>
        <form action="/addPet" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID number</label>
                <input type="number" class="form-control" id="id" name="id" required>
                @error('id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="name" class="form-label">Name</label>
                <input type="string" class="form-control" id="name" name="name" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="image" class="form-label">Image URL</label>
                <input type="string" class="form-control" id="image" name="image" required>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="status" class="form-label">Availability</label></br>
                <select id="status" name="status">
                    <option value="available">available</option>
                    <option value="pending">pending</option>
                    <option value="sold">sold</option>
                    </select>
                @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        <h3>Update pet:</h3>
        <form action="/updatePet" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID number</label>
                <input type="number" class="form-control" id="id" name="id" required>
                @error('id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="name" class="form-label">Name</label>
                <input type="string" class="form-control" id="name" name="name" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="image" class="form-label">Image URL</label>
                <input type="string" class="form-control" id="image" name="image" required>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="status" class="form-label">Availability</label></br>
                <select id="status" name="status">
                    <option value="available">available</option>
                    <option value="pending">pending</option>
                    <option value="sold">sold</option>
                    </select>
                @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
@endsection