<style>
    .attendance-table .profile-img {
        padding: 1rem;
    }

    .attendance-table .profile-img img {
        aspect-ratio: 1/1;
        object-fit: cover;
        max-width: 80px;
        border-radius: 1rem;
    }

    @media all and (max-width: 576px) {
        .attendance-table {
            font-size: 15px;
        }

        .attendance-table img {
            max-width: 60px;
        }
    }
</style>

<div class="attendance-list">
    <div class="row justify-content-end mb-10 g-5">
        <div class="col-6" style="width: fit-content;">
            <input type="date" name="date" class="form-control filter-date" style="width: fit-content;" />
        </div>
    </div>

    <table class="attendance-table">
        <thead>
            <th>ID</th>
            <th>EmpID</th>
            <th>Profile</th>
            <th>Date</th>
            <th>CheckIn</th>
            <th>CheckOut</th>
            <th>Late (min)</th>
            <th>Work (hours)</th>
            <th>Status</th>
        </thead>

        <tbody></tbody>
    </table>
</div>