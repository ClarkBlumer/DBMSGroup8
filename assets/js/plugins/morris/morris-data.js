// Morris.js Charts sample data for SB Admin template

$(function() {
if (typeof js_array['UMCL'] == 'undefined'){UMCL=0;} else{UMCL=js_array['UMCL'];}
if (typeof js_array['COLUM'] =='undfined'){COLUM=0;} else{(COLUM= js_array['COLUM']);}
if (typeof js_array['UMKC']=='undefined'){UMKC =0;} else{UMKC=js_array['UMKC'];}
if (typeof js_array['ROLLA']=='undefine'){ROLLA=0;} else{ROLLA = js_array['ROLLA'];}


    // funding requested 
    Morris.Donut({
        element: 'donut-primary-budget-campus',
        data: [{
            label: "Number of funding requested by MU",
            value: COLUM
        }, {
            label: "Number of funding requested by UMKC",
            value: UMKC
        }, {
            label: "Number of funding requested by UMCL",
            
            value: UMCL
        }, {
            label: "Number of funding requested by ROLLA",
            value: ROLLA
        }],
        resize: true
    });


if (typeof fundAw['UMKC']=='undefined') {UMKC1=0;}else{UMKC=fundAw['UMKC'];}
if(typeof fundAw['ROLLA'] =='undefined'){ROLLA=0;}else{ROLLA=fundAw['ROLLA'];}
if(typeof fundAw['COLUM']=='undefined'){COLUM=0;}else{COLUM=fundAw['COLUM'];}
if(typeof fundAw['UMCL']=='undefined'){UMCL=0;}else{UMCL=fundAw['UMCL'];}

    // funding awarded 
    Morris.Donut({
        element: 'morris-line-chart',
        data: [{
            label: "Number of funding awarded to MU",
            value: COLUM
        }, {
            label: "Number of funding awarded to UMCL",
            value: UMCL
        }, {
            label: "Number of funding awarded to UKMC",
            value: UMKC
        }, {
            label: "Number of funding awarded to ROLLA",
            value: ROLLA
        }],
        resize: true
    });

// A pie chart of total requested budget by term for each campus
 



var arr= new Array();
var str1;
for(i=0; i<KEYY.length;i++){
    if (KEYY[i]){bbg=KEYY[i];}else{bbg=90;}   
    if (BUDGET[i]){bu=BUDGET[i];}else{bu=0;}  
    if (INSTITU[i]){INs=INSTITU[i];}else{INs=0;}  
    str1 = INs + '_' + bbg;
    arr[i]={label: str1, value: bu};
}

Morris.Donut({
        element: 'morris-line-chart1',
        data: arr,
        resize: true
    });


//A pie chart of total requested by academic year and institution.
var arr1= new Array();
var str;
for(i=0; i<5;i++){
   if (ACAD_YEAR[i]){bbg=ACAD_YEAR[i];}else{bbg=90;}
   if (BUDGET_REQAYE[i]){bu=BUDGET_REQAYE[i];}else{bu=0;}
   if (INSTITAY[i]){instt=INSTITAY[i];}else{instt='X';}
   str = instt+'_'+bbg;
    arr1[i]={label: str, value: bu};
}
Morris.Donut({
        element: 'flot-moving-line-chart',
        data: arr1,
        resize: true
    });









        Morris.Donut({
            element: 'flot-bar-chart',
            data: [{
                label: "Number of funding awarded to MU",
                value: 37
            }, {
                label: "Number of funding awarded to UMCL",
                value: 33
            }, {
                label: "Number of funding awarded to KMC",
                value: 15
            }, {
                label: "Number of funding awarded to ROLLA",
                value: 15
            }],
            resize: true
        });





});
