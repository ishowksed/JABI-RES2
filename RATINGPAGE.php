<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews & Testimonials</title>
    <link rel="icon" type="image/x-icon" href="JABI2.png">
    <link rel="stylesheet" href="test.css">
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#64748b'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <style>
         :where([class^="ri-"])::before {
            content: "\f3c2";
        }
        
        .testimonial-card {
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
        }
        
        .star-rating {
            display: inline-flex;
            font-size: 1.25rem;
            color: #fbbf24;
        }
        
        .pagination-dot {
            transition: all 0.3s ease;
        }
        
        .testimonial-slider {
            transition: transform 0.5s ease;
        }
        
        .expanded-review {
            max-height: 1000px;
            transition: max-height 0.5s ease;
        }
        
        .collapsed-review {
            max-height: 100px;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }
       html{
            scroll-behavior: smooth;
            background-color: #fbbf24;
            padding:0%
        }
    </style>
</head>

<!--Taskbar-->
<header>
        <nav>
            <ul>
                <li><a href="HOMEPAGEJABI.php">Home</a></li>
                <li><a href="ABOUTUSPAGE.php">About us</a></li>
                <li><a href="CONTACTPAGE.php">Contact us</a></li>
                <li><a href="GALLERYPAGE.php">Gallery</a></li>
                <li><a href="FAQPAGE.php">FAQ</a></li>
                <li><a href="BLOGPAGE.php">Blog</a></li>
                <li><a href="PRICINGPAGE.php">Pricing</a></li>
            </ul>
        </nav>
    </header>

<body class="bg-gray-50 font-sans">
    <div class="min-h-screen">
        <!-- Header Section -->
        <header class="py-16 bg-yellow-100">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl md:text-5xl font-bold text-center text-white    -800 mb-4">Customer Reviews & Testimonials</h2>
                <p class="text-xl text-center text-gray-600 max-w-3xl mx-auto">See what our customers are saying about their experiences with our products and services.</p>
            </div>
        </header>

        <!-- Testimonial Section -->
        <section class="py-12 bg-yellow-50">
            <div class="container mx-auto px-4">
                <!-- Testimonial Slider Controls -->
                <div class="flex justify-between items-center mb-10">
                    <div class="flex items-center">
                        <div class="text-lg font-semibold text-gray-700">
                            <span id="current-slide">1</span> / <span id="total-slides">3</span>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <button id="autoplay-toggle" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-white-700 hover:bg-primary hover:text-white transition-all !rounded-button whitespace-nowrap">
                            <i class="ri-play-fill ri-lg"></i>
                        </button>
                        <button id="prev-slide" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-700 hover:bg-primary hover:text-white transition-all !rounded-button whitespace-nowrap">
                            <i class="ri-arrow-left-s-line ri-lg"></i>
                        </button>
                        <button id="next-slide" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-700 hover:bg-primary hover:text-white transition-all !rounded-button whitespace-nowrap">
                            <i class="ri-arrow-right-s-line ri-lg"></i>
                        </button>
                    </div>
                </div>

                <!-- Testimonial Slider -->
                <div class="relative overflow-hidden">
                    <div id="testimonial-slider" class="testimonial-slider flex transition-transform duration-500">
                        <!-- Slide 1 -->
                        <div class="testimonial-slide w-full flex-shrink-0">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                <!-- Testimonial Card 1 -->
                                <div class="testimonial-card bg-white rounded-lg shadow-md p-6 border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 mr-4">
                                            <img src="https://www.themodernman.com/wp-content/uploads/hot-girl-in-apartment-building.jpg" alt="Emily Richardson" class="w-12 h-12 rounded-full object-cover object-top">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Ella Vator</h3>
                                            <p class="text-sm text-gray-600">Marketing Director, Seattle</p>
                                        </div>
                                    </div>
                                    <div class="star-rating mb-3">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <div class="review-content collapsed-review">
                                        <p class="text-gray-700">The customer service team went above and beyond to help me find the perfect solution for my business needs. The product quality exceeds expectations, and the implementation process was seamless. I've already recommended
                                            their services to several colleagues in my network. Truly a game-changer for our marketing department's workflow efficiency.</p>
                                    </div>
                                    <button class="read-more mt-3 text-primary font-medium hover:text-primary/80 focus:outline-none !rounded-button whitespace-nowrap">Read more</button>
                                    <div class="mt-4 text-sm text-gray-500">August 10, 2019</div>
                                </div>

                                <!-- Testimonial Card 2 -->
                                <div class="testimonial-card bg-white rounded-lg shadow-md p-6 border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 mr-4">
                                            <img src="https://www.shutterstock.com/image-photo/young-male-kneeling-down-hands-260nw-2219302811.jpg" alt="David Chen" class="w-12 h-12 rounded-full object-cover object-top">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Niel Down</h3>
                                            <p class="text-sm text-gray-600">Tech Entrepreneur, San Francisco</p>
                                        </div>
                                    </div>
                                    <div class="star-rating mb-3">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </div>
                                    <div class="review-content collapsed-review">
                                        <p class="text-gray-700">As a startup founder, I'm always looking for reliable partners who can deliver quality without breaking the bank. This company has consistently provided excellent value and responsive support. Their platform has
                                            scaled effortlessly with our growth, and the analytics features have given us valuable insights to improve our business strategy. Minor issues with the mobile interface, but overall fantastic.</p>
                                    </div>
                                    <button class="read-more mt-3 text-primary font-medium hover:text-primary/80 focus:outline-none !rounded-button whitespace-nowrap">Read more</button>
                                    <div class="mt-4 text-sm text-gray-500">June 3, 2024</div>
                                </div>

                                <!-- Testimonial Card 3 -->
                                <div class="testimonial-card bg-white rounded-lg shadow-md p-6 border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 mr-4">
                                            <img src="https://domf5oio6qrcr.cloudfront.net/medialibrary/15276/7171fb7f-4664-4932-8c4f-157875b4c28a.jpg" alt="Sophia Johnson" class="w-12 h-12 rounded-full object-cover object-top">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Sal Monella</h3>
                                            <p class="text-sm text-gray-600">HR Director, Chicago</p>
                                        </div>
                                    </div>
                                    <div class="star-rating mb-3">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <div class="review-content collapsed-review">
                                        <p class="text-gray-700">Implementing this solution across our HR department has transformed our onboarding process. The intuitive interface made training our team a breeze, and the customization options allowed us to tailor the system
                                            to our specific needs. Our new hire satisfaction scores have increased by 32% since implementation. The support team is always available and genuinely helpful when we have questions.</p>
                                    </div>
                                    <button class="read-more mt-3 text-primary font-medium hover:text-primary/80 focus:outline-none !rounded-button whitespace-nowrap">Read more</button>
                                    <div class="mt-4 text-sm text-gray-500">May 28, 2025</div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="testimonial-slide w-full flex-shrink-0">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                <!-- Testimonial Card 4 -->
                                <div class="testimonial-card bg-white rounded-lg shadow-md p-6 border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 mr-4">
                                            <img src="https://assets.rebelmouse.io/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpbWFnZSI6Imh0dHBzOi8vYXNzZXRzLnJibC5tcy8zMTE2MTU4MS9vcmlnaW4uanBnIiwiZXhwaXJlc19hdCI6MTc5Mzk4NDgzMH0.2eGYIQCaHNDVzwgVjBT55mwQSsnzRRzaF6R5RrBaDBM/img.jpg?width=1200&height=800&quality=85&coordinates=0%2C41%2C0%2C79"
                                                alt="Michael Rodriguez" class="w-12 h-12 rounded-full object-cover object-top">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Ali Gaether</h3>
                                            <p class="text-sm text-gray-600">CFO, Miami</p>
                                        </div>
                                    </div>
                                    <div class="star-rating mb-3">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <div class="review-content collapsed-review">
                                        <p class="text-gray-700">From a financial perspective, this investment has paid for itself within the first quarter. The reporting features provide exactly the insights we need for strategic planning, and the automation has reduced our
                                            administrative overhead by approximately 22%. The only reason for 4 stars instead of 5 is that I'd like to see more advanced export options for our financial analysis team.</p>
                                    </div>
                                    <button class="read-more mt-3 text-primary font-medium hover:text-primary/80 focus:outline-none !rounded-button whitespace-nowrap">Read more</button>
                                    <div class="mt-4 text-sm text-gray-500">September 8, 2023</div>
                                </div>

                                <!-- Testimonial Card 5 -->
                                <div class="testimonial-card bg-white rounded-lg shadow-md p-6 border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 mr-4">
                                            <img src="https://www.shutterstock.com/image-photo/portrait-cute-positive-lady-finger-600nw-2275946547.jpg" alt="Cartel" class="w-12 h-12 rounded-full object-cover object-top">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Candy Barr</h3>
                                            <p class="text-sm text-gray-600">Product Manager</p>
                                        </div>
                                    </div>
                                    <div class="star-rating mb-3">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <div class="review-content collapsed-review">
                                        <p class="text-gray-700">As someone who manages complex product development cycles, I need tools that enhance collaboration without adding complexity. This solution has streamlined our workflow in ways I didn't think possible. The integration
                                            capabilities with our existing tech stack made adoption painless, and the customizable dashboards give each team member exactly what they need. Absolutely worth every penny.</p>
                                    </div>
                                    <button class="read-more mt-3 text-primary font-medium hover:text-primary/80 focus:outline-none !rounded-button whitespace-nowrap">Read more</button>
                                    <div class="mt-4 text-sm text-gray-500">May 25, 2025</div>
                                </div>

                                <!-- Testimonial Card 6 -->
                                <div class="testimonial-card bg-white rounded-lg shadow-md p-6 border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 mr-4">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8bZeIf6yT8RUs-WxTtQnM0iq6nIgt9DIn7g&s" alt="James Wilson" class="w-12 h-12 rounded-full object-cover object-top">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Liv Long</h3>
                                            <p class="text-sm text-gray-600">Small Business Owner, Portland</p>
                                        </div>
                                    </div>
                                    <div class="star-rating mb-3">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </div>
                                    <div class="review-content collapsed-review">
                                        <p class="text-gray-700">Running a small business means wearing many hats, and I needed a solution that wouldn't require a dedicated IT person to manage. The onboarding process was straightforward, and I was up and running in less than
                                            a day. Customer support has been exceptional - they understand the challenges of small businesses and provide practical solutions. The pricing is fair for the value received.</p>
                                    </div>
                                    <button class="read-more mt-3 text-primary font-medium hover:text-primary/80 focus:outline-none !rounded-button whitespace-nowrap">Read more</button>
                                    <div class="mt-4 text-sm text-gray-500">June 12, 2025</div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="testimonial-slide w-full flex-shrink-0">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                <!-- Testimonial Card 7 -->
                                <div class="testimonial-card bg-white rounded-lg shadow-md p-6 border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 mr-4">
                                            <img src="https://i.sstatic.net/CKuSy.png" alt="Robert Thompson" class="w-12 h-12 rounded-full object-cover object-top">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Ben Dover</h3>
                                            <p class="text-sm text-gray-600">IT Director, Atlanta</p>
                                        </div>
                                    </div>
                                    <div class="star-rating mb-3">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <div class="review-content collapsed-review">
                                        <p class="text-gray-700">Security and reliability were my primary concerns when evaluating solutions. After rigorous testing, this platform met all our enterprise-level requirements. The API documentation is comprehensive, and the development
                                            team was responsive during our integration phase. System uptime has been excellent, and the security features align with our strict compliance standards. Highly recommended for enterprise environments.</p>
                                    </div>
                                    <button class="read-more mt-3 text-primary font-medium hover:text-primary/80 focus:outline-none !rounded-button whitespace-nowrap">Read more</button>
                                    <div class="mt-4 text-sm text-gray-500">June 5, 2025</div>
                                </div>

                                <!-- Testimonial Card 8 -->
                                <div class="testimonial-card bg-white rounded-lg shadow-md p-6 border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 mr-4">
                                            <img src="https://img.freepik.com/premium-photo/hispanic-pretty-chef-woman-holding-olive-oil-bottle_1194-338960.jpg" alt="Jennifer Kim" class="w-12 h-12 rounded-full object-cover object-top">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Olive Yu</h3>
                                            <p class="text-sm text-gray-600">Digital Marketer, New York</p>
                                        </div>
                                    </div>
                                    <div class="star-rating mb-3">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <div class="review-content collapsed-review">
                                        <p class="text-gray-700">The analytics capabilities have transformed how we approach our digital marketing campaigns. Being able to visualize customer journeys and identify conversion bottlenecks has helped us optimize our strategies effectively.
                                            The social media integration works seamlessly, though I'd like to see more advanced A/B testing features in future updates. Overall, it's become an essential part of our marketing toolkit.</p>
                                    </div>
                                    <button class="read-more mt-3 text-primary font-medium hover:text-primary/80 focus:outline-none !rounded-button whitespace-nowrap">Read more</button>
                                    <div class="mt-4 text-sm text-gray-500">May 30, 2025</div>
                                </div>

                                <!-- Testimonial Card 9 -->
                                <div class="testimonial-card bg-white rounded-lg shadow-md p-6 border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 mr-4">
                                            <img src="https://www.motoquest.com/wp-content/uploads/2018/05/Utah-1.jpg">
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-800">Miles A. Head</h3>
                                            <p class="text-sm text-gray-600">Customer Success Manager, Denver</p>
                                        </div>
                                    </div>
                                    <div class="star-rating mb-3">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <div class="review-content collapsed-review">
                                        <p class="text-gray-700">As someone who manages customer relationships professionally, I have high standards for service quality. This company consistently exceeds those standards. Not only is the product intuitive and feature-rich, but
                                            the ongoing support and regular feature updates show a genuine commitment to customer success. Our team's productivity has increased dramatically, and our clients have noticed the improvement in our service
                                            delivery.
                                        </p>
                                    </div>
                                    <button class="read-more mt-3 text-primary font-medium hover:text-primary/80 focus:outline-none !rounded-button whitespace-nowrap">Read more</button>
                                    <div class="mt-4 text-sm text-gray-500">June 14, 2025</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination Dots -->
                <div class="flex justify-center mt-10 space-x-2">
                    <button class="pagination-dot w-3 h-3 rounded-full bg-primary" data-slide="0"></button>
                    <button class="pagination-dot w-3 h-3 rounded-full bg-gray-300" data-slide="1"></button>
                    <button class="pagination-dot w-3 h-3 rounded-full bg-gray-300" data-slide="2"></button>
                </div>
            </div>
        </section>

        <!-- Featured Testimonial Section -->
        <section class="py-16 bg-gradient-to-r from-primary/5 to-primary/10">
            <div class="container mx-auto px-4">
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-12">Featured Testimonial</h1>

                <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8 md:p-10 relative">
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white">
                        <i class="ri-double-quotes-l ri-2x"></i>
                    </div>

                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-24 h-24 md:w-32 md:h-32 flex-shrink-0 mb-6 md:mb-0 md:mr-8">
                            <img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20confident%20middle-aged%20caucasian%20man%20with%20salt%20and%20pepper%20hair%2C%20executive%20business%20suit%2C%20neutral%20background%2C%20authoritative%20yet%20approachable%20expression%2C%20high%20quality%20professional%20portrait&width=150&height=150&seq=10&orientation=squarish"
                                alt="William Anderson" class="w-full h-full rounded-full object-cover object-top">
                        </div>

                        <div>
                            <div class="star-rating mb-4">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>

                            <p class="text-lg md:text-xl text-gray-700 italic mb-6">"After evaluating numerous solutions in the market, we chose this platform for our enterprise-wide implementation. The decision has proven to be transformative for our organization. The scalability, robust feature set, and
                                exceptional support have enabled us to achieve a 47% increase in operational efficiency within the first six months. What truly sets them apart is their commitment to continuous improvement and responsiveness to customer
                                feedback."
                            </p>

                            <div>
                                <h3 class="font-bold text-gray-800 text-lg">William Anderson</h3>
                                <p class="text-gray-600">Chief Operations Officer, Global Enterprises Inc.</p>
                                <p class="text-sm text-gray-500 mt-2">Client since 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistics Section -->
        <section class="py-16 bg-yellow-50">
            <div class="container mx-auto px-4">
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-4">Customer Satisfaction</h1>
                <p class="text-center text-gray-600 mb-12 max-w-3xl mx-auto">Our commitment to excellence is reflected in our customer satisfaction metrics.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-gray-50 rounded-lg p-6 text-center">
                        <div class="text-4xl font-bold text-primary mb-2">98%</div>
                        <p class="text-gray-700">Customer Satisfaction</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6 text-center">
                        <div class="text-4xl font-bold text-primary mb-2">4.9/5</div>
                        <p class="text-gray-700">Average Rating</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6 text-center">
                        <div class="text-4xl font-bold text-primary mb-2">2,500+</div>
                        <p class="text-gray-700">Verified Reviews</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6 text-center">
                        <div class="text-4xl font-bold text-primary mb-2">93%</div>
                        <p class="text-gray-700">Repeat Customers</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 bg-white/10">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Ready to Experience It Yourself?</h1>
                <p class="text-gray-700 mb-8 max-w-2xl mx-auto">Join thousands of satisfied customers and discover how our solutions can transform your business.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button class="px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 transition-colors !rounded-button whitespace-nowrap">Get Started Today</button>
                    <button class="px-6 py-3 bg-white text-primary font-medium rounded-lg border border-primary hover:bg-gray-50 transition-colors !rounded-button whitespace-nowrap">Request a Demo</button>
                </div>
            </div>
        </section>
    </div>

    <script id="testimonial-slider-script">
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('testimonial-slider');
            const slides = document.querySelectorAll('.testimonial-slide');
            const totalSlides = slides.length;
            const paginationDots = document.querySelectorAll('.pagination-dot');
            const prevButton = document.getElementById('prev-slide');
            const nextButton = document.getElementById('next-slide');
            const autoplayToggle = document.getElementById('autoplay-toggle');
            const currentSlideElement = document.getElementById('current-slide');
            const totalSlidesElement = document.getElementById('total-slides');

            let currentSlide = 0;
            let autoplayInterval;
            let isAutoplayActive = false;

            // Initialize total slides count
            totalSlidesElement.textContent = totalSlides;

            // Function to update slider position
            function updateSlider() {
                slider.style.transform = `translateX(-${currentSlide * 100}%)`;

                // Update pagination dots
                paginationDots.forEach((dot, index) => {
                    if (index === currentSlide) {
                        dot.classList.remove('bg-gray-300');
                        dot.classList.add('bg-primary');
                    } else {
                        dot.classList.remove('bg-primary');
                        dot.classList.add('bg-gray-300');
                    }
                });

                // Update current slide indicator
                currentSlideElement.textContent = currentSlide + 1;
            }

            // Function to go to next slide
            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateSlider();
            }

            // Function to go to previous slide
            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateSlider();
            }

            // Function to toggle autoplay
            function toggleAutoplay() {
                if (isAutoplayActive) {
                    clearInterval(autoplayInterval);
                    autoplayToggle.innerHTML = '<i class="ri-play-fill ri-lg"></i>';
                    isAutoplayActive = false;
                } else {
                    autoplayInterval = setInterval(nextSlide, 5000);
                    autoplayToggle.innerHTML = '<i class="ri-pause-fill ri-lg"></i>';
                    isAutoplayActive = true;
                }
            }

            // Event listeners
            prevButton.addEventListener('click', prevSlide);
            nextButton.addEventListener('click', nextSlide);
            autoplayToggle.addEventListener('click', toggleAutoplay);

            // Pagination dot click handlers
            paginationDots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentSlide = index;
                    updateSlider();
                });
            });

            // Start autoplay by default
            toggleAutoplay();
        });
    </script>

    <script id="read-more-script">
        document.addEventListener('DOMContentLoaded', function() {
            const readMoreButtons = document.querySelectorAll('.read-more');

            readMoreButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const reviewContent = this.previousElementSibling;

                    if (reviewContent.classList.contains('collapsed-review')) {
                        reviewContent.classList.remove('collapsed-review');
                        reviewContent.classList.add('expanded-review');
                        this.textContent = 'Read less';
                    } else {
                        reviewContent.classList.remove('expanded-review');
                        reviewContent.classList.add('collapsed-review');
                        this.textContent = 'Read more';
                    }
                });
            });
        });
    </script>
</body>

</html>