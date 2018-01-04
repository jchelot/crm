CREATE TABLE IF NOT EXISTS premises(
	premise_id int NOT NULL AUTO_INCREMENT,
	address varchar(100) NOT NULL,
	postcode varchar(10) NOT NULL,
	city varchar(50) NOT NULL,
	country varchar(50) NOT NULL,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (premise_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
CREATE USER 'georgia'@'localhost' IDENTIFIED BY 'georgia';
GRANT ALL ON CRM.* TO 'georgia'@'localhost';
-- Dumping data for table `premises`
--
INSERT INTO premises (address, postcode, city, country) VALUES ('01 22 St Pancras Way', 'NW1 0NT', 'London', 'United Kingdom');
INSERT INTO premises (address, postcode, city, country) VALUES ('02 22 St Pancras Way', 'NW1 0NT', 'London', 'United Kingdom');
INSERT INTO premises (address, postcode, city, country) VALUES ('03 22 St Pancras Way', 'NW1 0NT', 'London', 'United Kingdom');
INSERT INTO premises (address, postcode, city, country) VALUES ('04 22 St Pancras Way', 'NW1 0NT', 'London', 'United Kingdom');
INSERT INTO premises (address, postcode, city, country) VALUES ('05 22 St Pancras Way', 'NW1 0NT', 'London', 'United Kingdom');
INSERT INTO premises (address, postcode, city, country) VALUES ('06 22 St Pancras Way', 'NW1 0NT', 'London', 'United Kingdom');
INSERT INTO premises (address, postcode, city, country) VALUES ('07 22 St Pancras Way', 'NW1 0NT', 'London', 'United Kingdom');
INSERT INTO premises (address, postcode, city, country) VALUES ('08 22 St Pancras Way', 'NW1 0NT', 'London', 'United Kingdom');
INSERT INTO premises (address, postcode, city, country) VALUES ('09 22 St Pancras Way', 'NW1 0NT', 'London', 'United Kingdom');
INSERT INTO premises (address, postcode, city, country) VALUES ('10 22 St Pancras Way', 'NW1 0NT', 'London', 'United Kingdom');
