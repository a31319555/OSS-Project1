<!DOCTYPE html>
<html>
  
  <head>
      <meta charest="UTF-8">
    <title> weather </title>
   
    <style>
      *{margin: 0px ; padding:0px;}
        ul{list-style: none;}
      a{text-decoration:none;}
      
      header{
           width:1200px;
           height: 95x;
       background-image:url("https://cdn.pixabay.com/photo/2018/06/21/13/57/clouds-3488632_1280.jpg");
          position: relative;
        border: 3px solid black;
        color: white;
  
      
         }
          body { background-image: url("https://cdn.pixabay.com/photo/2018/08/24/23/37/raindrop-3629132_1280.jpg"); }
      
      
     
      #logo {
      position : absolute;
          top: 30px;
          left: 30px;
    }
      
        #top_menu {
          
          position : absolute;
          top: 20px;
          right: 10px;
          color: white;
      
    }
      #top_menu a{ color: black;}
      
      
      nav{
        
        bottom: 10px;
        left: 220px;
        font-size: 16px;
      }
      
      nav li{
        
        display: inline;
            margin-left: 60px;
        
          font-size: 30px;
      }
      
      section {
      width:200px;
      text-align:left;
      float:left;
        padding:10px; }
      #content li{
             display: inline;
            margin-left: 50px;
            
      }
        
        footer{
          width:1200px;
           height: 90x;
          margin-left: 20px;
          text-align: center;
       background-color: lightgrey;
          
          clear:both;
      }
      header, nav, section, footer { text-align:center; }
    header, footer { line-height:100px; }
    nav, section { line-height:240px; }
      #page{width:1200px; margin:0px auto;
      }
      #sub
      {
      border: 3px solid #00BFFF;
      margin-left: 370px;
    }
       #sub2
      {
      border: 3px solid #00BFFF;
      margin-left: 370px;
    }
  </style>
  </head>
  
  <body>
    
    <div id = "page" >
      
      <header>
        
    
     
       
        <nav>
        <ul>
           <li><a href= "#"> 메인페이지 </a></li>   
           <li><a href= "#"> 날씨 정보 </a> </li>
           <li><a href= "#"> 지도 정보 </a> </li>
        </ul>
      </nav>
      
      </header>
      
      
   
      
     
      
      <article id= "content">
        <section id="main">
          
          
<div id="map" style="width:1200px;height:600px;"></div>
	<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=98ca33e79c663ac59d91b0a8cb887c6b"width="33" height="30"></script>
	<script>
		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(36.1398, 128.1136),// 지도의 중심좌표
			level: 13 // 지도의 확대 레벨
		};
		var map = new kakao.maps.Map(container, options); // 지도를 생성
		
		
		var positions = [
    {
        title: '서울날씨', 
        latlng: new kakao.maps.LatLng(37.5665, 126.9780) // 서울 
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});


	var positions = [
    {
        title: '제주날씨', 
        latlng: new kakao.maps.LatLng(33.4996, 126.5312) // 제주
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index2.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '부산날씨', 
        latlng: new kakao.maps.LatLng(35.1796, 129.0756) // 부산
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index3.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '김천날씨', 
        latlng: new kakao.maps.LatLng(36.1398, 128.1136) // 김천
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index4.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '대구날씨', 
        latlng: new kakao.maps.LatLng(35.8714, 128.6014) // 대구
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index5.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '광주날씨', 
        latlng: new kakao.maps.LatLng(35.1595,126.8526) // 광주
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index6.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '목포날씨', 
        latlng: new kakao.maps.LatLng(34.8118, 126.3922) // 목포
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index7.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '진주날씨', 
        latlng: new kakao.maps.LatLng(35.1800, 128.1076) // 진주
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index8.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '삼척날씨', 
        latlng: new kakao.maps.LatLng(37.4499, 129.1652) // 삼척
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index9.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '대전날씨', 
        latlng: new kakao.maps.LatLng(36.3504, 127.3845) // 대전
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index10.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});


var positions = [
    {
        title: '대전날씨', 
        latlng: new kakao.maps.LatLng(38.2070, 128.5918) // 대전
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index11.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '춘천날씨', 
        latlng: new kakao.maps.LatLng(37.8813, 127.7300) // 춘천
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index12.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});


var positions = [
    {
        title: '안동날씨', 
        latlng: new kakao.maps.LatLng(36.5684, 128.7294) // 안동
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index13.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});


var positions = [
    {
        title: '천안날씨', 
        latlng: new kakao.maps.LatLng(36.8151, 127.1139) // 천안
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index14.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '충주날씨', 
        latlng: new kakao.maps.LatLng(36.9910, 127.9259) // 충주
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index15.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '포항날씨', 
        latlng: new kakao.maps.LatLng(36.0190, 129.3435) // 포항
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index16.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '여수날씨', 
        latlng: new kakao.maps.LatLng(34.7604, 127.6622) // 여수
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index17.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

var positions = [
    {
        title: '군산날씨', 
        latlng: new kakao.maps.LatLng(35.9677, 126.7366) // 군산
		
    }
];
// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn.icon-icons.com/icons2/1461/PNG/128/2998141-cloud-nature-rain-weather_99845.png";  // 비 모양 마커
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다    
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize); 
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
        title : positions[i].title, // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시
        image : markerImage // 마커 이미지 
    });
}
var iwContent = '<div style="padding:5px;"></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

// 인포윈도우를 생성합니다
var infowindow = new kakao.maps.InfoWindow({
    content : iwContent,
    removable : iwRemoveable
});
kakao.maps.event.addListener(marker, 'click', function(){
   
    window.open('index18.html');
});
// 마커에 클릭이벤트를 등록합니다
kakao.maps.event.addListener(marker, 'click', function() {
      // 마커 위에 인포윈도우를 표시합니다
      infowindow.open(map, marker);  
});

	</script>
	
	
		  </section>
         
          </article>
		  <br><br><br><br>
		  
		  
	
      
      
      
    </div>
  </body>
</html>