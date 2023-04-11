import React, { useState, useEffect } from "react";
import { Link } from "react-router-dom";

import { getData2 } from "../api/api.jsx";
import Wallet from "../component/wallet";

const Dompetku = ({ handleLogout }) => {
	const [recentTransactions, setRecentTransactions] = useState([]);

	const results = recentTransactions.map((data) => (
		<Link key={data.id} to={{ pathname: `${data.id}` }}>
			{" "}
			<Wallet transaction={data} />{" "}
		</Link>
	));

	useEffect(() => {
		const fetchData = async () => {
			try {
				const response = await getData2();
				if (response) {
					setRecentTransactions(response);
				}
			} catch (error) {
				console.error(error);
			}
		};

		fetchData();
	}, []);

	const handleClick = () => {
		handleLogout();
	};

	return (
		<>
			<div className="mt-24 flex flex-col items-center space-y-4">
				<h1 className="text-xl font-medium">Dompetku</h1>

				<div>
					<div className="flex flex-col justify-center text-center w-full max-w-md bg-gray-100 rounded-md shadow-md p-4">
						<h2>Uangku :</h2>
						<p className="w-full max-w-md bg-gray-300 rounded-md shadow-md p-4">
							Rp. {"sejumlah dana"}
						</p>
					</div>
				</div>
				<div className="w-full max-w-md bg-gray-100 rounded-md shadow-md p-4">
					<h2 className="text-lg font-medium mb-2">Transaksi Terbaru</h2>
					{results}
				</div>
				<div className="text-center">
					<Link to="transaksi" className="text-blue-500 hover:underline">
						Muat lebih banyak...
					</Link>
				</div>
				<div className="w-full max-w-md bg-gray-100 rounded-md shadow-md p-4">
					<h2 className="text-lg font-medium mb-2">Transaksi Lama</h2>
					{results}
				</div>
				<div className="text-center">
					<Link to="transaksi" className="text-blue-500 hover:underline">
						Muat lebih banyak...
					</Link>
				</div>
				<div className="w-full max-w-md bg-gray-100 rounded-md shadow-md p-4">
					<h2 className="text-lg font-medium mb-2">Transaksi Dibatalkan</h2>
					{results}
				</div>
				<div className="text-center">
					<Link to="transaksi" className="text-blue-500 hover:underline">
						Muat lebih banyak...
					</Link>
				</div>
			</div>

			<div className="min-h-full flex items-center justify-center mt-40">
				<Link to="/">
					<button
						onClick={handleClick}
						type="submit"
						className="group relative w-full flex justify-center
                py-2 px-4 border border-transparent text-sm font-medium
                rounded-md text-white bg-indigo-600 hover:bg-indigo-700
                focus:outline-none focus:ring-2 focus:ring-offset-2
                focus:ring-indigo-500">
						<span className="absolute left-0 inset-y-0 flex items-center pl-3">
							<div
								className="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
								aria-hidden="true"
							/>
						</span>
						Logout
					</button>
				</Link>
			</div>
		</>
	);
};

export default Dompetku;
