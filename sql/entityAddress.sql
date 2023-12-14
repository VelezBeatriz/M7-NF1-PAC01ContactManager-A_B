CREATE TABLE "entityaddress" (
  "addressid" SERIAL PRIMARY KEY NOT NULL,
  "entityid" int,
  "saddress1" varchar(255),
  "saddress2" varchar(255),
  "scity" varchar(255),
  "cstate" char(2),
  "spostalcode" varchar(10),
  "stype" varchar(50),
  CONSTRAINT "fk_entityaddress_entityid"
    FOREIGN KEY ("entityid") REFERENCES "entities"("entityid")
);


INSERT INTO entityaddress ("entityid", "saddress1", "saddress2", "scity", "cstate", "spostalcode", "stype")
VALUES (1, '123 Main St', 'Apt 45', 'Cityville', 'NY', '12345', 'Home');

INSERT INTO entityaddress ("entityid", "saddress1", "saddress2", "scity", "cstate", "spostalcode", "stype")
VALUES (2, '456 Oak Ln', NULL, 'Townsville', 'CA', '67890', 'Office');

INSERT INTO entityaddress ("entityid", "saddress1", "saddress2", "scity", "cstate", "spostalcode", "stype")
VALUES (3, '789 Pine Rd', 'Suite 101', 'Villagetown', 'TX', '54321', 'Warehouse');
