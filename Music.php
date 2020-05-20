<html>
  <head>
    <title>Music | PHP Server</title>
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
  </head>
  <body>
      <div class="header">
          <div class="menu-item"><a href="/">Home</a></div>
          <div class="menu-item"><a href="/Video.php">Videos</a></div>
          <div class="menu-item"><a href="/Music.php">Music</a></div>
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
        @media screen and (max-width: 600px) {
          .header{
            justify-content:center;
            text-align:center;
            flex-direction:column !important;
          }
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
        /* Global Reset */
      content {
          background: linear-gradient(to left, #7700aa, #8800ff);
          text-align:center;
          color:#fff;
      }
      h3{
          text-shadow:1px 1px 1px #fff;
      }
      /* Start  styling the page */
      .container-audio {
          width: 66%;
          height: auto;
          padding: 20px;
          border-radius: 5px;
          background-color: #eee;
          color: #444;
          margin: 20px auto;
          overflow: hidden;
      }
      audio {
        width:100%;
      }
      audio:nth-child(2), audio:nth-child(4), audio:nth-child(6) {
          margin: 0;
      }
      .container-audio .colum1 {
          width: 23px;
          height: 5em;
          border-radius: 5px;
          margin: 0 10px 0 0;
          display: inline-block;
          position: relative;
      }
      .container-audio .colum1:last-child {
          margin: 0;
      }
      .container-audio .colum1 .row {
          width: 100%;
          height: 100%;
          border-radius: 5px;
          background: linear-gradient(to up, #7700aa, #8800ff);
          position: absolute;
          -webkit-animation: Rofa 10s infinite ease-in-out;
          animation: Rofa 10s infinite ease-in-out;
          bottom: 0;
      }
      .cons{
        display:flex;
        justify-content:space-around;
        margin-top:20px;
      }
      .url-stream{
        display:flex;
        flex-direction:row;
        width:100%;
      }
      .url-stream button{

      }
      #url{
        width:100%;
        text-align:center;
        border:1px solid blue;
        border-radius:5px;
      }
      .music-file{
        margin-top:20px;
        background-color: #eee;
        width:75%;
        border-radius:5px;
        cursor:pointer;
        text-align:center;
        padding:10px 20px;
      }
      .music-file-content{
        height:50px;
        min-height:170px;
        display:flex;
        overflow: auto;
        flex-direction:column;
        align-items:center;
      }
        </style>
        <div class="content">
        <div class="cons">
          <div class="auto-kama"><a href="#"><img src="https://cdn2.iconfinder.com/data/icons/user-interface-music/32/Mp3_player_music_play_playing_recordings_song_sound-512.png" style="width:60px;height:60px;"></a></div>
          <div class="your-kama"><a href="#" onclick="url();"><img src="https://im0-tub-ru.yandex.net/i?id=7df9be5f75800ae12beffb781a5e1732&n=13&exp=1" style="width:60px; height:60px;"></a></div>
          <div class="urltrack"><a href="#"><img src="https://svgsilh.com/png-512/651706-03a9f4.png" style="width:60px;height:60px;"></a></div>
        </div>
        <div class="url-stream" id="url-stream"><input id="url" type="url" placeholder="Enter the url for playing"><br><button onclick="url_start();">Start</button></div>
        <div class="container-audio" >
        <audio controls id="audio-kama">
        <source id="source-kama" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/9473/new_year_dubstep_minimix.ogg" type="audio/ogg">
                   Your browser dose not Support the audio Tag
        </audio>
    </div>
    <div class="music-file-content">
    <div class="music-file" onclick="music_play(1);">
      <a>Imagine Dragons - Birds</a>
    </div>
    <div class="music-file" onclick="music_play(2);">
      <a>Imagine Dragons - Boomerang</a>
    </div>
    <div class="music-file" onclick="music_play(3);">
      <a>Imagine Dragons - Digital</a>
    </div>
    <div class="music-file" onclick="music_play(4);">
      <a>Imagine Dragons - Love</a>
    </div>
    <div class="music-file" onclick="music_play(5);">
      <a>Imagine Dragons - Machine</a>
    </div>
    <div class="music-file" onclick="music_play(6);">
      <a>Imagine Dragons - Natural</a>
    </div>
    <div class="music-file" onclick="music_play(7);">
      <a>Imagine Dragons - Only</a>
    </div>
    <div class="music-file" onclick="music_play(8);">
      <a>Imagine Dragons - Real Life</a>
    </div>
    <div class="music-file" onclick="music_play(9);">
      <a>Imagine Dragons - Stuck</a>
    </div>
    </div>
    <script>
    document.getElementById('url-stream').style="display:none;";
    var ula = 0;
      function url(){
        if (ula == 0){
        document.getElementById('url-stream').style="display:block;";
        ula -=1;
        }else{
        ula += 1;
        document.getElementById('url-stream').style="display:none";
        }
      }
      function url_start(){
        var psp = document.getElementById('url').value;
        document.getElementById('audio-kama').src=psp;
      }
      function music_play(trac){
        if (trac == 1){
          document.getElementById('audio-kama').src='https://firebasestorage.googleapis.com/v0/b/kamakepar-files.appspot.com/o/-8D-%20Imagine%20Dragons-Birds%20-8D%20prod.-Anubis™--kissvk.com.mp3?alt=media&token=a4a32eb0-6ab7-4ff7-909c-434568984f76';
        }
        if (trac == 2){
          document.getElementById('audio-kama').src='https://firebasestorage.googleapis.com/v0/b/kamakepar-files.appspot.com/o/-8D-%20Imagine%20Dragons-Boomerang%20-8D%20prod.-Anubis™--kissvk.com.mp3?alt=media&token=e75e3391-c7e0-4fea-859d-96cb502002ad';
        }
        if (trac == 3){
          document.getElementById('audio-kama').src='https://firebasestorage.googleapis.com/v0/b/kamakepar-files.appspot.com/o/-8D-%20Imagine%20Dragons-Digital%20-8D%20prod.-Anubis™--kissvk.com.mp3?alt=media&token=590d6fa1-435b-4e04-bdd2-1fe4a0edcd31';
        }
        if (trac == 4){
          document.getElementById('audio-kama').src='https://firebasestorage.googleapis.com/v0/b/kamakepar-files.appspot.com/o/-8D-%20Imagine%20Dragons-Love%20-8D%20prod.-Anubis™--kissvk.com.mp3?alt=media&token=7bb7b3f4-2dfa-4702-a245-4551c2885511';
        }
        if (trac == 5){
          document.getElementById('audio-kama').src='https://firebasestorage.googleapis.com/v0/b/kamakepar-files.appspot.com/o/-8D-%20Imagine%20Dragons-Machine%20-8D%20prod.-Anubis™--kissvk.com.mp3?alt=media&token=f5d62f09-d03c-4804-84c5-773bc6e1b5c5';
        }
        if (trac == 6){
          document.getElementById('audio-kama').src='https://firebasestorage.googleapis.com/v0/b/kamakepar-files.appspot.com/o/-8D-%20Imagine%20Dragons-Natural%20-8D%20prod.-Anubis™--kissvk.com.mp3?alt=media&token=982f016f-6783-4494-a6b5-723050a1daa2';
        }
        if (trac == 7){
          document.getElementById('audio-kama').src='https://firebasestorage.googleapis.com/v0/b/kamakepar-files.appspot.com/o/-8D-%20Imagine%20Dragons-Only%20-8D%20prod.-Anubis™--kissvk.com.mp3?alt=media&token=cdfa8e4f-9d3a-46f0-9b6b-dc16a287aa7d';
        }
        if (trac == 8){
          document.getElementById('audio-kama').src='https://firebasestorage.googleapis.com/v0/b/kamakepar-files.appspot.com/o/-8D-%20Imagine%20Dragons-Real%20Life%20-8D%20prod.-Anubis™--kissvk.com.mp3?alt=media&token=224d7527-ed3e-47f6-895b-cc0295ad1e34';
        }
        if (trac == 9){
          document.getElementById('audio-kama').src='https://firebasestorage.googleapis.com/v0/b/kamakepar-files.appspot.com/o/-8D-%20Imagine%20Dragons-Stuck%20-8D%20prod.-Anubis™--kissvk.com.mp3?alt=media&token=09a51001-7972-42e7-a7bf-e6880e1e36c6';
        }
      }
    </script>
  </body>
</html>
