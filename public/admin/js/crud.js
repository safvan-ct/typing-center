class CRUD {
    static resource = null;

    static setResource(name) {
        this.resource = name;
    }

    static loadDataTable(columns, tableId = "dataTable") {
        let resource = this.resource;

        return $(`#${tableId}`).DataTable({
            processing: true,
            serverSide: true,
            deferRender: true,
            destroy: true,
            responsive: true,
            ajax: `/admin/${resource}/datatable`,
            columns: columns,
            columnDefs: [{ targets: "_all", className: "text-center" }],
        });
    }

    static open(id = 0) {
        toastr.clear();
        let resource = this.resource;

        $("#crudTitle").text(id ? `Edit ${resource}` : `Create ${resource}`);
        $("#crudBody").html("Loading...");

        // Load fields partial from controller
        $("#crudBody").load(`/admin/${resource}/form/${id}`, function () {
            let img = $("#imagePreview");

            // show only if value exists
            if (img.attr("src")) {
                img.removeClass("d-none");
            }
        });

        $("#crudModal").modal("show");

        $("#crudForm")
            .off("submit")
            .on("submit", function (e) {
                e.preventDefault();
                CRUD.save();
            });
    }

    static save(table = "dataTable") {
        toastr.clear();
        let resource = this.resource;

        let form = document.getElementById("crudForm");
        let formData = new FormData(form);
        let id = formData.get("id");

        let url =
            id && id > 0 ? `/admin/${resource}/${id}` : `/admin/${resource}`;

        formData.append("_method", id && id > 0 ? "PUT" : "POST");

        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                Accept: "application/json",
                "X-CSRF-TOKEN": document.querySelector(
                    "meta[name='csrf-token']"
                ).content,
            },
            success: function (res) {
                toastr.success(res.message || "Success");
                $("#crudModal").modal("hide");

                // Refresh Datatable safely
                $(`#${table}`).DataTable().ajax.reload(null, false);
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    // Laravel validation errors
                    $.each(xhr.responseJSON.errors, function (key, messages) {
                        toastr.error(messages[0]);
                    });
                } else {
                    toastr.error(
                        xhr.responseJSON?.message ||
                            "Server error. Please try again."
                    );
                }
            },
            complete: function () {
                hideLoader();
            },
        });
    }

    static delete(id, table = "dataTable") {
        let resource = this.resource;
        toastr.clear();

        if (!confirm("Are you sure?")) return;

        fetch(`/admin/${resource}/${id}`, {
            method: "DELETE",
            headers: {
                Accept: "application/json",
                "X-CSRF-TOKEN": document.querySelector(
                    "meta[name='csrf-token']"
                ).content,
            },
        })
            .then((r) => r.json())
            .then((res) => {
                toastr.success(res.message);
                $(`#${table}`).DataTable().ajax.reload(null, false);
            });
    }

    static toggleStatus(id, table = "dataTable") {
        let resource = this.resource;
        toastr.clear();

        if (!confirm("Are you sure you want to change status?")) return;

        showLoader();

        fetch(`/admin/${resource}/${id}/toggle-status`, {
            method: "PATCH",
            headers: {
                Accept: "application/json",
                "X-CSRF-TOKEN": document.querySelector(
                    "meta[name='csrf-token']"
                ).content,
            },
        })
            .then((r) => r.json())
            .then((res) => {
                toastr.success(res.message);
                $(`#${table}`).DataTable().ajax.reload(null, false);
            })
            .catch(() => toastr.error("Network error"))
            .finally(() => hideLoader());
    }

    // reusable toggle column
    static columnToggleStatus(table = "dataTable") {
        return {
            data: "is_active",
            orderable: false,
            searchable: false,
            render: (data, type, row) => {
                const label = data ? "Active" : "Inactive";
                const color = data ? "text-success" : "text-danger";

                return `<button  class="btn btn-link ${color}" onclick="CRUD.toggleStatus(${row.id}, '${table}')">${label}</button>`;
            },
        };
    }

    // reusable action buttons column
    static columnActions(table = "dataTable") {
        return {
            data: null, // action is not from DB
            orderable: false,
            searchable: false,
            render: (data, type, row) => `
                <button class="btn btn-link" onclick="CRUD.open(${row.id})">Edit</button>
                <button class="btn btn-link text-danger" onclick="CRUD.delete(${row.id}, '${table}')">Delete</button>
            `,
        };
    }
}
