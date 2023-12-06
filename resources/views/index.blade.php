@extends('layouts.app')

@section('content')
    <div class="main__content">
    <section class="main__section">
        <div class="main__containerLayout">
            <div class="main__containerTop">
                <h1 class="main__heading">Bài viết nổi bật</h1>
                <div class="main__description">
                    <p>Tổng hợp các bài viết chia sẻ về kinh nghiệm tự học lập trình online và các kỹ thuật lập trình web.</p>
                </div>
            </div>
            <div class="main__containerBody">
                <section class="row_layout">
                    <section class="col_layout column_l-8">
                        <div class="main__blog-layout">
                            <div>
                                <div class="main__postItemWrapper">
                                    <div class="main__postItemHeader">
                                        <div class="main__postItemAuthor">
                                            <a href="">
                                                <div class="main__postItemAvatar">
                                                    <img src="./public/images/avatar.png" alt="TTnguyen">
                                                </div>
                                            </a>
                                            <a href="">
                                                <span>TTnguyen</span>
                                            </a>
                                        </div>
                                        <div class="main__postItemAction">
                                            <div class="main__postItemBookmark">
                                                <i class="fa-regular fa-bookmark"></i>
                                            </div>
                                            <div class="main__postItemOption">
                                                <i class="fa-solid fa-ellipsis"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main__postItemBody">
                                        <div class="main_postItemBodyInfo">
                                            <a href="">
                                                <h2 class="main__postItemTitle">Sự khác biệt giữa var, let và const trong JavaScript</h2>
                                            </a>
                                            <p class="main__postItemDesc">Tôi muốn thảo luận chi tiết về các từ khóa var,...</p>
                                            <div class="main__postItemInfo">
                                                <a class="main__postItemTag" href="">Javascript</a>
                                                <span>10 ngày trước</span>
                                                <span class="main__postItemDot">&centerdot;</span>3 phút đọc
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main__postItemWrapper">
                                    <div class="main__postItemHeader">
                                        <div class="main__postItemAuthor">
                                            <a href="">
                                                <div class="main__postItemAvatar">
                                                    <img src="./public/images/avatar.png" alt="TTnguyen">
                                                </div>
                                            </a>
                                            <a href="">
                                                <span>TTnguyen</span>
                                            </a>
                                        </div>
                                        <div class="main__postItemAction">
                                            <div class="main__postItemBookmark">
                                                <i class="fa-regular fa-bookmark"></i>
                                            </div>
                                            <div class="main__postItemOption">
                                                <i class="fa-solid fa-ellipsis"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main__postItemBody">
                                        <div class="main_postItemBodyInfo">
                                            <a href="">
                                                <h2 class="main__postItemTitle">Sự khác biệt giữa var, let và const trong JavaScript</h2>
                                            </a>
                                            <p class="main__postItemDesc">Tôi muốn thảo luận chi tiết về các từ khóa var,...</p>
                                            <div class="main__postItemInfo">
                                                <a class="main__postItemTag" href="">Javascript</a>
                                                <span>10 ngày trước</span>
                                                <span class="main__postItemDot">&centerdot;</span>3 phút đọc
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main__paginationWrapper">
                                    <div class="main_paginationPages">
                                        <div class="main_paginationPage main_paginationPageDisabled">
                                            <i class="fa-solid fa-angles-left"></i>
                                        </div>
                                        <div class="main_paginationPage main_paginationPageActive">1</div>
                                        <div class="main_paginationPage">2</div>
                                        <div class="main_paginationPage">3</div>
                                        <div class="main_paginationPage">4</div>
                                        <div class="main_paginationPage">5</div>
                                        <div class="main_paginationPage">6</div>
                                        <div class="main_paginationPage">7</div>
                                        <div class="main_paginationPage">8</div>
                                        <div class="main_paginationPage">9</div>
                                        <div class="main_paginationPage">10</div>
                                        <div class="main_paginationPage">11</div>
                                        <div class="main_paginationPage">12</div>
                                        <div class="main_paginationPage">
                                            <i class="fa-solid fa-angles-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="main__moduleColumn column_l-4">
                        <div class="TopicsList_container">
                            <h3>các chủ đề được đề xuất</h3>
                            <ul class="TopicsList_topic">
                                <li><a href="">Front-end / Mobile apps</a></li>
                                <li><a href="">Back-end / Devops</a></li>
                                <li><a href="">UI / UX / Design</a></li>
                                <li><a href="">Others</a></li>
                            </ul>
                        </div>
                        <div class="Banners_container">
                            <a class="Banners_banner" target="_blank" rel="noreferer">
                                <img src="{{ asset('images/bannerCourseHTML&CSS.png') }}" alt="HTML CSS Pro Banner" title="HTML CSS Pro Banner">
                            </a>
                            <a class="Banners_banner" target="_blank" rel="noreferer">
                                <img src="{{ asset('images/bannerF8Offical.png') }}" alt="F8 Youtube Banner" title="F8 Youtube Banner">
                            </a>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </section>
</div>
@endsection
