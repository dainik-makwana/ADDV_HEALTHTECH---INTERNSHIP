function fetchAttendance(date) {
    $.ajax({
        url: "../../../backend/get-attendance.php",
        data: {
            date
        },
        dataType: "json",
        success: function (res) {
            localStorage.setItem("today-attendance", JSON.stringify(res));
            $(".attendance-table").DataTable().destroy();
            generateDataTable();
        }
    });
}


function generateDataTable() {
    new DataTable('.attendance-table', {
        data: JSON.parse(localStorage.getItem("today-attendance")),
        columns: [{
            data: 'attendanceId',
        },
        {
            data: 'employeeId',
        },
        {
            data: 'img',
            render: function (data) {
                return `<div class="profile-img"><img src="${data}" /></div>`
            }
        },
        {
            data: 'date',
        },
        {
            data: 'checkIn',
        },
        {
            data: 'checkOut',
        },
        {
            data: 'lateByMinutes',
        },
        {
            data: 'workHours',
        },
        {
            data: 'status',
            render: function (data) {
                return `<span class="fg-${(data == "Present") ? "success" : ((data == "Late" || data == "Half Day") ? "warning" : "danger")}">
                                    ${(data == "Present") ? "<i class='fa-solid fa-circle-check'></i>" : ((data == "Late" || data == "Half Day") ? "<i class='fa-solid fa-clock'></i>" : "<i class='fa-solid fa-circle-xmark'></i>")}
                                    &nbsp;${data}
                                </span>`;
            }
        },
        ],
        layout: {
            topStart: {
                buttons: [{
                    extend: 'excelHtml5',
                    customize: function (xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];

                        // Selector to add a border
                        sheet.querySelectorAll('row c[r*="10"]').forEach((el) => {
                            el.setAttribute('s', '25');
                        });
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                    'colvis'
                ]
            }
        },
        responsive: {
            details: {
                renderer: DataTable.Responsive.renderer.listHiddenNodes()
            }
        }
    });
}



$(document).ready(function () {

    let date = new Date().toISOString().split("T")[0];
    let todayAtt = JSON.parse(localStorage.getItem("today-attendance"));

    if (todayAtt) {
        if (todayAtt[0].date != date) {
            localStorage.removeItem("today-attendance");
        }
    }

    $(".filter-date").val(date);
    $(".filter-date").change(function () {
        date = $(this).val();

        fetchAttendance(date);
    });
});