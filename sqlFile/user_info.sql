CREATE DATABASE languages_rating;
use languages_rating;
CREATE TABLE information(FirstName varchar(100) not null, MiddleName varchar(100), LastName varchar(100) not null, 
                        email varchar(320) not null, primary key(email), sex ENUM ("Male", "Female"), m_number int not null, 
                        addr varchar(320) not null, city varchar(320) not null, stat VARCHAR(320) not null);
/*     -- used varchar(320) because:
    -- 64 characters for the "local part" (username).
    -- 1 character for the @ symbol.
    -- 255 characters for the domain name. */
CREATE TABLE choices(prog_lng )
 
