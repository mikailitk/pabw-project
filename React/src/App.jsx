import React, { useState } from "react";
import { Routes, Route } from "react-router-dom";
import { Navigate } from "react-router";

import Header from "./component/header";

import MainPage from "./page/MainPage";
import LoginPage from "./page/LoginPage";
import KamarHotel from "./page/KamarHotel";
import TiketPesawat from "./page/TiketPesawat";
import Dompetku from "./page/Dompetku";

import DetailKamarHotel from "./page/detailKamarHotel";
import DetailTiketPesawat from "./page/detailTiketPesawat";
import DetailTransaksi from "./page/detailTransaksi";

const App = () => {
	const [isLoggedIn, setIsLoggedIn] = useState(false);

	const handleLogin = () => {
		setIsLoggedIn(true);
	};

	const handleLogout = () => {
		setIsLoggedIn(false);
	};

	return (
		<div className="flex flex-col">
			<Header isLoggedIn={isLoggedIn} handleLogout={handleLogout} />
			<div className="">
				<Routes>
					<Route path="/" element={<MainPage />} />
					<Route
						path="/login"
						element={<LoginPage handleLogin={handleLogin} />}
					/>
					<Route path="/kamarhotel" element={<KamarHotel />} />
					<Route path="/kamarhotel/:id" element={<DetailKamarHotel />} />
					<Route path="/tiketpesawat" element={<TiketPesawat />} />
					<Route path="/tiketpesawat/:id" element={<DetailTiketPesawat />} />
					{isLoggedIn && (
						<>
							<Route
								path="/dompetku"
								element={<Dompetku handleLogout={handleLogout} />}
							/>
							<Route path="/dompetku/:id" element={<DetailTransaksi />} />
						</>
					)}
					<Route path="*" element={<Navigate to="/" replace={true} />} />
				</Routes>
			</div>
		</div>
	);
};

export default App;
