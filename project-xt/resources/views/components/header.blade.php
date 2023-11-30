<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang đánh giá điểm rèn luyện</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
                gridTemplateColumns:{
                    '112':'1fr 1fr 2fr'
                }
            }
          }
        }
      </script>
</head>

<body>
    <div class="bg-gray-300">
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
            <div class="px-10 flex items-center flex-1">
                <a href="" class="block mx-4 p-2 uppercase font-medium underline">Trang chủ</a>
                <a href="" class="block mx-4 p-2 uppercase font-medium underline">Diễn đàn</a>
                <a href="" class="block mx-4 p-2 uppercase font-medium underline">Hướng dẫn</a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center">
                    <div class="w-12 h-12">
                        <img src="https://cdn-icons-png.flaticon.com/512/7153/7153150.png" alt="" class="object-cover object-center w-full h-full block">
                    </div>
                    <div class="px-2">
                        <p class="text-base font-medium">User</p>
                        <p class="text-sm">705105xxx</p>
                    </div>
                </div>
                <div>
                    <a href="" class="uppercase font-medium px-2 py-3 border-l-[2px] border-solid border-black text-sm">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex bg-black text-white text-center">
        <div class="flex-1 border-r-2 border-solid border-white uppercase text-sm font-medium py-2">Thông tin sinh viên</div>
        <div class="flex-1 uppercase text-sm font-medium py-2">Đánh giá</div>
    </div>
</body>

</html>
