import data from "./dummyApi.json";
import data2 from "./dummyApi2.json";

async function getData() {
	return data;
}

async function getData2() {
	return data2;
}

export { getData, getData2 };
