--------------------------------------------------------
--  DDL for Table TBL_PROP_FACULTY
--------------------------------------------------------

  CREATE TABLE "CSADMIN"."TBL_PROP_FACULTY" 
   (	"PROPID" NUMBER(*,0), 
	"CRSE_SEQ_NUM" NUMBER(*,0), 
	"COURSE_TYPE" VARCHAR2(15 BYTE), 
	"USER_ID" VARCHAR2(10 BYTE), 
	"FACULTY_TYPE" VARCHAR2(20 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS NOLOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "COURSE_SHARE" ;

   COMMENT ON COLUMN "CSADMIN"."TBL_PROP_FACULTY"."COURSE_TYPE" IS 'Is the course a primary/secondary course';
