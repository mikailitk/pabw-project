import React, { useState, useEffect } from "react";
import { getData } from "../api/api.jsx";
import { Link } from "react-router-dom";

import Card from "../component/card";

const KamarHotel = () => {
	const [data, setData] = useState([]);

	const results = data.map((data) => (
		<Link key={data.id} to={{ pathname: `${data.id}` }}>
			{" "}
			<Card data={data} />{" "}
		</Link>
	));

	useEffect(() => {
		const fetchData = async () => {
			try {
				const response = await getData();
				if (response) {
					setData(response);
				}
			} catch (error) {
				console.error(error);
			}
		};

		fetchData();
	}, []);

	return (
		<>
			<div className="grid grid-cols-4 gap-16 m-16 mt-32">
				{results}
			</div>
		</>
	);
};

export default KamarHotel;
