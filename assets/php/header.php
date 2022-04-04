<header class="header" :class="header.opened ? 'opened' : ''">
    <div class="wrap">
        <div class="row1">
            <div class="left">
                <logo></logo>
            </div>
            <div class="right">
                <button class="menu_burger" @click="header.opened = !header.opened">
                    <img class="menu_burder_icon" alt="menu-burger" src="/img/icons/menu-burger-292E43.svg">
                </button>
                <div class="menu_wrap">
                    <ul class="menu">
                        <li class="menu_item <?= (isset($_GET['q']) && $_GET['q'] == 'pricing') ? 'active' : ''; ?>"><a href="/pricing" class="menu_item_anchor"><span class="menu_item_label">Pricing</span></a></li>
                        <li class="menu_item <?= (isset($_GET['q']) && $_GET['q'] == 'free-instagram-followers') ? 'active' : ''; ?>"><a href="/free-instagram-followers" class="menu_item_anchor"><span class="menu_item_label">Free Instagram Followers</span></a></li>
                        <li class="menu_item <?= (isset($_GET['q']) && $_GET['q'] == 'contact') ? 'active' : ''; ?>"><a href="/contact" class="menu_item_anchor"><span class="menu_item_label">Contact</span></a></li>
                        <li class="menu_item"><butt href="/pricing">Pricing</butt></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<?
$styles['header'] = [
    'rel' => 'stylesheet',
    'href' => '/css/header.css',
];
?>