// Fb SDK initialisation
window.fbAsyncInit = function() {
  FB.init({
    appId      : '1556912447894709',
    cookie     : true,
    xfbml      : true,
    version    : 'v2.3'
  });

// check user status
 FB.getLoginStatus(function(response) {
    if (response.status === 'connected') {
      console.log('connected in the application')
      var d = document;
      if (!d.all) d.captureEvents(Event.mousemouve);
      d.onmousemove = function(e) {
         var floatingW = d.getElementById("floatingW").style;
         floatingW.left = ((d.all && (d.body.scrollLeft > 0)) ? event.clientX + d.body.scrollLeft : e.pageX) + 'px';
         floatingW.top = ((d.all && (d.body.scrollTop > 0)) ? event.clientY  + d.body.scrollTop : e.pageY) + 'px';
      };
      $(function() {
         var floatingW = -1;
         $("#milikeit").hover(function() {
            floatingW = $(this).closest("#floatingW").attr("qjid");
         }, function() {
            floatingW = -1;
         });
         $(window).focus();
         $(window).blur(function() {
            document.getElementById("floatingW").style.visibility = "visible";
         });
      });
      $(window).focus(); 

    } else if (response.status === 'not_authorized') {
      console.log('The person is logged into Facebook, but not the app or denied authorization.');

      var d = document;
      if (!d.all) d.captureEvents(Event.mousemouve);
      d.onmousemove = function(e) {
         var floatingW = d.getElementById("floatingW").style;
         floatingW.left = ((d.all && (d.body.scrollLeft > 0)) ? event.clientX + d.body.scrollLeft : e.pageX) + 'px';
         floatingW.top = ((d.all && (d.body.scrollTop > 0)) ? event.clientY  + d.body.scrollTop : e.pageY) + 'px';
      };
      $(function() {
         var floatingW = -1;
         $("#milikeit").hover(function() {
            floatingW = $(this).closest("#floatingW").attr("qjid");
         }, function() {
            floatingW = -1;
         });
         $(window).focus();
         $(window).blur(function() {
            document.getElementById("floatingW").style.visibility = "visible";
         });
      });
      $(window).focus(); 

    } else {
      console.log('The person is not logged into Facebook.');
    }
  });
};

// Fb SDK loading asynchronously
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



