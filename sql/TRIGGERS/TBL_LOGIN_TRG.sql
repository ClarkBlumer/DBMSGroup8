--------------------------------------------------------
--  DDL for Trigger TBL_LOGIN_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "CSADMIN"."TBL_LOGIN_TRG" 
BEFORE INSERT ON TBL_LOGIN 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    NULL;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "CSADMIN"."TBL_LOGIN_TRG" ENABLE;
