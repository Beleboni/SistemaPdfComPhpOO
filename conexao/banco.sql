create table clientes(
	idCliente int not null primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    idade int not null
);