const Card = ({ data }) => {
	const star =
		"https://upload.wikimedia.org/wikipedia/commons/4/44/Plain_Yellow_Star.png";

	const stars = [];

	for (let i = 0; i < data.rating; i++) {
		stars.push(<img className="w-3 h-auto" key={i} src={star} alt="star" />);
	}

	return (
		<>
			<div className="flex w-auto h-56 rounded-2xl overflow-hidden bg-gray-300 hover:bg-gray-700">
				<ul className="container mx-auto">
					<img
						className="flex mx-auto"
						src={data.thumbnail}
						alt={`thumbnail ${data.id} of 16`}
					/>
					<li>{data.title}</li>
					<li>{data.location}</li>
					<li className="flex flex-row">{stars}</li>
					<li>{data.description}</li>
				</ul>
			</div>
		</>
	);
};

export default Card;
