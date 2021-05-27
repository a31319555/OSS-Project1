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
          
          
<div id="map" style="width:800px;height:400px;"></div>
	<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=98ca33e79c663ac59d91b0a8cb887c6b"></script>
	<script>
		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(37.5665, 126.9780),// 지도의 중심좌표
			level: 12 // 지도의 확대 레벨
		};

		var map = new kakao.maps.Map(container, options); // 지도를 생성
		
		
		var positions = [
    {
        title: '서울날씨', 
        latlng: new kakao.maps.LatLng(37.5665, 126.9780) // 서울 
    },
    {
        title: '부산날씨', 
        latlng: new kakao.maps.LatLng(35.1796, 129.0756) //부산
    },
    {
        title: '광주날씨', 
        latlng: new kakao.maps.LatLng(35.1595, 126.8526) //광주
    },
    {
        title: '삼척날씨',
        latlng: new kakao.maps.LatLng(37.4499, 129.1652) //삼척
    },
	  {
        title: '안동날씨',
        latlng: new kakao.maps.LatLng(36.5684, 128.7294) //안동
    },
	 {
        title: '충주날씨',
        latlng: new kakao.maps.LatLng(36.9910, 127.9259) //충주
    }
];

// 마커 이미지의 이미지 주소입
var imageSrc = "https://cdn1.iconfinder.com/data/icons/interface-travel-and-environment/64/rain-umbrella-forecast-weather-protection-512.png";  // 비 모양 마커
    
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
	</script>
		  </section>
         
          </article>
		  <br><br><br><br>
		  
		  
		  
      <footer>
        <h1> 선문대학교   </h1>
     
      </footer>
      
      
      
    </div>
  </body>
</html>
