import React, { useState } from "react";
import { Routes, Route } from "react-router-dom";

import First from "./page/First";
import LoginPage from "./page/LoginPage";

import Header from "./component/Header";

const App = () => {
	const [isLoggedIn, setIsLoggedIn] = useState(false);

	const handleLogin = () => {
		setIsLoggedIn(true);
	};

	return (
		<div className="flex flex-col">
			<Header isLoggedIn={isLoggedIn} />
			<div className="">
				<Routes>
					<Route path="/" element={<First />} />
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
