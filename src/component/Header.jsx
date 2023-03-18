import React from "react";

import { Link } from "react-router-dom";

const Header = ({ isLoggedIn }) => {
	return (
		<header className="z-20 fixed w-full flex items-center justify-between px-6 py-4 bg-white shadow">
			<div className="flex items-center">
				<img className="h-8 mr-4" src="../src/assets/react.svg" alt="Logo" />
				<Link to="/">
					<h1 className="text-lg font-medium text-gray-900">Website Booking</h1>
				</Link>
			</div>
			<nav className="flex items-center">
				<ul className="flex items-center">
					<li className="mx-4">
						<a className="text-gray-800 hover:text-gray-600" href="#">
							Kamar Hotel
						</a>
					</li>
					<li className="mx-4">
						<a className="text-gray-800 hover:text-gray-600" href="#">
							Tiket Pesawat
						</a>
					</li>
					<li className="mx-4">
						<a className="text-gray-800 hover:text-gray-600" href="#">
							Bantuan
						</a>
					</li>
					<li className="mx-4">
						<a className="text-gray-800 hover:text-gray-600" href="#">
							Tentang Kami
						</a>
					</li>
					{isLoggedIn ? (
						<>
							<li className="mx-4">
								<a className="text-gray-800 hover:text-gray-600" href="#">
									Akunku
								</a>
							</li>
						</>
					) : null}
				</ul>
				<div className="ml-4">
					{isLoggedIn ? null : (
						<>
							<Link to="/login">
								<button className="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">
									Login
								</button>
							</Link>
							<Link to="/singup">
								<button className="ml-4 px-4 py-2 text-blue-500 border border-blue-500 rounded-md hover:text-white hover:bg-blue-500">
									Sign up
								</button>
							</Link>
						</>
					)}
				</div>
			</nav>
		</header>
	);
};

export default Header;
