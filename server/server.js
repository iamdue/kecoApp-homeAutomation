var express         = require('express');
//var logger          = require('express-logger');
//var bodyParser      = require('body-parser');
//var methodOverride  = require('method-override');
var serverStatic    = require('serve-static');
var path            = require('path'); // path parsing module
var log             = require('./libs/log')(module);

var app = express();


//app.use(bodyParser); // JSON parsing
//app.use(methodOverride); // HTTP PUT and DELETE support

app.use(serverStatic(path.join(__dirname, "public"))); // starting static fileserver, that will watch `public` folder (in our case there will be `index.html`)

app.get('/api', function (req, res) {
	res.send('API is running');
});

app.get('/api/articles', function(req, res) {
	res.send('This is not implemented now');
});

app.post('/api/articles', function(req, res) {
	res.send('This is not implemented now');
});

app.get('/api/articles/:id', function(req, res) {
	res.send('This is not implemented now');
});

app.put('/api/articles/:id', function (req, res){
	res.send('This is not implemented now');
});

app.delete('/api/articles/:id', function (req, res){
	res.send('This is not implemented now');
});

app.use(function(req, res, next){
	res.status(404);
	log.debug('Not found URL: %s',req.url);
	res.send({ error: 'Not found' });
	return;
});

app.use(function(err, req, res, next){
	res.status(err.status || 500);
	log.error('Internal error(%d): %s',res.statusCode,err.message);
	res.send({ error: err.message });
	return;
});

app.get('/ErrorExample', function(req, res, next){
	next(new Error('Random error!'));
});

app.listen(1337, function(){
	log.info('Express server listening on port 1337');
});