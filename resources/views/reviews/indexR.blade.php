@extends ('layouts.app')
@section('content')
    <h1>Reviews</h1>
    @if(count($reviews) > 1)
        @foreach($reviews as $review)
            <div class= "well">
                <h3><a href="/reviews/{{$review->id}}">{{$review->title}} </a></h3><small>{{$review->created_at}}</small><br>
                <small>{{$review->body}}</small> 
                        
            </div>
            <br>
            <br>
            @endforeach

            @else
        </p>no posts found</p>
        @endif
        <button class="button1" button onclick="location.href='{{ url('/Create') }}'" type="button">Write a review</button>
@endsection

