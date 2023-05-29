import React, { useState, useEffect } from "react";
import { Routes, Route } from "react-router-dom";
import { Navigate } from "react-router";

import Header from "./component/header";

import MainPage from "./page/MainPage";
import LoginPage from "./page/LoginPage";
import KamarHotel from "./page/KamarHotel";
import TiketPesawat from "./page/TiketPesawat";
import Dompetku from "./page/Dompetku";

import DetailKamarHotel from "./page/detailKamarHotel";
import DetailTiketPesawat from "./page/detailTiketPesawat";
import DetailTransaksi from "./page/detailTransaksi";

const App = () => {
    const [isLoggedIn, setIsLoggedIn] = useState(false);

    const handleLogin = (token) => {
        setIsLoggedIn(true);
        localStorage.setItem("accessToken", token); // Simpan token ke localStorage
    };

    const handleLogout = () => {
        setIsLoggedIn(false);
        localStorage.removeItem("accessToken"); // Hapus token dari localStorage saat logout
    };

    useEffect(() => {
        // Cek status login saat komponen App dimounting
        const token = localStorage.getItem("accessToken");
        if (token) {
            setIsLoggedIn(true);
        }
    }, []);

    return (
        <div className="flex flex-col">
            <Header isLoggedIn={isLoggedIn} handleLogout={handleLogout} />
            <div className="">
                <Routes>
                    <Route path="/" element={<MainPage />} />
                    <Route
                        path="/login"
                        element={<LoginPage handleLogin={handleLogin} />}
                    />
                    <Route path="/kamarhotel" element={<KamarHotel />} />
                    <Route
                        path="/kamarhotel/:id"
                        element={<DetailKamarHotel />}
                    />
                    <Route path="/tiketpesawat" element={<TiketPesawat />} />
                    <Route
                        path="/tiketpesawat/:id"
                        element={<DetailTiketPesawat />}
                    />
                    {isLoggedIn && (
                        <>
                            <Route
                                path="/dompetku"
                                element={
                                    <Dompetku handleLogout={handleLogout} />
                                }
                            />
                            <Route
                                path="/dompetku/:id"
                                element={<DetailTransaksi />}
                            />
                        </>
                    )}
                    <Route
                        path="*"
                        element={
                            isLoggedIn ? null : (
                                <Navigate to="/login" replace={true} />
                            )
                        } // Redirect ke halaman login jika tidak login
                    />
                </Routes>
            </div>
        </div>
    );
};

export default App;
