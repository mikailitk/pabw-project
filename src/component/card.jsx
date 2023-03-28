const Card = ({ data }) => {
	const star =
		"https://upload.wikimedia.org/wikipedia/commons/4/44/Plain_Yellow_Star.png";

	const stars = [];

	for (let i = 0; i < data.rating; i++) {
		stars.push(<img className="w-5 h-auto" key={i} src={star} alt="star" />);
	}

	return (
		<>
			<div className="relative w-auto h-56 rounded-2xl overflow-hidden bg-gray-300 hover:bg-gray-700">
				<img
					className="mx-auto object-contain"
					src={data.thumbnail}
					alt={`thumbnail ${data.id} of 16`}
					title={`thumbnail ${data.id} of 16`}
				/>
				<div className="absolute inset-0 flex flex-col justify-end">
					<ul className="container mx-auto text-center">
						<li className="text-sm">{data.title}</li>
						<li className="text-md">{data.location}</li>
						<li className="flex flex-row">{stars}</li>
						<li className="text-sm">{data.description}</li>
					</ul>
				</div>
			</div>
		</>
	);
};

export default Card;
