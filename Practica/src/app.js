const path = require('path')
const express = require('express');
const morgan = require('morgan');
const mongoose = require('mongoose')

const app = express(); 

//conectando la base de datos 
mongoose.connect('mongodb://localhost/practicamongo')
.then(db => console.log('CONECCION CON EXITO'))
.catch(err => console.log(err));


//importar rutas
const indexRoutes = require('./routes/index');

//configuraciones
app.set('port', process.env.PORT || 3000);
app.set('views', path.join(__dirname, 'views'));
app.set('view.engine', 'ejs');

//middlawares
app.use(morgan('dev'));
app.use(express.urlencoded({extended: false}));

//routes
app.use('/', indexRoutes);

//configuraciones del servidor
app.listen(app.get('port'), () =>{
    console.log('servidor conectado al puerto');
});