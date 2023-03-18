import React, { useState } from "react";

import { Link } from "react-router-dom";

const Header = ({ isLoggedIn }) => {
	const [activeButton, setActiveButton] = useState(null);

	const handleButtonClick = (id) => {
		setActiveButton(id);
	};

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
					<li className="mx-4">
						<a
							id="btonKamar"
							className={`bton ${activeButton === "btonKamar" ? "active" : ""}`}
							onClick={() => handleButtonClick("btonKamar")}
							href="#">
							Kamar Hotel
						</a>
					</li>
					<li className="mx-4">
						<a
							id="btonTiket"
							className={`bton ${activeButton === "btonTiket" ? "active" : ""}`}
							onClick={() => handleButtonClick("btonTiket")}
							href="#">
							Tiket Pesawat
						</a>
					</li>
				</ul>
				<div className="ml-4">
					{isLoggedIn ? (
						<>
							<div>
								<button
									className="px-4 py-2 text-white bg-blue-500 border border-blue-500 rounded-md hover:bg-blue-600"
									href="#">
									Dompetku
								</button>
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
