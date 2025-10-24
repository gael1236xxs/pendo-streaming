@extends('layouts.app')

@section('title', 'Streaming')

@section('content')
    <h1 style="text-align: center; color: #6366f1;">Servicios de Streaming</h1>
    <div class="services">
        <div class="service-card">
            <h3>Netflix</h3>
            <p class="price">90 pesos mensuales</p>
            <div style="display: flex; gap: 10px; justify-content: center;">
                <a href="https://wa.me/529602201806" class="contact-button whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.facebook.com/share/15oK9fDHGt/" class="contact-button facebook" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </div>
        <div class="service-card">
            <h3>Crunchyroll</h3>
            <p class="price">45 pesos mensuales</p>
            <div style="display: flex; gap: 10px; justify-content: center;">
                <a href="https://wa.me/529602201806" class="contact-button whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.facebook.com/share/15oK9fDHGt/" class="contact-button facebook" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </div>
        <div class="service-card">
            <h3>Paramount+</h3>
            <p class="price">60 pesos mensuales</p>
            <div style="display: flex; gap: 10px; justify-content: center;">
                <a href="https://wa.me/529602201806" class="contact-button whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.facebook.com/share/15oK9fDHGt/" class="contact-button facebook" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </div>
        <div class="service-card">
            <h3>Disney+</h3>
            <p class="price">50 a 150 pesos mensuales</p>
            <div style="display: flex; gap: 10px; justify-content: center;">
                <a href="https://wa.me/529602201806" class="contact-button whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.facebook.com/share/15oK9fDHGt/" class="contact-button facebook" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </div>
        <div class="service-card">
            <h3>Universal+</h3>
            <p class="price">60 pesos mensuales</p>
            <div style="display: flex; gap: 10px; justify-content: center;">
                <a href="https://wa.me/529602201806" class="contact-button whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.facebook.com/share/15oK9fDHGt/" class="contact-button facebook" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </div>
    </div>
    <style>
        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            padding: 15px;
        }
        .service-card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            max-width: 200px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .service-card h3 {
            color: #6366f1;
            margin: 10px 0;
            font-size: 16px;
        }
        .price {
            color: #7c3aed;
            font-weight: bold;
            margin: 5px 0;
            font-size: 14px;
        }
        .contact-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            text-decoration: none;
        }
        .contact-button.whatsapp {
            background-color: #25d366;
        }
        .contact-button.facebook {
            background-color: #1877f2;
        }
        @media (min-width: 768px) {
            .service-card {
                max-width: 220px;
            }
            .service-card h3 {
                font-size: 18px;
            }
            .price {
                font-size: 16px;
            }
        }
    </style>
@endsection
