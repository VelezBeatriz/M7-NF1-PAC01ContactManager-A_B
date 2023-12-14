CREATE TABLE "entityphone" (
  "phoneid" SERIAL PRIMARY KEY NOT NULL,
  "entityid" int,
  "snumber" varchar(20),
  "sextension" varchar(20),
  "stype" varchar(50),
  CONSTRAINT "fk_entityemail_entityid"
    FOREIGN KEY ("entityid") REFERENCES "entities"("entityid")
);

INSERT INTO entityphone ("entityid", "snumber", "sextension", "stype")
VALUES (1, '+1234567890', NULL, 'Mobile');

INSERT INTO entityphone ("entityid", "snumber", "sextension", "stype")
VALUES (2, '+9876543210', '123', 'Work');

INSERT INTO entityphone ("entityid", "snumber", "sextension", "stype")
VALUES (3, '+1112223333', NULL, 'Home');
