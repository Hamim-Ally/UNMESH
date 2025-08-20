<?php
require 'include/conf.php';
require 'include/router.php';
require 'include/renderer.php';
require 'include/functions.php';

$router = new Router(BasePath); // Set base path if needed
?>


<!DOCTYPE html>
<html lang="en">

    <?php renderHead("UNMESH", BasePath); ?>

    <body>
        <!-- page wrapper -->
        <div class="knsl-app">

            <?php
            require 'components/preloader.php';

            // Home Page Components
            $router->get('', function () {
                renderNavbar(BasePath, '/');

                include 'components/hero.php';
                include 'components/achievement.php';
                include 'components/vision.php';
                include 'components/approach.php';
                include 'components/services.php';
                include 'components/testimonials.php';
                include 'components/footer.php';
            });

            // About Page Components
            $router->get('about', function () {
                renderNavbar(BasePath, '/about');

                renderBannerSection(
                    'Innovative Environmental Solutions <br> For Impactful Change',
                    'BUILDING A SUSTAINABLE FUTURE',
                    ['Home' => BasePath, 'About' => ''],
                    '#ECFAFB'
                );

                include 'components/achievement.php';
                include 'components/team.php';
                include 'components/story.php';
                include 'components/footer.php';
            });

            // Services Page Components
            $router->get('services', function () {
                renderNavbar(BasePath, '/services');

                renderBannerSection(
                    'Innovative Environmental Strategies<br>For All',
                    'Empowering Sustainable Solutions',
                    ['Home' => BasePath, 'Services' => ''],
                    '#ECFAFB'
                );

                include 'components/service.php';
                include 'components/approach.php';
                include 'components/footer.php';
            });

            // Contact Page Components
            $router->get('contact', function () {
                renderNavbar(BasePath, '/contact');
                renderBannerSection(
                    'Connect With Us<br>For Your Sustainability Needs',
                    'Get in Touch',
                    ['Home' => BasePath, 'Contact' => ''],
                    ''
                );

                include 'components/contact-info.php';
                include 'components/contact-form.php';
                include 'components/footer.php';
            });

            // Service 1
            
            $router->get('service/{id}', function ($id) {
                renderNavbar(BasePath, '/service');
                if ($id == '1') {
                    renderBannerSection(
                        'Life Cycle Assessment (LCA) & Environmental Product Declarations (EPDs)',
                        '',
                        ['Home' => BasePath , 'Services' => 'services', 'LCA & EPDs' => ''],

                        ''
                    );

                    echo '            <div>
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-8">

                            <img src="' . BasePath . '/img/services/0.jpg" alt="cover" class="knsl-default-img knsl-mb-30">

                            <div class="knsl-blog-post knsl-mb-60">

                                <p class="knsl-mb-40"><b>Engineering Sustainability Through Evidence-Based Environmental
                                        Decision-Making</b>
                                    <br>At <b>UNMESH Consulting</b>, we integrate <b>Life Cycle Assessment (LCA)</b> and
                                    <b>Environmental
                                        Product Declarations
                                        (EPDs)</b> into the core of our engineering and sustainability consulting
                                    services. These tools
                                    support
                                    data-driven environmental decision-making across design, construction,
                                    manufacturing, and operational
                                    phases.
                                </p>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- team -->
                <section class="knsl-p-100-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="knsl-center knsl-title-frame knsl-mb-100">
                                    <h2 class="knsl-mb-20">Other Services</h2>
                                    <a target="_blank" href="/unmesh/services" class="knsl-btn knsl-btn-md">Read More</a>
                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <a target="_blank" href="'. BasePath .'/service/2">
                                    <div class="knsl-team-card">
                                        <div class="knsl-photo-frame">
                                            <img src="' . BasePath . '/img/services/7.jpg" alt="face">
                                        </div>
                                        <div class="knsl-team-member-descr">
                                            <h4 class="knsl-mb-10">GHG Accounting & Carbon Footprinting</h4>
                                        </div>
                                    </div>
                                </a>


                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <a target="_blank" href="'. BasePath .'/service/3">
                                    <div class="knsl-team-card">
                                        <div class="knsl-photo-frame">
                                            <img src="' . BasePath . '/img/services/8.jpg" alt="face">
                                        </div>
                                        <div class="knsl-team-member-descr">
                                            <h4 class="knsl-mb-10">Industrial Hygiene & Occupational Health</h4>
                                        </div>
                                    </div>
                                </a>


                            </div>
                            <div class="col-12 col-md-6 col-lg-4">

                                <a target="_blank" href="'. BasePath .'/service/4">
                                    <div class="knsl-team-card">
                                        <div class="knsl-photo-frame">
                                            <img src="' . BasePath . '/img/services/9.jpeg" alt="face">
                                        </div>
                                        <div class="knsl-team-member-descr">
                                            <h4 class="knsl-mb-10">Our Engineering-Led Industrial Hygiene Services</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- team end -->
            </div>';
                } elseif ($id == '2') {
                    renderBannerSection(
                        'GHG Accounting & Carbon Footprinting',
                        '',
                        ['Home' => BasePath , 'Services' => 'services', 'GHG Accounting & Carbon Footprinting' => ''],
                        ''
                    );

                    echo '            <div>
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-8">

                            <img src="' . BasePath . '/img/services/7.jpg" alt="cover" class="knsl-default-img knsl-mb-30">

                            <div class="knsl-blog-post knsl-mb-60">

                                <p class="knsl-mb-40">
                                    <b>Engineering Low-Carbon Futures Through Measurement, Management, and
                                        Mitigation</b>
                                    At <b>UNMESH Consulting</b>, we offer specialized services in <b>Greenhouse Gas
                                        (GHG) emissions accounting</b> and
                                    <b>carbon footprinting</b> to help organizations quantify, report, and ultimately
                                    reduce their
                                    environmental impact. By applying rigorous engineering principles and
                                    internationally recognized
                                    standards, we support your transition toward <b>carbon neutrality</b>, regulatory
                                    compliance, and long-term
                                    climate resilience.
                                </p>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- team -->
                <section class="knsl-p-100-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="knsl-center knsl-title-frame knsl-mb-100">
                                    <h2 class="knsl-mb-20">Other Services</h2>
                                    <a target="_blank" href="/unmesh/services" class="knsl-btn knsl-btn-md">Read More</a>
                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <a target="_blank" href="/unmesh/service/1">
                                    <div class="knsl-team-card">
                                        <div class="knsl-photo-frame">
                                            <img src="' . BasePath . '/img/services/0.jpg" alt="face">
                                        </div>
                                        <div class="knsl-team-member-descr">
                                            <h4 class="knsl-mb-10">Life Cycle Assessment (LCA) & Environmental Product
                                                Declarations (EPDs)</h4>
                                        </div>
                                    </div>
                                </a>


                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <a target="_blank" href="/unmesh/service/3">
                                    <div class="knsl-team-card">
                                        <div class="knsl-photo-frame">
                                            <img src="' . BasePath . '/img/services/8.jpg" alt="face">
                                        </div>
                                        <div class="knsl-team-member-descr">
                                            <h4 class="knsl-mb-10">Industrial Hygiene & Occupational Health<br><br><br>
                                            </h4>
                                        </div>
                                    </div>
                                </a>


                            </div>
                            <div class="col-12 col-md-6 col-lg-4">

                                <a target="_blank" href="/unmesh/service/4">
                                    <div class="knsl-team-card">
                                        <div class="knsl-photo-frame">
                                            <img src="' . BasePath . '/img/services/9.jpeg" alt="face">
                                        </div>
                                        <div class="knsl-team-member-descr">
                                            <h4 class="knsl-mb-10">Our Engineering-Led Industrial Hygiene
                                                Services<br><br><br></h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- team end -->
            </div>';
                } elseif ($id == '3') {
                    renderBannerSection(
                        'Industrial Hygiene & Occupational Health',
                        '',
                        ['Home' => BasePath , 'Services' => 'services', 'Industrial Hygiene & Occupational Health' => ''],
                        ''
                    );

                    echo '            <div>
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-8">

                            <img src="' . BasePath . '/img/services/8.jpg" alt="cover" class="knsl-default-img knsl-mb-30">

                            <div class="knsl-blog-post knsl-mb-60">

                                <p class="knsl-mb-40">
                                    <b>Engineering Safer, Healthier, and More Sustainable Work Environments</b>
                                    At <b>UNMESH Consulting</b>, we view <b>Industrial Hygiene</b> not only as a
                                    regulatory necessity but as a <b>strategic component of sustainable operations and
                                        systems
                                        engineering.</b>
                                    By proactively identifying and mitigating environmental and occupational health
                                    risks, we help
                                    organizations build
                                    <b>resilient, compliant, and high-performance workplaces</b>—where human health is
                                    protected alongside
                                    environmental integrity.
                                </p>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- team -->
                <section class="knsl-p-100-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="knsl-center knsl-title-frame knsl-mb-100">
                                    <h2 class="knsl-mb-20">Other Services</h2>
                                    <a target="_blank" href="/unmesh/services" class="knsl-btn knsl-btn-md">Read More</a>
                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <a target="_blank" href="/unmesh/service/1">
                                    <div class="knsl-team-card">
                                        <div class="knsl-photo-frame">
                                            <img src="' . BasePath . '/img/services/0.jpg" alt="face">
                                        </div>
                                        <div class="knsl-team-member-descr">
                                            <h4 class="knsl-mb-10">Life Cycle Assessment (LCA) & Environmental Product
                                                Declarations (EPDs)
                                            </h4>
                                        </div>
                                    </div>
                                </a>


                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <a target="_blank" href="/unmesh/service/2">
                                    <div class="knsl-team-card">
                                        <div class="knsl-photo-frame">
                                            <img src="' . BasePath . '/img/services/7.jpg" alt="face">
                                        </div>
                                        <div class="knsl-team-member-descr">
                                            <h4 class="knsl-mb-10">GHG Accounting & Carbon Footprinting<br></h4>
                                        </div>
                                    </div>
                                </a>


                            </div>
                            <div class="col-12 col-md-6 col-lg-4">

                                <a target="_blank" href="/unmesh/service/4">
                                    <div class="knsl-team-card">
                                        <div class="knsl-photo-frame">
                                            <img src="' . BasePath . '/img/services/9.jpeg" alt="face">
                                        </div>
                                        <div class="knsl-team-member-descr">
                                            <h4 class="knsl-mb-10">Our Engineering-Led Industrial Hygiene Services<br>
                                            </h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- team end -->
            </div>';
                }
                elseif ($id == '4') {
                    renderBannerSection(
                        'Our Engineering-Led Industrial Hygiene Services',
                        '',
                        ['Home' => BasePath , 'Services' => 'services', 'Our Engineering-Led Industrial Hygiene Services' => ''],
                        ''
                    );

                    echo '            <div>
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-8">

                            <img src="' . BasePath . '/img/services/9.jpeg" alt="cover" class="knsl-default-img knsl-mb-30">

                            <div class="knsl-blog-post knsl-mb-60">

                                <p class="knsl-mb-40">
                                    Our multidisciplinary team of environmental engineers, occupational hygienists, and
                                    sustainability consultants provide full-spectrum services tailored to manufacturing,
                                    infrastructure, public sector, and high-performance commercial environments:
                                </p>
                                <ul class="list knsl-mb-40">
                                    <li class="knsl-mb-10">Indoor Air Quality (IAQ) Programs - Engineering-based
                                        investigations and control strategies for ventilation systems, HVAC efficiency,
                                        and contaminant pathways</li>
                                    <li class="knsl-mb-10">Noise Monitoring & Acoustic Engineering - Sound mapping,
                                        noise exposure analysis, and design recommendations for hearing conservation
                                    </li>
                                    <li class="knsl-mb-10">Ergonomics & Human Factors Engineering - Assessments and
                                        training programs to reduce repetitive strain and improve workstation design
                                    </li>
                                    <li class="knsl-mb-10">Chemical & Biological Exposure Assessments - Evaluation and
                                        control of hazardous substances, including storage, handling, and off-gassing
                                    </li>
                                    <li class="knsl-mb-10">Odor Source Investigations - Root cause analysis of olfactory
                                        complaints and impact mitigation</li>
                                    <li class="knsl-mb-10">Respiratory Protection Programs - Including selection,
                                        training, quantitative fit testing, and regulatory documentation</li>
                                    <li class="knsl-mb-10">Sustainable Facility Design Consultation - Embedding
                                        health-conscious engineering into LEED, WELL, and ISO-aligned building projects
                                    </li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- team -->
                <section class="knsl-p-100-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="knsl-center knsl-title-frame knsl-mb-100">
                                    <h2 class="knsl-mb-20">Other Services</h2>
                                    <a target="_blank" href="/unmesh/services" class="knsl-btn knsl-btn-md">Read More</a>
                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <a target="_blank" href="/unmesh/service/1">
                                    <div class="knsl-team-card">
                                        <div class="knsl-photo-frame">
                                            <img src="' . BasePath . '/img/services/0.jpg" alt="face">
                                        </div>
                                        <div class="knsl-team-member-descr">
                                            <h4 class="knsl-mb-10">Life Cycle Assessment (LCA) & Environmental Product
                                                Declarations (EPDs)
                                            </h4>
                                        </div>
                                    </div>
                                </a>


                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <a target="_blank" href="/unmesh/service/2">
                                    <div class="knsl-team-card">
                                        <div class="knsl-photo-frame">
                                            <img src="' . BasePath . '/img/services/7.jpg" alt="face">
                                        </div>
                                        <div class="knsl-team-member-descr">
                                            <h4 class="knsl-mb-10">GHG Accounting & Carbon Footprinting<br><br><br></h4>
                                        </div>
                                    </div>
                                </a>


                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <a target="_blank" href="/unmesh/service/3">
                                    <div class="knsl-team-card">
                                        <div class="knsl-photo-frame">
                                            <img src="' . BasePath . '/img/services/8.jpg" alt="face">
                                        </div>
                                        <div class="knsl-team-member-descr">
                                            <h4 class="knsl-mb-10">Industrial Hygiene & Occupational Health<br><br><br>
                                            </h4>
                                        </div>
                                    </div>
                                </a>


                            </div>
                        </div>
                    </div>
                </section>
                <!-- team end -->

            </div>
';
                }
                include 'components/footer.php';
            });


            $router->run();


            ?>

        </div>
        <!-- page wrapper end -->

        <?php loadScripts( BasePath); ?>

    </body>

</html>