
DROP SCHEMA IF EXISTS puppydb CASCADE;
CREATE SCHEMA puppydb;
SET search_path = puppydb, public;
DROP TABLE IF EXISTS puppy;

CREATE TABLE puppy (
  id              SERIAL       PRIMARY KEY,
  age             INT               NOT NULL,
  name            VARCHAR(48)       NOT NULL,
  breed           VARCHAR(48)       NOT NULL,
  status          VARCHAR(48)       NOT NULL,
  gender          VARCHAR(1)        NOT NULL,
  details         VARCHAR(600)      NOT NULL,	
  image			  VARCHAR(150)    
);