$(window).on("load", function () {
    tabSelecctOnLoad();
});

drawChart();

function tabSelecctOnLoad() {
    var $grid = $(".grid").isotope({
        itemSelector: ".grid-item",
        percentPosition: true,
        masonry: {
            // use outer width of grid-sizer for columnWidth
            columnWidth: 1,
        },
    });

    var filterValue = ".batting";
    $grid.isotope({ filter: filterValue });
}

function drawChart() {
    const xValues = [1, 10, 20, 30, 40, 50];
    const yValues = [10, 15, 35, 50, 65, 110];

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [
                {
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: yValues,
                },
            ],
        },
        options: {
            responsive: true,
            legend: { display: false },
            scales: {
                yAxes: [
                    {
                        ticks: { min: 0, max: 150 },
                        scaleLabel: {
                            display: true,
                            labelString: "SCORE",
                        },
                    },
                ],
                xAxes: [
                    {
                        scaleLabel: {
                            display: true,
                            labelString: "OVERS",
                        },
                    },
                ]
            },
        },
    });
}
