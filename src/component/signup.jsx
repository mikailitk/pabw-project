import { useState } from "react";
import { Link } from "react-router-dom";

const SignUp = ({ handleSignUp }) => {
	const [formData, setFormData] = useState({
		name: "",
		birthdate: "",
		email: "",
		password: "",
		passwordConfirmation: "",
	});

	const handleChange = (event) => {
		const { name, value } = event.target;
		setFormData((prevFormData) => ({
			...prevFormData,
			[name]: value,
		}));
	};

	const handleSubmit = (event) => {
		event.preventDefault();
		if (formData.password === formData.passwordConfirmation) {
			handleSignUp(formData);
		} else {
			alert("Passwords do not match");
		}
	};

	return (
		<div className="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
			<div className="max-w-md w-full space-y-8">
				<div>
					<img
						className="mx-auto h-12 w-auto"
						src="../src/assets/react.svg"
						alt="Workflow"
					/>
					<h2 className="mt-6 text-center text-3xl font-extrabold text-gray-900">
						Daftarkan Akun di Sini
					</h2>
				</div>
				<form className="mt-8 space-y-6" onSubmit={handleSubmit}>
					<div className="rounded-md shadow-sm -space-y-px">
						<div>
							<label htmlFor="name" className="sr-only" />
							<input
								id="name"
								name="name"
								type="text"
								autoComplete="name"
								required
								className="appearance-none rounded-none relative block
								w-full px-3 py-2 border border-gray-300
								placeholder-gray-500 text-gray-900 rounded-t-md
								focus:outline-none focus:ring-indigo-500
								focus:border-indigo-500 focus:z-10 sm:text-sm"
								placeholder="Name"
								value={formData.name}
								onChange={handleChange}
							/>
						</div>
						<div>
							<label htmlFor="birthdate" className="sr-only" />
							<input
								id="birthdate"
								name="birthdate"
								type="date"
								required
								className="appearance-none rounded-none relative block
								w-full px-3 py-2 border border-gray-300
								placeholder-gray-500 text-gray-900
								focus:outline-none focus:ring-indigo-500
								focus:border-indigo-500 focus:z-10 sm:text-sm"
								placeholder="Birthdate"
								value={formData.birthdate}
								onChange={handleChange}
							/>
						</div>
						<div>
							<label htmlFor="email" className="sr-only" />
							<input
								id="email"
								name="email"
								type="email"
								autoComplete="email"
								required
								className="appearance-none rounded-none relative block
								w-full px-3 py-2 border border-gray-300
								placeholder-gray-500 text-gray-900
								focus:outline-none focus:ring-indigo-500
								focus:border-indigo-500 focus:z-10 sm:text-sm"
								placeholder="Email"
								value={formData.email}
								onChange={handleChange}
							/>
						</div>
						<div>
							<label htmlFor="password" className="sr-only" />
							<input
								id="password"
								name="password"
								type="password"
								autoComplete="new-password"
								required
								className="appearance-none rounded-none relative block
								w-full px-3 py-2 border border-gray-300
								placeholder-gray-500 text-gray-900
								focus:outline-none focus:ring-indigo-500
								focus:border-indigo-500 focus:z-10 sm:text-sm"
								placeholder="Password"
								value={formData.password}
								onChange={handleChange}
							/>
						</div>
						<div>
							<label htmlFor="passwordConfirmation" className="sr-only" />
							<input
								id="passwordConfirmation"
								name="passwordConfirmation"
								type="password"
								autoComplete="new-password"
								required
								className="appearance-none rounded-none relative block
								w-full px-3 py-2 border border-gray-300
								placeholder-gray-500 text-gray-900 rounded-b-md
								focus:outline-none focus:ring-indigo-500
								focus:border-indigo-500 focus:z-10 sm:text-sm"
								placeholder="Password Confirmation"
								value={formData.passwordConfirmation}
								onChange={handleChange}
							/>
						</div>
					</div>

					<div>
						<button
							type="submit"
							className="group relative w-full flex justify-center
              py-2 px-4 border border-transparent text-sm font-medium
              rounded-md text-white bg-indigo-600 hover:bg-indigo-700
              focus:outline-none focus:ring-2 focus:ring-offset-2
              focus:ring-indigo-500">
							Daftar
						</button>
					</div>

					<div className="text-sm">
						Sudah punya akun?{" "}
						<Link
							to="/login"
							className="font-medium text-indigo-600 hover:text-indigo-500">
							Login
						</Link>
					</div>
				</form>
			</div>
		</div>
	);
};

export default SignUp;
