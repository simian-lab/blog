var openFacebookPopup = function() {
  var width = 575;
  var height = 355;
  var leftPosition, topPosition;
  //Allow for borders.
  leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
  //Allow for title and status bars.
  topPosition = (window.screen.height / 2) - ((height / 2) + 50);
  var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";
  window.open('http://www.facebook.com/sharer.php?u='+ window.location.href,'FacebookShareDialog', windowFeatures);
};
var openTwitterPopup = function(twitterText) {
  var width = 570;
  var height = 250;
  var leftPosition, topPosition;
  //Allow for borders.
  leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
  //Allow for title and status bars.
  topPosition = (window.screen.height / 2) - ((height / 2) + 50);
  var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";
  window.open('https://twitter.com/share?url='+window.location.href+'&text='+twitterText,'TwitterShareDialog', windowFeatures);
};

var openGooglePopup = function() {
  var width = 560;
  var height = 500;
  var leftPosition, topPosition;
  //Allow for borders.
  leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
  //Allow for title and status bars.
  topPosition = (window.screen.height / 2) - ((height / 2) + 50);
  var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=yes,location=no,directories=no";
  window.open('https://plus.google.com/share?url='+ window.location.href,'GoogleShareDialog', windowFeatures);
};
