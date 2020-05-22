<html>
  <head>
    <title>Home | PHP Server</title>
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
        @media screen and (max-width: 600px) {
          .header{
            justify-content:center;
            text-align:center;
            flex-direction:column !important;
          }
        }
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
        .content-title{
          width:100%;
          text-align:center;
          font-size:20px;
        }
        .content-content{
          text-align:center;
          padding:10px;
        }
        .content{
          margin-top:40px;
        }
        </style>
        <div class="content">
          <div class="content-title">
          Hello, we are the Media Server
          </div>
          <div class="content-content">
          You can stream your own videos by our streaming platform and you can watch films and listen to music.
          </div>
        </div>
    <a href="/Chat.php">Secret Chat</a>
  </body>
</html>
