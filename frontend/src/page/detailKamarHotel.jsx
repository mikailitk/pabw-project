import { useParams } from "react-router-dom";
import React, { useState, useEffect } from "react";
import { getDataKamar } from "../api/api.jsx";

function KamarHotelDetail() {
	const { id } = useParams();

	const [data, setData] = useState([]);

	useEffect(() => {
		const fetchData = async () => {
			try {
				const response = await getDataKamar();
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

	//const star =
	//	"https://upload.wikimedia.org/wikipedia/commons/4/44/Plain_Yellow_Star.png";

	//const stars = [];

	//if (filteredData.length > 0) {
	//	const rating = parseInt(filteredData[0].rating);
	//	for (let i = 0; i < rating; i++) {
	//		stars.push(<img className="w-5 h-auto" key={i} src={star} alt="star" />);
	//	}
	//}

	//<div className="flex flex-row">{stars}</div>

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
						<div>{item.id}</div>
						<div>{item.no_kursi}</div>
						<div>{item.waktu_berangkat}</div>
						<div>{item.waktu_sampai}</div>
					</div>
				))}
			</div>
		</>
	);
}

export default KamarHotelDetail;
