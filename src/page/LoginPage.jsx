import Login from "../component/login";

const LoginPage = ({ handleLogin }) => {
	return (
		<>
			<div className="mt-20">
				<Login handleLogin={handleLogin} />
			</div>
		</>
	);
};

export default LoginPage;
