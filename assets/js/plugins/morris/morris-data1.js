// Morris.js Charts sample data for SB Admin template

$(function() {
  // Donut Chart
  Morris.Donut({
      element: 'morris-donut-chart1',
      data: [{
          label: "Download Sales",
          value: 33
      }, {
          label: "In-Store Sales",
          value: 30
      }, {
          label: "Mail-Order Sales",
          value: 20
      }],
      resize: true
  });




});
