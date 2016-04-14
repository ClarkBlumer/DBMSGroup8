--------------------------------------------------------
--  Ref Constraints for Table TBL_PROP_FACULTY
--------------------------------------------------------

  ALTER TABLE "CSADMIN"."TBL_PROP_FACULTY" ADD CONSTRAINT "TBL_PROP_FACULTY_FK1" FOREIGN KEY ("FACULTY_TYPE")
	  REFERENCES "CSADMIN"."TBL_FACULTY_TYPE" ("FACULTY_TYPE") ENABLE;
  ALTER TABLE "CSADMIN"."TBL_PROP_FACULTY" ADD CONSTRAINT "TBL_PROP_FACULTY_FK2" FOREIGN KEY ("USER_ID")
	  REFERENCES "CSADMIN"."TBL_USERS" ("USER_ID") ENABLE;