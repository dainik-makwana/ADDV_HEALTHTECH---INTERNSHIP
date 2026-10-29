$(document).ready(function () {
    var interval = null;

    function refreshData() {
        interval = setInterval(function () {
            $.ajax({
                url: "../../backend/leave-apps.php",
                method: "GET",
                success: function (res) {
                    localStorage.setItem("leave-apps", JSON.stringify(res));
                    window.location.reload();
                }
            });
        }, 30000);
    }

    refreshData();

    $("#switchinverse").on("change", function () {

        if (this.checked) refreshData();
        else clearInterval(interval);
    });

    new DataTable('.leave-apps-table', {
        data: JSON.parse(localStorage.getItem("leave-apps")),
        columns: [{
            data: 'id',
        },
        {
            data: 'employeeId',
            render: function (data) {
                return `<span class="fg-secondary">${data}</span>`;
            }
        },
        {
            data: 'appliedOn',
            render: function (data) {
                return `<span class="fg-secondary">${data}</span>`;
            }
        },
        {
            data: null,
            render: function (data, type, row) {
                return `<span class="fg-secondary">[${row.startDate}] - [${row.endDate}]</span>`;
            }
        },
        {
            data: "status",
            render: function (data) {
                return `<span class="fg-${(data == "Approved" ? "success" : ((data == "Pending" ? "warning" : "danger")))}">
                                    ${(data == "Approved") ? '<i class="fa-solid fa-circle-check"></i>' : ((data == "Pending") ? '<i class="fa-solid fa-clock"></i>' : '<i class="fa-solid fa-circle-xmark"></i>')}
                                    ${data}
                                </span>`;
            }
        },
        {
            data: 'status',
            render: function (data, type, row) {

                return `<select class="btn-outline theme-inverse approve-option" data-id="${row.id}">
                                    <option class="fg-success bg-white" value="Approved" ${(data == "Approved") ? "selected" : ""}>Approved</option>
                                    <option class="fg-danger bg-white" value="Rejected" ${(data == "Rejected") ? "selected" : ""}>Rejected</option>
                                    <option class="fg-warning bg-white" value="Pending" ${(data == "Pending") ? "selected" : ""} disabled>Pending</option>
                                </select>`;
            }
        },
        {
            data: 'leaveType',
            render: function (data) {
                return `<span class="fg-secondary">${data}</span>`;
            }
        },
        {
            data: 'totalDays',
            render: function (data) {
                return `<span class="fg-secondary">${data}</span>`;
            }
        },
        {
            data: 'reason'
        },
        ],
        columnControl: [{
            target: 2,
            content: ['order']
        },
        {
            target: 3,
            content: ['search']
        }
        ],
        responsive: true
    });
});