@extends('front.layout.layout')


@section('content')
<!-- loading page start -->

<div class="portfolio">
    <div class="left-portfolio">
        <h2 class="portfolio-title">@lang('I Help You Design')</h2>
        <h2 class="portfolio-title title2">@lang('Your Dream House')</h2>
        <p class="turning">
            @lang('Turning Your Dream House into Reality: Let Us')<br />
            @lang('Design the Home of Your Dreams!')
        </p>
        <div class="button">
            <button>
                <a href="">@lang('Portfolio')</a>
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
        <div class="stat">
            <div class="leftstat">
                <h3>500+</h3>
                <p>@lang('Design')</p>
            </div>
            <div class="leftstat">
                <h3>1k+</h3>
                <p>@lang('Project')</p>
            </div>
            <div class="leftstat">
                <h3>50+</h3>
                <p>@lang('Client')</p>
            </div>
        </div>
        <div class="social">

            <a href="https://www.linkedin.com/in/kabira-sahverdiyeva-4687ab211/" target="_blank"><i
                    class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.behance.net/kabiwkabiwka" target="_blank"><i
                    class="fa-brands fa-square-behance"></i></a>
            <a href="https://www.instagram.com/kabidesigner?igsh=MWtnbzZtczBlcDF5eQ%3D%3D" target="_blank"><i
                    class="fa-brands fa-square-instagram"></i></a>
            <a href="https://api.whatsapp.com/send/?phone=994555011890&text&type=phone_number&app_absent=0"
                target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a>
        </div>
    </div>
    <div class="right-portfolio">
        <swiper-container class="mySwiper swiper-container" pagination="true" pagination-clickable="true"
            space-between="30" effect="fade" navigation="true">
            <swiper-slide class="swiper-slide">
                <img src="{{ asset('assets/images/img/scena  (1).jpg') }}" alt="Scena 1" />
            </swiper-slide>
            <swiper-slide>
                <img src="{{asset('assets/images/img/scena  (3).jpg')}}" alt="" />
            </swiper-slide>
            <swiper-slide>
                <img src="{{asset('assets/images/img/scena  (5).jpg')}}" alt="" />
            </swiper-slide>
        </swiper-container>
        <div class="right-button">
            <button class="setcall"><a
                    href="https://api.whatsapp.com/send/?phone=994555011890&text&type=phone_number&app_absent=0"
                    target="_blank">@lang('Set Call')</a></button>
            <button class="forborder">
                <p>@lang('Course')</p>
            </button>
        </div>
    </div>
</div>
</div>

<!-- loading page finish -->
<!-- main page start -->

<div class="main-page">
    <div class="main-page-title">
        <h3>@lang('The First In Interior Design')</h3>
    </div>
    <div class="main-page-info">
        <p style="text-align: center;">
            @lang('We have made something new for you, now you will be able to see the designs virtually.')
        </p>
    </div>
    <div class="main-page-center">
        <div class="main-expand">
            <h3>@lang('EXPAND')</h3>
        </div>
        <div class="main-your">
            <h3>@lang('YOUR')</h3>
        </div>
        <div class="main-design">
            <h3>@lang('DESIGN')</h3>
        </div>
        <div class="imgformaincenter">
            <img src="{{asset('assets/images/img/20006782-removebg-preview.png')}}" alt="" />
        </div>
    </div>
</div>

<!-- main page finish -->
<!-- works page start -->

<div id="workspage" class="works-page">
    <div class="works-page-title">
        <h3>@lang('Works')</h3>
    </div>
    <div class="designes">
        <div class="interior-design">
            <div class="interior-design-normal">
                <h4 class="interior-design-title">@lang('Interior Design')</h4>
                <img src="{{asset('assets/images/img/scena  (2).jpg')}}" alt="" />
                <p>
                    @lang('Step into a world where sophistication meets serenity. This beautifully designed space captivates with its seamless blend of modern aesthetics and timeless elegance. Soft hues of cream and taupe envelop the room, creating a soothing atmosphere that invites relaxation and contemplation.')
                </p>
            </div>
            <div class="interior-design-click">
                <button class="interiorgeri">@lang('Back')</button>
                <h4 class="interior-design-title">@lang('Interior Design')</h4>

                <div class="interior-slayd">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/img/scena  (2).jpg')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/img/scena  (3).jpg')}}" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/img/scena  (4).jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="interior-click-about">
                        <div>
                            <p>@lang("Client's Challenge")</p>
                            <p>@lang('Minimal comfort, simple and warm at the same time')</p>
                        </div>
                        <div class="slaydresult">
                            <p>@lang('Result')</p>
                            <br />
                            <p>
                                @lang('We have created a luxurious minimalist interior design that is closely related to the current trend design style of affordable luxury, a harmonious combination of luxury and simplicity. This design style creates spaces that exude elegance, tranquility and functionality in many modern homes.')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="exterior-design">
            <div class="exterior-design-normal">
                <h4 class="exterior-design-title">@lang('Exterior Design')</h4>
                <img src="{{asset('assets/images/img/WhatsApp Image 2024-07-18 at 20.31.22.jpeg')}}" alt="" />
                <p>
                    @lang('Welcome to a residence where contemporary design meets natural beauty. Nestled amidst lush greenery, this architectural masterpiece captivates with its sleek lines and harmonious blend of materials.')
                </p>
            </div>
            <div class="exterior-design-click">
                <button class="exteriorgeri">@lang('Back')</button>
                <h4 class="exterior-design-title">@lang('Exterior Design')</h4>
                <div class="exterior-slayd">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/img/WhatsApp Image 2024-07-18 at 20.31.22 (1).jpeg') }}"
                                    alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('assets/images/img/WhatsApp Image 2024-07-18 at 20.31.22.jpeg')}}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="exterior-click-about">
                        <div class="slaydresult">
                            <p>@lang("Client's Challenge")</p>
                            <p>@lang('Minimal comfort, simple and warm at the same time')</p>
                        </div>
                        <div>
                            <p>@lang('Result')</p>
                            <br />
                            <p>
                                @lang('We have created a luxurious minimalist interior design that is closely related to the current trend design style of affordable luxury, a harmonious combination of luxury and simplicity. This design style creates spaces that exude elegance, tranquility and functionality in many modern homes.')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- works page finish -->
<!-- about page finish -->

<div id="aboutpage" class="about-page"
    style="background-image: url('{{ asset('assets/images/img/scena  (4).jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="about-text">
        <h1>@lang('About')</h1>
    </div>
    <div class="texts">
        <p>@lang('The rooms of your dreams')</p>
        <p>
            @lang('Now you have the opportunity to create a masterpiece in your home with the help of iconic interior design visionary Kabira Designstudio.')
        </p>
        <p style="margin: 10px 0">
            @lang("Drawing on decades of experience in the luxury interior design industry, we bring a fresh perspective to the world of home design and management, where every detail is carefully crafted to reflect the client's unique taste and lifestyle through comprehensive services that transform living spaces. turned into amazing works of art.")
        </p>
        <p style="margin-bottom: 10px">
            @lang('Create a custom project with our team to design a new living room, kitchen, foyer, dining room, bedroom, theater or any room in your home.')
        </p>
        <p style="margin-bottom: 20px">@lang('World class services')</p>
        <ul>
            <li>@lang('Floor Plans/Space Planning')</li>
            <li>@lang('Furniture placement plans')</li>
            <li>@lang('Conceptual drawings/sketches')</li>
            <li>@lang('Selection and purchase of furniture items')</li>
            <li>@lang('Custom furniture')</li>
            <li>@lang('Decorative lighting including installation')</li>
            <li>@lang('Wallpaper, including installation')</li>
            <li>@lang('Hardware selection')</li>
            <li>@lang('Paint choice')</li>
            <li>@lang('Art and decoration')</li>
            <li>@lang('White glove delivery and installation')</li>
            <li>@lang('Light construction projects with design project management')</li>
        </ul>
        <p style="margin-bottom: 20px">
            @lang('Our team will take care of everything from design, layout, furniture and décor, lighting, styling, delivery and installation.')
        </p>
        <p>
            @lang('The rooms are redefining the possibilities of luxury interior design. Now is your chance to make your home part of Kabira Designstudio, an exclusive club of homeowners with a collection of contemporary art.')
        </p>
        <p>
            @lang('Although we prefer contemporary, modern, loft, and minimalist styles, we create your dream home in luxury new classica styles based on the wishes of our customers. Even in recent years, as we know, it is possible to mix the two most popular styles and get a great result.')
        </p>
    </div>
</div>
<!-- about page finish -->
<!-- Blog page start -->
<div id="blogpage" class="blog-page">
    <div class="blog-page-title">
        <h3>@lang('Blog')</h3>
    </div>
    <div class="blog-title">
        <p>@lang("Welcome to Kabira's Interior Design Blog!")</p>
    </div>

    <div class="about-kabira">
        <div class="left-kabira">
            <p>
                @lang('About Me') <br />
                @lang("Hello and welcome! I’m Kabira, an interior designer passionate about creating spaces that blend functionality with aesthetic appeal. With 10 years of experience in the industry, I've had the pleasure of transforming countless homes and offices into beautiful, harmonious environments.")
            </p>
            <p>
                @lang('Why Interior Design Matters') <br />
                @lang("Interior design isn’t just about creating visually appealing spaces; it’s about improving quality of life. A well-designed environment can boost productivity, enhance mood, and create a sense of well-being. Whether you’re renovating your home or redesigning your office, I’m here to guide you through the process.")
            </p>
            <p>
                @lang('Get in Touch') <br />
                @lang('Have a question about interior design? Looking to start your own project? Contact me today to schedule a consultation. Let’s work together to turn your vision into reality!')
            </p>
            <p>
                @lang('Connect with Me Follow me on [social media handles] for daily inspiration, behind-the-scenes looks at projects, and more tips on interior design.')
            </p>
            <p>
                @lang('Thank you for visiting my blog! I look forward to sharing my passion for interior design with you.')
            </p>
        </div>
        <div class="right-kabira">
            <img src="{{asset('assets/images/img/WhatsApp Image 2024-07-18 at 11.43.54.jpeg')}}" alt="Kabira" />
        </div>
    </div>
</div>
<!-- Blog page finish -->
<!-- Contact page start  -->

<div id="contactpage" class="contact-page"
    style="background-image: url('{{ asset('assets/images/img/scena  (3).jpg') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="contact-title">
        <h3>@lang('Contact')</h3>
    </div>
    <div class="contact-about">
        <div class="left-contact">
            <p>@lang('Contact Us')</p>
            <p>@lang('Get in Touch')</p>
            <p>@lang("We'd love to hear from you! Whether you have questions about our services, want to discuss your project, or just want to say hello, feel free to reach out to us.")
            </p>
            <p>@lang('Phone : +994 (55) 501 18 90')
                <br />
                @lang('Email : kabira.shahverdiyeva.94@mai.ru')
            </p>
            <p>@lang('Follow Us:') <br />
                Instagram : kabidesigner <br />
                Behance : kabira Shahverdiyeva <br />
                LinkedIn : kabira (Designer) Sahverdiyeva</p>
        </div>
        <div class="right-contact">
            <p class="finishp">@lang('Consultation Request')</p>
            <div class="contact-form">
                <form action="{{ route('contact.send') }}" method="post">
                    @csrf
                    <label for="name">@lang('Name:')</label>
                    <input type="text" id="name" name="name" required>

                    <label for="phone">@lang('Phone:')</label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="email">@lang('Email:')</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">@lang('Message:')</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">@lang('Submit')</button>
                </form>
            </div>
            <p class="finishp">
                @lang('*Please provide your details above, and I will get back to you as soon as possible to discuss your project.')
            </p>
        </div>
    </div>
</div>
@endsection