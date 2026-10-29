document.addEventListener("DOMContentLoaded", function () {

    // Top Cards
    let employees = JSON.parse(localStorage.getItem("employees"));
    let totalLeaves = JSON.parse(localStorage.getItem("leave-apps"));
    let attendance = JSON.parse(localStorage.getItem("today-attendance"));

    $(".total-employees").text(employees.length);

    let todayLeaves = totalLeaves.reduce((acc, ele) => {
        if (ele.status == "Approved" && (ele.startDate == (new Date().toISOString().split("T")[0]))) {
            acc += 1;
        }
        return acc;
    }, 0);
    $(".today-leave").text(todayLeaves);

    let todayPresents = 0, todayAbsents = 0;
    attendance.map((ele) => {
        if (ele.status == "Present") todayPresents++;
        if (ele.status == "Absent") todayAbsents++;
    });
    $(".today-presents").text(todayPresents);
    $(".today-absents").text(todayAbsents);




    let leaveGroup = new Set();
    totalLeaves.map((ele) => {
        leaveGroup.add(ele.leaveType);
    });
    leaveGroup = Array.from(leaveGroup);

    let leaveGroupEmp = [];
    leaveGroup.map((ele) => {
        let groupEmpCount = totalLeaves.reduce((acc, curr) => {
            if (curr.leaveType == ele) acc += 1;
            return acc;
        }, 0);

        leaveGroupEmp.push(groupEmpCount);
    });

    Highcharts.chart('attendance-chart', {
        chart: {
            type: 'column'
        },
        title: {
            text: '',
            align: 'left'
        },
        xAxis: {
            categories: leaveGroup,
            crosshair: true,
            accessibility: {
                description: 'Attendaance'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Number of Employees on leave'
            }
        },
        legend: {
            symbolRadius: 3
        },
        plotOptions: {
            column: {
                pointPadding: 0.1,
                borderWidth: 0
            }
        },
        series: [
            {
                name: "Total Employees",
                data: leaveGroupEmp
            },
        ]
    });
});