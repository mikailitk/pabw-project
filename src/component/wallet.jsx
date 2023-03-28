const Wallet = ({ transaction }) => {

	return (
		<>
			<div
				key={transaction.id}
				className="flex justify-between items-center cursor-pointer hover:bg-gray-200 p-2 rounded-md">
				<div>
					<p className="font-medium">{transaction.type}</p>
					<p className="text-sm text-gray-600">{transaction.date}</p>
				</div>
				<p className="font-medium">
					{transaction.price.toLocaleString("id-ID", {
						style: "currency",
						currency: "IDR",
					})}
				</p>
			</div>
		</>
	);
};

export default Wallet;
