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


    // Bar Chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            instituion: 'ROLLA',
            NoCourses: 137
        }, {
            instituion: 'UMCL',
            NoCourses: 275
        }, {
            instituion: 'KMC',
            NoCourses: 380
        }, {
            instituion: 'MU',
            NoCourses: 655
        }],
        xkey: 'instituion',
        ykeys: ['NoCourses'],
        labels: ['NoCourses'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        resize: true
    });



    Morris.Donut({
        element: 'flot-moving-line-chart',
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
