import { Link } from "react-router-dom";

const FirstKamar = () => {
	return (
		<>
			<div className="flex flex-col text-center items-center justify-center min-h-screen px-32 gap-4">
				<h2 className="text-2xl font-bold">Kamar Hotel</h2>
				<div>
					Di sini terdapat sebuah teks dengan sebuah tombol untuk membuka menu kamar hotel
				</div>
				<div className="z-50 w-auto h-auto">
					<Link to="/kamarhotel">
						<button
							className="px-4 py-2 text-white bg-blue-500 border border-blue-500 rounded-md hover:bg-blue-600"
							href="#">
							Lebih lanjut
						</button>
					</Link>
				</div>
			</div>
		</>
	);
};

export default FirstKamar;
