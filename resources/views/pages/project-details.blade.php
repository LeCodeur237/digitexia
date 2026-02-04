@extends('index')
@push('styles')
    <style>
        .inner-banner-contents{
            padding: 4rem 8rem 4rem 8rem !important;
        }
        .inner-banner-typography{
            text-align: center;
        }
    </style>
@endpush

@section('contain')
    <section class="section inner-banner">
        <div class="container">
            <div class="inner-banner-contents">
                <div class="inner-banner-typography">
                    <h1 class="inner-banner-title portfolio-details-title">ShopEasy E-Commerce Platform</h1>
                    <p class="inner-banner-description">ShopEasy is a modern, intuitive, and feature-rich e-commerce platform
                        designed to provide a seamless online shopping experience for customers and a robust management
                        system for vendors.</p>
                </div>
                <div class="portfolio-information-wrapper">
                    <div class="portfolio-information-single">
                        <div class="portfolio-information-title">Published</div>
                        <div class="portfolio-information-text">August 23, 2025</div>
                    </div>
                    <div class="portfolio-information-line"></div>
                    <div class="portfolio-information-single">
                        <div class="portfolio-information-title">Category</div>
                        <div class="portfolio-information-text">Web Development</div>
                    </div>
                    <div class="portfolio-information-line"></div>
                    <div class="portfolio-information-single">
                        <div class="portfolio-information-title">Industry</div>
                        <div class="portfolio-information-text">Real Estate</div>
                    </div>
                    <div class="portfolio-information-line"></div>
                    <div class="portfolio-information-single">
                        <div class="portfolio-information-title">Website</div>
                        <div class="portfolio-information-text">www.domain.com</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section portfolio-details" style="margin-bottom: 8rem">
        <div class="container">
            <div class="portfolio-details-content">
                <div class="portfolio-details-image-wrapper"><img
                        src="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68b35ad3c1cd99f5b1a47999_Portfolios%20Image2.jpg"
                        loading="lazy" alt="Blog Image" class="portfolio-details-image" /></div>
                <div class="portfolio-details-typography">
                    <div class="portfolio-details-rich-text w-richtext">
                        <h3>About The Project</h3>
                        <p>ShopEasy is a modern, intuitive, and feature-rich e-commerce platform designed to provide a
                            seamless online shopping experience for customers and a robust management system for vendors. It
                            aims to simplify the process of setting up and managing an online store, offering a
                            comprehensive suite of tools for product listings, order processing, inventory management, and
                            secure payment handling. For shoppers, ShopEasy delivers a user-friendly interface, personalized
                            recommendations, and a secure checkout process, making online purchases effortless and
                            enjoyable.</p>
                        <h3>Projects Challenge</h3>
                        <p>This initiative is designed to inspire innovation and foster problem-solving skills through a
                            series of engaging and practical project-based tasks. Participants will tackle real-world
                            scenarios, collaborate, and apply their knowledge to develop creative solutions, pushing the
                            boundaries of their capabilities.</p>
                        <figure style="max-width:1070pxpx" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                            <div><img
                                    src="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68af70dec5a40cc59af1c741_Portfolio%20Rich%20Image.jpg"
                                    loading="lazy" alt="" /></div>
                        </figure>
                        <h3>Key Features</h3>
                        <p>Our Key Features highlight the most important and impactful aspects of a product, service, or
                            concept. They are the essential elements that define its core functionality, benefits, and what
                            makes it stand out. These features aim to quickly inform and attract users by showcasing the
                            most valuable and differentiating attributes.</p>
                        <h6>User Management:</h6>
                        <p>Deals with everything related to user accounts, including secure registration, login, password
                            recovery, different access levels for customers and administrators, and personal user profiles
                            with order history.</p>
                        <h6>Product Catalog Management:</h6>
                        <p>Focuses on how products are added, organized, and presented. This includes tools for creating
                            product listings, handling variations (like sizes or colors), providing rich descriptions and
                            images, and enabling easy search and filtering for customers.</p>
                        <h6>Shopping Cart &amp; Checkout:</h6>
                        <p>Covers the entire purchasing flow, from customers adding items to their cart to securely
                            completing their payment through integrated gateways.</p>
                        <h6>Describes the system&#x27;s ability to track and manage orders through various stages, providing
                            dashboards for administrators and order history for customers, along with automated
                            notifications. Ensures that stock levels are accurately monitored in real-time, preventing
                            overselling and providing alerts for low stock.</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
