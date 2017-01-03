
  // function connect to google api to get user information
  var config = {
    apiKey: "AIzaSyAwhXGp8JzqqOCuQG1hEwAV5P-WTxDri70",
    authDomain: "hotel-travel-d4070.firebaseapp.com",
    databaseURL: "https://hotel-travel-d4070.firebaseio.com",
    storageBucket: "hotel-travel-d4070.appspot.com",
    // Initialize Firebase
    messagingSenderId: "417704508950"
  };
  firebase.initializeApp(config);

  var user;
  var provider = new firebase.auth.GoogleAuthProvider();
  provider.addScope('https://www.googleapis.com/auth/plus.login');
  provider.setCustomParameters({
    'login_hint': 'user@example.com'
  });
  function connectGoogle() {

    firebase.auth().signInWithPopup(provider).then(function (result) {
      console.log("google data:",result);
      var token = result.credential.accessToken;
      var userprofile = result.user;
      userprofile.providerData.forEach(function (profile) {
        var splitname = profile.displayName.split(" ");
        user = {
          "first_name": splitname[0],
          "last_name": splitname[1],
          "email": profile.email,
          "image": profile.photoURL
        }
        console.log("google data:",user);
      });
    });
  }


  // function connect to facebook api to get user information
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '366389530393065',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
    
  function connectFacebook(){
    FB.login(("/me", function (response) {
        if (response.status === "connected") {
            if (response.authResponse) {
                FB.api("/me?fields=id,name,picture{url},email,first_name,last_name", "GET", function (response) {
                    var struser = JSON.stringify(response);
                    var user = JSON.parse(struser);
                    console.log("facebook data:", response);
                    console.log("facebook photo url:", response.picture.data.url);
                });
            }
        } else {
        }
    }), null);    // {scope: 'public_profile,email'}
  }