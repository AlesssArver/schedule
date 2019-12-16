var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);

server.listen(3001);

io.on('connection', (socket) => {
    socket.on('schedule', (data) => {
        socket.broadcast.emit('schedule', (data));
    });
})
