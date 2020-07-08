@extends('layouts.frontend')

@section('seo')
    <title>Zimbabwe Covid19 | Privacy Policy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Zimbabwe Covid19 online tracker. Deaths {{ $deaths->sum('deaths') }}, Infected {{ $infections->sum('infections') }}, Recovered {{ $recovered->sum('recovered') }}, Tests {{ $tests->sum('tests') }} . Track local COVID-19 with active, recoveries and death rate on the map." name="description" />
    <meta name="keywords" keywords="The latest maps and charts on the spread of COVID-19 in Zimbabwe, including cases, deaths, closures and restrictions, Corona virus Zimbabwe, coronavirus death in zimbabwe, covid19 coronavirus statistics in Zimbabwe, harare covid19, Bulawayo corona virus stats, covid19 in zimbabwe by province, Live statistics and coronavirus news tracking the number of confirmed cases, recovered patients, tests, and death toll due to the COVID-19 coronavirus from Zimbabwe">
    <meta property="og:image" content="https://covid19zim.online/frontend/images/zimbabwe (1).svg">
    <meta property="og:url" content="https://covid19zim.online/">
    <meta content="Loyd" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
@endsection

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="text-center">
                        <h3>Our Privacy Policy</h3>
                        <p class="text-muted"> This privacy policy outlines how our website collects,
                            uses and shares information. Please reach to us for any questions about the privacy policy</p>

                        <button type="button" class="btn btn-success waves-effect waves-light mt-1">Email us your question</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light mt-1">Send us a tweet</button>

                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row mt-4 justify-content-center">
                <div class="col-xl-5">
                    <div class="p-2">
                        
                        <div class="accordion custom-accordion" id="accordionExample">
                            <div class="card mb-2">
                                <div class="card-header bg-light">
                                    <h5 class="card-title m-0">
                                        <a href="#" class="text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Introduction
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p> BLCK Creative Studios & Eloquent Geeks respects the
                                            privacy of our users. This Privacy Policy
                                            explains how we collect, use, disclose, and safeguard your
                                            information when you visit our website, including any other media
                                            form, media channel, mobile website, or mobile application
                                            related or connected thereto.
                                            Please read this privacy policy carefully. If you do not
                                            agree with the terms of this privacy policy, please do not
                                            access the site.

                            <p class="mb-0">We reserve the right to make changes to
                                            this Privacy Policy
                                            at any time and for any reason. We will alert you about any
                                            changes by updating the “Last Updated” date of this Privacy
                                            Policy. Any changes or modifications will be effective
                                            immediately upon posting the updated Privacy Policy on the
                                            Site, and you waive the right to receive specific notice of
                                            each such change or modification.</p>

                            <p class="mb-0">You are encouraged to periodically review
                                            this Privacy
                                            Policy to stay informed of updates. You will be deemed to
                                            have been made aware of, will be subject to, and will be
                                            deemed to have accepted the changes in any revised Privacy
                                            Policy by your continued use of the Site after the date such
                                            revised Privacy Policy is posted.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-header bg-light">
                                    <h5 class="card-title m-0">
                                        <a href="#" class="text-dark" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Collection of your Information
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>We may collect information about you in a variety of ways.
                                            The information we may collect on the Site includes:
                                            <br>
                                            <br><b>Personal Data</b><br>

                                            Personally identifiable information, such as your name,
                                            address, email address, and telephone number, and
                                            demographic information, such as your age, gender, hometown,
                                            and interests, that you voluntarily give to us [when you
                                            register with the Site or when
                                            you choose to participate in various activities related to
                                            the Site, such as online chat
                                            and message boards. You are under no obligation to provide
                                            us with personal information of any kind, however your
                                            refusal to do so may prevent you from using certain features
                                            of the Site.</p>
                                        <p class="mb-0"><b>Derivative Data</b>
                                            <br>
                                            Information our servers automatically collect when you
                                            access the Site, such as your IP address, your browser type,
                                            your operating system, your access times, and the pages you
                                            have viewed directly before and after accessing the Site.
                                            This information
                                            may also include your device name and type, your operating
                                            system, your phone number, your country, your likes and
                                            replies to a post, and other interactions with the
                                            application and other users via server log files, as well as
                                            any other information you choose to provide.</p>
                                            <br>
                                        <p class="mb-0"><b>Financial Data</b>
                                            <br>
                                            Financial information, such as data related to your payment
                                            method (e.g. valid credit card number, card brand,
                                            expiration date) that we may collect when you donate or request information about our
                                            services from the Site. We
                                            store only very limited, if any, financial information that
                                            we collect. Otherwise, all financial information is stored
                                            by our payment processor, PayPal,
                                            Paynow, and you are encouraged to
                                            review their privacy policy and contact them directly for
                                            responses to your questions.</p>
                                            <br>
                                            <b>Facebook Permissions</b>
                                            <br>

                                            The Site may by default access
                                            your Facebook basic account information, including your
                                            name, email, gender, birthday, current city, and profile
                                            picture URL, as well as other information that you choose to
                                            make public. We may also request access to other permissions
                                            related to your account, such as friends, checkins, and
                                            likes, and you may choose to grant or deny us access to each
                                            individual permission. For more information regarding
                                            Facebook permissions, refer to the Facebook Permissions
                                            Reference page.
                                            <br>
                                            <p class="mb-0"><b>Data From Social Networks</b>
                                            <br>
                                            User information from social networking sites, such as
                                            Facebook, Google+, Instagram,
                                            Twitter including your name, your social
                                            network username, location, gender, birth date, email
                                            address, profile picture, and public data for contacts, if
                                            you connect your account to such social networks.</p>
                                            <br>
                                            <p class="mb-0"><b>Mobile Device Data</b>
                                            <br>
                                            Device information, such as your mobile device ID, model,
                                            and manufacturer, and information about the location of your
                                            device, if you access the Site from a mobile device.</p>
                                            <br>
                                            <p class="mb-0"><b>Third-Party Data</b>
                                            <br>
                                            Information from third parties, such as personal information
                                            or network friends, if you connect your account to the third
                                            party and grant the Site permission to access this
                                            information.</p>
                                            <br>
                                            <p class="mb-0"><b>Data From Contests, Giveaways, and
                                                    Surveys</b>
                                            <br>
                                            Personal and other information you may provide when entering
                                            contests or giveaways and/or responding to surveys.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-header bg-light">
                                    <h5 class="card-title m-0">
                                        <a href="#" class="text-dark" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Use of your Information
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Having accurate information about you permits us to provide
                                            you with a smooth, efficient, and customized experience.
                                            Specifically, we may use information collected about you via
                                            the Site</p>
                                        <p class="mb-0">
                                            <uL>
                                            <li>Administer sweepstakes, promotions, and
                                            contests.</li>
                                            <li>Assist law enforcement and respond to subpoena.</li>
                                            <li>Compile anonymous statistical data and analysis for use
                                            internally or with third parties.</li>
                                            <li>Create and manage your account.</li>
                                            <li>Deliver targeted advertising, coupons, newsletters, and
                                            other information regarding promotions and the Site [and our
                                            mobile application] to you.</li>
                                            <li>Email you regarding your account or order.</li>
                                            <li>Enable user-to-user communications.</li>
                                            <li>Fulfill and manage purchases, orders, payments, and other
                                            transactions related to the Site.</li>
                                            <li>Generate a personal profile about you to make
                                            future visits
                                            to the Site more personalized.</li>
                                            <li>Increase the efficiency and operation of the Site.</li>
                                            <li>Monitor and analyze usage and trends to improve your
                                            experience with the Site.</li>
                                            <li>Notify you of updates to the Site.</li>
                                            <li>Offer new products, services, and/or
                                            recommendations to you.</li>
                                            <li>Perform other business activities as needed.
                                            Prevent fraudulent transactions, monitor against theft, and
                                            protect against criminal activity.</li>
                                            <li>Process payments and refunds.</li>
                                            <li>Request feedback and contact you about your use of
                                            the Site</li>
                                            <li>Resolve disputes and troubleshoot problems.
                                            Respond to product and customer service requests.
                                            Send you a newsletter.</li>
                                            <li>Solicit support for the Site</li>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- accordian end -->

                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-5">
                    <div class="p-2">
                        <div class="accordion custom-accordion" id="accordionExample1">
                            <div class="card mb-2">
                                <div class="card-header bg-light">
                                    <h5 class="card-title m-0">
                                        <a href="#" class="text-dark" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            Disclosure of your information
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseFour" class="collapse show" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p> We may share information we have collected about you in
                                            certain situations. Your information may be disclosed as
                                            follows:</p>
                                            <br>
                                        <p class="mb-0"><b>By Law or to Protect Rights</b>
                                            <br>
                                            If we believe the release of information about you is
                                            necessary to respond to legal process, to investigate or
                                            remedy potential violations of our policies, or to protect
                                            the rights, property, and safety of others, we may share
                                            your information as permitted or required by any applicable
                                            law, rule, or regulation. This includes exchanging
                                            information with other entities for fraud protection and
                                            credit risk reduction.</p>
                                            <br>
                                            <p class="mb-0"><b>By Law or to Protect Rights</b>
                                                <br>
                                                If we believe the release of information about you is
                                                necessary to respond to legal process, to investigate or
                                                remedy potential violations of our policies, or to
                                                protect
                                                the rights, property, and safety of others, we may share
                                                your information as permitted or required by any
                                                applicable
                                                law, rule, or regulation. This includes exchanging
                                                information with other entities for fraud protection and
                                                credit risk reduction.</p>
                                                <br>
                                            <p class="mb-0">
                                                <br>
                                                <b>Third-Party Service Providers</b>
                                                <br>
                                                We may share your information with third parties
                                                that perform services for us or on our behalf,
                                                including payment processing, data analysis, email
                                                delivery, hosting services, customer service, and
                                                marketing assistance.</p>
                                                <br>
                                            <p class="mb-0">
                                                <b>Marketing Communications</b>
                                                <br>
                                                With your consent, or with an opportunity for
                                                you to withdraw consent, we may share your
                                                information with third parties for marketing
                                                purposes, as permitted by law.</p>
                                                <br>
                                            <p class="mb-0">
                                                <b>Interactions with Other Users</b>
                                                <br>
                                                If you interact with other users of the Site, those users may see your name,
                                                profile photo, and descriptions of your activity,
                                                including sending invitations to other users, chatting
                                                with other users, liking posts, following blogs.</p>
                                                <br>
                                            <p class="mb-0">
                                                <b>Online Postings</b>
                                                <br>
                                                When you post comments, contributions or other content
                                                to the Site, your posts may
                                                be viewed by all users and may be publicly distributed
                                                outside the Site in
                                                perpetuity.</p>
                                                <br>
                                            <p class="mb-0">
                                                <b>Third-Party Advertisers</b>
                                                <br>
                                                We may use third-party advertising companies to serve
                                                ads when you visit the Site
                                                These companies may use information about your visits to
                                                the Site and other websites
                                                that are contained in web cookies in order to provide
                                                advertisements about goods and services of interest to
                                                you.</p>
                                                <br>
                                                <p class="mb-0">
                                                <br>
                                                <b>Affiliates</b>
                                                <br>
                                                We may share your information with our affiliates, in
                                                which case we will require those affiliates to honor
                                                this Privacy Policy. Affiliates include our parent
                                                company and any subsidiaries, joint venture partners or
                                                other companies that we control or that are under common
                                                control with us.</p>
                                                <br>
                                            <p class="mb-0">
                                                <br>
                                                <b>Business Partners</b>
                                                <br>
                                                We may share your information with our business partners
                                                to offer you certain products, services or promotions.
                                                </p>
                                                <br>
                                            <p class="mb-0">
                                                <b>Other Third Parties</b>
                                                <br>
                                                We may share your information with advertisers and
                                                investors for the purpose of conducting general business
                                                analysis. We may also share your information with such
                                                third parties for marketing purposes, as permitted by
                                                law.</p>
                                                <br>
                                            <p class="mb-0">
                                                <b>Sale or Bankruptcy</b>
                                                <br>
                                                If we reorganize or sell all or a portion of our assets,
                                                undergo a merger, or are acquired by another entity, we
                                                may transfer your information to the successor entity.
                                                If we go out of business or enter bankruptcy, your
                                                information would be an asset transferred or acquired by
                                                a third party. You acknowledge that such transfers may
                                                occur and that the transferee may decline honor
                                                commitments we made in this Privacy Policy.
                                                <br>
                                                We are not responsible for the actions of third parties
                                                with whom you share personal or sensitive data, and we
                                                have no authority to manage or control third-party
                                                solicitations. If you no longer wish to receive
                                                correspondence, emails or other communications from
                                                third parties, you are responsible for contacting the
                                                third party directly.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-header bg-light">
                                    <h5 class="card-title m-0">
                                        <a href="#" class="text-dark" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Tracking Technologies
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p><b>Cookies and Web Beacons</b>
                                        <p class="mb-0">
                                            We may use cookies, web beacons, tracking pixels, and other
                                            tracking technologies on the Site [and our mobile
                                            application] to help customize the Site [and our mobile
                                            application] and improve your experience. When you access
                                            the Site, your personal
                                            information is not collected through the use of tracking
                                            technology. Most browsers are set to accept cookies by
                                            default. You can remove or reject cookies, but be aware that
                                            such action could affect the availability and functionality
                                            of the Site. You may not decline
                                            web beacons. However, they can be rendered ineffective by
                                            declining all cookies or by modifying your web browser’s
                                            settings to notify you each time a cookie is tendered,
                                            permitting you to accept or decline cookies on an individual
                                            basis.
                                            <br>
                                            [We may use cookies, web beacons, tracking pixels, and other
                                            tracking technologies on the Site [and our mobile
                                            application] to help customize the Site [and our mobile
                                            application] and improve your experience. For more
                                            information on how we use cookies, please refer to our
                                            Cookie Policy posted on the Site, which is incorporated into
                                            this Privacy Policy. By using the Site, you agree to be
                                            bound by our Cookie Policy.]
                                            </p>
                                        </p>
                                        <p><b>Internet-Based Advertising</b>
                                            <p class="mb-0">
                                                Additionally, we may use third-party software to serve
                                                ads on the Site [and our mobile application], implement
                                                email marketing campaigns, and manage other interactive
                                                marketing initiatives. This third-party software may use
                                                cookies or similar tracking technology to help manage
                                                and optimize your online experience with us. For more
                                                information about opting-out of interest-based ads,
                                                visit the Network Advertising Initiative Opt-Out Tool or
                                                Digital Advertising Alliance Opt-Out Tool.
                                            </p>
                                        </p>
                                        <p><b>Website Analytics</b>
                                            <p class="mb-0">
                                                We may also partner with selected third-party vendors[,
                                                such as [Adobe Analytics,] [Clicktale,] [Clicky,]
                                                [Cloudfare,] [Crazy Egg,] [Flurry Analytics,] [Google
                                                Analytics,] [Heap Analytics,] [Inspectlet,]
                                                [Kissmetrics,] [Mixpanel,] [Piwik,] and others], to
                                                allow tracking technologies and remarketing services on
                                                the Site [and our mobile application] through the use of
                                                first party cookies and third-party cookies, to, among
                                                other things, analyze and track users’ use of the Site
                                                [and our mobile application], determine the popularity
                                                of certain content and better understand online
                                                activity. By accessing the Site [,our mobile
                                                application,], you consent to the collection and use of
                                                your information by these third-party vendors. You are
                                                encouraged to review their privacy policy and contact
                                                them directly for responses to your questions. We do not
                                                transfer personal information to these third-party
                                                vendors. However, if you do not want any information to
                                                be collected and used by tracking technologies, you can
                                                visit the third-party vendor or the Network Advertising
                                                Initiative Opt-Out Tool or Digital Advertising Alliance
                                                Opt-Out Tool.
                                                <br>
                                                You should be aware that getting a new computer,
                                                installing a new browser, upgrading an existing browser,
                                                or erasing or otherwise altering your browser’s cookies
                                                files may also clear certain opt-out cookies, plug-ins,
                                                or settings.
                                            </p>
                                        </p>
                                        <p><b>Cookies and Web Beacons</b>
                                            <p class="mb-0">
                                                We may use cookies, web beacons, tracking pixels, and
                                                other
                                                tracking technologies on the Site [and our mobile
                                                application] to help customize the Site [and our mobile
                                                application] and improve your experience. When you
                                                access
                                                the Site, your personal
                                                information is not collected through the use of tracking
                                                technology. Most browsers are set to accept cookies by
                                                default. You can remove or reject cookies, but be aware
                                                that
                                                such action could affect the availability and
                                                functionality
                                                of the Site. You may not
                                                decline
                                                web beacons. However, they can be rendered ineffective
                                                by
                                                declining all cookies or by modifying your web browser’s
                                                settings to notify you each time a cookie is tendered,
                                                permitting you to accept or decline cookies on an
                                                individual
                                                basis.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-header bg-light">
                                    <h5 class="card-title m-0">
                                        <a href="#" class="text-dark" class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Security of your information
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <p>We use administrative, technical, and physical security
                                            measures to help protect your personal information. While we
                                            have taken reasonable steps to secure the personal
                                            information you provide to us, please be aware that despite
                                            our efforts, no security measures are perfect or
                                            impenetrable, and no method of data transmission can be
                                            guaranteed against any interception or other type of misuse.
                                            </p>
                                        <p class="mb-0">Any information disclosed online is vulnerable
                                            to
                                            interception and misuse by unauthorized parties. Therefore,
                                            we cannot guarantee complete security if you provide
                                            personal information.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- accordian end -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->


        </div>
    </div><!-- end col -->
</div>

@endsection