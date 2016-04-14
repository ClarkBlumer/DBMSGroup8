--------------------------------------------------------
--  DDL for Trigger TBL_PROP_PRI_COURSES_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "CSADMIN"."TBL_PROP_PRI_COURSES_TRG" 
BEFORE INSERT ON TBL_PROP_PRI_COURSES 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    NULL;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "CSADMIN"."TBL_PROP_PRI_COURSES_TRG" ENABLE;
