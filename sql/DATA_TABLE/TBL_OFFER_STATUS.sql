REM INSERTING into CSADMIN.TBL_OFFER_STATUS
SET DEFINE OFF;
Insert into CSADMIN.TBL_OFFER_STATUS (OFFER_STATUS,OFFER_DESCR) values ('pend','Pending');
Insert into CSADMIN.TBL_OFFER_STATUS (OFFER_STATUS,OFFER_DESCR) values ('awrd','Awarded');
Insert into CSADMIN.TBL_OFFER_STATUS (OFFER_STATUS,OFFER_DESCR) values ('deny','Denied');
Insert into CSADMIN.TBL_OFFER_STATUS (OFFER_STATUS,OFFER_DESCR) values ('canc','Cancelled');
Insert into CSADMIN.TBL_OFFER_STATUS (OFFER_STATUS,OFFER_DESCR) values ('Wthd','Withdrawn');
commit;
