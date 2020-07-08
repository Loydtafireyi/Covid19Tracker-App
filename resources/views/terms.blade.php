@extends('layouts.frontend')

@section('seo')
    <title>Zimbabwe Covid19 | Terms & Conditions</title>
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
    <div class="col-xl-12">
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
                <div class="col-xl-12">
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
                                        <p> <b>AGREEMENT TO TERMS</b>

                                        <p class="mb-0">These Terms and Conditions constitute a
                                            legally binding
                                            agreement made between you, whether personally or on behalf
                                            of an entity (“you”) and BLCK Creative Studio & Eloquent Geeks (“we,” “us”
                                            or “our”), concerning your access to and use of this website as well as any other media form, media
                                            channel, mobile website or mobile application related,
                                            linked, or otherwise connected thereto (collectively, the
                                            “Site”).

                                            You agree that by accessing the Site, you have read,
                                            understood, and agree to be bound by all of these Terms and
                                            Conditions. If you do not agree with all of these Terms and
                                            Conditions, then you are expressly prohibited from using the
                                            Site and you must discontinue use immediately.

                                            Supplemental terms and conditions or documents that may be
                                            posted on the Site from time to time are hereby expressly
                                            incorporated herein by reference. We reserve the right, in
                                            our sole discretion, to make changes or modifications to
                                            these Terms and Conditions at any time and for any reason.

                                            We will alert you about any changes by updating the “Last
                                            updated” date of these Terms and Conditions, and you waive
                                            any right to receive specific notice of each such change.

                                            It is your responsibility to periodically review these Terms
                                            and Conditions to stay informed of updates. You will be
                                            subject to, and will be deemed to have been made aware of
                                            and to have accepted, the changes in any revised Terms and
                                            Conditions by your continued use of the Site after the date
                                            such revised Terms and Conditions are posted.

                                            The information provided on the Site is not intended for
                                            distribution to or use by any person or entity in any
                                            jurisdiction or country where such distribution or use would
                                            be contrary to law or regulation or which would subject us
                                            to any registration requirement within such jurisdiction or
                                            country.

                                            Accordingly, those persons who choose to access the Site
                                            from other locations do so on their own initiative and are
                                            solely responsible for compliance with local laws, if and to
                                            the extent local laws are applicable.</p>
                                            <br>
                                        <p class="mb-0"></p><b>These terms and conditions include:</b>
                                            <br>
                                            <br>
                                            <ul><b>Option 1:</b> The Site is intended for users who are at least 18
                                            years old. Persons under the age of 18 are not permitted to
                                            register for the Site.</ul>
                                            
                                            <ul><b>Option 2:</b> [The Site is intended for users who are at
                                            least
                                            13 years of age.] All users who are minors in the
                                            jurisdiction in which they reside (generally under the age
                                            of 18) must have the permission of, and be directly
                                            supervised by, their parent or guardian to use the Site. If
                                            you are a minor, you must have your parent or guardian read
                                            and agree to these Terms and Conditions prior to you using
                                            the Site.</ul>
                                            </p>

                                        <p class="mb-0"></p><b> INTELLECTUAL PROPERTY RIGHTS</b>
                                            <br>
                                            <br>
                                            Unless otherwise indicated, the Site is our proprietary
                                            property and all source code, databases, functionality,
                                            software, website designs, audio, video, text, photographs,
                                            and graphics on the Site (collectively, the “Content”) and
                                            the trademarks, service marks, and logos contained therein
                                            (the “Marks”) are owned or controlled by us or licensed to
                                            us, and are protected by copyright and trademark laws and
                                            various other intellectual property rights and unfair
                                            competition laws of the United States, foreign
                                            jurisdictions, and international conventions.

                                            The Content and the Marks are provided on the Site “AS IS”
                                            for your information and personal use only. Except as
                                            expressly provided in these Terms and Conditions, no part of
                                            the Site and no Content or Marks may be copied, reproduced,
                                            aggregated, republished, uploaded, posted, publicly
                                            displayed, encoded, translated, transmitted, distributed,
                                            sold, licensed, or otherwise exploited for any commercial
                                            purpose whatsoever, without our express prior written
                                            permission.

                                            Provided that you are eligible to use the Site, you are
                                            granted a limited license to access and use the Site and to
                                            download or print a copy of any portion of the Content to
                                            which you have properly gained access solely for your
                                            personal, non-commercial use. We reserve all rights not
                                            expressly granted to you in and to the Site, the Content and
                                            the Marks.</p>

                                        <p class="mb-0"></p><b> USER REPRESENTATIONS</b>
                                            <br>
                                            <br>
                                            <p>By using the Site, you represent and warrant that:

                                            <ul>(1) all registration information you submit will be true,
                                            accurate, current, and complete;</ul> 
                                            <ul>(2) you will maintain
                                            the
                                            accuracy of such information and promptly update such
                                            registration information as necessary;</ul>

                                            <ul>(3) you have the legal capacity and you agree to comply with
                                            these Terms and Conditions;</ul>

                                            <ul>(4) you are not under the age of 13;</ul>

                                            <ul>(5) not a minor in the jurisdiction in which you reside [,
                                            or if a minor, you have received parental permission to use
                                            the Site];</ul>

                                            <ul>(6) you will not access the Site through automated or
                                            non-human means, whether through a bot, script, or
                                            otherwise;</ul>

                                            <ul>(7) you will not use the Site for any illegal or
                                            unauthorized purpose;</ul>

                                            <ul>(8) your use of the Site will not violate any applicable law
                                            or regulation.</ul>
                                            <br>
                                            If you provide any information that is untrue, inaccurate,
                                            not current, or incomplete, we have the right to suspend or
                                            terminate your account and refuse any and all current or
                                            future use of the Site (or any portion thereof).</p>

                                        <p class="mb-0"></p><b> USER REGISTRATION</b>
                                            <br>
                                            <br>
                                            You may be required to register with the Site. You agree to
                                            keep your password confidential and will be responsible for
                                            all use of your account and password. We reserve the right
                                            to remove, reclaim, or change a username you select if we
                                            determine, in our sole discretion, that such username is
                                            inappropriate, obscene, or otherwise objectionable.</p>

                                            <p><b>PROHIBITED ACTIVITIES</b></p>

                                            You may not access or use the Site for any purpose other
                                            than that for which we make the Site available. The Site may
                                            not be used in connection with any commercial endeavors
                                            except those that are specifically endorsed or approved by
                                            us.</p>
                                            <br>

                                            <p>As a user of the Site, you agree not to:</p>

                                            Systematically retrieve data or other content from the Site
                                            to create or compile, directly or indirectly, a collection,
                                            compilation, database, or directory without written
                                            permission from us.</p>
                                            make any unauthorized use of the Site, including collecting
                                            usernames and/or email addresses of users by electronic or
                                            other means for the purpose of sending unsolicited email, or
                                            creating user accounts by automated means or under false
                                            pretenses.</p>
                                            use a buying agent or purchasing agent to make purchases on
                                            the Site.</p>
                                            use the Site to advertise or offer to sell goods and
                                            services.</p>
                                            circumvent, disable, or otherwise interfere with
                                            security-related features of the Site, including features
                                            that prevent or restrict the use or copying of any Content
                                            or enforce limitations on the use of the Site and/or the
                                            Content contained therein.</p>
                                            engage in unauthorized framing of or linking to the Site.
                                            trick, defraud, or mislead us and other users, especially in
                                            any attempt to learn sensitive account information such as
                                            user passwords;</p>
                                            make improper use of our support services or submit false
                                            reports of abuse or misconduct.</p>
                                            engage in any automated use of the system, such as using
                                            scripts to send comments or messages, or using any data
                                            mining, robots, or similar data gathering and extraction
                                            tools.</p>
                                            interfere with, disrupt, or create an undue burden on the
                                            Site or the networks or services connected to the Site.
                                            attempt to impersonate another user or person or use the
                                            username of another user.</p>
                                            sell or otherwise transfer your profile.</p>
                                            use any information obtained from the Site in order to
                                            harass, abuse, or harm another person.</p>
                                            use the Site as part of any effort to compete with us or
                                            otherwise use the Site and/or the Content for any
                                            revenue-generating endeavor or commercial enterprise.</p>
                                            decipher, decompile, disassemble, or reverse engineer any of
                                            the software comprising or in any way making up a part of
                                            the Site.</p>
                                            attempt to bypass any measures of the Site designed to
                                            prevent or restrict access to the Site, or any portion of
                                            the Site.</p>
                                            harass, annoy, intimidate, or threaten any of our employees
                                            or agents engaged in providing any portion of the Site to
                                            you.</p>
                                            delete the copyright or other proprietary rights notice from
                                            any Content.</p>
                                            copy or adapt the Site’s software, including but not limited
                                            to Flash, PHP, HTML, JavaScript, or other code.
                                            upload or transmit (or attempt to upload or to transmit)
                                            viruses, Trojan horses, or other material, including
                                            excessive use of capital letters and spamming (continuous
                                            posting of repetitive text), that interferes with any
                                            party’s uninterrupted use and enjoyment of the Site or
                                            modifies, impairs, disrupts, alters, or interferes with the
                                            use, features, functions, operation, or maintenance of the
                                            Site.</p>
                                            upload or transmit (or attempt to upload or to transmit) any
                                            material that acts as a passive or active information
                                            collection or transmission mechanism, including without
                                            limitation, clear graphics interchange formats (“gifs”), 1×1
                                            pixels, web bugs, cookies, or other similar devices
                                            (sometimes referred to as “spyware” or “passive collection
                                            mechanisms” or “pcms”).</p>
                                            except as may be the result of standard search engine or
                                            Internet browser usage, use, launch, develop, or distribute
                                            any automated system, including without limitation, any
                                            spider, robot, cheat utility, scraper, or offline reader
                                            that accesses the Site, or using or launching any
                                            unauthorized script or other software.</p>
                                            disparage, tarnish, or otherwise harm, in our opinion, us
                                            and/or the Site.</p>
                                            use the Site in a manner inconsistent with any applicable
                                            laws or regulations.</p>
                                            </p>
                                        </p>
                                    </div>
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