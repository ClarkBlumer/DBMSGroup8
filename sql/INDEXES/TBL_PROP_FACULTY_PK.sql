--------------------------------------------------------
--  DDL for Index TBL_PROP_FACULTY_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "CSADMIN"."TBL_PROP_FACULTY_PK" ON "CSADMIN"."TBL_PROP_FACULTY" ("PROPID", "CRSE_SEQ_NUM", "COURSE_TYPE", "USER_ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS NOLOGGING 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "COURSE_SHARE" ;