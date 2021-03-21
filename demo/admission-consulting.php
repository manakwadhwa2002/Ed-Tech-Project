<?php require "header.php" ?>

<!-- Main Body Starts From Here -->

<head>
    <title>Admission Consulting</title>
</head>    

    <div class="header-svg-container svg-admission-consulting">
        <h1>Your dream university!! Stepping stone to the life you want...</h1>
        <p>From shortlisting to helping you fly to the perfect university</p>
        <form action="https://www.mentord.co/Form%20Responses/shortresponseemail.php" method="POST" class="header-svg-cv-writing-form">
            <input type="text" placeholder="Email your Email" name="quick-response-email"/>
            <button type="submit">Get Free Demo</button>
        </form>
    </div>

    <div class="clearfix"></div>

    <!-- Page Menu -->

    <div class="product-common-menu">
        <div class="product-common-menu-inner-nav">
            <a href="#how-we-help"><button id="hwh-id">How We Help</button></a>
            <a href="#programs"><button id="prog-id">Programs</button></a>
            <a href="#why-mentord"><button id="wm-id">Why Mentord</button></a>
            <a href="#faqs"><button id="faq-id">FAQ's</button></a>
            <a href="#contact-us"><button id="cu-id">Contact Us</button></a>
        </div>
    </div>

    <div class="clearfix"></div>

    <!-- How We Help Section -->

    <section class="product-common-section margin-top-common-hwh">
        <a name="how-we-help"></a>
        <h3>How We Help</h3>

        <div class="how-we-help-process-image">
            <img src="../Photos/Products Roadmaps/Group 84.svg" />
            <div class="how-we-help-process-feature-points hwh-point-one" data-aos="zoom-in" data-aos-delay="50">
                <img src="../Photos/Product Tile Image/DNA Matching.svg" />
                <h2>DNA Matching</h2>
                <p>We don’t randomly suggest universities or courses or countries, your careers aren’t random for us. 15+ years of industry experience has given us enough data to precisely match DNA of your skills and aspirations with the course/country/university
                    that would value it most.</p>
            </div>
            <div class="how-we-help-process-feature-points hwh-point-two" data-aos="zoom-in" data-aos-delay="50">
                <img src="../Photos/Product Tile Image/University Analysis.svg" />
                <h2>University Ananlysis</h2>
                <p>Universities have a student short listing checklist and you should have one for universities too. After we’ve matched you to a set of universities, we then use a custom tool kit that rates universities on Faculty/ Alumni/Resources format
                    and ranks them to best suit you.</p>
            </div>
            <div class="how-we-help-process-feature-points hwh-point-three" data-aos="zoom-in" data-aos-delay="50">
                <img src="../Photos/Product Tile Image/Application Mentoring.svg" />
                <h2>Application Mentoring</h2>
                <p>Once we’re sure of course/country/universities our mentors start the extensively collaborative process of constructing application drafts. International mentors use their in-country experience and extensive research on faculty/ alumni/
                    resources to ensure your application stand out.</p>
            </div>
        </div>

        <div class="success-story-div-product-common-section">
            <div class="success-story-div-product-common-section-inner">
                <div class="success-story-div-product-common-section-inner-left">
                    <span>SUCCESS STORY</span>
                    <p>"Dilligent understanding of my career aspirations helped me get into Universities in Canada and Europe. Mentord has a highly personalised process right and would recommend it to anyone in doubt."</p>
                    <label class="text-align-right">Vyom Sati</label>
                </div>
                <div class="success-story-div-product-common-section-inner-right">
                    <img src="../Photos/Testimonial Round Images/Vyom MTS.png" />
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->

    <section class="product-common-section">
        <a name="programs"></a>
        <h3>Programs</h3>
        <div class="programs-container">
            <div class="programs-container-inner admission-consulting-extra-class">
                <div class="programs-container-inner-product-tile">
                    <img src="../Photos/Product Tile Image/Personalized CV.svg" />
                    <h4>Admission Consulting</h4>
                    <span>Wholesome Package</span>
                    <hr/>
                    <p id="product-tile-inner-price-admission-consulting-tile">49,999</p>
                    <label class="consulting-hours-product-tile">20-25 Consulting Hours</label>
                    <ul>
                        <li><i class="fas fa-unlock unlock-green"></i> Candidate Interest Profiling
                            <ul>
                                <li>Clarity on the career you want to pursue</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> University Shortlisting
                            <ul>
                                <li>Matching Your DNA with a perfect selection of Universities</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> University Application
                            <ul>
                                <li>Essay, Statement of Purpose and Letter of Recommendation guidance</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> Scholarship Application & Interview Preparation
                            <ul>
                                <li>Applying to both Internal and External Scholarships</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> Visa Consulting & Interview Preparation
                            <ul>
                                <li>Tailor made guidance to get you the Visa you need</li>
                            </ul>
                        </li>
                    </ul>

                    <div class="tile-input-radio margin-bottom-20">
                        <input type="radio" onclick="admissionConsultingPriceUnderGraduateRadio()" name="admission-consulting-grad-type-option" />Undergrad.
                        <input type="radio" onclick="admissionConsultingPriceGraduateRadio()" name="admission-consulting-grad-type-option" checked="checked" />Postgrad.
                        <input type="radio" onclick="admissionConsultingPriceMbaGraduateRadio()" name="admission-consulting-grad-type-option" />MBA
                    </div>

                    <form action="https://www.mentord.co/Form%20Responses/shortresponseemail.php" method="POST" class="free-product-common-form">
                        <input type="email" placeholder="Enter Your Email" name="quick-response-email" />
                        <button type="submit">Buy Now</button>
                    </form>
                </div>
                <div class="programs-container-inner-product-tile">
                    <img src="../Photos/Product Tile Image/Sample CV.svg" />
                    <h4>Personalized CV</h4>
                    <span>Career Assessment + Counselling</span>
                    <hr/>
                    <p id="product-tile-inner-price">5999</p>
                    <label class="consulting-hours-product-tile">5-8 Consulting Hours</label>
                    <ul>
                        <li><i class="fas fa-unlock unlock-green"></i> Sample CV
                            <ul>
                                <li>Limited preview of Academic, Traditional, Skill Based CV's</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> Existing CV review and goal introspection
                            <ul>
                                <li>Review of existing CV and briefing on specific needs to achieve goals</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> Extensive CV tool kit
                            <ul>
                                <li>Counselling on using Mentord's custom built tool kit developed by industry leaders</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> One-One-Mentoring
                            <ul>
                                <li>Personalised CV development in Academic, Traditional, Skills based format</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> Targeted CV development
                            <ul>
                                <li>Internship/Scholarship/Admission specific CV consultation with industry expert</li>
                            </ul>
                        </li>
                    </ul>

                    <a href="cv-writing.php" class="tile-learn-more-link-sub-item">Learn More</a>

                    <form action="https://www.mentord.co/Form%20Responses/shortresponseemail.php" method="POST" class="free-product-common-form">
                        <input type="email" placeholder="Enter Your Email" name="quick-response-email" />
                        <button type="submit">Buy Now</button>
                    </form>
                </div>
                <div class="programs-container-inner-product-tile">
                    <img src="../Photos/Product Tile Image/Essay-Sop Writing.svg" />
                    <h4>Essay / SOP Writing</h4>
                    <span>One on One Essays/SOP's Guidance</span>
                    <hr/>
                    <p id="product-tile-inner-price-essay-sop-tile">11,999</p>
                    <label class="consulting-hours-product-tile">9-12 Consulting Hours</label>
                    <ul>
                        <li><i class="fas fa-unlock unlock-green"></i> Experience Profiling
                            <ul>
                                <li>Detailing of Past and Present experiences</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> Skill Profiling
                            <ul>
                                <li>Detailing exact skills acquired and ones to be highlighted</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> Future Progression
                            <ul>
                                <li>Aligning future aspirations with the needs of the university</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> Successful SOP's brainstorm
                            <ul>
                                <li>Understanding what worked for other students</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> SOP Questionnaire
                            <ul>
                                <li>Detailed questionnaire to bring out specific aspects that will wow the reader</li>
                            </ul>
                        </li>
                    </ul>

                    <div class="tile-input-radio margin-bottom-30">
                        <label>SOP 1 Generic and 3 University Specific</label><br/>
                        <input type="radio" onclick="essaySopPriceUnderGraduateRadio()" name="essay-sop-grad-type-option" checked="checked" />Undergrad.
                        <input type="radio" onclick="essaySopPriceGraduateRadio()" name="essay-sop-grad-type-option" />Postgrad.
                    </div>

                    <a href="essay-sop.php" class="tile-learn-more-link-sub-item">Learn More</a>

                    <form action="https://www.mentord.co/Form%20Responses/shortresponseemail.php" method="POST" class="free-product-common-form">
                        <input type="email" placeholder="Enter Your Email" name="quick-response-email"/>
                        <button type="submit">Buy Now</button>
                    </form>
                </div>
                <div class="programs-container-inner-product-tile">
                    <img src="../Photos/Product Tile Image/Visa.svg" />
                    <h4>VISA Application</h4>
                    <span>You don't fly without a VISA</span>
                    <hr/>
                    <p id="product-tile-inner-price">6999</p>
                    <label class="consulting-hours-product-tile">4-5 Consulting Hours</label>
                    <ul>
                        <li><i class="fas fa-unlock unlock-green"></i> Visa Requirement briefing
                            <ul>
                                <li>Detailed discussion on requirements for Visa</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> Documentation checklist preparation
                            <ul>
                                <li>Tracker and checklist to track requirements</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> Visa Documents submission
                            <ul>
                                <li>Document preparation as per checklist</li>
                            </ul>
                        </li>
                        <li><i class="fas fa-unlock unlock-green"></i> Visa interview Preparation
                            <ul class="margin-bottom-70">
                                <li>Detailed interview preparation</li>
                            </ul>
                        </li>
                    </ul>

                    <a href="visa.php" class="tile-learn-more-link-sub-item">Learn More</a>

                    <form action="https://www.mentord.co/Form%20Responses/shortresponseemail.php" method="POST" class="free-product-common-form">
                        <input type="email" placeholder="Enter Your Email" name="quick-response-email" />
                        <button type="submit">Buy Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>


    <!-- Why Mentord Section -->


    <section class="product-common-section">
        <a name="why-mentord"></a>
        <h3>Why Mentord</h3>
        <div class="why-mentord-tile-container-product-page">
            <div class="why-mentord-tile-product-page" data-aos="zoom-in" data-aos-delay="50">
                <img src="../Photos/Why Mentord Infographics/open and honest communication.svg" />
                <h2>Open and honest Communication</h2>
                <p>Successful collaboration depends on trust. A roadmap to build a stellar profile is decided and at each step of execution, you will know where things start and where they stand.</p>
            </div>
            <div class="why-mentord-tile-product-page padding-bottom-20" data-aos="zoom-in" data-aos-delay="50">
                <img src="../Photos/Why Mentord Infographics/dedicated Guide.svg" />
                <h2>A dedicated Guide</h2>
                <p>Each student is assigned a dedicated profile coach to coordinate with the academic and non-academic teams working on the student's profile</p>
            </div>
            <div class="why-mentord-tile-product-page" data-aos="zoom-in" data-aos-delay="50">
                <img src="../Photos/Why Mentord Infographics/Partnership.svg" />
                <h2>Partners from the get go</h2>
                <p>Great collaboration between our alumni and a specialised team has been the driver of our success. Their feedback is what drives our processes ensuring in the future also.</p>
            </div>
        </div>
    </section>


    <div class="clearfix"></div>


    <!-- FAQ's Section -->


    <section class="product-common-section">
        <a name="faqs"></a>
        <h3>Frequently Asked Questions</h3>
        <div class="product-common-faq-container">
            <div class="product-common-faq-inner">
                <h5>Are there dedicated sessions to discuss your profile/ambition/skills that need to come in the essay? How many?</h5>
                <p>Yes there will be dedicated sessions, generally 2-3 to discuss in detail these aspects that are pivotal to write a good Essay/SOP.</p>
                <h5>Will the Essay be written in one on one sessions (how many?) or they will just hand over a draft or ask you to write one?</h5>
                <p>Drafts or samples will be given only to support the student in understanding how an ideal essay should be. The in-house team tailors essays/SOP's individually for each student based on strategic discussions and admission needs.
                </p>
                <h5>Will your consultant share/ refer us to successful essays?</h5>
                <p>Yes they will, as samples. In addition the consultant can also share a detailed book demystifying t he art of writing a Ivy league Essay. </p>
                <h5>Will support be provided in all the documentation or that It would need to be done by the student?</h5>
                <p>Students will be supported in all documentation and admission uploads however the students will have to do the uploads, submissions and emails themselves under guidance of a consultant.</p>
            </div>
            <div class="product-common-faq-inner">
                <h5>Will the LOR be custom made on our experiences or just give you a draft? Will there be one on one sessions?</h5>
                <p>The letter of recommendation letter much like the SOP/Essay is very student specific and needs to focus differently on each individual student. Therefore the LOR's are also tailored individually to bring out the recommenders comments.
                </p>
                <h5>Will the application process be with an experienced consultant? Or will they ask you to apply on our own?</h5>
                <p>The in house consultants have more than 20+ years of experience and the application process is supported by the In house team. The consultant will hand hold you in creating logins and final submissions and uploading of documents.</p>
                <h5>Do they have a tool or checklist or tracker to ensure no deadline is missed?</h5>
                <p>Yes, the specialist supporting will curate a specific tracker after the universities have been shortlisted and finalised.
                </p>
                <h5>Do they have a dedicated repository of scholarships from across the world? How many % get scholarship?</h5>
                <p>Yes, Mentord has one of the largest repository of scholarships with over 15000+ scholarships from across the world to support students.</p>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <!-- Contact Us -->


    <section class="product-common-section">
        <a name="contact-us"></a>
        <div class="contact-us-product-common-section">
            <div class="contact-us-product-common-section-left">
                <h4>What can we help you with?</h4>
                <p>Feel feel to write to us. We usually respond within 24 hours!</p>
                <form class="contact-us-product-common-section-left-form">
                    <input type="text" placeholder="Name" />
                    <input type="email" placeholder="E-Mail" />
                    <input type="number" placeholder="Phone Number" />
                    <input type="text" placeholder="Your Query / Comment" />
                    <button>Reach Us</button>
                </form>
            </div>
            <div class="contact-us-product-common-section-right">
                <img src="../Photos/Contact Form Image/Contact Page.svg" />
            </div>
        </div>
    </section>

<!-- Main Body Ends Here -->

<?php require "footer.php" ?>