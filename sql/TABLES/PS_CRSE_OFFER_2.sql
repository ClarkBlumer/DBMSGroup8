--------------------------------------------------------
--  DDL for Table PS_CRSE_OFFER
--------------------------------------------------------

  CREATE TABLE "CSPRDR"."PS_CRSE_OFFER" 
   (	"CRSE_ID" VARCHAR2(6 BYTE), 
	"EFFDT" DATE, 
	"CRSE_OFFER_NBR" NUMBER(*,0), 
	"INSTITUTION" VARCHAR2(5 BYTE), 
	"ACAD_GROUP" VARCHAR2(5 BYTE), 
	"SUBJECT" VARCHAR2(8 BYTE), 
	"CATALOG_NBR" VARCHAR2(10 BYTE), 
	"COURSE_APPROVED" VARCHAR2(1 BYTE), 
	"CAMPUS" VARCHAR2(5 BYTE), 
	"SCHEDULE_PRINT" VARCHAR2(1 BYTE), 
	"CATALOG_PRINT" VARCHAR2(1 BYTE), 
	"SCHED_PRINT_INSTR" VARCHAR2(1 BYTE), 
	"ACAD_ORG" VARCHAR2(10 BYTE), 
	"ACAD_CAREER" VARCHAR2(4 BYTE), 
	"SPLIT_OWNER" VARCHAR2(1 BYTE), 
	"SCHED_TERM_ROLL" VARCHAR2(1 BYTE), 
	"RQRMNT_GROUP" VARCHAR2(6 BYTE), 
	"CIP_CODE" VARCHAR2(13 BYTE), 
	"HEGIS_CODE" VARCHAR2(8 BYTE), 
	"USE_BLIND_GRADING" VARCHAR2(1 BYTE), 
	"RCV_FROM_ITEM_TYPE" VARCHAR2(1 BYTE), 
	"AP_BUS_UNIT" VARCHAR2(5 BYTE), 
	"AP_LEDGER" VARCHAR2(10 BYTE), 
	"AP_ACCOUNT" VARCHAR2(10 BYTE), 
	"AP_DEPTID" VARCHAR2(10 BYTE), 
	"AP_PROJ_ID" VARCHAR2(15 BYTE), 
	"AP_PRODUCT" VARCHAR2(6 BYTE), 
	"AP_FUND_CODE" VARCHAR2(5 BYTE), 
	"AP_PROG_CODE" VARCHAR2(5 BYTE), 
	"AP_CLASS_FLD" VARCHAR2(5 BYTE), 
	"AP_AFFILIATE" VARCHAR2(5 BYTE), 
	"AP_OP_UNIT" VARCHAR2(8 BYTE), 
	"AP_ALTACCT" VARCHAR2(10 BYTE), 
	"AP_BUD_REF" VARCHAR2(8 BYTE), 
	"AP_CF1" VARCHAR2(10 BYTE), 
	"AP_CF2" VARCHAR2(10 BYTE), 
	"AP_CF3" VARCHAR2(10 BYTE), 
	"AP_AFF_INT1" VARCHAR2(10 BYTE), 
	"AP_AFF_INT2" VARCHAR2(10 BYTE), 
	"WRITEOFF_BUS_UNIT" VARCHAR2(5 BYTE), 
	"WRITEOFF_LEDGER" VARCHAR2(10 BYTE), 
	"WRITEOFF_ACCOUNT" VARCHAR2(10 BYTE), 
	"WRITEOFF_DEPTID" VARCHAR2(10 BYTE), 
	"WRITEOFF_PROJ_ID" VARCHAR2(15 BYTE), 
	"WRITEOFF_PRODUCT" VARCHAR2(6 BYTE), 
	"WRITEOFF_FUND_CODE" VARCHAR2(5 BYTE), 
	"WRITEOFF_PROG_CODE" VARCHAR2(5 BYTE), 
	"WRITEOFF_CLASS_FLD" VARCHAR2(5 BYTE), 
	"WRITEOFF_AFFILIATE" VARCHAR2(5 BYTE), 
	"WRITEOFF_OP_UNIT" VARCHAR2(8 BYTE), 
	"WRITEOFF_ALTACCT" VARCHAR2(10 BYTE), 
	"WRITEOFF_BUD_REF" VARCHAR2(8 BYTE), 
	"WRITEOFF_CF1" VARCHAR2(10 BYTE), 
	"WRITEOFF_CF2" VARCHAR2(10 BYTE), 
	"WRITEOFF_CF3" VARCHAR2(10 BYTE), 
	"WRITEOFF_AFF_INT1" VARCHAR2(10 BYTE), 
	"WRITEOFF_AFF_INT2" VARCHAR2(10 BYTE), 
	"EXT_WRITEOFF" VARCHAR2(50 BYTE), 
	"GL_INTERFACE_REQ" VARCHAR2(1 BYTE), 
	"SEL_GROUP" VARCHAR2(10 BYTE), 
	"SCHEDULE_COURSE" VARCHAR2(1 BYTE), 
	"DYN_CLASS_DATA" VARCHAR2(10 BYTE), 
	"OEE_IND" VARCHAR2(1 BYTE), 
	"OEE_DYN_DATE_RULE" VARCHAR2(10 BYTE), 
	"SSR_CRSE_TYPOFF_CD" VARCHAR2(10 BYTE), 
	"SSR_AC_EXAM_ONLY" VARCHAR2(1 BYTE), 
	"SCC_ROW_ADD_OPRID" VARCHAR2(30 BYTE), 
	"SCC_ROW_ADD_DTTM" TIMESTAMP (6), 
	"SCC_ROW_UPD_OPRID" VARCHAR2(30 BYTE), 
	"SCC_ROW_UPD_DTTM" TIMESTAMP (6)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS NOLOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "CS_PRD_R" ;
