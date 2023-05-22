import React, { useState } from "react";

const Wallet = ({ transaction }) => {
	const [isDeleting, setIsDeleting] = useState(false);
	const handleDeleteClick = () => {
		setIsDeleting(true);
	};
	const handleDeleteConfirmed = () => {
		// Hapus transaksi dari API menggunakan fetch atau axios
		// Setelah penghapusan selesai, panggil fungsi untuk menghapus transaksi dari state
		setIsDeleting(false);
	};
	return (
		<>
			<div
				key={transaction.id}
				className="flex justify-between items-center cursor-pointer hover:bg-gray-200 p-2 rounded-md gap-2">
				<div>
					<p className="font-medium">{transaction.type}</p>
					<p className="text-sm text-gray-600">{transaction.date}</p>
				</div>
				<p className="font-medium">
					{transaction.price.toLocaleString("id-ID", {
						style: "currency",
						currency: "IDR",
					})}
				</p>
				<button
					onClick={handleDeleteClick}
					className="group relative w-auto flex justify-center
                py-2 px-4 border border-transparent text-sm font-medium
                rounded-md text-white bg-indigo-600 hover:bg-indigo-700
                focus:outline-none focus:ring-2 focus:ring-offset-2
                focus:ring-indigo-500">
					Hapus
				</button>

				{isDeleting && (
					<div className="flex justify-between items-center cursor-pointer bg-red-100 p-2 rounded-md">
						<div>
							<p className="font-medium">
								Apakah Anda yakin ingin menghapus transaksi ini?
							</p>
						</div>
						<div>
							<button
								className="px-4 py-2 bg-red-500 text-white font-medium rounded-md mr-2"
								onClick={handleDeleteConfirmed}>
								Ya
							</button>
							<button
								className="px-4 py-2 bg-gray-500 text-white font-medium rounded-md"
								onClick={() => setIsDeleting(false)}>
								Tidak
							</button>
						</div>
					</div>
				)}
			</div>
		</>
	);
};

export default Wallet;
