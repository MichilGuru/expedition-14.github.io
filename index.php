<?php
// index.php - ПОЛНОСТЬЮ АДАПТИВНАЯ ВЕРСИЯ ДЛЯ ВСЕХ УСТРОЙСТВ
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="format-detection" content="telephone=no">
    <title>Прокат турснаряжения | Экспедиция-14 | Якутск</title>
    
    <!-- SEO метатеги -->
    <meta name="description" content="Прокат туристического снаряжения в Якутске. Палатки, спальники, рюкзаки, горелки. Более 500 единиц снаряжения. Доставка по Якутску.">
    <meta name="keywords" content="прокат снаряжения Якутск, аренда палатки, туристическое снаряжение, Ленские столбы">
    <meta name="author" content="Экспедиция-14">
    
    <!-- Практичные шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* ===== ПРАКТИЧНАЯ ДИЗАЙН-СИСТЕМА ===== */
        :root {
            --deep-forest: #1a3b2f;
            --rugged-brown: #5d4a36;
            --granite-gray: #4a4a4a;
            --camp-orange: #e67e22;
            --trail-sand: #d9c8a9;
            --storm-cloud: #7f8c8d;
            --snow-white: #ecf0f1;
            --charcoal: #2c3e50;
            --gradient-forest: linear-gradient(135deg, #1a3b2f, #0f2a21);
            --gradient-camping: linear-gradient(135deg, #e67e22, #d35400);
            --shadow-hard: 0 5px 15px rgba(0, 0, 0, 0.2);
            --shadow-structural: 0 10px 25px rgba(0, 0, 0, 0.15);
            --shadow-deep: 0 15px 30px rgba(0, 0, 0, 0.3);
            --radius-hard: 4px;
            --radius-functional: 8px;
            --radius-gear: 12px;
            --transition-functional: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--charcoal);
            background-color: var(--snow-white);
            line-height: 1.5;
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 15px;
        }

        section {
            padding: 60px 0;
            position: relative;
        }

        @media (max-width: 768px) {
            section {
                padding: 50px 0;
            }
        }

        @media (max-width: 576px) {
            section {
                padding: 40px 0;
            }
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: 700;
            line-height: 1.2;
            text-transform: uppercase;
            letter-spacing: -0.5px;
        }

        h1 {
            font-size: clamp(1.8rem, 8vw, 4rem);
            font-weight: 800;
            color: var(--snow-white);
            text-shadow: 3px 3px 0 rgba(0, 0, 0, 0.5);
            margin-bottom: 15px;
        }

        h1 span {
            color: var(--camp-orange);
            display: block;
            font-size: 0.6em;
            letter-spacing: 2px;
            margin-top: 5px;
        }

        h2 {
            font-size: clamp(1.5rem, 5vw, 2.8rem);
            color: var(--deep-forest);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
            border-left: 6px solid var(--camp-orange);
            padding-left: 15px;
        }

        @media (max-width: 576px) {
            h2 {
                padding-left: 12px;
            }
        }

        h2.text-center {
            border-left: none;
            padding-left: 0;
        }

        h2.text-center::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--camp-orange);
        }

        h3 {
            font-size: clamp(1.2rem, 4vw, 1.6rem);
            color: var(--deep-forest);
            margin-bottom: 12px;
        }

        p {
            font-weight: 400;
            font-size: clamp(0.85rem, 3vw, 1rem);
            color: var(--granite-gray);
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .badge {
            display: inline-block;
            padding: 5px 12px;
            background: var(--camp-orange);
            color: white;
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            border-radius: var(--radius-hard);
            letter-spacing: 0.5px;
        }

        .section-subtitle {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--camp-orange);
            margin-bottom: 8px;
            display: block;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: var(--camp-orange);
            color: white;
            text-decoration: none;
            border-radius: var(--radius-functional);
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 1px;
            border: none;
            cursor: pointer;
            transition: var(--transition-functional);
            text-transform: uppercase;
            box-shadow: var(--shadow-hard);
            border: 2px solid transparent;
            text-align: center;
        }

        @media (max-width: 576px) {
            .btn {
                padding: 10px 20px;
                font-size: 0.8rem;
            }
        }

        .btn:hover {
            background: #d35400;
            transform: translateY(-3px);
            box-shadow: var(--shadow-structural);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--camp-orange);
            color: var(--camp-orange);
            box-shadow: none;
        }

        .btn-outline:hover {
            background: var(--camp-orange);
            color: white;
            transform: translateY(-3px);
        }

        .btn-dark {
            background: var(--deep-forest);
            color: white;
        }

        .btn-dark:hover {
            background: #0f2a21;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: var(--deep-forest);
            border-bottom: 3px solid var(--camp-orange);
            transition: var(--transition-functional);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
        }

        .logo {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: clamp(1.2rem, 5vw, 1.8rem);
            font-weight: 800;
            color: var(--snow-white);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            text-transform: uppercase;
            cursor: pointer;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: var(--camp-orange);
            border-radius: var(--radius-hard);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.3rem;
        }

        @media (max-width: 576px) {
            .logo-icon {
                width: 35px;
                height: 35px;
                font-size: 1.1rem;
            }
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--snow-white);
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition-functional);
            padding: 5px 0;
            border-bottom: 2px solid transparent;
            cursor: pointer;
            white-space: nowrap;
        }

        @media (max-width: 768px) {
            .nav-links a {
                font-size: 0.7rem;
                white-space: normal;
            }
        }

        .nav-links a:hover {
            border-bottom-color: var(--camp-orange);
            color: var(--camp-orange);
        }

        .auth-buttons {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        @media (max-width: 576px) {
            .auth-buttons {
                gap: 10px;
            }
        }

        .cart-icon {
            position: relative;
            cursor: pointer;
            font-size: 1.2rem;
            color: var(--snow-white);
            transition: var(--transition-functional);
        }

        .cart-icon:hover {
            color: var(--camp-orange);
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--camp-orange);
            color: white;
            font-size: 0.6rem;
            font-weight: 600;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-welcome {
            color: var(--snow-white);
            background: rgba(255, 255, 255, 0.1);
            padding: 6px 12px;
            border-radius: var(--radius-functional);
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* НОВЫЙ ФОН - ЛЕНСКИЕ СТОЛБЫ (ЯКУТИЯ) с оптимизацией для мобильных */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(26, 59, 47, 0.75), rgba(15, 42, 33, 0.85)),
                        url("https://cdn.pixabay.com/photo/2020/06/14/13/40/lena-pillars-5298465_1280.jpg") center/cover fixed;
            display: flex;
            align-items: center;
            position: relative;
            margin-top: 64px;
        }

        @media (max-width: 768px) {
            .hero {
                background-attachment: scroll;
                margin-top: 60px;
            }
        }

        .hero-content {
            max-width: 800px;
            color: white;
            padding: 20px 0;
        }

        .hero p {
            font-size: clamp(1rem, 4vw, 1.2rem);
            margin-bottom: 25px;
            color: rgba(255, 255, 255, 0.95);
            max-width: 600px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        .hero-badge {
            display: inline-block;
            padding: 6px 12px;
            background: var(--camp-orange);
            border-radius: var(--radius-hard);
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 2px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .hero-stats {
            display: flex;
            gap: 20px;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        .hero-stat {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(8px);
            padding: 12px 20px;
            border-radius: var(--radius-functional);
            border-left: 4px solid var(--camp-orange);
            flex: 1;
            min-width: 110px;
        }

        @media (max-width: 576px) {
            .hero-stats {
                gap: 12px;
            }
            .hero-stat {
                padding: 10px 15px;
                min-width: 100px;
            }
        }

        .hero-stat-number {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: clamp(1.3rem, 6vw, 2.2rem);
            font-weight: 800;
            color: var(--camp-orange);
            line-height: 1;
        }

        .hero-stat-label {
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: rgba(255, 255, 255, 0.8);
        }

        .features {
            background: var(--snow-white);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .features-grid {
                gap: 20px;
            }
        }

        .feature-card {
            background: white;
            padding: 30px 25px;
            border-radius: var(--radius-gear);
            transition: var(--transition-functional);
            box-shadow: var(--shadow-hard);
            border: 1px solid #ddd;
            position: relative;
            overflow: hidden;
        }

        @media (max-width: 576px) {
            .feature-card {
                padding: 25px 20px;
            }
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--gradient-camping);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-structural);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: var(--deep-forest);
            border-radius: var(--radius-hard);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--camp-orange);
            margin-bottom: 20px;
        }

        @media (max-width: 576px) {
            .feature-icon {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
                margin-bottom: 15px;
            }
        }

        .catalog {
            background: #f5f5f5;
        }

        .catalog-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
            background: white;
            padding: 20px;
            border-radius: var(--radius-functional);
            box-shadow: var(--shadow-hard);
        }

        @media (max-width: 768px) {
            .catalog-header {
                flex-direction: column;
                align-items: stretch;
            }
        }

        .catalog-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .filter-btn {
            padding: 8px 16px;
            background: transparent;
            border: 2px solid #ddd;
            border-radius: var(--radius-hard);
            color: var(--granite-gray);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition-functional);
            font-size: 0.75rem;
            text-transform: uppercase;
        }

        @media (max-width: 576px) {
            .filter-btn {
                padding: 6px 12px;
                font-size: 0.7rem;
            }
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--camp-orange);
            border-color: var(--camp-orange);
            color: white;
        }

        .search-wrapper {
            position: relative;
            min-width: 250px;
        }

        @media (max-width: 768px) {
            .search-wrapper {
                width: 100%;
            }
        }

        .search-wrapper i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--granite-gray);
        }

        .search-wrapper input {
            width: 100%;
            padding: 10px 15px 10px 45px;
            border: 2px solid #ddd;
            border-radius: var(--radius-hard);
            font-size: 0.9rem;
            transition: var(--transition-functional);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }

        @media (max-width: 576px) {
            .products-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        .product-card {
            background: white;
            border-radius: var(--radius-gear);
            overflow: hidden;
            box-shadow: var(--shadow-hard);
            transition: var(--transition-functional);
            border: 1px solid #ddd;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-structural);
        }

        .product-image {
            height: 220px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        @media (max-width: 576px) {
            .product-image {
                height: 200px;
            }
        }

        .product-category {
            position: absolute;
            top: 12px;
            left: 12px;
            background: var(--deep-forest);
            color: white;
            padding: 4px 12px;
            border-radius: var(--radius-hard);
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .product-info {
            padding: 20px;
        }

        .product-info h3 {
            font-size: clamp(1.1rem, 4vw, 1.4rem);
            margin-bottom: 8px;
        }

        .product-description {
            font-size: 0.85rem;
            color: var(--granite-gray);
            margin-bottom: 12px;
        }

        .product-price {
            font-size: clamp(1.3rem, 5vw, 1.8rem);
            font-weight: 800;
            color: var(--camp-orange);
            margin-bottom: 15px;
            display: flex;
            align-items: baseline;
            gap: 5px;
        }

        .product-price small {
            font-size: 0.8rem;
            font-weight: 400;
            color: var(--granite-gray);
        }

        .product-card .btn {
            width: 100%;
            padding: 10px;
            font-size: 0.8rem;
        }

        .how-it-works {
            background: var(--gradient-forest);
            color: white;
        }

        .how-it-works h2 {
            color: white;
        }

        .how-it-works h2::after {
            background: var(--camp-orange);
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        @media (max-width: 576px) {
            .steps {
                gap: 20px;
            }
        }

        .step {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            padding: 30px 25px;
            border-radius: var(--radius-gear);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: var(--transition-functional);
            position: relative;
        }

        @media (max-width: 576px) {
            .step {
                padding: 25px 20px;
            }
        }

        .step:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }

        .step-number {
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 3rem;
            font-weight: 800;
            color: var(--camp-orange);
            margin-bottom: 12px;
            line-height: 1;
            opacity: 0.5;
        }

        .step h3 {
            color: white;
            margin-bottom: 12px;
            font-size: clamp(1.2rem, 4vw, 1.5rem);
        }

        .step p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }

        .reviews {
            background: var(--snow-white);
        }

        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }

        @media (max-width: 576px) {
            .reviews-grid {
                grid-template-columns: 1fr;
            }
        }

        .review-card {
            background: white;
            border-radius: var(--radius-gear);
            padding: 25px;
            box-shadow: var(--shadow-hard);
            border: 1px solid #ddd;
        }

        .review-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .review-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            border: 3px solid var(--camp-orange);
        }

        .review-info h4 {
            font-size: 1.1rem;
            color: var(--deep-forest);
            margin-bottom: 5px;
        }

        .review-stars {
            color: var(--camp-orange);
            font-size: 0.8rem;
        }

        .review-text {
            font-size: 0.9rem;
            font-style: italic;
            color: var(--granite-gray);
        }

        .contact {
            background: #f5f5f5;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            background: white;
            border-radius: var(--radius-gear);
            padding: 40px;
            box-shadow: var(--shadow-structural);
            margin-top: 40px;
        }

        @media (max-width: 992px) {
            .contact-container {
                grid-template-columns: 1fr;
                padding: 30px;
                gap: 30px;
            }
        }

        .contact-info h3 {
            font-size: clamp(1.5rem, 5vw, 2rem);
            margin-bottom: 20px;
        }

        .contact-detail {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
            padding: 12px;
            background: #f8f8f8;
            border-radius: var(--radius-functional);
            border-left: 4px solid var(--camp-orange);
        }

        .contact-detail i {
            width: 40px;
            height: 40px;
            background: var(--deep-forest);
            border-radius: var(--radius-hard);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--camp-orange);
            font-size: 1rem;
        }

        .contact-detail h4 {
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .contact-detail p {
            font-size: 0.85rem;
        }

        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 25px;
            flex-wrap: wrap;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: var(--deep-forest);
            border-radius: var(--radius-hard);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.1rem;
            transition: var(--transition-functional);
            text-decoration: none;
        }

        .contact-form {
            background: #f8f8f8;
            padding: 30px;
            border-radius: var(--radius-gear);
        }

        @media (max-width: 576px) {
            .contact-form {
                padding: 25px;
            }
        }

        .contact-form h3 {
            font-size: clamp(1.3rem, 5vw, 1.8rem);
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: var(--radius-functional);
            font-size: 0.9rem;
            transition: var(--transition-functional);
            font-family: 'Montserrat', sans-serif;
        }

        footer {
            background: var(--deep-forest);
            color: white;
            padding: 50px 0 25px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        @media (max-width: 576px) {
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 25px;
                text-align: center;
            }
        }

        .footer-column h3 {
            color: var(--camp-orange);
            font-size: 1.1rem;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .footer-column p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.85rem;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition-functional);
            font-size: 0.85rem;
            cursor: pointer;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 25px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.75rem;
        }

        /* Модальные окна - адаптация */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 2000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal-content {
            background: white;
            border-radius: var(--radius-gear);
            width: 100%;
            max-width: 450px;
            padding: 35px 25px;
            position: relative;
            box-shadow: var(--shadow-deep);
        }

        @media (max-width: 576px) {
            .modal-content {
                padding: 30px 20px;
            }
        }

        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 30px;
            height: 30px;
            background: #f0f0f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition-functional);
            font-size: 1rem;
        }

        .modal h2 {
            font-size: clamp(1.5rem, 5vw, 2rem);
            margin-bottom: 20px;
        }

        /* Корзина - адаптация */
        .cart-page {
            min-height: 100vh;
            padding: 100px 0 50px;
            background: var(--snow-white);
        }

        .cart-container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: var(--radius-gear);
            padding: 30px;
            box-shadow: var(--shadow-structural);
        }

        @media (max-width: 576px) {
            .cart-container {
                padding: 20px;
            }
        }

        .cart-item {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px 0;
            border-bottom: 1px solid #ddd;
            flex-wrap: wrap;
        }

        .cart-item-image {
            width: 80px;
            height: 80px;
            border-radius: var(--radius-functional);
            background-size: cover;
            background-position: center;
            box-shadow: var(--shadow-hard);
        }

        @media (max-width: 576px) {
            .cart-item-image {
                width: 70px;
                height: 70px;
            }
        }

        .cart-summary {
            background: #f8f8f8;
            padding: 25px;
            border-radius: var(--radius-functional);
            margin: 25px 0;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 1rem;
            flex-wrap: wrap;
        }

        .summary-total {
            font-size: clamp(1.2rem, 5vw, 1.6rem);
            font-weight: 700;
            color: var(--camp-orange);
            border-top: 2px solid #ddd;
            padding-top: 15px;
            margin-top: 15px;
        }

        /* Мобильное меню */
        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: white;
        }

        @media (max-width: 992px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--deep-forest);
                flex-direction: column;
                padding: 20px;
                border-top: 2px solid var(--camp-orange);
            }
            
            .nav-menu.active {
                display: flex;
            }
            
            .nav-links {
                flex-direction: column;
                align-items: center;
                gap: 15px;
                margin-bottom: 20px;
            }
            
            .auth-buttons {
                justify-content: center;
            }
            
            .mobile-menu {
                display: block;
            }
        }

        .text-center {
            text-align: center;
        }
        
        .text-orange {
            color: var(--camp-orange);
        }
        
        .mt-4 {
            margin-top: 30px;
        }
        
        .mb-4 {
            margin-bottom: 30px;
        }

        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideOut {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }
    </style>
</head>
<body>
    <!-- Шапка -->
    <header>
        <div class="container header-container">
            <div class="logo" id="homeLink">
                <span class="logo-icon"><i class="fas fa-tree"></i></span>
                <span>Экспедиция-14</span>
            </div>
            
            <div class="nav-menu" id="navMenu">
                <ul class="nav-links">
                    <li><a id="navCatalog">Снаряжение</a></li>
                    <li><a id="navHowItWorks">Как работает</a></li>
                    <li><a id="navReviews">Отзывы</a></li>
                    <li><a id="navContact">Контакты</a></li>
                </ul>
                
                <div class="auth-buttons" id="authButtons">
                    <!-- Динамически заполняется JS -->
                </div>
            </div>
            
            <div class="mobile-menu" id="mobileMenu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Основной контент -->
    <div id="mainPage">
        <!-- Геройский блок с Ленскими столбами -->
        <section class="hero" id="heroSection">
            <div class="container hero-content">
                <span class="hero-badge">Прокат снаряжения в Якутске</span>
                <h1>
                    Снаряжение для<br>настоящих походов<span>Экспедиция-14</span>
                </h1>
                <p>Более 500 единиц профессионального снаряжения. Палатки, спальники, рюкзаки, горелки и всё необходимое для вашего приключения по просторам Якутии.</p>
                <div class="hero-buttons">
                    <a class="btn" id="heroCatalogBtn">Смотреть каталог</a>
                    <a class="btn-outline btn" id="heroHowItWorksBtn">Как это работает</a>
                </div>
                
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-number">500+</div>
                        <div class="hero-stat-label">единиц снаряжения</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-number">2000+</div>
                        <div class="hero-stat-label">довольных туристов</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-number">7 лет</div>
                        <div class="hero-stat-label">опыта работы</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Особенности -->
        <section class="features">
            <div class="container">
                <div class="section-header">
                    <span class="section-subtitle">Почему выбирают нас</span>
                    <h2>Надёжное снаряжение для любых маршрутов</h2>
                </div>
                
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Проверенное качество</h3>
                        <p>Всё снаряжение проходит тщательную проверку перед каждой выдачей. Только сертифицированное оборудование от ведущих брендов.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h3>Чистота и гигиена</h3>
                        <p>Профессиональная обработка и чистка после каждого использования. Спальники, палатки и одежда всегда в идеальном состоянии.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3>Гибкие условия</h3>
                        <p>Посуточная аренда, скидки на длительный срок, доставка по городу. Работаем 7 дней в неделю с 9:00 до 21:00.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Консультации</h3>
                        <p>Поможем подобрать комплект под ваш маршрут и уровень подготовки. Расскажем про особенности использования.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Каталог -->
        <section class="catalog" id="catalogSection">
            <div class="container">
                <div class="section-header">
                    <span class="section-subtitle">Каталог</span>
                    <h2>Снаряжение в аренду</h2>
                </div>
                
                <div class="catalog-header">
                    <div class="catalog-filters" id="filtersContainer">
                        <!-- Фильтры через JS -->
                    </div>
                    
                    <div class="search-wrapper">
                        <i class="fas fa-search"></i>
                        <input type="text" id="searchInput" placeholder="Поиск по каталогу...">
                    </div>
                </div>
                
                <div class="products-grid" id="productsGrid">
                    <!-- Товары будут вставлены через JS -->
                </div>
            </div>
        </section>

        <!-- Как это работает -->
        <section class="how-it-works" id="howItWorksSection">
            <div class="container">
                <div class="section-header">
                    <span class="section-subtitle">Простой процесс</span>
                    <h2>Как арендовать снаряжение</h2>
                </div>
                
                <div class="steps">
                    <div class="step">
                        <div class="step-number">01</div>
                        <h3>Выберите</h3>
                        <p>Найдите нужное снаряжение в каталоге, выберите даты аренды и добавьте в корзину</p>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">02</div>
                        <h3>Оформите</h3>
                        <p>Заполните контактные данные, подтвердите заказ и выберите способ получения</p>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">03</div>
                        <h3>Заберите</h3>
                        <p>Приезжайте к нам в пункт выдачи или закажите доставку. Оплата при получении</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Отзывы -->
        <section class="reviews" id="reviewsSection">
            <div class="container">
                <div class="section-header">
                    <span class="section-subtitle">Отзывы</span>
                    <h2>Что говорят наши клиенты</h2>
                </div>
                
                <div class="reviews-grid" id="reviewsContainer">
                    <!-- Отзывы будут вставлены через JS -->
                </div>
                
                <div class="text-center mt-4" id="addReviewBtnContainer" style="display: none;">
                    <button class="btn" id="addReviewBtn">Оставить отзыв</button>
                </div>
            </div>
        </section>

        <!-- Контакты -->
        <section class="contact" id="contactSection">
            <div class="container">
                <div class="section-header">
                    <span class="section-subtitle">Контакты</span>
                    <h2>Как нас найти</h2>
                </div>
                
                <div class="contact-container">
                    <div class="contact-info">
                        <h3>Экспедиция-14</h3>
                        <p>Пункт проката туристического снаряжения в Якутске. Работаем с 2018 года.</p>
                        
                        <div class="contact-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Адрес</h4>
                                <p>г. Якутск, ул. Строителей 8а</p>
                            </div>
                        </div>
                        
                        <div class="contact-detail">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h4>Телефон</h4>
                                <p>+7 (914) 105-77-51</p>
                            </div>
                        </div>
                        
                        <div class="contact-detail">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Email</h4>
                                <p>expedition14@yandex.ru</p>
                            </div>
                        </div>
                        
                        <div class="contact-detail">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>Режим работы</h4>
                                <p>Ежедневно: 9:00 - 21:00</p>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="#"><i class="fab fa-telegram"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-vk"></i></a>
                        </div>
                    </div>
                    
                    <div class="contact-form">
                        <h3>Есть вопросы?</h3>
                        <form id="contactForm">
                            <div class="form-group">
                                <input type="text" id="contactName" placeholder="Ваше имя" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" id="contactPhone" placeholder="Телефон" required>
                            </div>
                            <div class="form-group">
                                <textarea id="contactMessage" rows="4" placeholder="Ваш вопрос..." required></textarea>
                            </div>
                            <button type="submit" class="btn" style="width: 100%;">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Корзина -->
    <div class="cart-page" id="cartPage" style="display: none;">
        <div class="container">
            <div class="cart-container">
                <h2>Корзина</h2>
                
                <div class="cart-items" id="cartItems">
                    <!-- Товары в корзине -->
                </div>
                
                <div class="cart-summary">
                    <div class="summary-row">
                        <span>Стоимость аренды:</span>
                        <span id="subtotal">0 ₽</span>
                    </div>
                    <div class="summary-row">
                        <span>Доставка:</span>
                        <span id="shipping">300 ₽</span>
                    </div>
                    <div class="summary-row summary-total">
                        <span>Итого:</span>
                        <span id="total">0 ₽</span>
                    </div>
                </div>
                
                <div style="display: flex; gap: 15px; justify-content: flex-end; flex-wrap: wrap;">
                    <button class="btn-outline btn" id="backToCatalogBtn">Продолжить выбор</button>
                    <button class="btn" id="checkoutBtn">Оформить заказ</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Подвал -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>Экспедиция-14</h3>
                    <p>Прокат туристического снаряжения в Якутске. Качественное оборудование для походов по Ленским столбам, горам и бескрайней тайге.</p>
                </div>
                
                <div class="footer-column">
                    <h3>Каталог</h3>
                    <ul>
                        <li><a class="footerCatalogLink">Палатки</a></li>
                        <li><a class="footerCatalogLink">Спальники</a></li>
                        <li><a class="footerCatalogLink">Рюкзаки</a></li>
                        <li><a class="footerCatalogLink">Горелки</a></li>
                        <li><a class="footerCatalogLink">Аксессуары</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Информация</h3>
                    <ul>
                        <li><a>О нас</a></li>
                        <li><a>Доставка и оплата</a></li>
                        <li><a>Условия аренды</a></li>
                        <li><a>Частые вопросы</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Контакты</h3>
                    <ul>
                        <li>Якутск, ул. Строителей 8а</li>
                        <li>+7 (914) 105-77-51</li>
                        <li>expedition14@yandex.ru</li>
                        <li>Ежедневно: 9:00 - 21:00</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>© 2025 Экспедиция-14. Прокат туристического снаряжения в Якутске | С любовью к природе Якутии</p>
            </div>
        </div>
    </footer>

    <!-- Модальные окна -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <span class="close-modal" id="closeLoginModal">&times;</span>
            <h2>Вход</h2>
            <form id="loginForm">
                <div class="form-group">
                    <input type="text" id="loginUsername" placeholder="Логин" required>
                </div>
                <div class="form-group">
                    <input type="password" id="loginPassword" placeholder="Пароль" required>
                </div>
                <button type="submit" class="btn" style="width: 100%;">Войти</button>
            </form>
            <p style="text-align: center; margin-top: 20px;">
                Нет аккаунта? <a href="#" id="showRegisterModal" style="color: var(--camp-orange); font-weight: 600;">Зарегистрироваться</a>
            </p>
        </div>
    </div>

    <div class="modal" id="registerModal">
        <div class="modal-content">
            <span class="close-modal" id="closeRegisterModal">&times;</span>
            <h2>Регистрация</h2>
            <form id="registerForm">
                <div class="form-group">
                    <input type="text" id="registerUsername" placeholder="Логин" required>
                </div>
                <div class="form-group">
                    <input type="email" id="registerEmail" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" id="registerPassword" placeholder="Пароль" required>
                </div>
                <div class="form-group">
                    <input type="password" id="registerConfirmPassword" placeholder="Подтвердите пароль" required>
                </div>
                <button type="submit" class="btn" style="width: 100%;">Зарегистрироваться</button>
            </form>
            <p style="text-align: center; margin-top: 20px;">
                Уже есть аккаунт? <a href="#" id="showLoginModal" style="color: var(--camp-orange); font-weight: 600;">Войти</a>
            </p>
        </div>
    </div>

    <div class="modal" id="reviewModal">
        <div class="modal-content">
            <span class="close-modal" id="closeReviewModal">&times;</span>
            <h2>Оставить отзыв</h2>
            <form id="reviewForm">
                <div class="form-group">
                    <label style="display: block; margin-bottom: 10px;">Оценка:</label>
                    <div style="display: flex; gap: 10px; margin-bottom: 20px;" id="ratingStars">
                        <i class="fas fa-star" data-rating="1" style="font-size: 1.5rem; cursor: pointer; color: #ddd;"></i>
                        <i class="fas fa-star" data-rating="2" style="font-size: 1.5rem; cursor: pointer; color: #ddd;"></i>
                        <i class="fas fa-star" data-rating="3" style="font-size: 1.5rem; cursor: pointer; color: #ddd;"></i>
                        <i class="fas fa-star" data-rating="4" style="font-size: 1.5rem; cursor: pointer; color: #ddd;"></i>
                        <i class="fas fa-star" data-rating="5" style="font-size: 1.5rem; cursor: pointer; color: #ddd;"></i>
                    </div>
                    <input type="hidden" id="reviewRating" value="5">
                </div>
                <div class="form-group">
                    <textarea id="reviewText" rows="4" placeholder="Ваш отзыв..." required></textarea>
                </div>
                <button type="submit" class="btn" style="width: 100%;">Отправить отзыв</button>
            </form>
        </div>
    </div>

    <script>
        // ========== ДАННЫЕ ==========
        const products = [
            { id: 1, name: "Палатка Mountain Hardwear", category: "tents", categoryName: "Палатки", price: 1500, image: "https://images.unsplash.com/photo-1523987357523-2494cc3887b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", description: "4-сезонная, 2-местная, ветрозащита" },
            { id: 2, name: "Спальник The North Face", category: "sleeping", categoryName: "Спальники", price: 800, image: "https://images.unsplash.com/photo-1516633630677-9e048c636f3a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", description: "Пуховый, температура комфорта -10°C" },
            { id: 3, name: "Рюкзак Osprey 85L", category: "backpacks", categoryName: "Рюкзаки", price: 900, image: "https://images.unsplash.com/photo-1622260614153-03223fb72052?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", description: "Треккинговый, с дождевиком" },
            { id: 4, name: "Горелка MSR Reactor", category: "cooking", categoryName: "Горелки", price: 500, image: "https://images.unsplash.com/photo-1599661415516-0ef2c0f9ab77?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", description: "С котлом 1.7л, ветрозащита" },
            { id: 5, name: "Трекинговые палки", category: "other", categoryName: "Аксессуары", price: 350, image: "https://images.unsplash.com/photo-1622260614920-d37f6fa0a200?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", description: "Карбоновые, телескопические" },
            { id: 6, name: "Палатка Marmot 2p", category: "tents", categoryName: "Палатки", price: 1000, image: "https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80", description: "Треккинговая, легкая, 2.5 кг" }
        ];

        let defaultReviews = [
            { id: 1, name: "Александр Петров", text: "Брал снаряжение для восхождения на пик Победа. Палатка и спальник в отличном состоянии, всё чистое. Отдельное спасибо за консультацию по выбору горелки.", rating: 5, avatar: "https://randomuser.me/api/portraits/men/32.jpg" },
            { id: 2, name: "Екатерина Смирнова", text: "Отличный прокат! Большой выбор, адекватные цены. Снаряжение качественное, персонал грамотный. Обязательно обращусь ещё.", rating: 5, avatar: "https://randomuser.me/api/portraits/women/44.jpg" },
            { id: 3, name: "Дмитрий Волков", text: "Пользуюсь услугами второй год. Всегда всё есть в наличии, можно продлить аренду. Рекомендую!", rating: 5, avatar: "https://randomuser.me/api/portraits/men/46.jpg" },
            { id: 4, name: "Анна Кузнецова", text: "Брали групповое снаряжение для похода на 10 человек. Всё подготовили заранее, помогли с комплектацией. Спасибо!", rating: 5, avatar: "https://randomuser.me/api/portraits/women/63.jpg" }
        ];

        // ========== ГЛОБАЛЬНЫЕ ПЕРЕМЕННЫЕ ==========
        let cart = [];
        let currentUser = null;
        let reviews = [];

        // ========== ВСПОМОГАТЕЛЬНЫЕ ФУНКЦИИ ==========
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            const bgColor = type === 'success' ? '#1a3b2f' : (type === 'error' ? '#e74c3c' : '#e67e22');
            notification.style.cssText = `
                position: fixed; top: 100px; right: 20px; background: ${bgColor}; color: white;
                padding: 15px 25px; border-radius: 8px; box-shadow: 0 15px 30px rgba(0,0,0,0.3);
                z-index: 3000; border-left: 4px solid ${type === 'success' ? '#27ae60' : '#c0392b'};
                font-weight: 500; animation: slideIn 0.3s ease;
            `;
            notification.textContent = message;
            document.body.appendChild(notification);
            setTimeout(() => {
                notification.style.animation = 'slideOut 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }

        function saveData() {
            localStorage.setItem('expedition_users', JSON.stringify(users));
            localStorage.setItem('expedition_currentUser', JSON.stringify(currentUser));
            localStorage.setItem('expedition_cart', JSON.stringify(cart));
            localStorage.setItem('expedition_reviews', JSON.stringify(reviews));
        }

        function loadData() {
            const savedUsers = localStorage.getItem('expedition_users');
            const savedCurrentUser = localStorage.getItem('expedition_currentUser');
            const savedCart = localStorage.getItem('expedition_cart');
            const savedReviews = localStorage.getItem('expedition_reviews');
            
            if (savedUsers) users = JSON.parse(savedUsers);
            if (savedCurrentUser) currentUser = JSON.parse(savedCurrentUser);
            if (savedCart) cart = JSON.parse(savedCart);
            if (savedReviews) reviews = JSON.parse(savedReviews);
            else reviews = [...defaultReviews];
        }

        // ========== ПОЛЬЗОВАТЕЛИ ==========
        let users = [];

        function updateAuthUI() {
            const authButtons = document.getElementById('authButtons');
            if (!authButtons) return;
            
            if (currentUser) {
                authButtons.innerHTML = `
                    <div class="user-menu" style="display: flex; align-items: center; gap: 15px;">
                        <div class="cart-icon" id="cartLink">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-count">0</span>
                        </div>
                        <span class="user-welcome">${currentUser.username}</span>
                        <button class="btn-outline btn" id="logoutBtn" style="padding: 8px 16px;">Выйти</button>
                    </div>
                `;
                document.getElementById('cartLink')?.addEventListener('click', showCartPage);
                document.getElementById('logoutBtn')?.addEventListener('click', logout);
                document.getElementById('addReviewBtnContainer').style.display = 'block';
            } else {
                authButtons.innerHTML = `
                    <div class="cart-icon" id="cartLink">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">0</span>
                    </div>
                    <button class="btn-outline btn" id="loginBtn">Вход</button>
                    <button class="btn" id="registerBtn">Регистрация</button>
                `;
                document.getElementById('cartLink')?.addEventListener('click', showCartPage);
                document.getElementById('loginBtn')?.addEventListener('click', () => openModal('loginModal'));
                document.getElementById('registerBtn')?.addEventListener('click', () => openModal('registerModal'));
                document.getElementById('addReviewBtnContainer').style.display = 'none';
            }
            updateCartCount();
        }

        function logout() {
            currentUser = null;
            saveData();
            updateAuthUI();
            showNotification('Вы вышли из системы', 'success');
        }

        function register(username, email, password, confirmPassword) {
            if (!username || !email || !password) {
                showNotification('Все поля обязательны', 'error');
                return false;
            }
            if (password !== confirmPassword) {
                showNotification('Пароли не совпадают', 'error');
                return false;
            }
            if (password.length < 4) {
                showNotification('Пароль должен быть не менее 4 символов', 'error');
                return false;
            }
            if (users.find(u => u.username === username)) {
                showNotification('Пользователь с таким логином уже существует', 'error');
                return false;
            }
            if (users.find(u => u.email === email)) {
                showNotification('Пользователь с таким email уже существует', 'error');
                return false;
            }
            
            const newUser = { id: Date.now(), username, email, password };
            users.push(newUser);
            currentUser = { id: newUser.id, username: newUser.username, email: newUser.email };
            saveData();
            updateAuthUI();
            showNotification('Регистрация прошла успешно!', 'success');
            return true;
        }

        function login(username, password) {
            const user = users.find(u => u.username === username && u.password === password);
            if (user) {
                currentUser = { id: user.id, username: user.username, email: user.email };
                saveData();
                updateAuthUI();
                showNotification('Вход выполнен успешно!', 'success');
                return true;
            } else {
                showNotification('Неверный логин или пароль', 'error');
                return false;
            }
        }

        // ========== КОРЗИНА ==========
        function updateCartCount() {
            const count = cart.reduce((sum, item) => sum + item.quantity, 0);
            const cartCountElements = document.querySelectorAll('.cart-count');
            cartCountElements.forEach(el => { if(el) el.textContent = count; });
        }

        function saveCart() {
            saveData();
        }

        function addToCart(productId) {
            if (!currentUser) {
                showNotification('Войдите в систему, чтобы добавить товар в корзину', 'error');
                openModal('loginModal');
                return;
            }
            const product = products.find(p => p.id === productId);
            const existing = cart.find(item => item.id === productId);
            if (existing) existing.quantity++;
            else cart.push({ id: product.id, name: product.name, price: product.price, image: product.image, quantity: 1 });
            updateCartCount();
            saveCart();
            showNotification(`${product.name} добавлен в корзину`, 'success');
        }

        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCartCount();
            renderCartItems();
            saveCart();
        }

        function updateQuantity(productId, change) {
            const item = cart.find(i => i.id === productId);
            if (item) {
                item.quantity += change;
                if (item.quantity < 1) removeFromCart(productId);
                else { updateCartCount(); renderCartItems(); saveCart(); }
            }
        }

        function renderCartItems() {
            const container = document.getElementById('cartItems');
            if (!container) return;
            if (cart.length === 0) {
                container.innerHTML = '<p style="text-align: center; padding: 40px; color: var(--granite-gray);">Корзина пуста</p>';
                updateCartSummary();
                return;
            }
            container.innerHTML = '';
            cart.forEach(item => {
                const el = document.createElement('div');
                el.className = 'cart-item';
                el.innerHTML = `
                    <div class="cart-item-image" style="background-image: url('${item.image}')"></div>
                    <div style="flex: 1;"><h3>${item.name}</h3><p style="color: var(--camp-orange); font-weight: 600;">${item.price} ₽/сутки</p></div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div style="display: flex; align-items: center; gap: 10px; background: #f0f0f0; padding: 5px 10px; border-radius: var(--radius-hard);">
                            <button class="quantity-btn" onclick="window.updateQuantity(${item.id}, -1)" style="background: none; border: none; font-size: 1.2rem; cursor: pointer;">−</button>
                            <span style="font-weight: 600; min-width: 30px; text-align: center;">${item.quantity}</span>
                            <button class="quantity-btn" onclick="window.updateQuantity(${item.id}, 1)" style="background: none; border: none; font-size: 1.2rem; cursor: pointer;">+</button>
                        </div>
                        <button class="btn-outline btn" onclick="window.removeFromCart(${item.id})" style="padding: 8px 12px;"><i class="fas fa-trash"></i></button>
                    </div>
                `;
                container.appendChild(el);
            });
            updateCartSummary();
        }

        function updateCartSummary() {
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const shipping = subtotal > 0 ? 300 : 0;
            const total = subtotal + shipping;
            const subtotalEl = document.getElementById('subtotal');
            const shippingEl = document.getElementById('shipping');
            const totalEl = document.getElementById('total');
            if (subtotalEl) subtotalEl.textContent = `${subtotal} ₽`;
            if (shippingEl) shippingEl.textContent = `${shipping} ₽`;
            if (totalEl) totalEl.textContent = `${total} ₽`;
        }

        function checkout() {
            if (!currentUser) {
                showNotification('Войдите в систему для оформления заказа', 'error');
                openModal('loginModal');
                return;
            }
            if (cart.length === 0) {
                showNotification('Корзина пуста', 'error');
                return;
            }
            showNotification('Заказ оформлен! С вами свяжутся для подтверждения.', 'success');
            cart = [];
            updateCartCount();
            saveCart();
            showMainPage();
        }

        // ========== ОТЗЫВЫ ==========
        function renderReviews() {
            const container = document.getElementById('reviewsContainer');
            if (!container) return;
            container.innerHTML = '';
            reviews.forEach(review => {
                const stars = Array(5).fill('').map((_, i) => i < review.rating ? 'fas fa-star' : 'far fa-star').join(' ');
                const card = document.createElement('div');
                card.className = 'review-card';
                card.innerHTML = `
                    <div class="review-header">
                        <div class="review-avatar" style="background-image: url('${review.avatar}')"></div>
                        <div class="review-info">
                            <h4>${review.name}</h4>
                            <div class="review-stars">${stars.split(' ').map(star => `<i class="${star}"></i>`).join('')}</div>
                        </div>
                    </div>
                    <p class="review-text">"${review.text}"</p>
                `;
                container.appendChild(card);
            });
        }

        function addReview(text, rating) {
            if (!currentUser) {
                showNotification('Войдите в систему, чтобы оставить отзыв', 'error');
                openModal('loginModal');
                return false;
            }
            if (!text.trim()) {
                showNotification('Введите текст отзыва', 'error');
                return false;
            }
            const newReview = {
                id: Date.now(),
                name: currentUser.username,
                text: text,
                rating: rating,
                avatar: `https://randomuser.me/api/portraits/${Math.random() > 0.5 ? 'men' : 'women'}/${Math.floor(Math.random() * 100)}.jpg`
            };
            reviews.unshift(newReview);
            saveData();
            renderReviews();
            showNotification('Спасибо за отзыв!', 'success');
            return true;
        }

        // ========== ТОВАРЫ И ФИЛЬТРАЦИЯ ==========
        function renderProducts(filteredProducts = products) {
            const grid = document.getElementById('productsGrid');
            if (!grid) return;
            grid.innerHTML = '';
            filteredProducts.forEach(product => {
                const card = document.createElement('div');
                card.className = 'product-card';
                card.innerHTML = `
                    <div class="product-image" style="background-image: url('${product.image}')">
                        <span class="product-category">${product.categoryName}</span>
                    </div>
                    <div class="product-info">
                        <h3>${product.name}</h3>
                        <p class="product-description">${product.description}</p>
                        <div class="product-price">${product.price} <small>₽/сутки</small></div>
                        <button class="btn" onclick="window.addToCart(${product.id})"><i class="fas fa-shopping-cart"></i> Арендовать</button>
                    </div>
                `;
                grid.appendChild(card);
            });
        }

        function renderFilters() {
            const container = document.getElementById('filtersContainer');
            if (!container) return;
            const categories = ['all', 'tents', 'sleeping', 'backpacks', 'cooking', 'other'];
            const categoryNames = { all: 'Всё', tents: 'Палатки', sleeping: 'Спальники', backpacks: 'Рюкзаки', cooking: 'Горелки', other: 'Аксессуары' };
            container.innerHTML = '';
            categories.forEach(cat => {
                const btn = document.createElement('button');
                btn.className = 'filter-btn' + (cat === 'all' ? ' active' : '');
                btn.textContent = categoryNames[cat];
                btn.dataset.filter = cat;
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    const filter = this.dataset.filter;
                    if (filter === 'all') renderProducts();
                    else renderProducts(products.filter(p => p.category === filter));
                });
                container.appendChild(btn);
            });
        }

        // ========== НАВИГАЦИЯ ==========
        function showCartPage() {
            document.getElementById('mainPage').style.display = 'none';
            document.getElementById('cartPage').style.display = 'block';
            renderCartItems();
            window.scrollTo({ top: 0 });
        }

        function showMainPage() {
            document.getElementById('cartPage').style.display = 'none';
            document.getElementById('mainPage').style.display = 'block';
            window.scrollTo({ top: 0 });
        }

        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) section.scrollIntoView({ behavior: 'smooth' });
        }

        // ========== МОДАЛЬНЫЕ ОКНА ==========
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) modal.style.display = 'flex';
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) modal.style.display = 'none';
        }

        // ========== ИНИЦИАЛИЗАЦИЯ ==========
        document.addEventListener('DOMContentLoaded', function() {
            loadData();
            updateAuthUI();
            renderProducts();
            renderFilters();
            renderReviews();
            
            // Навигация
            document.getElementById('homeLink')?.addEventListener('click', showMainPage);
            document.getElementById('backToCatalogBtn')?.addEventListener('click', showMainPage);
            document.getElementById('heroCatalogBtn')?.addEventListener('click', () => scrollToSection('catalogSection'));
            document.getElementById('heroHowItWorksBtn')?.addEventListener('click', () => scrollToSection('howItWorksSection'));
            document.getElementById('navCatalog')?.addEventListener('click', () => scrollToSection('catalogSection'));
            document.getElementById('navHowItWorks')?.addEventListener('click', () => scrollToSection('howItWorksSection'));
            document.getElementById('navReviews')?.addEventListener('click', () => scrollToSection('reviewsSection'));
            document.getElementById('navContact')?.addEventListener('click', () => scrollToSection('contactSection'));
            
            document.querySelectorAll('.footerCatalogLink').forEach(link => {
                link.addEventListener('click', () => scrollToSection('catalogSection'));
            });
            
            document.getElementById('checkoutBtn')?.addEventListener('click', checkout);
            
            // Поиск
            document.getElementById('searchInput')?.addEventListener('input', function(e) {
                const term = e.target.value.toLowerCase();
                const filtered = products.filter(p => p.name.toLowerCase().includes(term) || p.description.toLowerCase().includes(term));
                renderProducts(filtered);
            });
            
            // Формы
            document.getElementById('registerForm')?.addEventListener('submit', function(e) {
                e.preventDefault();
                const username = document.getElementById('registerUsername').value;
                const email = document.getElementById('registerEmail').value;
                const password = document.getElementById('registerPassword').value;
                const confirm = document.getElementById('registerConfirmPassword').value;
                if (register(username, email, password, confirm)) closeModal('registerModal');
            });
            
            document.getElementById('loginForm')?.addEventListener('submit', function(e) {
                e.preventDefault();
                const username = document.getElementById('loginUsername').value;
                const password = document.getElementById('loginPassword').value;
                if (login(username, password)) closeModal('loginModal');
            });
            
            document.getElementById('contactForm')?.addEventListener('submit', function(e) {
                e.preventDefault();
                showNotification('Спасибо! Мы свяжемся с вами в ближайшее время.', 'success');
                this.reset();
            });
            
            // Отзывы
            document.getElementById('addReviewBtn')?.addEventListener('click', () => openModal('reviewModal'));
            document.getElementById('closeReviewModal')?.addEventListener('click', () => closeModal('reviewModal'));
            
            let selectedRating = 5;
            document.querySelectorAll('#ratingStars i').forEach(star => {
                star.addEventListener('click', function() {
                    selectedRating = parseInt(this.dataset.rating);
                    document.querySelectorAll('#ratingStars i').forEach((s, i) => {
                        s.style.color = i < selectedRating ? '#e67e22' : '#ddd';
                    });
                    document.getElementById('reviewRating').value = selectedRating;
                });
            });
            document.querySelectorAll('#ratingStars i').forEach((s, i) => { if(i < 5) s.style.color = '#e67e22'; });
            
            document.getElementById('reviewForm')?.addEventListener('submit', function(e) {
                e.preventDefault();
                const text = document.getElementById('reviewText').value;
                const rating = parseInt(document.getElementById('reviewRating').value) || 5;
                if (addReview(text, rating)) closeModal('reviewModal');
                document.getElementById('reviewText').value = '';
            });
            
            // Закрытие модалок
            const modals = ['loginModal', 'registerModal', 'reviewModal'];
            modals.forEach(modalId => {
                const closeBtn = document.getElementById(`close${modalId.charAt(0).toUpperCase() + modalId.slice(1)}`);
                if (closeBtn) closeBtn.addEventListener('click', () => closeModal(modalId));
                const modal = document.getElementById(modalId);
                if (modal) modal.addEventListener('click', (e) => { if(e.target === modal) closeModal(modalId); });
            });
            document.getElementById('showRegisterModal')?.addEventListener('click', (e) => { e.preventDefault(); closeModal('loginModal'); openModal('registerModal'); });
            document.getElementById('showLoginModal')?.addEventListener('click', (e) => { e.preventDefault(); closeModal('registerModal'); openModal('loginModal'); });
            
            // Мобильное меню (улучшенная версия)
            const mobileMenuBtn = document.getElementById('mobileMenu');
            const navMenu = document.getElementById('navMenu');
            
            if (mobileMenuBtn && navMenu) {
                mobileMenuBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    navMenu.classList.toggle('active');
                });
                
                // Закрывать меню при клике на ссылку
                document.querySelectorAll('.nav-links a').forEach(link => {
                    link.addEventListener('click', () => {
                        navMenu.classList.remove('active');
                    });
                });
                
                // Закрывать меню при клике вне его
                document.addEventListener('click', function(event) {
                    if (navMenu.classList.contains('active') && 
                        !navMenu.contains(event.target) && 
                        !mobileMenuBtn.contains(event.target)) {
                        navMenu.classList.remove('active');
                    }
                });
            }
        });
        
        // Экспорт глобальных функций
        window.addToCart = addToCart;
        window.removeFromCart = removeFromCart;
        window.updateQuantity = updateQuantity;
    </script>
</body>
</html>