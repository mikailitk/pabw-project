//import { Link } from "react-router-dom";

const First = () => {
	return (
		<>
			<div className="flex h-screen bg-fixed bg-[url('https://images5.alphacoders.com/349/349822.jpg')]">
				<div className="flex flex-col items-center justify-center min-h-screen gap-4">
					<img
						className="z-30 flex h-40"
						src="../src/assets/react.svg"
						alt="logo"
					/>
					<p className="z-30 mt-4 mx-20 text-white text-2xl lg:text-4xl">
						Kami hadir membantu menemukan{" "}
						<b>
							<u>kamar hotel</u>
						</b>{" "}
						dan{" "}
						<b>
							<u>tiket pesawat</u>
						</b>{" "}
						terbaik untuk Anda!
					</p>
				</div>
			</div>
		</>
	);
};

export default First;
