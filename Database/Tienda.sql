CREATE DATABASE IF NOT EXISTS Tienda;

USE Tienda;

CREATE TABLE IF NOT EXISTS t_usuarios(
    id_usuario      INT(11) auto_increment       NOT NULL,
    nombre          VARCHAR (100)                NOT NULL,
    apellidos       VARCHAR (100)                NOT NULL,
    email           VARCHAR (200)                NOT NULL,
    password        VARCHAR (255)                NOT NULL,
    rol             VARCHAR (20), 
    imagen          VARCHAR (255),
    CONSTRAINT     pk_usuario          PRIMARY KEY (id_usuario),
    CONSTRAINT     uq_email            UNIQUE(email) 
)ENGINE=InnoDb;

INSERT INTO t_usuarios VALUES (NULL,'admin', 'admin','admin@admin.com','1234','admin','imagen');



CREATE TABLE IF NOT EXISTS t_categorias(
    id_categoria        int(11) auto_increment      NOT NULL,
    nombre_categoria    varchar(100)                NOT NULL,
    CONSTRAINT     pk_categoria        PRIMARY KEY (id_categoria)
)ENGINE=InnoDb;

INSERT INTO t_categorias VALUES (NULL,'Construccion'), (NULL,'Electricos'), (NULL,'Pisos');



CREATE TABLE IF NOT EXISTS t_productos(
    id_producto             INT(11) auto_increment          NOT NULL,
    nombre_producto         VARCHAR (100)                   NOT NULL,
    descripcion             VARCHAR (200)                   NOT NULL,
    precio                  FLOAT (100,2)                   NOT NULL,
    stock                   INT (100)                       NOT NULL,
    oferta                  VARCHAR(50)                     NOT NULL,
    fecha                   DATE                            NOT NULL,
    imagen                  VARCHAR(255),
    id_categoria            INT(11)                         NOT NULL, 
    CONSTRAINT pk_producto              PRIMARY KEY (id_producto),
    CONSTRAINT fk_producto_categoria    FOREIGN KEY(id_categoria) REFERENCES t_categorias(id_categoria)
)ENGINE=InnoDB;



CREATE TABLE IF NOT EXISTS t_pedidos(
    id_pedido               INT(11) auto_increment          NOT NULL,
    id_usuario              INT(11)                         NOT NULL,
    ciudad                  VARCHAR(100)                    NOT NULL,
    direccion               VARCHAR(200)                    NOT NULL,
    costo                   FLOAT(100,2)                    NOT NULL,
    estado                  varchar(20)                     NOT NULL,
    hora                    DATE                            NOT NULL,   
    fecha                   DATE                            NOT NULL,
    CONSTRAINT pk_pedidos           PRIMARY KEY (id_pedido),
    CONSTRAINT fk_usuario_pedido    FOREIGN KEY(id_usuario) REFERENCES t_usuarios(id_usuario)
)ENGINE=InnoDB;



CREATE TABLE IF NOT EXISTS t_detallepedidos(
    id_detallepedido         int (11) auto_increment         NOT NULL,
    id_pedido               INT(11)                         NOT NULL,                    
    id_producto             INT(11)                         NOT NULL,
    unidades                INT(100)                        NOT NULL,
    CONSTRAINT pk_detallepedido     PRIMARY KEY (id_detallepedido),
    CONSTRAINT fk_linea_pedido      FOREIGN KEY(id_pedido)          REFERENCES t_pedidos(id_pedido),
    CONSTRAINT fk_linea_producto    FOREIGN KEY(id_pedido)           REFERENCES t_productos(id_producto)
)ENGINE=InnoDB;