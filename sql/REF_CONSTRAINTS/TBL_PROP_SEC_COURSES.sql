--------------------------------------------------------
--  Ref Constraints for Table TBL_PROP_SEC_COURSES
--------------------------------------------------------

  ALTER TABLE "CSADMIN"."TBL_PROP_SEC_COURSES" ADD CONSTRAINT "TBL_PROP_SEC_COURSES_FK1" FOREIGN KEY ("PROPID", "PRI_SEQ_NUM")
	  REFERENCES "CSADMIN"."TBL_PROP_PRI_COURSES" ("PROPID", "PRI_SEQ_NUM") ENABLE;
  ALTER TABLE "CSADMIN"."TBL_PROP_SEC_COURSES" ADD CONSTRAINT "TBL_PROP_SEC_COURSES_FK3" FOREIGN KEY ("INSTITUTION")
	  REFERENCES "CSADMIN"."TBL_INSTITUTION" ("INSTITUTION") ENABLE;
  ALTER TABLE "CSADMIN"."TBL_PROP_SEC_COURSES" ADD CONSTRAINT "TBL_PROP_SEC_COURSES_FK4" FOREIGN KEY ("CAREER")
	  REFERENCES "CSADMIN"."TBL_CAREER" ("ACAD_CAREER") ENABLE;
  ALTER TABLE "CSADMIN"."TBL_PROP_SEC_COURSES" ADD CONSTRAINT "TBL_PROP_SEC_COURSES_FK5" FOREIGN KEY ("ACAD_ORG")
	  REFERENCES "CSADMIN"."TBL_ACAD_ORG" ("ACAD_ORG") ENABLE;
  ALTER TABLE "CSADMIN"."TBL_PROP_SEC_COURSES" ADD CONSTRAINT "TBL_PROP_SEC_COURSES_FK6" FOREIGN KEY ("COURSE_STATUS")
	  REFERENCES "CSADMIN"."TBL_COURSE_STATUS" ("COURSE_STATUS") ENABLE;
