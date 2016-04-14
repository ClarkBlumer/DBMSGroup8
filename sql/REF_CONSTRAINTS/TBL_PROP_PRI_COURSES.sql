--------------------------------------------------------
--  Ref Constraints for Table TBL_PROP_PRI_COURSES
--------------------------------------------------------

  ALTER TABLE "CSADMIN"."TBL_PROP_PRI_COURSES" ADD CONSTRAINT "TBL_PROP_PRI_COURSES_FK1" FOREIGN KEY ("PROPID")
	  REFERENCES "CSADMIN"."TBL_PROPOSAL" ("PROPID") ENABLE;
  ALTER TABLE "CSADMIN"."TBL_PROP_PRI_COURSES" ADD CONSTRAINT "TBL_PROP_PRI_COURSES_FK2" FOREIGN KEY ("INSTITUTION")
	  REFERENCES "CSADMIN"."TBL_INSTITUTION" ("INSTITUTION") ENABLE;
  ALTER TABLE "CSADMIN"."TBL_PROP_PRI_COURSES" ADD CONSTRAINT "TBL_PROP_PRI_COURSES_FK3" FOREIGN KEY ("CAREER")
	  REFERENCES "CSADMIN"."TBL_CAREER" ("ACAD_CAREER") ENABLE;
  ALTER TABLE "CSADMIN"."TBL_PROP_PRI_COURSES" ADD CONSTRAINT "TBL_PROP_PRI_COURSES_FK4" FOREIGN KEY ("ACAD_ORG")
	  REFERENCES "CSADMIN"."TBL_ACAD_ORG" ("ACAD_ORG") ENABLE;
  ALTER TABLE "CSADMIN"."TBL_PROP_PRI_COURSES" ADD CONSTRAINT "TBL_PROP_PRI_COURSES_FK5" FOREIGN KEY ("COURSE_STATUS")
	  REFERENCES "CSADMIN"."TBL_COURSE_STATUS" ("COURSE_STATUS") ENABLE;
