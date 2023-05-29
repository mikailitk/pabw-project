import { useNavigate } from "react-router-dom";
import { useState } from "react";
import { postLoginData } from "../api/api";

const Login = ({ handleLogin }) => {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");

    const navigate = useNavigate();

    const handleClick = async (e) => {
        e.preventDefault();

        try {
            // Mengirim permintaan login ke API menggunakan postLoginData()
            const response = await postLoginData({ email, password });

            // Menangani respons dari API
            // Misalnya, menyimpan token ke dalam local storage, menjalankan fungsi handleLogin, dll.

            const token = response.token; // asumsikan token diberikan dalam respons
            localStorage.setItem("accessToken", token);

            handleLogin();
            console.log(response);

            navigate("/");
        } catch (error) {
            console.error(error);
            // Menangani error, misalnya menampilkan pesan error pada halaman login
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
                        Login
                    </h2>
                </div>
                <form className="mt-8 space-y-6" action="#" method="POST">
                    <input type="hidden" name="remember" defaultValue="true" />
                    {/*Input Email*/}
                    <div className="rounded-md shadow-sm -space-y-px">
                        <div>
                            <label htmlFor="email-address" className="sr-only">
                                Email address
                            </label>
                            <input
                                id="email-address"
                                name="email"
                                type="email"
                                autoComplete="email"
                                required
                                value={email}
                                onChange={(e) => setEmail(e.target.value)}
                                className="appearance-none rounded-none relative block
            w-full px-3 py-2 border border-gray-300
            placeholder-gray-500 text-gray-900 rounded-t-md
            focus:outline-none focus:ring-indigo-500
            focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Email address"
                            />
                        </div>
                        {/* Input Password */}
                        <div>
                            <label htmlFor="password" className="sr-only">
                                Password
                            </label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                autoComplete="current-password"
                                required
                                value={password}
                                onChange={(e) => setPassword(e.target.value)}
                                className="appearance-none rounded-none relative block
            w-full px-3 py-2 border border-gray-300
            placeholder-gray-500 text-gray-900 rounded-b-md
            focus:outline-none focus:ring-indigo-500
            focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Password"
                            />
                        </div>
                    </div>

                    <div>
                        {/* Tombol Login */}
                        <button
                            onClick={handleClick}
                            type="submit"
                            className="group relative w-full flex justify-center
            py-2 px-4 border border-transparent text-sm font-medium
            rounded-md text-white bg-indigo-600 hover:bg-indigo-700
            focus:outline-none focus:ring-2 focus:ring-offset-2
            focus:ring-indigo-500"
                        >
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    );
};

export default Login;
