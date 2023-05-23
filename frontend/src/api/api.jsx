import axios from "axios";

async function getLoginData({ email, password }) {
    try {
        const response = await axios.post(
            "http://192.168.137.1:8000/api/login",
            { email_user: email, password }
        );
        return response.data;
    } catch (error) {
        console.error(error);
        throw error;
    }
}

async function getData() {
    try {
        const response = await axios.get("192.168.137.1/api/");
        return response.data;
    } catch (error) {
        console.error(error);
        throw error;
    }
}

async function getData2() {
    try {
        const response = await axios.get("URL_API/data2");
        return response.data;
    } catch (error) {
        console.error(error);
        throw error;
    }
}

export { getLoginData, getData, getData2 };
