import { useState } from "react";

import First from "./First";
import FirstKamar from "./firstPageKamar";
import FirstTiket from "./firstPageTiket";

const MainPage = () => {
	const [activeButton, setActiveButton] = useState(null);

	const handleButtonClick = (id) => {
		setActiveButton(id);
	};
	return (
		<>
			<ul className="fixed inset-0 z-20 flex flex-col items-center justify-center gap-10">
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
			</ul>
			<div className="flex flex-row justify-between gap-4">
				<div className="flex w-1/2">
					<First />
				</div>
				<div className="flex w-1/2">
					{activeButton === "btnKamar" && <FirstKamar />}
					{activeButton === "btnTiket" && <FirstTiket />}
				</div>
			</div>
		</>
	);
};

export default MainPage;
