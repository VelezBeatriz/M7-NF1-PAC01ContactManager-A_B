CREATE TABLE "entities" (
  "entityid" SERIAL PRIMARY KEY NOT NULL,
  "name1" varchar(100) NOT NULL,
  "name2" varchar(100) NOT NULL,
  "type" char(1) NOT NULL
);

INSERT INTO entities ("name1", "name2", "type") VALUES ('Jane', 'Doe', 'I');
INSERT INTO entities ("name1", "name2", "type") VALUES ('Charlie', 'Brown', 'I');
INSERT INTO entities ("name1", "name2", "type") VALUES ('Eva', 'Green', 'I');
INSERT INTO entities ("name1", "name2", "type") VALUES ('Oliver', 'Jones', 'O');
INSERT INTO entities ("name1", "name2", "type") VALUES ('Isabel', 'White', 'O');
INSERT INTO entities ("name1", "name2", "type") VALUES ('Oscar', 'Black', 'O');
