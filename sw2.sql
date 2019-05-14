DROP DATABASE IF EXISTS sw2;
CREATE DATABASE sw2;
USE sw2;

CREATE TABLE categories (
    CategoryID INT(11) NOT NULL PRIMARY KEY,
    CategoryName VARCHAR(15) NOT NULL,
    CategoryDescription VARCHAR(50)
);

CREATE TABLE suppliers (
    SupplierID INT(11) NOT NULL PRIMARY KEY,
    CompanyName VARCHAR(30) NOT NULL,
    ContactName VARCHAR(30),
    ContactTitle VARCHAR(30),
    ContactAddress VARCHAR(60),
    City VARCHAR(15),
    Region VARCHAR(15),
    PostalCode VARCHAR(10),
    Country VARCHAR(15),
    Phone VARCHAR(24),
    Fax VARCHAR(24),
    HomePage VARCHAR(50)
);

CREATE TABLE products (
    ProductID INT(11) NOT NULL PRIMARY KEY,
    ProductName VARCHAR(40) NOT NULL,
    SupplierID INT(11),
    CategoryID INT(11),
    QuantityPerUnit VARCHAR(20),
    UnitPrice DECIMAL(10,4),
    UnitInStock SMALLINT(2),
    UnitsOnOrder SMALLINT(2),
    ReorderLevel SMALLINT(2),
    Discontinued SMALLINT(2) NOT NULL,
    FOREIGN KEY (SupplierID) REFERENCES suppliers(SupplierID),
    FOREIGN KEY (CategoryID) REFERENCES categories(CategoryID)
);

