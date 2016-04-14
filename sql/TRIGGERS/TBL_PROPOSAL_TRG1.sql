--------------------------------------------------------
--  DDL for Trigger TBL_PROPOSAL_TRG1
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "CSADMIN"."TBL_PROPOSAL_TRG1" 
BEFORE INSERT ON TBL_PROPOSAL 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    NULL;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "CSADMIN"."TBL_PROPOSAL_TRG1" ENABLE;
