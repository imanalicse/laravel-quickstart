document.addEventListener("DOMContentLoaded", function () {
    deleteConfirmation();
});

function deleteConfirmation() {
    document.querySelector(".delete-action-form")?.addEventListener("click", function (e) {
        if (confirm("Are you sure to delete product?")) {
            return true;
        }
        e.preventDefault();
    });
}

