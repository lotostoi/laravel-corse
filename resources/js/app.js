require("./bootstrap");
import http from "./http";

const adminWrapperNews = document.querySelector(".admin-wrapper-news");

adminWrapperNews?.addEventListener("click", async (e) => {
    const target = e.target;

    if (target.dataset.deleteId) {
        await http.delete(
            `/delete-new/${target.dataset.deleteId}`
        );
    }
});
