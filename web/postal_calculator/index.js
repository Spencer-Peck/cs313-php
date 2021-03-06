
  const express = require('express');
  const app = express();
  const port = process.env.PORT || 5000;

  app.use(express.static(__dirname + '/public'));

// views is directory for all template files
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

  app.get('/math', handleMath);

// start the server listening
app.listen(port, function() {
  console.log('Node app is running on port', port);
});

  function handleMath(request, response) {

  	console.log("Recieved a request for math");
  }



