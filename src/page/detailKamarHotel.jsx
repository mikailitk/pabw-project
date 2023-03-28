import { useParams } from "react-router-dom";

function KamarHotelDetail() {
	const { id } = useParams();

	// Lakukan proses selanjutnya dengan id

	return (
		<>
			<div className="mt-24">
				<h1>Detail Kamar Hotel {id}</h1>
			</div>
		</>
	);
}

export default KamarHotelDetail;
