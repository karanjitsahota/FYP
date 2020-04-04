
    <style>
    .pricing {
        color: red;
        size: 20px;
        
    }

    h2{
        position: relative;
        top:100px;
        right: -230px;
    }
    .about {
        position: relative;
        top: 100px;
        left: 230px;
    }
    .container1 {
        position: relative;
        top: -70px;
    }
 
    </style>
    @extends ('layouts.app')
    @section('content')
    
    <h1>Hotels</h1>
    <br>
    @if(count($posts) > 1)
        @foreach($posts as $post)
       <div class = "container1">
                <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                <div class="about">
                <small>{{$post->About}}</small>      
                </div>
                <br>
                <div class="image">
                <img src="{{$post->image}}" alt="profile Pic" height="200" width="200">
                </div>

            </div>
            @endforeach

            @else
        </p>no posts found</p>
        @endif
        
@endsection
