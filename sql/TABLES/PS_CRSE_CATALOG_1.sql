--------------------------------------------------------
--  DDL for Table PS_CRSE_CATALOG
--------------------------------------------------------

  CREATE TABLE "CSPRDK"."PS_CRSE_CATALOG" 
   (	"CRSE_ID" VARCHAR2(6 BYTE), 
	"EFFDT" DATE, 
	"EFF_STATUS" VARCHAR2(1 BYTE), 
	"DESCR" VARCHAR2(30 BYTE), 
	"EQUIV_CRSE_ID" VARCHAR2(5 BYTE), 
	"CONSENT" VARCHAR2(1 BYTE), 
	"ALLOW_MULT_ENROLL" VARCHAR2(1 BYTE), 
	"UNITS_MINIMUM" NUMBER(5,2), 
	"UNITS_MAXIMUM" NUMBER(5,2), 
	"UNITS_ACAD_PROG" NUMBER(5,2), 
	"UNITS_FINAID_PROG" NUMBER(5,2), 
	"CRSE_REPEATABLE" VARCHAR2(1 BYTE), 
	"UNITS_REPEAT_LIMIT" NUMBER(5,2), 
	"CRSE_REPEAT_LIMIT" NUMBER(*,0), 
	"GRADING_BASIS" VARCHAR2(3 BYTE), 
	"GRADE_ROSTER_PRINT" VARCHAR2(1 BYTE), 
	"SSR_COMPONENT" VARCHAR2(3 BYTE), 
	"COURSE_TITLE_LONG" VARCHAR2(100 BYTE), 
	"LST_MULT_TRM_CRS" VARCHAR2(1 BYTE), 
	"CRSE_CONTACT_HRS" NUMBER(5,2), 
	"RQMNT_DESIGNTN" VARCHAR2(4 BYTE), 
	"CRSE_COUNT" NUMBER(4,2), 
	"INSTRUCTOR_EDIT" VARCHAR2(2 BYTE), 
	"FEES_EXIST" VARCHAR2(1 BYTE), 
	"COMPONENT_PRIMARY" VARCHAR2(3 BYTE), 
	"ENRL_UN_LD_CLC_TYP" VARCHAR2(1 BYTE), 
	"SSR_DROP_CONSENT" VARCHAR2(1 BYTE), 
	"SCC_ROW_ADD_OPRID" VARCHAR2(30 BYTE), 
	"SCC_ROW_ADD_DTTM" TIMESTAMP (6), 
	"SCC_ROW_UPD_OPRID" VARCHAR2(30 BYTE), 
	"SCC_ROW_UPD_DTTM" TIMESTAMP (6), 
	"DESCRLONG" CLOB
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS NOLOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "CS_PRD_K" 
 LOB ("DESCRLONG") STORE AS BASICFILE (
  TABLESPACE "CS_PRD_K" ENABLE STORAGE IN ROW CHUNK 8192 RETENTION 
  NOCACHE NOLOGGING 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)) ;
