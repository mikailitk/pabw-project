import React, { useState } from "react";
import { Routes, Route } from "react-router-dom";

import Header from "./component/header";

import MainPage from "./page/MainPage";
import LoginPage from "./page/LoginPage";

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
				</Routes>
			</div>
		</div>
	);
};

export default App;
