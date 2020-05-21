<html>
<head>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"></link>
 <title>Home Database</title>
 <style>
        .container {
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
        firebase.database().ref('database/' + alias).set({
          about: about,
          link: link, 
          how : how,
          alias : alias,
        });
      }
         
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
        </div>
        </div>
</body>
</html>
