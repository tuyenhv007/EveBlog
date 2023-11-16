<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/register.css">
    <link rel="stylesheet" href="./public/css/login.css">
    <link rel="stylesheet" href="./public/css/detail_post.css">
    <link rel="stylesheet" href="./public/css/comment.css">
    <link rel="stylesheet" href="./public/css/modal.css">
    <link rel="stylesheet" href="./public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://kit.fontawesome.com/a331d69947.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<!-- Header -->
<header class="header">
    <div class="header__logo">
        <a class="" href="">
            Blog Dev
        </a>
    </div>
    <div class="header__search">
        <box-icon class="header__search-icon" name='search'></box-icon>
        <input id="search-input" type="text" placeholder="Tìm kiếm bài viết...">
        <box-icon class="header__close-icon" name='x'></box-icon>
    </div>
    <div class="header__btnLogin">
        <a>Đăng nhập</a>
    </div>
</header>

<main class="main">
    <!-- Left Side Bar -->
    <div class="main__sideBar App_hidden">
        <div class="main_sideBarWrapper">
            <div>
                <div class="main__createButtonWrapper">
                    <i class="fa-solid fa-plus main__sideBarIcon main_sideBarCreateIcon"></i>
                </div>
            </div>
            <ul class="main__sideBarList">
                <li>
                    <a class="main_sideBarItem main_sideBarItemActive" href="">
                        <i class="fa-solid fa-house main__sideBarIcon"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a class="main_sideBarItem" href="">
                        <i class="fa-solid fa-road main__sideBarIcon"></i>
                        <span>Lộ trình</span>
                    </a>
                </li>
                <li>
                    <a class="main_sideBarItem" href="">
                        <i class="fa-solid fa-lightbulb main__sideBarIcon"></i>
                        <span>Học</span>
                    </a>
                </li>
                <li>
                    <a class="main_sideBarItem" href="">
                        <i class="fa-brands fa-blogger-b main__sideBarIcon"></i>
                        <span>Blog</span>

                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main__content App_hidden">
        <div class="post__detailWrapper">
            <section class="index_grid_wide">
                <section class="row_layout">
                    <section class="column_l-2 col_layout">
                        <div class="post_detailAside">
                            <a href="">
                                <h4 class="post_detailUser"> TTnguyen</h4>
                            </a>
                            <p class="post_detailUserSlogan">ttnguyen.net là blog được lập ra với mục đích ghi chép và chia sẻ những gì tôi học về ngành CNTT</p>
                            <hr>
                            <div class="reaction__wrapper">
                                <div class="reaction_btnReact" title="Nhấn để thích bài viết này">
                                    <i class="fa-regular fa-heart"></i>
                                    <span>11</span>
                                </div>
                                <div class="reaction_btnReact">
                                    <i class="fa-regular fa-comment"></i>
                                    <span>11</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="column_l-5 col_layout">
                        <div>
                            <h1 class="post_detailHeading">Sự khác biệt giữa var, let và const trong JavaScript</h1>
                            <div class="post_detailHeader">
                                <div class="post_detailUser">
                                    <a href="">
                                        <div>
                                            <img class="post_detailUserAvatar" src="./public/images/avatar.png" alt="TTnguyen">
                                        </div>
                                    </a>
                                    <div class="post_detailInfo">
                                        <a href="">
                                            <span class="post_detailUserName"> TTnguyen</span>
                                        </a>
                                        <p class="post_detailTime">
                                            một tháng trước
                                            <span class="post_detailDot">&centerdot;</span>
                                            3 phút đọc
                                        </p>
                                    </div>
                                </div>
                                <div class="post_detailAction">
                                    <div class="post_detailBookmark post_detailOption">
                                        <i class="fa-regular fa-bookmark"></i>
                                    </div>
                                    <div class="post_detailOption">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="post_detailContent">
                                <div class="MarkdownParser_wrapper__JYN63 BlogDetail_markdownParser__QFL3L" style="--font-size: 1.8rem; --line-height: 2;"><p>Tôi muốn thảo luận chi tiết về các từ khóa var, let và const.</p>
                                    <h2 id="var" data-appended="true">
                                        <a data-link="" href="https://fullstack.edu.vn/blog/su-khac-biet-giua-var-let-va-const-trong-javascript.html#var" target="_self">
                                        </a>Var
                                    </h2>
                                    <p>Câu lệnh các biến JavaScript được sử dụng để khai báo một biến và tùy chọn, chúng ta có thể khởi tạo giá trị của biến đó.</p>
                                    <p>Ví dụ:</p>
                                    <pre><code>var a = 10
                                    </code></pre>
                                    <p>;</p>
                                    <p>Khai báo biến được xử lý trước khi thực thi mã.
                                        Phạm vi của một biến JavaScript được khai báo với  var là ngữ cảnh thực thi hiện tại của nó  .
                                        Phạm vi của một  biến JavaScript được khai báo bên ngoài hàm là phạm vi toàn cầu.
                                        Hãy xem xét đoạn mã sau.</p>
                                    <pre><code>function nodeSimplified(){
                                      var a =10;
                                      console.log(a);  // output 10
                                      if(true){
                                       var a=20;
                                       console.log(a); // output 20
                                      }
                                      console.log(a);  // output 20
                                    }``
                                    </code></pre>
                                    <p>Trong đoạn mã trên, bạn có thể tìm thấy, khi biến được cập nhật bên trong vòng lặp if, giá trị của biến "a" được cập nhật 20 trên toàn cầu, do đó bên ngoài vòng lặp if, giá trị vẫn tồn tại. Nó tương tự như biến Toàn cục có trong các ngôn ngữ khác. Tuy nhiên, hãy đảm bảo sử dụng chức năng này một cách cẩn thận vì có khả năng ghi đè giá trị hi</p>
                                    <h2 id="let" data-appended="true">
                                        <a data-link="" href="https://fullstack.edu.vn/blog/su-khac-biet-giua-var-let-va-const-trong-javascript.html#let" target="_self">
                                        </a>Let
                                    </h2>
                                    <p>Câu  lệnh let khai báo một biến cục bộ trong một phạm vi khối. Nó tương tự như  var ,  ở  chỗ chúng ta có thể tùy chọn khởi tạo biến.</p>
                                    <p>Ví dụ: let a = 10;</p>
                                    <p>Câu lệnh let cho phép bạn tạo một biến với phạm vi giới hạn trong khối mà nó được sử dụng.
                                        Nó tương tự như biến chúng ta khai báo bằng các ngôn ngữ khác như Java, .NET, v.v.
                                        Hãy xem xét đoạn mã sau.</p>
                                    <pre><code>function nodeSimplified(){
                                      let a =10;
                                      console.log(a);  // output 10
                                      if(true){
                                       let a=20;
                                       console.log(a); // output 20
                                      }
                                      console.log(a);  // output 10
                                    }
                                    </code></pre>
                                    <p>Đó là hành vi gần giống như chúng ta thấy trong hầu hết các ngôn ngữ.</p>
                                    <pre><code>function nodeSimplified(){
                                      let a =10;
                                      let a =20; //throws syntax error
                                      console.log(a);
                                    }
                                    </code></pre>
                                    <p>Thông báo Lỗi: Lỗi Cú pháp chưa được khai báo: Số nhận dạng 'a' đã được khai báo.</p>
                                    <p>Tuy nhiên, với var, nó hoạt động tốt.</p>
                                    <pre><code>function nodeSimplified(){
                                      var a =10;
                                      var a =20;
                                      console.log(a);  //output 20
                                    }
                                    </code></pre>
                                    <p>Phạm vi sẽ được duy trì tốt với câu lệnh let và khi sử dụng một hàm bên trong, câu lệnh let làm cho mã của bạn trở nên sạch sẽ và rõ ràng.</p>
                                    <p>Tôi hy vọng các ví dụ trên sẽ giúp bạn hiểu rõ hơn về lệnh var và let và nếu bạn có bất kỳ thắc mắc nào, hãy viết cho tôi trong phần bình luận.</p>
                                    <h2 id="const" data-appended="true">
                                        <a data-link="" href="https://fullstack.edu.vn/blog/su-khac-biet-giua-var-let-va-const-trong-javascript.html#const" target="_self">
                                        </a>const
                                    </h2>
                                    <p>Giá trị câu lệnh const có thể được gán một lần và chúng không thể được gán lại. Phạm vi của câu lệnh const hoạt động tương tự như câu lệnh let.</p>
                                    <p>Ví dụ: const a = 10;</p>
                                    <pre><code>function nodeSimplified(){
                                      const MY_VARIABLE =10;
                                      console.log(MY_VARIABLE);  //output 10
                                    }
                                    </code></pre>
                                    <p>Như thường lệ, các tiêu chuẩn đặt tên yêu cầu chúng ta khai báo biến const bằng chữ in hoa. const a = 10  sẽ hoạt động theo cách tương tự như mã được đưa ra ở trên. Các tiêu chuẩn đặt tên nên được tuân theo để duy trì mã trong thời gian dài.</p>
                                    <p>Câu hỏi: Điều gì sẽ xảy ra khi chúng ta cố gắng gán lại biến const?
                                        Hãy xem xét đoạn mã sau.</p>
                                    <pre><code>function nodeSimplified(){
                                      const MY_VARIABLE =10;
                                      console.log(MY_VARIABLE);  //output 10
                                      MY_VARIABLE =20;           //throws type error
                                      console.log(MY_VARIABLE);
                                    }
                                    </code></pre>
                                    <p>Thông báo lỗi: Loại chưa có Lỗi: Gán cho biến hằng số.</p>
                                    <p>Mã sẽ xuất hiện một lỗi khi chúng tôi cố gắng gán lại biến const hiện có.</p>
                                    <p>Nếu bạn thích bài viết này, hãy chia sẻ với bạn bè của bạn. Cảm ơn vì đã đọc!
                                        Nguồn: <a href="/external-url?continue=https%3A%2F%2Fttnguyen.net%2F" target="_blank" rel="noreferrer">ttnguyen</a></p>
                                </div>
                            </div>
                            <div class="post_bodyBottom">
                                <div class="reaction__wrapper">
                                    <div class="reaction_btnReact" title="Nhấn để thích bài viết này">
                                        <i class="fa-regular fa-heart"></i>
                                        <span>11</span>
                                    </div>
                                    <div class="reaction_btnReact">
                                        <i class="fa-regular fa-comment"></i>
                                        <span>11</span>
                                    </div>
                                </div>
                                <div class="post_detailTags">
                                    <a href="" class="post_detailTag">Javascript</a>
                                </div>
                                <div class="post_sameAuthorWrapper">
                                    <h3 class="post_sameAuthorHeading">Bài đăng cùng tác giả</h3>
                                    <p class="post_sameAuthorNoResult">Tác giả chưa có bài đăng nào khác.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </section>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="footer__wrapper">
    <section class="index_grid_wide index_grid_layout">
        <section class="row_layout">
            <section class="col_layout column_l-3">
                <div class="footer__warapperCol">
                    <div>
                        <div class="footer__columnTop">
                            <a href="">
                                <img src="./public/images/f8-icon.18cd71cfcfa33566a22b.png" alt="">
                            </a>
                            <h3 class="footer__sloganTop">Học Lập Trình Để Đi Làm</h3>
                        </div>
                        <p class="footer__contactList">
                            Điện thoại: <a href="tel:0246.329.1102">0246.329.1102</a>
                            <br>
                            Email: <a href="mailto:contact@fullstack.edu.vn">contact@fullstack.edu.vn</a>
                            <br>
                            Số 11D, lô A10, khu đô thị Nam Trung Yên, Phường Yên Hòa, Quận Cầu Giấy, TP. Hà Nội
                        </p>
                        <div class="footer__protected">

                        </div>
                    </div>
                </div>
            </section>
            <section class="col_layout column_l-2">
                <div class="footer__warapperCol">
                    <div>
                        <h2 class="footer__heading">Về F8</h2>
                        <ul class="footer__ulist">
                            <li><a href="">Giới thiệu</a> </li>
                            <li><a href="">Liên hệ</a> </li>
                            <li><a href="">Điều khoản</a> </li>
                            <li><a href="">Bảo mật</a> </li>
                            <li><a href="">Cơ hội việc làm</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="col_layout column_l-2">
                <div class="footer__warapperCol">
                    <div>
                        <h2 class="footer__heading">Sản phẩm</h2>
                        <ul class="footer__ulist">
                            <li><a href="">Game Nester</a></li>
                            <li><a href="">Game CSS Diner</a></li>
                            <li><a href="">Game CSS Selectors</a></li>
                            <li><a href="">Game Froggy</a></li>
                            <li><a href="">Game Froggy Pro</a></li>
                            <li><a href="">Game Scoops</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="col_layout column_l-2">
                <div class="footer__warapperCol">
                    <div>
                        <h2 class="footer__heading">Công cụ</h2>
                        <ul class="footer__ulist">
                            <li><a href="">Tạo CV xin việc</a></li>
                            <li><a href="">Rút gọn liên kết</a></li>
                            <li><a href="">Clip-path maker</a></li>
                            <li><a href="">Snippet generator</a></li>
                            <li><a href="">CSS Grid generator</a></li>
                            <li><a href="">Cảnh báo sờ tay lên mặt</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="col_layout column_l-3">
                <div class="footer__warapperCol">
                    <div>
                        <h2 class="footer__heading"><a href="">CÔNG TY CỔ PHẦN CÔNG NGHỆ GIÁO DỤC F8</a></h2>
                        <ul class="footer__ulist">
                            <li>Mã số thuế: 0109922901</li>
                            <li>Ngày thành lập: 04/03/2022</li>
                            <li>Lĩnh vực: Công nghệ, giáo dục, lập trình. F8 xây dựng và phát triển những sản phẩm mang lại giá trị cho cộng đồng.</li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>

        <section class="row_layout">
            <div class="footer__bottom">
                <p class="footer__copyright">© 2018 - 2023 F8. Nền tảng học lập trình hàng đầu Việt Nam</p>
                <div class="footer__social">
                    <a href=""><i class="fa-brands fa-square-youtube"></i></a>
                    <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </section>
    </section>

</footer>



<!-- VerticalModal -->
<div>
    <div class="verticalModal_wrapper">
        <div class="verticalModal_container">
            <div class="verticalModal_closed">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="verticalModal_body">
                <div class="commentDetail_row">
                    <div class="commentContentHeading">
                        <div>
                            <h4>19 bình luận</h4>
                            <p class="comment_help">(Nếu thấy bình luận spam, các bạn bấm report giúp admin nhé)</p>
                        </div>
                    </div>
                    <div class="commentBox_commentWrapper">
                        <div class="commentBox_avatar">
                            <div class="commentfallBack_avatar">
                                <img class="commentBox_avatarDetail" src="./public/images/sampleAvatar.jpg" alt="avatar Author">
                            </div>
                        </div>
                        <div class="commentBox_commentContent">
                            <div class="commentBox_placeholder">
                                <span>Viết bình luận của bạn...</span>
                            </div>
                        </div>
                    </div>
                    <div class="comment_detailComment">
                        <div class="commentBox_avatar">
                            <img class="commentBox_avatarDetail" src="./public/images/sampleAvatar.jpg" alt="avatar Author">
                        </div>
                        <div class="comment_commentBody">
                            <div class="comment_commentInner">
                                <div class="comment_commentWrapper">
                                    <div class="comment_commentContent">
                                        <div class="comment_commentContentHeading">
                                            <a href="">
                                                <span class="comment_commentAuthor">Nguyen Tien Dat</span>
                                            </a>
                                        </div>
                                        <div class="comment_commentText">
                                            <div class="markdowrParse_wrapper">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio vel autem officiis corrupti? Doloremque ipsam iste quasi, corrupti velit possimus accusantium? Molestias adipisci, facilis fugiat vel sint optio consectetur cum?</p>
                                            </div>
                                        </div>
                                        <div class="comment_reaction">
                                            <div class="comment_reactionIcon">
                                                <div style="display: flex; cursor: pointer; color: rgb(54, 88, 153); font-size: 12px; font-weight: 500;">
                                                    <div style="width: 18px; height: 18px; background-size: 100% 100%; border-radius: 8px; background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzM3NjZfMTY0OTMpIj4KPHBhdGggZD0iTTEyIDBDOC44MTc0IDAgNS43NjUxNiAxLjI2NDI4IDMuNTE0NzIgMy41MTQ3MkMxLjI2NDI4IDUuNzY1MTYgMCA4LjgxNzQgMCAxMkMwIDE1LjE4MjYgMS4yNjQyOCAxOC4yMzQ4IDMuNTE0NzIgMjAuNDg1M0M1Ljc2NTE2IDIyLjczNTcgOC44MTc0IDI0IDEyIDI0QzE1LjE4MjYgMjQgMTguMjM0OCAyMi43MzU3IDIwLjQ4NTMgMjAuNDg1M0MyMi43MzU3IDE4LjIzNDggMjQgMTUuMTgyNiAyNCAxMkMyNCA4LjgxNzQgMjIuNzM1NyA1Ljc2NTE2IDIwLjQ4NTMgMy41MTQ3MkMxOC4yMzQ4IDEuMjY0MjggMTUuMTgyNiAwIDEyIDBWMFoiIGZpbGw9InVybCgjcGFpbnQwX2xpbmVhcl8zNzY2XzE2NDkzKSIvPgo8cGF0aCBkPSJNMTguMjQzIDExLjAwN0MxOC41MDcgMTEuMTkxNSAxOC43NSAxMS4zNzQ1IDE4Ljc1IDEyLjAxOEMxOC43NSAxMi42NjMgMTguNDA2NSAxMi45MjQgMTguMDM5IDEzLjEwNTVDMTguMTg5IDEzLjM1IDE4LjIzNyAxMy42NDU1IDE4LjE3MjUgMTMuOTI0NUMxOC4wNTcgMTQuNDQwNSAxNy41ODQ1IDE0Ljg0MSAxNy4xNjQ1IDE0Ljk1OTVDMTcuMzQ2IDE1LjI1MDUgMTcuNDAzIDE1LjUzNyAxNy4xODcgMTUuODg5NUMxNi45MDk1IDE2LjMzMiAxNi42NjggMTYuNSAxNS42IDE2LjVIMTEuMjVDOS43NjggMTYuNSA5IDE1LjY4MSA5IDE1VjExLjQ5NzVDOSA5LjY1MjUgMTEuMjAwNSA4LjA4NSAxMS4yMDA1IDYuODAyNUwxMS4wNDE1IDUuMjA1QzExLjAzNCA1LjEwNzUgMTEuMDUzNSA0Ljg2OSAxMS4xMjg1IDQuOEMxMS4yNDg1IDQuNjgxNSAxMS41OCA0LjUgMTIuMDgxIDQuNUMxMi40MDggNC41IDEyLjYyNTUgNC41NjE1IDEyLjg4MiA0LjY4NDVDMTMuNzUzNSA1LjEgMTMuOTggNi4xNTE1IDEzLjk4IDYuOTk3NUMxMy45OCA3LjQwNCAxMy4zNTkgOC42MjIgMTMuMjc1IDkuMDQzNUMxMy4yNzUgOS4wNDM1IDE0LjU3NTUgOC43NTU1IDE2LjA5MzUgOC43NDVDMTcuNjg1IDguNzM2IDE4LjcxNyA5LjAzIDE4LjcxNyAxMC4wMDhDMTguNzE3IDEwLjM5OTUgMTguMzg4NSAxMC43OTI1IDE4LjI0MyAxMS4wMDdaTTUuNCAxMC41SDYuNkM2LjgzODcgMTAuNSA3LjA2NzYxIDEwLjU5NDggNy4yMzY0IDEwLjc2MzZDNy40MDUxOCAxMC45MzI0IDcuNSAxMS4xNjEzIDcuNSAxMS40VjE3LjFDNy41IDE3LjMzODcgNy40MDUxOCAxNy41Njc2IDcuMjM2NCAxNy43MzY0QzcuMDY3NjEgMTcuOTA1MiA2LjgzODcgMTggNi42IDE4SDUuNEM1LjE2MTMxIDE4IDQuOTMyMzkgMTcuOTA1MiA0Ljc2MzYgMTcuNzM2NEM0LjU5NDgyIDE3LjU2NzYgNC41IDE3LjMzODcgNC41IDE3LjFWMTEuNEM0LjUgMTEuMTYxMyA0LjU5NDgyIDEwLjkzMjQgNC43NjM2IDEwLjc2MzZDNC45MzIzOSAxMC41OTQ4IDUuMTYxMzEgMTAuNSA1LjQgMTAuNVoiIGZpbGw9IndoaXRlIi8+CjwvZz4KPGRlZnM+CjxsaW5lYXJHcmFkaWVudCBpZD0icGFpbnQwX2xpbmVhcl8zNzY2XzE2NDkzIiB4MT0iMTIiIHkxPSIwIiB4Mj0iMTIiIHkyPSIyNCIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgo8c3RvcCBzdG9wLWNvbG9yPSIjMThBRkZGIi8+CjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzAwNjJERiIvPgo8L2xpbmVhckdyYWRpZW50Pgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzM3NjZfMTY0OTMiPgo8cmVjdCB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIGZpbGw9IndoaXRlIi8+CjwvY2xpcFBhdGg+CjwvZGVmcz4KPC9zdmc+Cg=='); position: relative; z-index: 1; box-shadow: rgb(250, 250, 250) 0 0 0 2px;">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment_reactionNum">2</div>
                                        </div>
                                    </div>
                                    <div class="comment_commentTime">
                                        <div class="comment_createdAt">
                                            <div class="comment_createdAtLeft">
                                                <button class="comment_iconWrapper">
                                                    <span class="comment_likeComment">Thích</span>
                                                </button> .
                                                <span class="comment_replyComment">Trả lời</span>
                                            </div>
                                            <div class="comment_createdAtRight">
                                                <span class="comment_createdDotRight"> . </span>
                                                <span class="comment_time">2 tháng trước</span>
                                                <span class="comment_moreBtnWrapper">
                                                    <span class="comment_createdDotRight"> . </span>
                                                    <button class="comment_moreBtn">
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment_replyWrap"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal List Reaction -->
<div>
    <div class="modal_reactionOverlay">
        <div class="modal_reactionParentContainer">
            <div class="modal_reactionChildContainer">
                <div class="modal_reactionMainWrapper">
                    <button class="modal_reactionIconClose">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="modal_reactionHeaderWrapper">
                        <div class="modal_reactionHeader">
                            <p class="modal_reactionHeaderTitle">Tất cả</p>
                        </div>
                    </div>
                    <div class="modal_reactionBodyWrapper">
                        <div>
                            <div>
                                <div class="modal_reactionUser">
                                    <div class="modal_reactionUserAvatar">
                                        <a href="">
                                            <div class="modal_reactionAvatarWrapper">
                                                <div class="modal_reactionChildAvatar">
                                                    <img src="./public/images/sampleAvatar.jpg" alt="">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="modal_reactionEmotion">
                                            <span>
                                                <div>
                                                    <div style="padding: 5px; position: relative;">
                                                        <div style="position: absolute; top: -22px;"></div>
                                                        <div style="padding-bottom: 100%; background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzM3NjZfMTY0OTMpIj4KPHBhdGggZD0iTTEyIDBDOC44MTc0IDAgNS43NjUxNiAxLjI2NDI4IDMuNTE0NzIgMy41MTQ3MkMxLjI2NDI4IDUuNzY1MTYgMCA4LjgxNzQgMCAxMkMwIDE1LjE4MjYgMS4yNjQyOCAxOC4yMzQ4IDMuNTE0NzIgMjAuNDg1M0M1Ljc2NTE2IDIyLjczNTcgOC44MTc0IDI0IDEyIDI0QzE1LjE4MjYgMjQgMTguMjM0OCAyMi43MzU3IDIwLjQ4NTMgMjAuNDg1M0MyMi43MzU3IDE4LjIzNDggMjQgMTUuMTgyNiAyNCAxMkMyNCA4LjgxNzQgMjIuNzM1NyA1Ljc2NTE2IDIwLjQ4NTMgMy41MTQ3MkMxOC4yMzQ4IDEuMjY0MjggMTUuMTgyNiAwIDEyIDBWMFoiIGZpbGw9InVybCgjcGFpbnQwX2xpbmVhcl8zNzY2XzE2NDkzKSIvPgo8cGF0aCBkPSJNMTguMjQzIDExLjAwN0MxOC41MDcgMTEuMTkxNSAxOC43NSAxMS4zNzQ1IDE4Ljc1IDEyLjAxOEMxOC43NSAxMi42NjMgMTguNDA2NSAxMi45MjQgMTguMDM5IDEzLjEwNTVDMTguMTg5IDEzLjM1IDE4LjIzNyAxMy42NDU1IDE4LjE3MjUgMTMuOTI0NUMxOC4wNTcgMTQuNDQwNSAxNy41ODQ1IDE0Ljg0MSAxNy4xNjQ1IDE0Ljk1OTVDMTcuMzQ2IDE1LjI1MDUgMTcuNDAzIDE1LjUzNyAxNy4xODcgMTUuODg5NUMxNi45MDk1IDE2LjMzMiAxNi42NjggMTYuNSAxNS42IDE2LjVIMTEuMjVDOS43NjggMTYuNSA5IDE1LjY4MSA5IDE1VjExLjQ5NzVDOSA5LjY1MjUgMTEuMjAwNSA4LjA4NSAxMS4yMDA1IDYuODAyNUwxMS4wNDE1IDUuMjA1QzExLjAzNCA1LjEwNzUgMTEuMDUzNSA0Ljg2OSAxMS4xMjg1IDQuOEMxMS4yNDg1IDQuNjgxNSAxMS41OCA0LjUgMTIuMDgxIDQuNUMxMi40MDggNC41IDEyLjYyNTUgNC41NjE1IDEyLjg4MiA0LjY4NDVDMTMuNzUzNSA1LjEgMTMuOTggNi4xNTE1IDEzLjk4IDYuOTk3NUMxMy45OCA3LjQwNCAxMy4zNTkgOC42MjIgMTMuMjc1IDkuMDQzNUMxMy4yNzUgOS4wNDM1IDE0LjU3NTUgOC43NTU1IDE2LjA5MzUgOC43NDVDMTcuNjg1IDguNzM2IDE4LjcxNyA5LjAzIDE4LjcxNyAxMC4wMDhDMTguNzE3IDEwLjM5OTUgMTguMzg4NSAxMC43OTI1IDE4LjI0MyAxMS4wMDdaTTUuNCAxMC41SDYuNkM2LjgzODcgMTAuNSA3LjA2NzYxIDEwLjU5NDggNy4yMzY0IDEwLjc2MzZDNy40MDUxOCAxMC45MzI0IDcuNSAxMS4xNjEzIDcuNSAxMS40VjE3LjFDNy41IDE3LjMzODcgNy40MDUxOCAxNy41Njc2IDcuMjM2NCAxNy43MzY0QzcuMDY3NjEgMTcuOTA1MiA2LjgzODcgMTggNi42IDE4SDUuNEM1LjE2MTMxIDE4IDQuOTMyMzkgMTcuOTA1MiA0Ljc2MzYgMTcuNzM2NEM0LjU5NDgyIDE3LjU2NzYgNC41IDE3LjMzODcgNC41IDE3LjFWMTEuNEM0LjUgMTEuMTYxMyA0LjU5NDgyIDEwLjkzMjQgNC43NjM2IDEwLjc2MzZDNC45MzIzOSAxMC41OTQ4IDUuMTYxMzEgMTAuNSA1LjQgMTAuNVoiIGZpbGw9IndoaXRlIi8+CjwvZz4KPGRlZnM+CjxsaW5lYXJHcmFkaWVudCBpZD0icGFpbnQwX2xpbmVhcl8zNzY2XzE2NDkzIiB4MT0iMTIiIHkxPSIwIiB4Mj0iMTIiIHkyPSIyNCIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgo8c3RvcCBzdG9wLWNvbG9yPSIjMThBRkZGIi8+CjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzAwNjJERiIvPgo8L2xpbmVhckdyYWRpZW50Pgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzM3NjZfMTY0OTMiPgo8cmVjdCB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIGZpbGw9IndoaXRlIi8+CjwvY2xpcFBhdGg+CjwvZGVmcz4KPC9zdmc+Cg=='); background-size: 100% 100%;"></div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="modal_reactionUserName">
                                        <a href="">
                                            <span class="modal_reactionItemName">Tuyến Hoàng Văn</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="./public/javascript/header.js"></script>
<script src="./public/javascript/register.js"></script>

</html>
