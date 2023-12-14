CREATE TABLE "entityemail" (
  "emailid" SERIAL PRIMARY KEY NOT NULL,
  "entityid" int,
  "semail" varchar(255),
  "stype" varchar(50),
  CONSTRAINT "fk_entityemail_entityid"
    FOREIGN KEY ("entityid") REFERENCES "entities"("entityid")
);


INSERT INTO entityemail ("entityid", "semail", "stype")
VALUES (1, 'john.doe@example.com', 'Personal');

INSERT INTO entityemail ("entityid", "semail", "stype")
VALUES (2, 'alice.smith@example.com', 'Work');

INSERT INTO entityemail ("entityid", "semail", "stype")
VALUES (3, 'bob.johnson@example.com', 'Other');
