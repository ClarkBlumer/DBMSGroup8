--------------------------------------------------------
--  Ref Constraints for Table TBL_SHARED_SEC_COURSES
--------------------------------------------------------

  ALTER TABLE "CSADMIN"."TBL_SHARED_SEC_COURSES" ADD CONSTRAINT "TBL_SHARED_SEC_COURSES_FK1" FOREIGN KEY ("PROPID", "PRI_COURSE_ID")
	  REFERENCES "CSADMIN"."TBL_SHARED_PRI_COURSES" ("PROPID", "PRI_COURSE_ID") ENABLE;
