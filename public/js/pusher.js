// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('b280c6875e6fbfba83ff', {
  cluster: 'ap2'
});

var channel = pusher.subscribe('my-channel');
channel.bind('my-event', function(data) {
  alert(JSON.stringify(data));
});