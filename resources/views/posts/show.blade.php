<style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .checked {
  color: orange;
    }
.button {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
  position: relative; 
  left: 50px;
    }
  .open-button {
    position: absolute;
    left: 0px;
  }  
.button {
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button:hover {
  background-color: #6574cd; /* Green */
  color: white;
}
.button1 {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
  position: relative; 
  left: 0px;
    }
.button1 {
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1:hover {
  background-color: #6574cd; /* Green */
  color: white;
}
.info {
  Position: relative;
  left: 400px;
  top: -340px;
}
.open-button {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;

  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
  bottom: -353px;
  right: -180px;
  width: 180px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 30px;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  width: 400px;
  box-shadow: 10px 10px 5px grey;
  background-color: #ffffff;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: #ffffff;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 75%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #ffffff;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 183px;
  position: relative;
  top: -30px;
  left: 209px;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class <button class="button1" button onclick="location.href='{{ url('/payment') }}'" type="button">Book Hotel</button>*/
.tab button.active {
  background-color: #ccc;
}

.tabcontent {
  display: none;
  padding: 6px 10px;
  border-top: none;
}
.reviews {
  position: relative;
  top: 10px;
  left: 200px;
}
.about {
  position: relative;
  top: 10px;
  left: 200px;
  width: 800px;
}
    </style>

@extends ('layouts.app')
@section('content')
    <h1>{{$post->title}}</h1>
    <br>
    <h2>{{$post->body}}</h2>  
    <br>
    <img src="{{$post->image}}" height="350" width="350">
    <div class= 'Info'>
    <br>
    <b> 
   Distance from University- {{$post->distance}}
    <br>
   Number of Rooms - {{$post->rooms}}
    <br>
   Price - {{$post->price}}</b>
    <br>
    </div>
    
<div class="form-popup" id="myForm">

{!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST']) !!}

<div class= "form-group">
    {{Form::label('rating', 'rating')}}
    {{Form::text('rating', '',['class' => 'form-control', 'placeholder' => 'rating'] )}}
</div>
<div class= "form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '',['class' => 'form-control', 'placeholder' => 'Title'] )}}
</div>
<div class= "form-group">
        {{Form::label('body', 'Review')}}
        {{Form::textarea('body', '',['class' => 'form-control', 'placeholder' => 'Review'] )}}
</div>

    <div class= "form-group">
    </div>
    <div class= "form-group">
        {{Form::hidden('post_id',  $post->id)}}
    </div>

{{Form::Submit('submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
<button type="button" class="btn btn-primary" onclick="closeForm()">Close</button>
</div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews</button>
  <button class="tablinks" onclick="openCity(event, 'About')">About</button>
</div>
<div class="about">
<div id="About" class="tabcontent">
  <p>{{$post->About}}</p> 
  <img src="{{URL::asset('/images/facilities.jpg')}}">
</div>
</div>

<div id="Reviews" class="tabcontent">
 <div class = 'reviews'>
 @can('isUser')
    <button class="open-button" onclick="openForm()">Write review</button>
    @endcan
    <h1>Reviews</h1>
    @if(count($review) > 1)
        @foreach($review as $reviews)
            <div class= "well"> 
                <h3><a href="/reviews/{{$reviews->title}}">{{$reviews->title}} </a></h3><small>{{$reviews->created_at}}</small><br>
                <small>{{$reviews->body}}</small> 
               <br>
               <br>
            </div>
            
            @endforeach

            @else
        </p>no posts found</p>
        @endif     
@endsection  
    </div>
</div>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>


