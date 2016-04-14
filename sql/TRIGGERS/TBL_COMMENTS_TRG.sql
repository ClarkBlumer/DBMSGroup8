--------------------------------------------------------
--  DDL for Trigger TBL_COMMENTS_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "CSADMIN"."TBL_COMMENTS_TRG" 
BEFORE INSERT ON TBL_COMMENTS 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    NULL;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "CSADMIN"."TBL_COMMENTS_TRG" ENABLE;
