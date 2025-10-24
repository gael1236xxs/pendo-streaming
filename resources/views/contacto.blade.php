@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    <h1 style="text-align: center; color: #6366f1;">Contáctanos</h1>
    <div class="contact-info">
        <p style="text-align: center;">¿Te interesa alguno de nuestros servicios?</p>
        <p style="text-align: center;">Escríbenos por WhatsApp o Facebook:</p>
        <div style="text-align: center; margin: 20px 0;">
            <a href="https://wa.me/529602201806" class="contact-button whatsapp" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp
            </a>
            <a href="https://www.facebook.com/share/15oK9fDHGt/" class="contact-button facebook" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook" style="margin-right: 8px;"></i> Facebook
            </a>
        </div>
    </div>
    <style>
        .contact-button {
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin: 10px;
            font-size: 16px;
        }
        .contact-button.whatsapp {
            background-color: #25d366;
        }
        .contact-button.facebook {
            background-color: #1877f2;
        }
        .contact-button:hover {
            opacity: 0.9;
        }
        .contact-button i {
            font-size: 20px;
        }
        @media (min-width: 768px) {
            .contact-button {
                font-size: 18px;
                padding: 12px 25px;
            }
        }
    </style>
@endsection
