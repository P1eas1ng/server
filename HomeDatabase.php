<html>
<head>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"></link>
 <title>Home Database</title>
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
        .container {
            margin-top:70px;
            display:flex;
            flex-direction: column;
            align-items: center;
            max-width: 700px;
        }
 
        #comments-container {
            border: 1px solid #d0d0d0;
            height: 400px;
            overflow-y: scroll;
        }
 
        .comment-container {
            padding: 10px;
            margin:6px;
            background: #f5f5f5;
            font-size: 13px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
 
        .comment-container .label {
            margin-right: 20px;
        }
 
        .comment-container:last-of-type {
            border-bottom: none;
        }
    </style>
        <meta charset="UTF-8">
        <script src="https://www.gstatic.com/firebasejs/7.14.3/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.14.3/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.14.3/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.14.3/firebase-database.js"></script>
        <script src="https://www.gstatic.com/firebase/init.js"></script>
        <script>
        var gets = (function() {
        var a = window.location.search;
        var b = new Object();
        a = a.substring(1).split("&");
        for (var i = 0; i < a.length; i++) {
          c = a[i].split("=");
            b[c[0]] = c[1];
        }
        return b;
    })();
        var firebaseConfig = {
        apiKey: "AIzaSyBWy_CCBIK74k3WoQAgj3-ZpeOh0Nbj374",
        authDomain: "kamakepar-files.firebaseapp.com",
        databaseURL: "https://kamakepar-files.firebaseio.com",
        projectId: "kamakepar-files",
        storageBucket: "kamakepar-files.appspot.com",
        messagingSenderId: "187101050444",
        appId: "1:187101050444:web:fb5b11339d75efe69866e9"
        };
      firebase.initializeApp(firebaseConfig);
      var database = firebase.database();
      function writeUserData(link, about, how, alias) {
        firebase.database().ref('database/' + 'home/' + alias).set({
          about: about,
          link: link, 
          how : how,
          alias : alias,
        });
      }
      writeUserData('https://kamakepar.ru', 'Kama Kepar Ink Site', 'My Site', 'kamakepar');
    </script>
</head>
<body>
<div class="header">
          <div class="menu-item"><a href="/">Home</a></div>
          <div class="menu-item"><a href="/Music.php">Music</a></div>
          <div class="menu-item"><a href="/Video.php">Video</a></div>
        </div>
        <div class="chat">
          <div class="container">
           <input id="about-1" class="input" placeholder="About"><br>
           <input id="how-1" class="input" placeholder="How"><br>
           <input id="link-1" class="input" placeholder="Link"><br>
           <input id="alias-1" class="input" placeholder="Alias"><br>
           <button onclick="send();">Send link</button>
           <script>
            function send(){
                var ali1 = document.getElementById('alias-1').value;
               if  (ali1 !== ''){
               var about1 = document.getElementById('about-1').value;
               var how1 = document.getElementById('how-1').value;
               var link1 = document.getElementById('link-1').value;
               var alias1 = document.getElementById('alias-1').value;
                writeUserData(link1, about1, how1, alias1);
                retr();
               }else{
               retr();
               }
            }
           </script>
        </div>
         <div id="showing">
            
         </div>
         <style>
            #showing{
                display:flex;
                height:150px;
                overflow:scroll;
                flex-direction:column;
                align-items:center;
            }
             .full-scape{
                 display:flex;
                 flex-direction:column;
             }
             .full-scape:hover{
                background:rgb(211, 208, 208);
             }
         </style>
        </div>
        <script>
            retr();
            function retr(){
                document.getElementById("showing").innerHTML = '';
                var query = firebase.database().ref("database/" + 'home/');
                query.once("value")
                .then(function(snapshot) {
                    snapshot.forEach(function(childSnapshot) {
                    var elem = document.createElement("div");
                    elem.style="display:flex;flex-direction:column;margin-top:40px;";
                    var pol = '<div class="full-scape">';
                    var about = childSnapshot.val().about;
                    pol = pol + '<div class="about">About: ' + about + '</div>';
                    var how = childSnapshot.val().how;
                    pol = pol + '<div class="how">Addon: ' + how + '</div>';
                    var link = childSnapshot.val().link;
                    pol = pol + '<div class="link">Link: <a href="' + link + '">'+ link + '</a></div>';
                    var alias = childSnapshot.val().alias;
                    pol = pol + '<div class="alias">Alias: '+ alias +'</div></div>';
                    console.log(pol);
                    elem.innerHTML = pol;
                    document.getElementById("showing").appendChild(elem);
                    });
                });
            }
        </script>
</body>
</html>
