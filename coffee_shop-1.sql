-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2023 lúc 12:08 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `coffee_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'coffee'),
(2, 'cake');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_customer`
--

CREATE TABLE `order_customer` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `table_number` int(11) NOT NULL,
  `products_ordered` varchar(255) NOT NULL,
  `order_time` datetime NOT NULL,
  `note` varchar(255) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `total_payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_customer`
--

INSERT INTO `order_customer` (`order_id`, `table_number`, `products_ordered`, `order_time`, `note`, `customer_phone`, `total_payment`) VALUES
(4, 309, 'Cappuccino(1),Cafe Mocha(1),Latte Macchiato(2),Cookie(2),Flan(2)', '2023-05-22 09:34:03', 'thêm một cốc đá', '51651515', 311000),
(5, 404, 'Cafe Truyền Thống(3),Cookie(2),Nama Chocolate(1)', '2023-05-22 09:35:16', '', '1233243455', 230000),
(6, 105, 'Cheese Cake(2),Nama Chocolate(1),Tart(1),Cafe Latte(2)', '2023-05-22 09:36:29', 'thêm 1 cốc đá và 3 cái thìa', '15454555454', 280000),
(7, 111, 'Cappuccino(3),Tiramisu(2),Flan(1)', '2023-05-23 09:27:22', '', '8495951848', 258000),
(8, 506, 'Cappuccino Viennese(1),Americano(1),Espresso Con Panna(2),Macaron(6),Latte Macchiato(1),Muffin(1),Nama Chocolate(1)', '2023-05-23 10:32:06', 'không dùng ống hút', '4845454848', 448000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `category_id`, `product_img`, `product_desc`, `product_price`) VALUES
(101, 'Espresso', 1, 'assets/image/product_img/espresso.jpg', 'Là loại cafe rất được ưa chuộng tại Ý và Tây Ban Nha; được pha bằng cách cho nước bị ép dưới áp suất cao chảy qua một lượng cafe được xay cực mịn. Kết quả sẽ cho ra 25 – 30ml thức uống với 1 lớp kem từ dầu cà phê có màu vàng nâu sẫm (người ta gọi đó là cr', 50000),
(102, 'Cappuccino', 1, 'assets/image/product_img/cappuccino.jpg', 'Xuất xứ từ Ý, một Cappuccino chuẩn sẽ gồm 3 phần đều nhau, đó là: cafe Espresso được pha với một lượng nước gấp đôi (Espresso Lungo), sữa nóng và sữa sủi bọt. Tiếp đến, rắc thêm lên trên ít bột cacao hay bột quế, rồi dùng khuông, thìa hay tăm que.', 60000),
(103, 'Cafe Latte', 1, 'assets/image/product_img/cafe-latte.jpg', 'Cafe Latte hiểu đơn giản là cà phê và sữa. Với những người uống không sành thì rất dễ nhầm lẫn Cafe Latte với Cappuchino vì 2 loại này đều cùng chung 3 thành phần chính. Tuy nhiên, điểm khác nhau ở chỗ, khi pha Cafe Latte, người ta chỉ cho lượng bọt sữa b', 55000),
(104, 'Cafe Truyền Thống', 1, 'assets/image/product_img/traditional-cafe.jpg', 'Cafe đen, cafe sữa được pha chế từ các loại hạt cafe nguyên chất trên mảnh đất Robusta, Arabica hay cafe chồn,…thì được coi là cafe truyền thống đậm vị. Tùy vào nhu cầu, sở thích mà thực khách có thể lựa chọn 1 ly cafe pha phin trực tiếp hoặc pha sẵn rồi ', 40000),
(105, 'Latte Macchiato', 1, 'assets/image/product_img/latte-macchiato.jpg', 'Latte Macchiato (Latte) là một loại cafe nóng gồm cafe Espresso và sữa. Về cơ bản, Latte giống như cafe sữa nhưng ngọt hơn. Một Latte Macchiato được pha đúng chuẩn phải gồm 3 tầng rõ rệt, được rót vào theo thứ tự quy định và không trộn lẫn vào nhau; bao g', 60000),
(106, 'Cafe Mocha', 1, 'assets/image/product_img/cafe-mocha.jpg', 'Cafe Mocha là hỗn hợp giữa cafe Espresso được pha bằng hơi nước và chocolate nóng. Đặc trưng của loại thức uống này là vị thơm béo của kem tươi và vị ngậy của chocolate nóng. Cho trực tiếp Espresso pha cùng bột chocolate sữa nóng vào ngay chính giữa ly nh', 55000),
(107, 'Americano', 1, 'assets/image/product_img/americano.jpg', 'Americano chính là Espresso nhưng được pha loãng với lượng nước gấp đôi. Một Espresso được pha trực tiếp với nước nóng đựng sẵn trong tách Cappuchino là có thể phục vụ ngay cho khách hàng; hoặc có thể phục vụ riêng với nước sôi bên ngoài.', 60000),
(108, 'Espresso Con Panna', 1, 'assets/image/product_img/espresso-con-panna.jpg', 'Espresso nhưng được phục vụ kèm với kem sữa tươi.', 65000),
(109, 'Cappuccino Viennese', 1, 'assets/image/product_img/cappuccino-viennese.jpg', 'Một Espresso đựng trong tách Cappuccino, sau đó cho sữa nóng và bột sữa vào đến 80% tách, xịt kem sữa tươi lên trên rồi trang trí bằng bột cacao.', 60000),
(201, 'Flan', 2, 'assets/image/product_img/flan.jpg', 'Bánh flan là một loại bánh mang theo sự tinh tế nhẹ nhàng và rất nghệ thuật được đánh giá là rất đặc trưng của nước Pháp. Bánh được làm cơ bản từ lòng đỏ trứng, sữa, đường & caramel.', 18000),
(202, 'Cookie', 2, 'assets/image/product_img/cookie.jpg', 'Hay còn gọi bánh quy, là một món bánh được làm từ bột mì, đường và các nguyên liệu khác như: nho khô, yến mạch, chocolate và các loại hạt...', 20000),
(203, 'Tiramisu', 2, 'assets/image/product_img/tiramisu.jpg', 'Một loại bánh ngọt tráng miệng nổi tiếng của nước Ý. Bánh được làm nên bởi sự gắn kết chặt chẽ giữa rượu Rhum, Cafe, cacao & thêm chút gì đó béo ngậy của của kem, phô mai cùng với trứng. Cũng như những loại bánh khác sử dụng với Cafe, bánh Tiramisu giúp l', 30000),
(204, 'Mousse', 2, 'assets/image/product_img/Mousse.jpg', 'Mousse Cake có nguồn gốc từ Pháp. Món bánh Mousse Cake được làm từ lòng đỏ trứng gà, kem tươi, sữa tươi, đường và đã được trang trí bằng nhiều nguyên liệu khác bắt mắt, hay gặp quan trọng là dâu tây. Bánh Mousse Cake được người Pháp rất yêu thích khi uống', 60000),
(205, 'Macaron', 2, 'assets/image/product_img/macaron.jpg', 'Bánh Macaron nhỏ nhắn đầy sắc màu và thật thơm ngon này được mệnh danh là cô tiểu thư của ẩm thực Pháp với ngoại hình tinh xảo và lớp chân bánh giòn xốp cùng lớp nhân bánh mềm mại ngọt thanh như hòa tan trong miệng.', 8000),
(206, 'Hummus Wrap', 2, 'assets/image/product_img/hummus_wrap.jpg', 'Được làm từ đậu gà nấu chín nghiền nhuyễn trộn với xốt tahini (bơ vừng), dầu ô liu, nước cốt chanh muối và tỏi. Món ăn này không những chỉ có mùi vị thơm ngon mà còn bổ dưỡng. Hummus giàu sắt và vitamin C. Đậu chickpeas là nguồn dinh dưỡng giàu protein và', 25000),
(207, 'Cheese Cake', 2, 'assets/image/product_img/cheese_cake.jpg', 'Gồm bánh quy, bơ, đường, trứng gà & cream Cheese. Ở Châu Âu, một thành phần không thể thiếu trong bánh Cheese Cake đó là phô mai. Hình thức vô cùng thu hút, vị ngon, béo ngậy của loại bánh này đã “lấy lòng” không hề biết bao nhiêu thực khách. Thưởng thức ', 45000),
(208, 'Pana Cotta', 2, 'assets/image/product_img/pana_cotta.jpg', 'Là loại bánh lạ với khá nhiều người yêu ẩm thực, nhất là fan của những loại bánh. Những chiếc bánh Pana Cotta được kiểm soát yếu từ bơ, sữa, các kiểu trái cây xay nhuyễn. Tùy vào loại trái cây yêu thích của mỗi người mà hương vị của bánh Pana Cotta khá đa', 35000),
(209, 'Muffin', 2, 'assets/image/product_img/banh-muffin-vani.jpg', 'Muffin & trà sẽ là bộ đôi ăn ý khi Kết hợp với nhau trong bất kỳ hoàn cảnh nào. Món bánh này gây ấn tượng tốt với thực khách bởi màu vàng ươm hấp dẫn, bánh rất bông xốp, mềm mịn vừa đủ. bạn sẽ chọn thêm hương vị cho bánh hoặc thêm lớp whipping cream, trái', 20000),
(210, 'Tart', 2, 'assets/image/product_img/tart.jpg', 'Tart trứng là món bánh phương Tây, khá cầu kỳ trong cách làm nên thường giá không rẻ, thế nhưng vẫn được nhiều người ưu ái lựa chọn mỗi lần hẹn hò Cafe. Lớp bánh bên ngoài hay được nướng giòn, nhân bên trong có thể là trứng, socola hoặc bất cứ hương vị nà', 10000),
(211, 'Nama Chocolate', 2, 'assets/image/product_img/nama-chocolate-tra-xanh-quyen-ru.jpg', 'Nama Chocolate là loại bánh cho quán cà phê hạng sang với cực nhiều hoạt chất có lợi cho sức khỏe xuất phát từ đất nước Nhật Bản, với nghĩa tiếng việt là chocolate tươi. Loại bánh nhẹ ăn kèm này cần đặc biệt bảo quản trong tủ lạnh ở nhiệt độ thấp, vì như ', 70000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('manager','employee') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`, `role`) VALUES
(1, 'Đoàn Tần', 'tan@gmail.com', '5b2d4484498235e80d61a233a7c04991', 'manager'),
(2, 'Trần Hương', 'huong@gmail.com', '145a829dff80553d2747dfa14f44cc56', 'manager'),
(4, 'Bảo Ngọc', 'ngoc@gmail.com', '63b63159b50d87d00baabfb3f679fe23', 'employee'),
(5, 'Thu Trúc', 'truc@gmail.com', '45723a2af3788c4ff17f8d1114760e62', 'employee'),
(7, 'Hùng Cao', 'hung@gmail.com', '546cb004524c792856b4bbba7192456b', 'employee');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `order_customer`
--
ALTER TABLE `order_customer`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_pro_cate` (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `order_customer`
--
ALTER TABLE `order_customer`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101122113;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_pro_cate` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
