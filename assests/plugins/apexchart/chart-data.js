"use strict";
$(document).ready(function () {
  var columnCtx = document.getElementById("sales_chart"),
    columnConfig = {
      colors: ["#7638ff", "#fda600", "#4183fd", "#4da290"],
      series: [],
      chart: {
        type: "bar",
        fontFamily: "Poppins, sans-serif",
        height: 350,
        toolbar: { show: false },
      },
      plotOptions: {
        bar: { horizontal: false, columnWidth: "60%", endingShape: "rounded" },
      },
      dataLabels: { enabled: false },
      stroke: { show: true, width: 2, colors: ["transparent"] },
      xaxis: {
        categories: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec"
        ],
      },
      yaxis: { title: { text: "₱ (thousands)" } },
      fill: { opacity: 1 },
      tooltip: {
        y: {
          formatter: function (val) {
            return "₱ " + val + " thousands";
          },
        },
      },
    };

  // Use AJAX to fetch data from PHP script
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "assets/plugins/apexchart/get_employee_salary.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var responseData = JSON.parse(xhr.responseText);

      // Group the data by salary frequency
      var groupedData = responseData.reduce(function (acc, item) {
        var key = item.salaryFrequency;
        if (!acc[key]) {
          acc[key] = [];
        }
        acc[key].push(item.totalSalary);
        return acc;
      }, {});

      // Add series for each salary frequency
      for (var frequency in groupedData) {
        if (groupedData.hasOwnProperty(frequency)) {
          columnConfig.series.push({
            name: frequency,
            type: "column",
            data: groupedData[frequency],
          });
        }
      }

      var chart = new ApexCharts(columnCtx, columnConfig);
      chart.render();
    }
  };

  xhr.send();
});


//   var columnChart = new ApexCharts(columnCtx, columnConfig);
//   columnChart.render();
//   var pieCtx = document.getElementById("invoice_chart"),
//     pieConfig = {
//       colors: ["#7638FF", "#22CC62", "#EF3737", "#757575","#FFBC34","#009EFB","#1EC1B0"],
//       series: [55, 40, 20, 10, 12, 12, 13],
//       chart: { fontFamily: "Poppins, sans-serif", height: 350, type: "donut" },
//       labels: ["Engineering", "Production", "Warehouse", "LCS","GHQ","GSS","None"],
//       legend: { show: false },
//       responsive: [
//         {
//           breakpoint: 480,
//           options: { chart: { width: 200 }, legend: { position: "bottom" } },
//         },
//       ],
//     };
//   var pieChart = new ApexCharts(pieCtx, pieConfig);
//   pieChart.render();
// });