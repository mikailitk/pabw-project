import { useState } from "react";

//import { Link } from "react-router-dom";

const First = () => {
	const [activeButton, setActiveButton] = useState(null);

	const handleButtonClick = (id) => {
		setActiveButton(id);
	};

	return (
		<>
			<div className="-z-10 fixed flex h-screen w-1/2 bg-fixed bg-[url('https://images5.alphacoders.com/349/349822.jpg')]">
				<div className="flex flex-col mt-28 gap-4">
					<img className="flex h-40" src="../src/assets/react.svg" alt="logo" />
					<p className="mt-4 mx-20 text-white text-2xl lg:text-4xl">
						Kami hadir membantu Anda menemukan kamar hotel dan tiket pesawat
						terbaik untuk Anda!
					</p>
				</div>
			</div>

			<ul className="z-20 mt-40 flex flex-col justify-center items-center object-center gap-10">
				<li
					id="btnKamar"
					className={`btn ${activeButton === "btnKamar" ? "active" : ""}`}
					onClick={() => handleButtonClick("btnKamar")}>
					Kamar Hotel
				</li>
				<li
					id="btnTiket"
					className={`btn ${activeButton === "btnTiket" ? "active" : ""}`}
					onClick={() => handleButtonClick("btnTiket")}>
					Tiket Pesawat
				</li>
				<li
					id="btnBantuan"
					className={`btn ${activeButton === "btnBantuan" ? "active" : ""}`}
					onClick={() => handleButtonClick("btnBantuan")}>
					Bantuan
				</li>
				<li
					id="btnTentang"
					className={`btn ${activeButton === "btnTentang" ? "active" : ""}`}
					onClick={() => handleButtonClick("btnTentang")}>
					Tentang Kami
				</li>
			</ul>
		</>
	);
};

export default First;
