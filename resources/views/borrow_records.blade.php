@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">📖 Borrow Records</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Book</th>
                <th>Member</th>
                <th>Borrow Date</th>
                <th>Return Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrowRecords as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->book->title ?? 'N/A' }}</td>
                    <td>{{ $record->member->name ?? 'N/A' }}</td>
                    <td>{{ $record->borrow_date }}</td>
                    <td>{{ $record->return_date ?? 'Not returned yet' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
