import { useParams } from "react-router-dom";

function TiketPesawatDetail() {
	const { id } = useParams();

	// Lakukan proses selanjutnya dengan id

	return (
		<>
			<div className="mt-24">
				<h1>Detail Tiket Pesawat {id}</h1>
			</div>
		</>
	);
}

export default TiketPesawatDetail;
