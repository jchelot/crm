CREATE TABLE IF NOT EXISTS contacts(
  contact_id int NOT NULL AUTO_INCREMENT,
  firstname varchar(100) NOT NULL,
  lastname varchar(10) NOT NULL,
  email varchar(50) NOT NULL,
  phone varchar(50) NOT NULL,
  fk_premise_id int,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (contact_id),
  FOREIGN KEY (fk_premise_id) REFERENCES premises(premise_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
CREATE USER 'georgia'@'localhost' IDENTIFIED BY 'georgia';
GRANT ALL ON CRM.* TO 'georgia'@'localhost';
-- Dumping data for table `premises`
--
INSERT INTO contacts (firstname, lastname, email, phone) VALUES ('Jeremy', 'Chelot', 'email', '07599130275');
