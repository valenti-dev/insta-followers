<?
$page_class = 'terms_page';
$title = 'Terms - Followerus';
$description = 'By using our Services, you agree to these terms. We encourage you to learn more about the terms and conditions of using Followerus\'s service';
?>
<? include '../assets/php/head.php'; ?>
    <section class="title_sect">
        <div class="wrap">
            <h1 class="row1">Terms</h1>
            <div class="row2">
                The beginning of cooperation with the FollowerUs company means acceptance of these terms.
            </div>
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
                    Registration and usage of the agency services mean that you accurately and fully understand the conditions of this agreement.
                    It also indicates that the Client agrees with all applicable laws and regulations and takes responsibility for its actions within these laws.
                    In case of disagreement with existing rules, the use of this resource is prohibited.
                    All information on the site is protected by current copyright legislation and trademarks.
                </p>
                <h2>1. Service Policy</h2>
                <p>
                    FollowerUs only offers advertising services for your account on the Instagram page.
                    At the same time, our company does not guarantee the activity of new subscribers on your page.
                    We are only engaged in attracting new followers. Therefore, you should add Automatic Likes to your service package.
                    We pull subscribers for you at a certain speed only on request.
                </p>
                <hr>
                <h2>2. Payment Policy</h2>
                <p>
                    We accept payment by plastic cards as well as e-wallets, and crypto.
                    All expenses are made after a thorough check of the authenticity and solvency of the card.
                    We do not store banking and financial information on our websites.
                    To conduct secure transactions, our IT department uses only SSL encryption.
                </p>
                <p>
                    By agreeing to cooperate with our company, you exclude the possibility of filing fraudulent claims, disputes, or claims.
                    Otherwise, we will delete all followers and block your account.
                </p>
                <hr>
                <h2>3. Registration Process</h2>
                <p>
                    The person accepting the registration and this agreement must be at least 13 years old.
                </p>
                <hr>
                <h2>
                    4. Copyright
                </h2>
                <p>
                    Copying photos and any materials, texts, and images from our site is strictly prohibited. It will require written permission from our side.
                </p>
                <hr>
                <h2>5. Limitation of Responsibility</h2>
                <p>
                    The FollowerUs company is not responsible for the activity of your account, possible damage, or removal of photos and videos by Instagram.
                    Our company does not give guarantees for the services provided; we cannot guarantee the uninterrupted operation of your website.
                    Our team cannot assure you of any consequences of the execution of the order.
                </p>
                <hr>
                <h2>
                    6. Changing the Terms
                </h2>
                <p>
                    The FollowerUs company reserves the right to change these terms of the agreement at any time.
                    We are committed to providing timely notice of these changes.
                    From the moment changes are posted on our website, they will be considered effective.
                    Additional notices are not provided.
                    If customers continue to use our website and services, they agree with the changes made.
                </p>
                <h2>7. Refund Policy</h2>
                <p>
                    The probability of a refund for the services provided on our website is considered on an individual basis.
                    The policy described in terms of Service is not a money-back guarantee.
                    The following several factors may affect the decision to return (but not guarantee):
                </p>
                <ul>
                    <li>number of new subscribers;</li>
                    <li>date of receipt of money;</li>
                    <li>force majeure circumstances;</li>
                    <li>terms of the contract.</li>
                </ul>
                <p>
                    Reviews from previous clients, order type, and previous experience with our team may also be taken into account.
                </p>
                <p>
                    The Company may decide on a refund at its sole discretion. The client must contact the Support Service to consider this issue. Reimbursement occurs within 30 days.
                </p>
                <h3>7.1 Return as a Result of Not Receiving Orders</h3>
                <p>
                    The possibility of a refund for not receiving orders is at the discretion of the Company. The following matters are observed to consider the issue by the client:
                </p>
                <ul>
                    <li>The account remains active and public.</li>
                    <li>The Instagram account name was correct.</li>
                    <li>The account and messages have not been deleted.</li>
                    <li>Posts in the Instagram feed meet the requirements of the network and have not been blocked.</li>
                    <li>At least 3 days have passed since the publication.</li>
                    <li>The client has already contacted our Support Service. His question remained unresolved.</li>
                </ul>
                <h3>7.2 Refund due to No Likes and Followers</h3>
                <p>
                    Our Company strives to provide the highest quality of its services. But we cannot be responsible for the speed of recruiting followers.
                    The Instagram service can remove or block posts that users mark as spam. It can lead to a reduction in likes and the number of subscribers.
                </p>
                <hr>
                <h2>8. Privacy Policy</h2>
                <p>
                    The FollowerUs company follows all privacy policy rules:
                </p>
                <ul>
                    <li>We do not transfer the personal data of clients to third parties. Our company does not collect information about its customers and their cards.</li>
                    <li>We send all notifications to the email specified during the execution of the service agreement.</li>
                    <li>Our team guarantees the anonymity of our clients. All data for logging into your account and working with the referral system are encrypted by secure data protection systems.</li>
                    <li>If there are problems with the payment card, we will immediately notify you by email.</li>
                    <li>
                        Data transmission is encrypted using SSL encryption and through the secure server of our payment gateways.
                        We do not sell or buy, transfer, exchange, store, or otherwise disclose your information to anyone other than Acquirer, card networks/associations, or in response to lawful government requests.
                    </li>
                </ul>
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