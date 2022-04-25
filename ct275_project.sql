-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 01:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ct275_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `nguon`
--

CREATE TABLE `nguon` (
  `link` varchar(255) NOT NULL,
  `ngon_ngu` varchar(255) NOT NULL,
  `id_truyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nguon`
--

INSERT INTO `nguon` (`link`, `ngon_ngu`, `id_truyen`) VALUES
('http://fanfox.net/manga/death_note/', 'Tiếng Anh', 26),
('http://fanfox.net/manga/detective_conan/', 'Tiếng Anh', 25),
('http://fanfox.net/manga/dragon_ball_super/', 'Tiếng Anh', 21),
('http://fanfox.net/manga/fairy_tail/', 'Tiếng Anh', 22),
('http://fanfox.net/manga/haikyuu/', 'Tiếng Anh', 23),
('http://fanfox.net/manga/jujutsu_kaisen/', 'Tiếng Anh', 20),
('http://fanfox.net/manga/naruto/', 'Tiếng Anh', 15),
('http://fanfox.net/manga/onepunch_man/', 'Tiếng Anh', 18),
('http://fanfox.net/manga/one_piece/', 'Tiếng Anh', 14),
('http://fanfox.net/manga/tokyo_ghoul_re/', 'Tiếng Anh', 24),
('http://fanfox.net/manga/tokyo_revengers/', 'Tiếng Anh', 27),
('http://truyenqqpro.com/tim-kiem.html?q=Haikyuu', 'Tiếng Việt', 23),
('http://truyenqqpro.com/tim-kiem.html?q=Jujutsu%20Kaisen', 'Tiếng Việt', 20),
('http://truyenqqpro.com/truyen-tranh/dai-chien-titan-462', 'Tiếng Việt', 19),
('http://truyenqqpro.com/truyen-tranh/dao-hai-tac-128', 'Tiếng Việt', 14),
('http://truyenqqpro.com/truyen-tranh/death-note-7069', 'Tiếng Việt', 26),
('http://truyenqqpro.com/truyen-tranh/dragon-ball-super-779', 'Tiếng Việt', 21),
('http://truyenqqpro.com/truyen-tranh/fairy-tail-190', 'Tiếng Việt', 22),
('http://truyenqqpro.com/truyen-tranh/kich-truong-cua-takemichi-6490', 'Tiếng Việt', 27),
('http://truyenqqpro.com/truyen-tranh/naruto-197', 'Tiếng Việt', 15),
('http://truyenqqpro.com/truyen-tranh/onepunch-man-244', 'Tiếng Việt', 18),
('http://truyenqqpro.com/truyen-tranh/shuumatsu-no-valkyrie-6399', 'Tiếng Việt', 17),
('http://truyenqqpro.com/truyen-tranh/tham-tu-conan-199', 'Tiếng Việt', 25),
('http://truyenqqpro.com/truyen-tranh/tokyo-ghoulre-381', 'Tiếng Việt', 24),
('http://www.mangahere.cc/manga/shingeki_no_kyojin/', 'Tiếng Anh', 19),
('http://www.mangahere.cc/manga/shuumatsu_no_walkure/', 'Tiếng Anh', 17),
('https://cmanganew.com/attack-on-titan-19203', 'Tiếng Việt', 19),
('https://cmanganew.com/dao-hai-tac-4195\r\n\r\n', 'Tiếng Việt', 14),
('https://cmanganew.com/death-note---quyen-so-thien-menh-4355', 'Tiếng Việt', 26),
('https://cmanganew.com/dragon-ball-super-20343', 'Tiếng Việt', 21),
('https://cmanganew.com/fairy-tail-100-year-quest-20474', 'Tiếng Việt', 22),
('https://cmanganew.com/haikyuu-141', 'Tiếng Việt', 23),
('https://cmanganew.com/jujutsu-kaisen-20260', 'Tiếng Việt', 20),
('https://cmanganew.com/naruto---cuu-vi-ho-ly-10758', 'Tiếng Việt', 15),
('https://cmanganew.com/onepunch-man-20418', 'Tiếng Việt', 18),
('https://cmanganew.com/shuumatsu-no-valkyrie-415-ref-32061', 'Tiếng Việt', 17),
('https://cmanganew.com/tham-tu-lung-danh-conan-14700', 'Tiếng Việt', 25),
('https://cmanganew.com/tokyo-ghoulre-23164', 'Tiếng Việt', 24),
('https://www.truyenmoizz.com/truyen-tranh/kich-truong-cua-takemichi', 'Tiếng Việt', 27);

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

CREATE TABLE `truyen` (
  `id_tuyen` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mo_ta` longtext NOT NULL,
  `nguoi_dang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truyen`
--

INSERT INTO `truyen` (`id_tuyen`, `ten`, `img`, `mo_ta`, `nguoi_dang`) VALUES
(14, 'One Piece', '4195.jpg', 'One Piece là câu truyện kể về Luffy và các thuyền viên của mình. Khi còn nhỏ, Luffy ước mơ trở thành Vua Hải Tặc. Cuộc sống của cậu bé thay đổi khi cậu vô tình có được sức mạnh có thể co dãn như cao su, nhưng đổi lại, cậu không bao giờ có thể bơi được nữa. Giờ đây, Luffy cùng những người bạn hải tặc của mình ra khơi tìm kiếm kho báu One Piece, kho báu vĩ đại nhất trên thế giới. Trong One Piece, mỗi nhân vật trong đều mang một nét cá tính đặc sắc kết hợp cùng các tình huống kịch tính, lối dẫn truyện hấp dẫn chứa đầy các bước ngoặt bất ngờ và cũng vô cùng hài hước đã biến One Piece trở thành một trong những bộ truyện nổi tiếng nhất không thể bỏ qua. Hãy đọc One Piece để hòa mình vào một thế giới của những hải tặc rộng lớn, đầy màu sắc, sống động và thú vị, cùng đắm chìm với những nhân vật yêu tự do, trên hành trình đi tìm ước mơ của mình.', 'minh1234'),
(15, 'Naruto', '10758.jpg', 'Bối cảnh Naruto xảy ra vào mười hai năm trước khi câu chuyện chính thức bắt đầu, một con hồ ly chín đuôi đã tấn công Konohagakure. Nó là một con quái vật có sức mạnh khủng khiếp, chỉ một cái vẫy từ một trong chín cái đuôi của nó có thể tạo ra những cơn sóng thần và san bằng nhiều ngọn núi. Nó gây ra sự hỗn loạn và giết chết rất nhiều người cho đến khi người đứng đầu làng Lá – Hokage đệ tứ – đã đánh bại nó bằng cách đổi lấy mạng sống của mình để phong ấn nó vào trong người một đứa trẻ mới sinh. Đứa trẻ đó tên là Uzumaki Naruto. Bộ truyện kể về cuộc hành trình đầy gian khổ với vô vàn khó khăn, thử thách của Naruto từ khi còn là một cậu bé tới khi trở thành một trong những nhẫn giả vĩ đại nhất. Không chỉ mô tả về một thế giới nhẫn giả huyền bí, Naruto còn mang trong nó nhiều ý nghĩa nhân sinh sâu sắc về tình bạn, tình đồng đội, tình yêu, ước mơ và hi vọng.', 'b1910258'),
(17, 'Shuumastu No Valkyrie', '415.jpg', 'Câu chuyện bắt đầu khi các vị thần kêu gọi một hội nghị để quyết định cho loài người sống hay chết, và giải quyết việc tiêu diệt loài người. Nhưng một valkyrie đơn độc đưa ra đề nghị để các vị thần và nhân loại chiến đấu một trận chiến cuối cùng, như một hy vọng cuối cùng cho sự tồn tại tiếp tục của nhân loại. 13 vị thần sẽ chiến đấu chống lại 13 nhà vô địch của loài người trong các trận chiến một chọi một để quyết định nhân loại sống hay chết.', 'b1910258'),
(18, 'Onepunch Man', '1596166204-3062.jpg', 'Onepunch-Man là một Manga thể loại siêu anh hùng với đặc trưng phồng tôm đấm phát chết luôn… Lol!!! Nhân vật chính trong Onepunch-man là Saitama, một con người mà nhìn đâu cũng thấy “tầm thường”, từ khuôn mặt vô hồn, cái đầu trọc lóc, cho tới thể hình long tong. Tuy nhiên, con người nhìn thì tầm thường này lại chuyên giải quyết những vấn đề hết sức bất thường. Anh thực chất chính là một siêu anh hùng luôn tìm kiếm cho mình một đối thủ mạnh. Vấn đề là, cứ mỗi lần bắt gặp một đối thủ tiềm năng, thì đối thủ nào cũng như đối thủ nào, chỉ ăn một đấm của anh là… chết luôn. Liệu rằng Onepunch-Man Saitaman có thể tìm được cho mình một kẻ ác dữ dằn đủ sức đấu với anh? Hãy theo bước Saitama trên con đường một đấm tìm đối cực kỳ hài hước của anh!!', 'b1910258'),
(19, 'Attack On Titan', 'aot.jpg', 'Vài trăm năm trước, loài người gần như bị tiêu diệt bởi các Titan. Các Titan thường cao vài tầng, dường như không có trí thông minh, ăn thịt con người và tệ nhất là, dường như làm điều đó vì niềm vui hơn là nguồn thức ăn.\r\nMột tỷ lệ nhỏ nhân loại sống sót bằng cách tự chui đầu vào một thành phố được bảo vệ bởi những bức tường cực cao, thậm chí còn cao hơn cả thành phố lớn nhất trong số các Titan. Nhanh chóng đến hiện tại và quận phía nam Shinganshina đã không nhìn thấy Titan trong hơn 100 năm.\r\n\r\nCậu thiếu niên Eren và em gái nuôi Mikasa chứng kiến ​​một điều kinh hoàng khi một trong những bức tường của quận bên ngoài bị hư hại bởi một con Titan 60 mét (196,85 feet) gây ra vết thủng trên tường. Khi các Titan nhỏ hơn tràn ngập thành phố, hai đứa trẻ kinh hoàng theo dõi những sự kiện bi thảm xảy ra sau đó, khi các Titan nuốt chửng con người mà không bị cản trở.\r\n\r\nEren thề rằng anh sẽ quét sạch từng tên Titan và trả thù cho toàn thể nhân loại.', 'b1910267'),
(20, 'Jujutsu Kaisen', 'kaisen.jpg', 'Yuuji là một thiên tài trong lĩnh vực điền kinh. Nhưng anh ấy không có hứng thú chạy xung quanh các vòng tròn, anh ấy hạnh phúc như một con ngao trong Câu lạc bộ Nghiên cứu Huyền bí. Mặc dù anh ấy chỉ tham gia câu lạc bộ để đá chính, nhưng mọi thứ trở nên nghiêm trọng khi một tinh thần thực sự xuất hiện ở trường! Cuộc sống sắp trở nên thật kỳ lạ ở trường trung học số 3 Thị trấn Sugisawa!', 'b1910267'),
(21, 'Dragon Ball Super', 'dragonball.jpg', 'Dragon Ball Super kể về hậu quả của trận chiến khốc liệt của Goku với Majin Buu, khi anh ta cố gắng duy trì hòa bình mong manh của trái đất.\r\n\r\nSau khi đánh bại Majin Buu, Goku bắt đầu cảm thấy nhàm chán với cuộc sống của mình trên Trái đất. Vợ anh, Chi-chi, muốn anh kiếm được một công việc, nhưng tất cả những gì anh muốn làm là huấn luyện và chiến đấu với những kẻ thù mạnh hơn. Ở những nơi khác trong vũ trụ, Thần Hủy Diệt, Beerus và người hầu cận của hắn là Whis đang du hành từ hành tinh này sang hành tinh khác để tìm kiếm thức ăn và giải trí.\r\n\r\nSau khi làm nổ tung một số nạn nhân bất ngờ, Beerus được nhắc nhở về một người đàn ông trong giấc mơ của anh ta với biệt danh “Super Saiyan God”, hoặc một cái gì đó tương tự ... Thần Hủy diệt đặt tầm nhìn xuống Trái đất để truy tìm người đàn ông bí ẩn này! Có lẽ điều này sẽ cung cấp cho Goku một cái gì đó để làm?', 'b1910267'),
(22, 'Fairy Tail', 'fairytail.jpg', 'Xin đón chào các bạn đến với Fairy Tail – một thế giới tràn đầy phép thuật, những pháp sư có thể hô mưa, gọi gió, những con mèo biết bay và những quái vật trong truyền thuyết. Tại vùng đất Fiore, bạn sẽ gặp được tổ chức Fairy Tail, một tổ chức pháp sư có những thành viên vui tính, thú vị và mạnh mẽ nhất. Câu chuyện bắt đầu khi cô gái trẻ Lucy, người có khả năng kêu gọi các tinh linh và ước mơ được gia nhập một tổ chức phù thủy gặp được hỏa pháp sư Natsu đang trên đường tìm kiếm cha nuôi của mình tại thị trấn cảng Harujion… Trong Fairy Tail, bạn sẽ gặp gỡ cặp “chó mèo” Natsu “khạc ra lửa” và “xơi lửa” cùng Gray “băng giá”, Lucy, Erza tài giỏi và “sexy”, theo kèm là những chú mèo ngộ nghĩnh cùng rất nhiều các pháp sư với đủ loại phép thuật kỳ lạ.', 'b1910267'),
(23, 'Haikyuu', 'haikyuu.jpg', 'Hinata Shouyou – nhân vật chính của Haikyuu, kể từ khi xem xong một trận bóng chuyền đã thần tượng và mơ ước trở thành “Người khổng lồ tí hon” rồi gia nhập đội bóng chuyền của trường trung học. Sau khi tìm đủ thành viên, họ đã tham gia giải đấu liên trường, tại đây họ đã chạm trán với “Vua sân đấu” Kageyama Tobio và bị dập cho tả tơi. Dù thua nhưng Shouyou vẫn quyết tâm trở thành cầu thủ số một và trả đũa Kageyama. Tuy nhiên, lên cấp 3, oan gia ngõ hẹp thế nào, 2 cậu bé lại gặp nhau trong cùng 1 đội. Câu chuyện sẽ tiếp diễn ra sao? Từ một one shot trên Shounen JUMP!!, sau khi nhận được sự ủng hộ mạnh mẽ của độc giả, Haikyuu!! đã được phát triển thành 1 series cực kì ăn khách. Haikyuu!! được yêu mến bởi cách dẫn truyện hài hước, chú ý đến những cảm xúc đa dạng và tinh tế của các nhân vật, đồng thời không thiếu đi những pha hành động đặc trưng của một shounen thể thao, cộng với nét vẽ rất riêng của Furudate-sensei.', 'b1910267'),
(24, 'Tokyo Ghoul', 'tokyoghoul.jpg', 'Hàng loạt những vụ giết người kỳ lạ đang xảy ra ở Tokyo, và nhờ chất lỏng bằng chứng tại hiện trường, cảnh sát kết luận thủ phạm chính là \"ghoul\"- quỷ ăn thịt người. Kaneki, một sinh viên đại học thích đọc sách bị một con ghoul tấn công, và từ đó, số phận của chàng trai bắt đầu thay đổi...', 'b1910267'),
(25, 'Detective Conan', 'conan.jpg', 'Mở đầu câu truyện, cậu học sinh trung học 16 tuổi Shinichi Kudo bị biến thành cậu bé Conan Edogawa. Shinichi trong phần đầu của Thám tử lừng danh Conan được miêu tả là một thám tử học đường. Trong một lần đi chơi công viên \"Miền Nhiệt đới\" với cô bạn từ thuở nhỏ (cũng là bạn gái) Ran Mori , cậu bị dính vào vụ án một hành khách trên Chuyến tàu tốc hành trong công viên, Kishida , bị giết trong một vụ án cắt đầu rùng rợn. Cậu đã làm sáng tỏ vụ án và trên đường về nhà, chứng kiến một vụ làm ăn mờ ám', 'b1910267'),
(26, 'Death Note', 'deathnote.jpg', 'Light Yagami là một thiếu niên thiên tài với khả năng quan sát và suy luận tuyệt vời - và cậu cảm thấy cuộc sống của mình nhàm chán. Nhưng mọi việc hoàn toàn thay đổi khi cậu tìm thấy quyển sổ Thần Chết DeathNote, một quyển sổ do một thần chết cố tình đánh rơi. Bất cứ người nào bị ghi tên vào trong quyển sổ sẽ phải chết, và Light quyết định sử dụng quyển sổ để tiêu diệt cái ác trên thế giới ...', 'b1910267'),
(27, 'Tokyo Revenger', 'tokyorevengers.jpg', 'Takemichi, thanh niên thất nghiệp còn trinh, được biết rằng người con gái đầu tiên và cũng là duy nhất cho đến bây giờ mà anh hẹn hò từ trung học đã chết. Sau một vụ tai nạn, anh ta thấy mình được quay về những ngày cấp hai. Anh ta thề sẽ thay đổi tương lai và giữ lấy người con gái ấy, để làm việc đó, anh ta quyết định sẽ vươn lên làm trùm băng đảng khét tiếng nhất ở vùng Kantou. ', 'b1910267');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `lv` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `lv`) VALUES
(7, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'kaijmas2000@gmail.com', 1),
(8, 'b1910258', 'e10adc3949ba59abbe56e057f20f883e', 'kaijmas2000@gmail.com', 0),
(9, 'b1910267', 'e10adc3949ba59abbe56e057f20f883e', 'kaijmas2000@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nguon`
--
ALTER TABLE `nguon`
  ADD PRIMARY KEY (`link`);

--
-- Indexes for table `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id_tuyen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id_tuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
