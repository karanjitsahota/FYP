<style>
        <style>
    .form-signin{
        position: relative;
        bottom:80px;
        left: 430px;
        width: 200px;
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
      left: 40px;
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
        </style>
    
    @extends ('layouts.app')
    @section('content')
        <h1>{{$post->title}}</h1>
        <h3>{{$post->created_at}}</h3>
        <br>
        <h2>{{$post->body}}</h2>
          <br>
          <br>
          <br>
        <button class="button1" button onclick="location.href='{{ url('/reviews') }}'" type="button">Write a review</button>
    @endsection