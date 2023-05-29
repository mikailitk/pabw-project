import axios from "axios";

const axiosInstance = axios.create({
    baseURL: "http://192.168.137.1:3000/api",
    headers: {
        "Content-Type": "application/json",
    },
});

async function postLoginData({ email, password }) {
    try {
        const response = await axiosInstance.post("/login", {
            email_user: email,
            password,
        });
        return response.data;
    } catch (error) {
        console.error(error);
        throw error;
    }
}

async function getLoginData() {
    try {
        const response = await axiosInstance.get("/login");
        return response.data;
    } catch (error) {
        console.error(error);
        throw error;
    }
}

async function getDataKamar() {
    try {
        const response = await axiosInstance.get("/kamar");
        if (response.data.error === false) {
            return response.data.product;
        } else {
            throw new Error(response.data.message);
        }
    } catch (error) {
        console.error(error);
        throw error;
    }
}

async function getDataTiket() {
    try {
        const response = await axiosInstance.get("/kursi");
        if (response.data.error === false) {
            return response.data.product;
        } else {
            throw new Error(response.data.message);
        }
    } catch (error) {
        console.error(error);
        throw error;
    }
}

async function getDataWallet() {
    try {
        const response = await axiosInstance.get("/wallet");
        if (response.data.error === false) {
            return response.data.user;
        } else {
            throw new Error(response.data.message);
        }
    } catch (error) {
        console.error(error);
        throw error;
    }
}

export {
    postLoginData,
    getLoginData,
    getDataKamar,
    getDataTiket,
    getDataWallet,
};
