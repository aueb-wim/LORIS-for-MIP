DELIMITER $$
CREATE DEFINER = CURRENT_USER TRIGGER `LORIS`.`files_AFTER_INSERT` AFTER INSERT ON `files` FOR EACH ROW
BEGIN
	INSERT INTO files_qcstatus
	SET	FileID = NEW.FileID,
     SeriesUID = NEW.SeriesUID,
     EchoTime = NEW.EchoTime,
     QCStatus = "Pass",
     QCFirstChangeTime = unix_timestamp( NOW() ),
     QCLastChangeTime = unix_timestamp( NOW() );
END $$
