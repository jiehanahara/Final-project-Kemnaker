@extends('landing.master')

@section('content')

<section class="section-top">
    <div class="container text-center">
        <h1>{{ $attraction->name }}</h1>
    </div>
</section>

<section class="property_single_details section-padding">
    <div class="container">
        <div class="row">

            <!-- LEFT SIDE -->
            <div class="col-md-9">

                <!-- IMAGE -->
                <div class="property_single_details_slide">
                    <img src="{{ asset('storage/' . $attraction->image) }}" class="img-fluid">
                </div>

                <!-- BASIC INFO -->
                <div class="property_single_details_price">
                    <h2>{{ $attraction->name }}</h2>
                    <h4>{{ $attraction->price ?? 'Free' }}</h4>
                    <p>{{ $attraction->location }}</p>
                </div>

                <!-- DESCRIPTION -->
                <div class="property_single_details_description">
                    <h4>Description</h4>
                    <p>{{ $attraction->description }}</p>
                </div>

                <!-- ⭐ REVIEWS -->
                <div class="property_reviews mt-5">
                    <h4>Reviews</h4>

                    @forelse($attraction->reviews as $review)
                        <div class="review-box mb-3 p-3 border rounded">
                            <strong>{{ $review->name }}</strong>

                            <div>
                                @for ($i = 1; $i <= 5; $i++)
                                    {{ $i <= $review->rating ? '⭐' : '☆' }}
                                @endfor
                            </div>

                            <p>{{ $review->comment }}</p>
                        </div>
                    @empty
                        <p>No reviews yet.</p>
                    @endforelse
                </div>

                <!-- ✍️ REVIEW FORM -->
                <div class="review-form mt-4">
                    <h4>Leave a Review</h4>

                    <form method="POST" action="{{ route('reviews.store') }}">
                        @csrf

                        <input type="hidden" name="attraction_id" value="{{ $attraction->id }}">

                        <input type="text" name="name" class="form-control mb-2" placeholder="Your name" required>

                        <textarea name="comment" class="form-control mb-2" placeholder="Your review" required></textarea>

                        <select name="rating" class="form-control mb-2">
                            <option value="5">5 ⭐</option>
                            <option value="4">4 ⭐</option>
                            <option value="3">3 ⭐</option>
                            <option value="2">2 ⭐</option>
                            <option value="1">1 ⭐</option>
                        </select>

                        <button type="submit" class="btn btn-primary">Submit Review</button>
                    </form>
                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="col-md-3">
                <div class="p-3 border rounded">
                    <h5>Quick Info</h5>
                    <p><strong>Location:</strong> {{ $attraction->location }}</p>
                    <p><strong>Price:</strong> {{ $attraction->price ?? 'Free' }}</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection