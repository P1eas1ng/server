<html>
  <head>
    <title>Video | PHP Server</title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
  </head>
  <body>
      <div class="header">
          <div class="menu-item"><a href="/">Home</a></div>
          <div class="menu-item"><a href="/Video.php">Videos</a></div>
          <div class="menu-item"><a href="/Music.php">Music</a></div>
        <div class="menu-item"><a href="/HomeDatabase.php">Home Database</a></div>
        </div>
        <style>
        body{
          margin:0px;
        }
        .menu-item a:hover{
          color:black;
        }
        .menu-item a{
          text-decoration: none;
          color:#ffa100;
          font-size:19px;
        }
        .header{
        box-shadow: 0 0 12px #bbb;
        display: flex;
        padding-top: 20px;
        padding-bottom: 20px;
        width: 100%;
        justify-content: space-around;
        background: white;
        }
        @media screen and (max-width: 600px) {
          .header{
            justify-content:center;
            text-align:center;
            flex-direction:column !important;
          }
        }
        .url-stream{
        width:100%;
        display:flex;
      }
      #url{
        width:100%;
        text-align:center;
        border:1px solid lightblue;
        border-radius:5px;
      }
      .btn-fu{
        border:0px;
        color:white;
        border-radius:5PX;
        background:lightblue;
      }
      .btn-fu:hover{
        color:white;
        background:blue;
      }
        </style>
        <div class="content">
        <div class="url-stream" id="url-stream"><input id="url" type="url" placeholder="Enter the url for playing"><br><button class="btn-fu" onclick="url_start();">Start</button></div>
        <video src="https://youtu.be/Uj1XQgRXYOc"id="video-src" style="width:100%;" poster="https://i.ytimg.com/vi/l4mY2asIjWk/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLC8uBOLoHQaROS9YEebB8MzMTjttg" controls />
        </div>
        <script>
        function url_start(){
        var psp = document.getElementById('url').value;
        document.getElementById('video-src').src=psp;
        }
        </script>
  </body>
</html>
