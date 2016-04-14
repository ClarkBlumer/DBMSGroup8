--------------------------------------------------------
--  DDL for Trigger TBL_PROPOSAL_TRG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "CSADMIN"."TBL_PROPOSAL_TRG" 
BEFORE INSERT ON TBL_PROPOSAL 
FOR EACH ROW 
BEGIN
  <<COLUMN_SEQUENCES>>
  BEGIN
    NULL;
  END COLUMN_SEQUENCES;
END;
/
ALTER TRIGGER "CSADMIN"."TBL_PROPOSAL_TRG" ENABLE;
