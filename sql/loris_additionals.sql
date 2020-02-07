use LORIS;

UPDATE `LORIS`.`psc` SET `MRI_alias`='DCC' WHERE `CenterID`='1';

INSERT INTO Visit_Windows (Visit_label,  WindowMinDays, WindowMaxDays, OptimumMinDays, OptimumMaxDays, WindowMidpointDays) VALUES ('V1', '0', '2147483647', '40', '60', '50');

ALTER TABLE files ADD FileStudyID TEXT DEFAULT NULL;

ALTER TABLE files ADD FileStudyComplete INT DEFAULT 0;
