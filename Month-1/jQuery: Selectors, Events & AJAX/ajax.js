$(document).ready(function () {

    // GET Request
    $(".spinner-border").show();

    let photosTable = $(".ajax-data-grid");
    photosTable.hide();

    $.ajax({
        url: "https://jsonplaceholder.typicode.com/photos",
        method: "GET",

        success: function (res) {

            dataTable = photosTable.DataTable({
                data: res.slice(0, 100),
                autoWidth: false,
                pageLength: 5,
                searching: true,
                ordering: true,
                paging: true,
                lengthMenu: [5, 10, 15, 25, 50],
                pagingType: "full_numbers",
                columns: [
                    {
                        data: "id",
                        title: "ID",
                        render: function (data, type) {
                            return `<span>${data}</span>`;
                        }
                    },
                    {
                        data: "thumbnailUrl",
                        title: "Thumbnail",
                        render: function (data, type) {
                            return `<img src="${data}" width="80"
                            style="max-width:100%; height:auto;"
                            class="rounded-4" alt="Thumbnail">`;
                        }
                    },
                    {
                        data: "title",
                        title: "Title"
                    },
                    {
                        data: "url",
                        title: "URL",
                        render: function (data, type) {
                            return `<a href="${data}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn btn-solid theme-inverse">View</a>`;
                        }
                    }
                ],
                initComplete: function () {
                    $(".spinner-border").hide();
                    photosTable.show();
                    this.api().columns.adjust().draw(false);
                }
            });
        },

        error: function (xhr, status, error) {
            $(".spinner-border").hide();
            console.error(error);
        }
    });





    // Ajax Posts
    $(".ajax-posts > .spinner-border").show();

    let postsTable = $(".ajax-posts-grid");
    postsTable.hide();

    $.ajax({
        url: "https://jsonplaceholder.typicode.com/posts",
        method: "GET",
        success: function (res) {
            postsTable.DataTable({
                data: res,
                pageLength: 5,
                lengthMenu: [5, 10, 15, 25, 50],
                columns: [
                    {
                        data: "id",
                        title: "ID"
                    },
                    {
                        data: "userId",
                        title: "User ID"
                    },
                    {
                        data: "title",
                        title: "Title"
                    },
                    {
                        data: "body",
                        title: "Body"
                    },
                    {
                        title: "Edit",
                        render: function (data, type) {
                            return `<div class="d-flex gap-2 align-items-center">
                            <button type="button" class="update-post btn-solid theme-inverse" data-bs-toggle="dialog" data-bs-target="#updateDetails">Edit</button>
                            <button type="button" class="update-post btn-outline theme-inverse delete-post">Delete</button>
                            </div>`;
                        }
                    }
                ],
                initComplete: function () {
                    $(".ajax-posts > .spinner-border").hide();
                    postsTable.show();
                    this.api().columns.adjust().draw(false);
                }
            });
        },
        error: function (xhr, status, error) {
            console.log(xhr, status, error);
        }
    });



    // Open Dialog to update post
    let id = 0;
    $(document).on("click", ".update-post", function () {
        const table = $(".ajax-posts-grid").DataTable();

        // Get the row data of the clicked button
        const rowData = table.row($(this).closest("tr")).data();

        id = rowData.id;
        $(".update-userid").val(rowData.userId);
        $(".update-title").val(rowData.title);
        $(".update-body").val(rowData.body);


        // Patch Request
        $(".update-details").click(function () {
            let userId = $(".update-userid").val();
            let title = $(".update-title").val();
            let body = $(".update-body").val();

            if (userId == "" && title == "" && body == "") return alert("Please! Enter the Data");

            $(".dialog .spinner-border").show();
            let res = $.ajax({
                url: `https://jsonplaceholder.typicode.com/posts/${id}`,
                method: 'PUT',
                body: JSON.stringify({
                    userId,
                    title,
                    body
                }),
                headers: {
                    'Content-type': 'application/json; charset=UTF-8',
                },
                success: function (res) {
                    $(".hide-dialog").trigger("click");
                    $(".dialog .spinner-border").show();
                },
                error: function (xhr, status, error) {
                    console.log(xhr, status, error);
                }
            });

            console.log(res);
        });
    });



    // Open Dialog to add new post
    $(".add-post").click(function () {
        $(".add-post-details").click(function () {
            let userId = $(".update-userid").val();
            let title = $(".update-title").val();
            let body = $(".update-body").val();

            if (userId == "" && title == "" && body == "") return alert("Please! Enter the Data");

            $(".dialog .spinner-border").show();
            let res = $.ajax({
                url: "https://jsonplaceholder.typicode.com/posts",
                method: "POST",
                body: JSON.stringify({ userId, title, body }),
                headers: {
                    "Content-Type": "application/json"
                },
                success: function (res) {
                    $(".hide-dialog").trigger("click");

                    console.log(res);

                    $(".dialog .spinner-border").hide();
                },
                error: function (xhr, status, error) {
                    console.log(xhr, status, error);
                }
            });

            console.log(res);
        });
    });


    // DELETE Request
    $(document).on("click", ".delete-post", function () {
        const table = $(".ajax-posts-grid").DataTable();
        // Get the row data of the clicked button
        const rowData = table.row($(this).closest("tr")).data();

        let res = $.ajax({
            url: `https://jsonplaceholder.typicode.com/posts/${rowData.id}`,
            method: "DELETE",
            success: function (res) {
                console.log(res);
            },
            error: function (xhr, status, error) {
                console.log(xhr, status, error);
            }
        });

        console.log(res);
    });
});
