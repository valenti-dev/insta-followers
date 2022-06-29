<?
$page_class = 'terms_page';
$title = 'Privacy Policy - Followerus';
$description = '';
?>
<? include '../assets/php/head.php'; ?>
    <section class="title_sect">
        <div class="wrap">
            <h1 class="row1">Privacy Policy</h1>
            <!--
            <div class="row2">
            </div>
            -->
        </div>
    </section>
<?
$styles['title_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/title_sect.css',
];
?>
    <section class="terms_seo_sect">
        <div class="wrap">
            <div class="row1">
                <p>
                    By reading this document you submit an agreement between https://followerus.com/ further called Followerus or We and you (further called Customer) on the rules and conditions listed in this Privacy Policy. If you have some doubts whether to agree with any statement or word written in this text, please, leave this website and do not make any purchase on it.
                </p>
                <p>
                    This document was developed to enclose the main principles of the user’s data use by followerus.com.
                </p>
                <hr>
                <h2>1. Main operations with the Customer’s personal information that are held by Followerus</h2>
                <p>
                    Likeware collects personal information from the Customer to make the process of purchase convenient and simple. We do not provide third parties with the information indicated on the website <a href="/">https://followerus.com/</a> by the Customer including email and contact information listed in the order the Customer places on the website.
                </p>
                <p>
                    The website collects the following data from the Customer:
                </p>
                <ul>
                    <li>Email address for notifications and account access</li>
                    <li>Personal information to submit an order on the website</li>
                    <li>Payment data that is necessary to provide payments for purchased services from Followerus</li>
                    <li>Cookies and user data collected by Google Analytics services</li>
                </ul>
                <hr>
                <h2>2. Main principles Followerus adheres to when operating with the Customer’s data</h2>
                <ul>
                    <li>We provide notifications mailing to the Customer’s email indicated when registering on the website or submitting an order.</li>
                    <li>We collect personal information to tailor our services to the Customer’s needs.</li>
                    <li>We provide anonymity and confidentiality to any user who makes an order/purchase on the website.</li>
                    <li>We strictly protect all the data that is required for the account access of the Customer. These data are not available to third parties in any case.</li>
                    <li>We provide protection for the Customer’s payment data at the highest level. In case of any problem occurring with the Customer’s payment card data or information, Followerus is obliged to immediately inform the Customer via the website’s pages or via email about the problem to prevent money leakage.</li>
                    <li>We collect user’s data for specified purposes listed below.</li>
                </ul>
                <hr>
                <h2>3. What purposes do We follow by collecting personal data and user information?</h2>
                <ul>
                    <li>To collect the Customer’s information for further promotions and notifications about the services and products Followerus offers.</li>
                    <li>To detect and prevent potentially violated and illegal activities of the website’s users.</li>
                    <li>To analyze and evaluate the services that Followerus offers including the website’s statistics and analytics provided by Google Analytics services.</li>
                </ul>
                <hr>
                <h2>4. Google Analytics’ use of the Customer’s data</h2>
                <p>
                    Our website uses Google Analytics services provided by Google, Inc. These services use a special type of user’s data – so-called ‘cookies’ that are text-format pieces of data located on the Customer’s computer for further analyses on how the Customer uses the website. This information is saved and stored on the servers of Google, Inc. These data are not associated with any other data used by Google.
                </p>
                <p>
                    You can customize cookies or refuse to provide them to Google Analytics using the following link:<br>
                    <a href="https://tools.google.com/dlpage/gaoptout?hl=en-GB" target="_blank">https://tools.google.com/dlpage/gaoptout?hl=en-GB</a>
                </p>
                <hr>
                <h2>5. Technologies that we use for the Customer’s data protection</h2>
                <p>
                    Followerus guarantees the safety and confidentiality of the personal data of the Customer by implementing double encryption technology on the website.
                    <span style="background-color: yellow">The website uses SSL encryption that ensures the confidentiality of your information in the transmission of data. In no case, we do collect store, or transfer data from your card. The payment operations are carried out entirely through the secure server of our payment gateways. Qloyd OU will not sell, purchase, provide, exchange or in any other manner disclose Account or Transaction data, or personal information of or about a Cardholder to anyone, except, it’s Acquirer, Card networks/associations or in response to valid government demands.</span>
                </p>
                <hr>
                <h2>6. Do you have any questions about this Privacy Policy document?</h2>
                <p>
                    Followerus will be glad to answer them. Please, provide us with feedback via email:<br>
                    <a href="mailto:contact@followerus.com">contact@followerus.com</a>
                </p>
                <hr>
            </div>
        </div>
    </section>
<?
$styles['terms_seo_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/terms_seo_sect.css',
];
?>
    <section class="deals_sect">
        <div class="wrap">
            <h2 class="row1">Our reputation</h2>
            <div class="row2">
                We are the platform, trusted by more than 75% of top 100 influencers companies.
            </div>
            <div class="row3">
                <? for ($i = 1; $i <= 12; $i++) : ?>
                    <div class="item">
                        <img class="img" src="/img/deals_sect/image-<?= $i; ?>.png" alt="">
                    </div>
                <? endfor; ?>
            </div>
        </div>
    </section>
<?
$styles['deals_sect'] = [
    'rel' => 'stylesheet',
    'href' => '/css/deals_sect.css',
];
?>
<? include '../assets/php/foot.php'; ?>