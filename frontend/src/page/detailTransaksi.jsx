import { useParams } from "react-router-dom";

function TransaksiDetail() {
	const { id } = useParams();

	// Lakukan proses selanjutnya dengan id

	return (
		<>
			<div className="mt-24">
				<h1>Detail Transaksi {id}</h1>
			</div>
		</>
	);
}

export default TransaksiDetail;
