<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  

  </head>
<style>

.about {
  position: relative;
  left: 222px;
  top:153px;


}
p {
  overflow-wrap: break-word;
  word-wrap: break-word;
  length: 200px;
}
h1{
  position: relative;
  left: 220px;
  top: 130px;
}
.box {
  border: 1px solid;
  border-color: orange;
  padding: 10px;
  box-shadow: 5px 10px #ff9933;
  height: 300px;
  width: 1100px;
  position: relative;
  top: 20px;
}
.container2 {
  position: relative;
  top: -120px;
}
    
</style>

@extends ('layouts.app')
@section('content')  
{!! Form::open(['action' => 'SearchController@index', 'method' => 'GET']) !!}
<div class="form-group">
   
<select name="distance" id="distance" class="form-control input-lg dynamic" data-dependent="state">
<option value="">Distance</option>


    @foreach($distances as $distance)
        <option value="{{ $distance }}">{{ $distance }}</option>
    @endforeach


 </select>
<br>

<select name="price" id="price" class="form-control input-lg dynamic" data-dependent="state">
<option value="">Price</option>


    @foreach($prices as $price)
        <option value="{{ $price}}">{{ $price}}</option>
    @endforeach


 </select>
</div>
<div class="form-group">
    {{ Form::Submit('submit', ['class' => 'btn btn-primary']) }}

</div>
@foreach($posts as $post)
        <div class ="box">
          <div class = "container2">
            <h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
              <div class= "about">
                  <p>{{ $post->About }}</p>
              </div>
                <div class="image">
                    <img src="{{$post->image}}" height = 200 width =200>
                </div>
          </div>
        </div>
        <br>

@endforeach
@endsection




