@extends('Admin.master')

@section('section')
    <h1> Manage Reviews</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Reviewer</th>
                <th>Comment</th>
                <th>Rating</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->reviewer_name }}</td>
                    <td>{{ $review->comment }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>{{ $review->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection