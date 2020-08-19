const express = require('express');
const mysql = require('mysql');

const app = express();

//ip do container
const connection = mysql.createConnection({
    host: '172.17.0.2',  
    user: 'root',
    password: 'johnny',
    database: 'johnny_teste'
});

connection.connect();

app.get('/produtos', function(req,res){
    connection.query('SELECT * FROM PRODUTOS', function(error, results){
        if (error){
            throw error
        };

        res.send(results.map(item => ({nome: item.nome, preco: item.preco}
            )));
    });
});

app.listen(9876, '0.0.0.0', function(){
    console.log('escutando porta 9876');
});

app.get('/teste', function(req,res){
    res.send("Deu bom !!!");
});