--------------------------------------------------------
--  DDL for Table TBL_PROP_PRI_COURSES
--------------------------------------------------------

  CREATE TABLE "CSADMIN"."TBL_PROP_PRI_COURSES" 
   (	"PROPID" NUMBER(*,0), 
	"PRI_SEQ_NUM" NUMBER(*,0), 
	"INSTITUTION" VARCHAR2(5 BYTE), 
	"CAREER" VARCHAR2(4 BYTE), 
	"SUBJECT" VARCHAR2(30 BYTE), 
	"CATALOG_NUM" VARCHAR2(30 BYTE), 
	"DESCR" VARCHAR2(50 BYTE), 
	"DESCR_TOPICS" VARCHAR2(50 BYTE), 
	"LONG_DESCR" CLOB, 
	"ACAD_ORG" VARCHAR2(10 BYTE), 
	"COURSE_STATUS" VARCHAR2(5 BYTE), 
	"PRI_CRSE_BUDGET" FLOAT(126), 
	"MOD_BY" VARCHAR2(20 BYTE), 
	"MOD_DATE" TIMESTAMP (6) DEFAULT CURRENT_TIMESTAMP(6)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS NOLOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "COURSE_SHARE" 
 LOB ("LONG_DESCR") STORE AS BASICFILE (
  TABLESPACE "COURSE_SHARE" ENABLE STORAGE IN ROW CHUNK 8192 RETENTION 
  NOCACHE NOLOGGING 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)) ;

   COMMENT ON COLUMN "CSADMIN"."TBL_PROP_PRI_COURSES"."DESCR" IS 'Title of course';
   COMMENT ON COLUMN "CSADMIN"."TBL_PROP_PRI_COURSES"."DESCR_TOPICS" IS 'Topics of course if applicable';
