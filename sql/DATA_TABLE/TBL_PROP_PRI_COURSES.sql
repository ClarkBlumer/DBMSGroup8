REM INSERTING into CSADMIN.TBL_PROP_PRI_COURSES
SET DEFINE OFF;
Insert into CSADMIN.TBL_PROP_PRI_COURSES (PROPID,PRI_SEQ_NUM,INSTITUTION,CAREER,SUBJECT,CATALOG_NUM,DESCR,DESCR_TOPICS,ACAD_ORG,COURSE_STATUS,PRI_CRSE_BUDGET,MOD_BY,MOD_DATE) values (22,24,'COLUM','UGRD','English','1000','English for dummies',null,null,null,1234.99,'frielj',to_timestamp('14-APR-16 10.14.15.211000000 AM','DD-MON-RR HH.MI.SSXFF AM'));
Insert into CSADMIN.TBL_PROP_PRI_COURSES (PROPID,PRI_SEQ_NUM,INSTITUTION,CAREER,SUBJECT,CATALOG_NUM,DESCR,DESCR_TOPICS,ACAD_ORG,COURSE_STATUS,PRI_CRSE_BUDGET,MOD_BY,MOD_DATE) values (22,25,'ROLLA','UGRD','Explosives','1000','Blow things up',null,null,null,666.66,'frielj',to_timestamp('14-APR-16 10.16.54.908000000 AM','DD-MON-RR HH.MI.SSXFF AM'));
commit;
