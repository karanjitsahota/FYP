
<html>
<style>

  #map {

    height: 500px;
    width: 500px;
    margin: 0 auto;
    position: relative:
    top: 100px;

  }
</style>
</head>

<body>
@extends ('layouts.app')
@section('content')
    <h1>Welcome to the hotel booking system</h1>  
   
    @forelse($postings as $post)

<h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>

@empty

</p>no posts found</p>

@endforelse



<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6h6A_HK0VGaTa6cX1YWFf7gx82_N2Da0&callback=initMap" type="text/javascript"></script>
<script>
      var map;
      function initMap() {
          var location = {lat: 52.4853, lng: -1.8884};
          map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12.8,
          center: location
        });

        var markers = [

          {
            coords:{lat: 52.4853, lng: -1.8884},
            iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            content: '<h1>Aston University</h1>'
          },
          {
            coords:{lat: 52.4800, lng: -1.9077},
            content: '<h1>hotel one</h1>'   
          },
          {
            coords:{lat: 52.4775, lng: -1.8951},
            content: '<h1>hotel two</h1>'
          }
 ];

        for(var i = 0;i < markers.length; i++) {
          addMarker(markers[i]);
        }

        addMarker({
          coords:{lat: 52.4853, lng: -1.8884},
          iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          content: '<h1>Aston University</h1>'
          });
        addMarker({
          coords:{lat: 52.4800, lng: -1.9077},
          content: '<h1>hotel one</h1>'         
          });
        addMarker({
          coords:{lat: 52.4775, lng: -1.8951},
          content: '<h1>hotel two</h1>' 
          });

        function addMarker(props){
          var marker = new google.maps.Marker ({
            position:props.coords,
            map: map,
            //icon: props.iconImage
          });
          if(props.iconImage){
            marker.setIcon(props.iconImage);

          }

          if(props.content){
            var infoWindow = new google.maps.InfoWindow ({
              content:props.content
            });
            marker.addListener('click', function(){
              infoWindow.open(map, marker);
            });
          }
        }
      

        
    
     
      }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6h6A_HK0VGaTa6cX1YWFf7gx82_N2Da0&callback=initMap"></script>
    @endsection