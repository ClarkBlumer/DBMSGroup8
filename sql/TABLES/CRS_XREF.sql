--------------------------------------------------------
--  DDL for Table CRS_XREF
--------------------------------------------------------

  CREATE TABLE "BBCRSSHARE"."CRS_XREF" 
   (	"PRI_INSTITUTION" VARCHAR2(5 BYTE), 
	"PRI_STRM" VARCHAR2(4 BYTE), 
	"PRI_CLASS_NBR" NUMBER(38,0), 
	"SEC_INSTITUTION" VARCHAR2(5 BYTE), 
	"SEC_STRM" VARCHAR2(4 BYTE), 
	"SEC_CLASS_NBR" NUMBER(38,0)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS NOLOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "BB_CRS_SHARE" ;