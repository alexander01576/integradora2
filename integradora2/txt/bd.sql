create database viajes;

use viajes;

create table tarjeta (
    id_tarjeta int (5) primary key,
    saldo int (5) not null
)engine=innodb;

create table carro (
    id_carro int (5) primary key,
    marca varchar (30) not null,
    modelo varchar (30) not null,
    placa varchar (30) not null,
    color varchar (30) not null
)engine=innodb;

create table persona (
    id_persona int (5) primary key,
    correo varchar (100) not null,
    clave varchar (15) not null,
    nombre varchar (30) not null,
    ap_pat varchar (30) not null,
    ap_mat varchar (30) not null,
    edad int (2) not null,
    privilegio int (1),
    id_tarjeta int (5),
    foreign key (id_tarjeta) references tarjeta (id_tarjeta) on update cascade on delete cascade,
    id_carro int (5),
    foreign key (id_carro) references carro (id_carro) on update cascade on delete cascade
)engine=innodb;

create table caseta (
    id_caseta int (5) primary key,    
    nombre_caseta varchar (30) not null,
    colonia varchar (30) not null,
    avenida varchar (30) not null,
    precio_caseta varchar (30) not null
)engine=innodb;

create table viajes (
    id_viaje int (5) primary key,
    fecha_viaje date not null,
    hora_viaje time not null,
    calle_dest varchar (30) not null,
    colonia_dest varchar (30) not null,
    estado_dest varchar (30) not null,
    id_persona int (5) not null,
    foreign key (id_persona) references persona (id_persona) on update cascade on delete cascade
)engine=innodb;


create table paso_caseta (
    id_paso int (9) primary key,
    feha_paso date,
    hora_paso time,
    id_caseta int (5) not null,
    foreign key (id_caseta) references caseta (id_caseta) on update cascade on delete cascade
);

create table llegada (
    id_llegada int (5) primary key,
    fecha_llegada date,
    hora_llegada time,
    id_viaje int (5),
    foreign key (id_viaje) references viajes (id_viaje) on update cascade on delete cascade
);



insert into tarjeta values (1, 1, 1000);
insert into carro values (1, 'nissan', 'march', 'ABC123', 'GRIS'); 
insert into persona values (1, 'admin53@gmail.com', '5518Pollo', 'isai', 'mendez', 'sanchez', 18, 1, 1, 1);