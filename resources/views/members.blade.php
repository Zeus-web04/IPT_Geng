@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">👥 Members List</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Year Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->year_level }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
