<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.body {
    background-color: #f2f2f2;
}

.header__header {
    background-color: #154054;
    height: 110px;
}

/* Search, Logo */
.header__box {
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 66%;
    border-bottom: 1px solid #9CCFF4;
}

.header__logo {
    margin-left: 20px;
}

.header__logo img {
    width: 165px;
    height: 37px;
}

.header__search {
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 40%;
    /* border-bottom: 1px solid #fff; */
}

.header__input_search {
    width: 515px;
    padding: 5.5px 5.5px 5.5px 25px;
}

.header__icon_search {
    color: #fff;
    font-size: 16px;
    padding: 11px;
    background-color: #32AAD6;
}

/* Navbar */
.header__nav {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 0 !important;
    margin: 0 13%;
}

.header__nav_item {
    font-size: 14px;
}

.header__nav_item:hover {
    background-color: #32AAD6;
}

.header__container {
    margin: 0 20%;
}

.header__ul {
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 40%;
    list-style-type: none;
}

@media screen and (max-width: 800px) {
    .header__input_search {
        width: 300px;
    }
}

@media screen and (max-width: 530px) {
    .header__input_search {
        width: 250px;
    }
}

@media screen and (max-width: 480px) {
    .header__header {
        height: 150px;
    }

    .header__box {
        flex-direction: column;
        height: 70%;
    }

    .header__input_search {
        width: 300px;
    }

    .header__nav {
        margin: 0 5%;
    }
}
</style>

<body>
    <header class="header__header">
        <div class="header__box">
            <div class="header__logo">
                <img class="header__img"
                    src="https://bizweb.dktcdn.net/100/315/268/themes/857513/assets/logo.png?1671122588148" alt="logo">
            </div>
            <div class="header__search">
                <input class="header__input_search" type="text" placeholder="Từ khóa tìm kiếm">
                <i class="fas fa-search header__icon_search"></i>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm header__nav navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item me-3">
                            <a class="nav-link text-light header__nav_item" href="#">Trang
                                chủ</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link text-light header__nav_item" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link text-light header__nav_item" href="#">Tour du lịch</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link text-light header__nav_item" href="#">Tin tức</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link text-light header__nav_item" href="#">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    </div>
</body>