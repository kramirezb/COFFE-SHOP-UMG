CREATE TABLE Usuarios (
    UsuarioID INT PRIMARY KEY IDENTITY,
    Nombre VARCHAR(100) NOT NULL,
    Email VARCHAR(100) UNIQUE NOT NULL,
    Contrase�a VARCHAR(100) NOT NULL
);

CREATE TABLE Productos (
    ProductoID INT PRIMARY KEY IDENTITY,
    Nombre VARCHAR(100) NOT NULL,
    Descripcion TEXT,
    Precio DECIMAL(10, 2) NOT NULL
);

CREATE TABLE Orden (
    OrdenID INT PRIMARY KEY IDENTITY,
    UsuarioID INT,
    Fecha DATETIME DEFAULT GETDATE(),
    NombreOrden VARCHAR(100),  -- Nombre para la orden (si el usuario no est� logueado)
    FOREIGN KEY (UsuarioID) REFERENCES Usuarios(UsuarioID)
);

CREATE TABLE DetalleOrden (
    DetalleID INT PRIMARY KEY IDENTITY,
    OrdenID INT,
    ProductoID INT,
    Cantidad INT,
    FOREIGN KEY (OrdenID) REFERENCES Orden(OrdenID),
    FOREIGN KEY (ProductoID) REFERENCES Productos(ProductoID)
);

CREATE TABLE Promociones (
    PromocionID INT PRIMARY KEY IDENTITY,
    Nombre VARCHAR(100) NOT NULL,
    Descripcion TEXT,
    Descuento DECIMAL(5, 2) NOT NULL  -- Descuento en porcentaje
);

CREATE TABLE Tickets (
    TicketID INT PRIMARY KEY IDENTITY,
    OrdenID INT,
    Estado VARCHAR(20) DEFAULT 'En Proceso', -- Cambiado a VARCHAR para simplificar, puedes ajustarlo seg�n necesites
    FOREIGN KEY (OrdenID) REFERENCES Orden(OrdenID)
);

