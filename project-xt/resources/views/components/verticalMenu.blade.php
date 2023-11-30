<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang đánh giá điểm rèn luyện</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>
    tailwind.config = {
        theme: {
            extend: {
                gridTemplateColumns: {
                    '112': '1fr 1fr 2fr'
                }
            }
        }
    }
    </script>
    <style>
    * {
        padding: 0;
        margin: 0;
    }

    .container {
        /* max-width: fit-content !important; */
        min-width: -webkit-fill-available;
        padding: 0;margin: 0;
    }

    .p0 {
        padding: 0;
    }

    .brd {
        background-color: #f5d66a;
        padding: 12px 10%;
        font-weight: bold;
    }

    .row {
        display: flex;
        margin-bottom: 20px;
    }

    .table {
        width: 75%;
    }

    .btn {
        margin-left: 48%;
        margin-bottom: 20px;
    }

    .menu {
        display: flex;
        padding: 20px;
        font-size: 20px;
        font-weight: bold;
    }

    ul {
        width: 100%;
    }

    .menu a {
        padding: 5px;
        line-height: 6px;
        padding-left: 20px;
    }

    .vtcMenu {
        display: flex;
        background-color: #dbdcde;
        width: 25%;
        min-height: 100vh;
        display: flex;
    }

    .m0 {
        margin: 0;
    }


    .user {
        margin-left: auto;
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="">
            <div class="px-24 py-5 flex items-center">
                <div class="flex items-center">
                    <div class="w-28 h-28">
                        <img src="https://dongphucvina.vn/wp-content/uploads/2023/05/logo-dai-hoc-su-pham-dongphucvina.vn_.png"
                            alt="" class="object-cover object-center w-full h-full block">
                    </div>
                    <div class="px-4">
                        <p class="uppercase font-medium py-2 text-center">Trường đại học sư phạm hà nội</p>
                        <h3 class="uppercase text-red-500 font-bold text-xl">Hệ thống quản lý điểm rèn luyện</h3>
                    </div>
                </div>
                <div class="user flex items-center">
                    <div class="flex items-center">
                        <div class="w-12 h-12">
                            <img src="https://cdn-icons-png.flaticon.com/512/7153/7153150.png" alt=""
                                class="object-cover object-center w-full h-full block">
                        </div>
                        <div class="px-2">
                            <p class="text-base font-medium">User</p>
                            <p class="text-sm">705105xxx</p>
                        </div>
                    </div>
                    <div>
                        <a href=""
                            class="uppercase font-medium px-2 py-3 border-l-[2px] border-solid border-black text-sm">Đăng
                            xuất</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="vtcMenu">
                <ul>
                    <li>
                        <div class="menu">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                <!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path
                                    d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                            </svg>
                            <img src="../public/assets/Home.png" alt="">
                            <a href="#">Trang chủ</a>
                        </div>
                    </li>
                    <li>
                        <div class="menu ative">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path
                                    d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                            </svg>
                            <img src="../public/assets/Home.png" alt="">
                            <a href="#">Danh sách sinh viên(GV)</a>
                        </div>
                    </li>
                    <li>
                        <div class="menu unative">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                <!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path
                                    d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7H162.5c0 0 0 0 .1 0H168 280h5.5c0 0 0 0 .1 0H417.3c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2H224 204.3c-12.4 0-20.1 13.6-13.7 24.2z" />
                            </svg>
                            <img src="../public/assets/Home.png" alt="">
                            <a href="#"> Giảng viên </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512">
                                <!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path
                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                            </svg>
                            <img src="../public/assets/Home.png" alt="">
                            <a href="#">Hướng dẫn sử dụng</a>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="table min-h-screen">
                <div id="brd" class="px-24 brd">
                    
                </div>
</body>

</html>