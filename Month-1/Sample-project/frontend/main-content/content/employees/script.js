$(document).ready(function () {
    let employees = localStorage.getItem("employees") ? localStorage.getItem("employees") : [];
    employees = JSON.parse(employees);

    if (employees.length > 0) {
        employees.forEach((ele, ind) => {
            if (ind >= 5) return;

            let { id, img, firstName, lastName, jobTitle, department, hireDate, isActive } = ele;

            $(".employee-list").append(`
                    <div class="row align-items-center py-2 pb-4">
                        <div class="col-2 md:col-1">${id}</div>
                        <div class="col-2 md:col-1">
                            <img style="width: 100%; aspect-ratio: 1/1; object-fit: cover; border-radius: 50%" src="${img}" alt="${firstName + "" + lastName}" />
                        </div>
                        <div class="col-3 md:col-2">${firstName + "" + lastName}</div>
                        <div class="col-3">${jobTitle}</div>
                        <div class="d-none md:d-block md:col-2">${department}</div>
                        <div class="d-none md:d-block md:col-2">${hireDate}</div>
                        <div class="col-2 md:col-1 text-center">${(isActive)?"<i class='fa-solid fa-circle-check fg-success'></i>":"<i class='fa-solid fa-circle-xmark fg-danger'></i>"}</div>
                    </div>
                `);
        });
    }
});