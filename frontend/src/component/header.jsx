import React, { useState, useEffect } from "react";

import { Link, useLocation } from "react-router-dom";

const Header = ({ isLoggedIn }) => {
	const location = useLocation();
	const [activeButton, setActiveButton] = useState(null);

	const handleButtonClick = (id) => {
		setActiveButton(id);
	};

	const handleOtherButtonClick = () => {
		setActiveButton(null);
	};

	useEffect(() => {
		// Update active button state based on current URL path
		switch (location.pathname) {
			case "/kamarhotel":
				setActiveButton("btonKamar");
				break;
			case "/tiketpesawat":
				setActiveButton("btonTiket");
				break;
			// Add other cases for other paths/buttons here
			default:
				setActiveButton(null);
				break;
		}
	}, [location.pathname]);

	return (
		<header className="z-50 fixed w-full flex items-center justify-between px-6 py-4 bg-white shadow">
			<Link to="/">
				<div className="flex items-center">
					<img className="h-8 mr-4" src="../src/assets/react.svg" alt="Logo" />
					<h1 className="text-lg font-medium text-gray-900">Website Booking</h1>
				</div>
			</Link>
			<nav className="flex items-center">
				<ul className="flex items-center">
					<Link to="/kamarhotel">
						<li className="mx-4">
							<div
								id="btonKamar"
								className={`bton ${
									activeButton === "btonKamar" ? "active" : ""
								}`}
								onClick={() => handleButtonClick("btonKamar")}
								href="#">
								Kamar Hotel
							</div>
						</li>
					</Link>
					<Link to="/tiketpesawat">
						<li className="mx-4">
							<div
								id="btonTiket"
								className={`bton ${
									activeButton === "btonTiket" ? "active" : ""
								}`}
								onClick={() => handleButtonClick("btonTiket")}
								href="#">
								Tiket Pesawat
							</div>
						</li>
					</Link>
				</ul>
				<div className="ml-4">
					{isLoggedIn ? (
						<>
							<div>
								<Link to="/dompetku">
									<button
										onClick={() => {
											handleOtherButtonClick();
										}}
										className="px-4 py-2 text-white bg-blue-500 border border-blue-500 rounded-md hover:bg-blue-600"
										href="#">
										Dompetku
									</button>
								</Link>
							</div>
						</>
					) : null}
					{isLoggedIn ? null : (
						<>
							<div className="flex gap-4">
								<Link to="/login">
									<button className="px-4 py-2 text-white bg-blue-500 border border-blue-500 rounded-md hover:bg-blue-600">
										Login
									</button>
								</Link>
							</div>
						</>
					)}
				</div>
			</nav>
		</header>
	);
};

export default Header;
