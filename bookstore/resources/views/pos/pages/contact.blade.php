@extends('pos.index')

@section('contact')
    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Contact</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item">Help & Services</li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section contact">

            <div class="row gy-4">

                <div class="col-xl-6">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="info-box card">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>cadt,<br>cambodia, phnom penh</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info-box card">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+855 16 126 1629<br>+855 12 126 169</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info-box card">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com<br>cadt@edu.kh</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info-box card">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-6">
                    <div class="card p-4">
                        <form class="php-email-form" action="forms/contact.php" method="post">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input class="form-control" name="name" type="text" placeholder="Your Name"
                                        required>
                                </div>

                                <div class="col-md-6 ">
                                    <input class="form-control" name="email" type="email" placeholder="Your Email"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" name="subject" type="text" placeholder="Subject"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </section>

    </main><!-- End #main -->
@endsection
