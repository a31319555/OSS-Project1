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
          
          
          <img src ="https://lh3.googleusercontent.com/proxy/SiWl0Y0U7BJsHd3EWH5QHz4oge9OZUweY8B9XhBW3fuGXz2eMwsfHpA2ZJH6aWR2ZSZI46YEvv1D4bDMP9wkHfSVA7jzRZ2QU9dhCFgMqumKxBeE-rnsbZhLbKmlQBzt6iY-Q6ZLxEyNI5gjMT9pldeUsJro7jTwEMd0mdcqN6-J99h1UFKT" alt= "ain img" style="width:800px; height:514px; border: 1px solid black">
          </section>
         
          </article>

        <div id="map" style="width:500px;height:300px;">
          </div>

        <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=b47a795b1c07dd3b116e5e0065cdf4ba">
          </script>

        <script>
          var container = document.getElementById('map');
          var options = {center: new kakao.maps.LatLng(37.050701, 127.570667),level: 10};
          var map = new kakao.maps.Map(container, options);
          </script>

      <footer>
        <h1> 선문대학교   </h1>
        <p> 컴퓨터공학과  홍성호<p>
      </footer>
      
      
      
    </div>
  </body>
</html>
