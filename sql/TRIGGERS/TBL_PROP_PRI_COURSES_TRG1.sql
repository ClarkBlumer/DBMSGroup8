--------------------------------------------------------
--  DDL for Trigger TBL_PROP_PRI_COURSES_TRG1
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "CSADMIN"."TBL_PROP_PRI_COURSES_TRG1" 
BEFORE INSERT ON TBL_PROP_PRI_COURSES 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    IF INSERTING AND :NEW.PRI_SEQ_NUM IS NULL THEN
      SELECT TBL_PROP_PRI_COURSES_SEQ2.NEXTVAL INTO :NEW.PRI_SEQ_NUM FROM SYS.DUAL;
    END IF;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "CSADMIN"."TBL_PROP_PRI_COURSES_TRG1" ENABLE;