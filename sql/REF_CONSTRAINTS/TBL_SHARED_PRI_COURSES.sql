--------------------------------------------------------
--  Ref Constraints for Table TBL_SHARED_PRI_COURSES
--------------------------------------------------------

  ALTER TABLE "CSADMIN"."TBL_SHARED_PRI_COURSES" ADD CONSTRAINT "TBL_SHARED_PRI_COURSES_FK1" FOREIGN KEY ("PROPID")
	  REFERENCES "CSADMIN"."TBL_PROPOSAL" ("PROPID") ENABLE;
