import axios from "axios";

const getToken = () => document.querySelector('meta[name="csrf-token').content

const instance = axios.create({
    baseURL: "/admin/api/",
    timeout: 5000,
    headers: {
        'X-CSRF-TOKEN': getToken()
    }
});

export default instance;
