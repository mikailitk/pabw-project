const FirstTiket = () => {
	return (
		<>
			<div className="flex flex-col text-center items-center justify-center min-h-screen px-32 gap-4">
				<h2 className="text-2xl font-bold">Tiket Pesawat</h2>
				<div>
					Di sini terdapat sebuah teks dengan sebuah tombol untuk membuka menu
					tergantung judul
				</div>
				<button
					className="z-50 px-4 py-2 text-white bg-blue-500 border border-blue-500 rounded-md hover:bg-blue-600"
					href="#">
					Lebih lanjut
				</button>
			</div>
		</>
	);
};

export default FirstTiket;
