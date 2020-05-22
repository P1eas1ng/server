<html>
<head>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"></link>
 <title>Kama Kepar Chat</title>
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
            max-width: 100%;
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
        .msgbody{
          display: flex;
          width:100%;
        }
        #msg{
          width:100%;
        }
        .msgbody button{
          width:10%;
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
      function zero_first_format(value)
      {
          if (value < 10)
          {
              value='0'+value;
          }
          return value;
      }

    /* функция получения текущей даты и времени */
      function date_time()
      {
        var current_datetime = new Date();
        var day = zero_first_format(current_datetime.getDate());
        var month = zero_first_format(current_datetime.getMonth()+1);
        var year = current_datetime.getFullYear();
        var hours = zero_first_format(current_datetime.getHours());
        var minutes = zero_first_format(current_datetime.getMinutes());
        var seconds = zero_first_format(current_datetime.getSeconds());

        return hours+":"+minutes+":"+seconds;
      }
      function writeUserData(message , user, date, userid) {
        firebase.database().ref('mail/' + 'users/' + date).set({
          message: message,
          user: user, 
          userid: userid,
          date : date,
        });
      }
    </script>
</head>
<body>
           <script>
            let r = Math.random().toString(36).substring(7);
            localStorage.setItem('userid', r);
            var ansr = r;
            var lsop = ansr;
            var user = window.navigator.userAgent + lsop;
            alert('Your username: ' + lsop);
            var dast = date_time();
            function send(){
              var msg = document.getElementById('msg').value;
               if  (msg !== ''){
                writeUserData(msg, user, date_time() , lsop);
                document.getElementById('msg').value = '';
                retr();
               }else{
               retr();
               }
            }
           </script>
        </div>
        <div id="showing-box">
        <div id="showing">
           
            
         </div>
         </div></div>
         <div class="chat">
          <div class="container">
          <div class="msgbody">
           <input id="msg" class="input" type="text" placeholder="Enter your message">
           <button onclick="send();">Send link</button>
          </div>
         <style>
            #showing{
                display:flex;
                height: 60%;
                overflow:scroll;
                flex-direction:column;
                align-items:center;
                
            }
            #showing-box{
              
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
                var query = firebase.database().ref("mail/" + 'users/');
                query.once("value")
                .then(function(snapshot) {
                    snapshot.forEach(function(childSnapshot) {
                    var elem = document.createElement("div");
                    elem.style="display:flex;flex-direction:column;margin-top:40px;";
                    var pol = '<div class="full-scape">';
                    var pol = pol + '<div class="message">';
                    var message = childSnapshot.val().message;
                    var pol = pol + message + '</div><div class="date">';
                    var data = childSnapshot.val().date;
                    var pol = pol + data + '</div><div class="user">';
                    var user = childSnapshot.val().user;
                    var pol = pol + '</div><div class="userid">'+ user+ '</div><div class="user">';
                    var useri = childSnapshot.val().userid;
                    var pol = pol + useri + '</div></div>';
                    console.log(pol);
                    elem.innerHTML = pol;
                    document.getElementById("showing").appendChild(elem);
                    var block = document.getElementById("showing");
                    block.scrollTop = block.scrollHeight;
                    });
                });
            }
            function Say(){
              retr();
            }
          setInterval(Say, 15000);
        </script>
</body>
</html>
