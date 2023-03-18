import SignUp from "../component/signup";

const SignUpPage = ({ handleSignUp }) => {
	return (
		<>
			<div className="mt-20">
				<SignUp handleSignUp={handleSignUp} />
			</div>
		</>
	);
};

export default SignUpPage;
