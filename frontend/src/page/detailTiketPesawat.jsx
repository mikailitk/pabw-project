import { useParams } from "react-router-dom";
import React, { useState, useEffect } from "react";
import { getDataTiket } from "../api/api.jsx";

function TiketPesawatDetail() {
	const { id } = useParams();

	const [data, setData] = useState([]);

	useEffect(() => {
		const fetchData = async () => {
			try {
				const response = await getDataTiket();
				if (response) {
					setData(response);
				}
			} catch (error) {
				console.error(error);
			}
		};

		fetchData();
	}, []);

	const filteredData = data.filter((item) => item.id === parseInt(id));

	const star =
		"https://upload.wikimedia.org/wikipedia/commons/4/44/Plain_Yellow_Star.png";

	const stars = [];

	if (filteredData.length > 0) {
		const rating = parseInt(filteredData[0].rating);
		for (let i = 0; i < rating; i++) {
			stars.push(<img className="w-5 h-auto" key={i} src={star} alt="star" />);
		}
	}

	return (
		<>
			<div className="mt-24 ml-10">
				{filteredData.map((item) => (
					<div key={item.id}>
						<div>
							<img
								className="flex w-auto h-48"
								src="../src/assets/react.svg"
								alt=""
							/>
						</div>
						<div>{item.title}</div>
						<div>{item.location}</div>
						<div className="flex flex-row">{stars}</div>
						<div>{item.description}</div>
					</div>
				))}
			</div>
		</>
	);
}

export default TiketPesawatDetail;
