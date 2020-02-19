UPDATE LORIS.LorisMenu SET Visible='false' WHERE ID='2';
UPDATE LORIS.LorisMenu SET Visible='false' WHERE ID='4';
UPDATE LORIS.LorisMenu SET Visible='false' WHERE ID='5';
UPDATE LORIS.LorisMenu SET Visible='false' WHERE ID='30';
UPDATE LORIS.LorisMenu SET Visible='false' WHERE ID='31';
UPDATE LORIS.LorisMenu SET Visible='false' WHERE ID='32';
UPDATE LORIS.LorisMenu SET Visible='false' WHERE ID='34';


UPDATE Config SET Value = 'http://localhost:8088' WHERE ConfigID = (SELECT ID FROM ConfigSettings WHERE name = 'url');
UPDATE Config SET Value = 'localhost:8088' WHERE ConfigID = (SELECT ID from ConfigSettings WHERE name = 'host');

UPDATE Config SET Value='/data/loris/data/' WHERE ConfigID=(SELECT ID FROM ConfigSettings WHERE Name='imagePath');

UPDATE Config SET Value='/data/loris/bin/mri/' WHERE ConfigID=(SELECT ID FROM ConfigSettings WHERE Name='MRICodePath');
