require("./bootstrap");
import { result } from "lodash";
import http from "./http";

const adminWrapperNews = document.querySelector(".admin-wrapper-news");

adminWrapperNews?.addEventListener("click", async (e) => {
    const target = e.target;

    if (target.dataset.deleteId) {
        const result = confirm("Are you sure?");
        if (result) {
            const response = await http.delete(
                `/delete-new/${target.dataset.deleteId}`
            );
            window.location.reload();
        }
    }
});
