// Morris.js Charts sample data for SB Admin template

$(function() {


    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Number of funding requested by MU",
            value: 37
        }, {
            label: "Number of funding requested by UMCL",
            value: 33
        }, {
            label: "Number of funding requested by KMC",
            value: 15
        }, {
            label: "Number of funding requested by ROLLA",
            value: obj2
        }],
        resize: true
    });


    Morris.Donut({
        element: 'morris-line-chart',
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
