import React, { useState } from "react";
import { Routes, Route } from "react-router-dom";
import { Navigate } from "react-router";

import Header from "./component/header";

import MainPage from "./page/MainPage";
import LoginPage from "./page/LoginPage";
import KamarHotel from "./page/KamarHotel";
import TiketPesawat from "./page/TiketPesawat";
import Dompetku from "./page/Dompetku";

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
					<Route path="/tiketpesawat" element={<TiketPesawat />} />
					<Route
						path="/dompetku"
						element={
							isLoggedIn ? (
								<Dompetku handleLogout={handleLogout} />
							) : (
								<Navigate to="/" replace={true} />
							)
						}
					/>
				</Routes>
			</div>
		</div>
	);
};

export default App;
