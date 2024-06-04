# ************************************************************
# Sequel Ace SQL dump
# Version 20046
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 5.7.42-0ubuntu0.18.04.1)
# Database: rikyvn
# Generation Time: 2024-05-07 01:37:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;

INSERT INTO `contacts` (`id`, `created_at`, `updated_at`, `name`, `phone_number`, `description`)
VALUES
	(1,'2023-11-23 12:33:48','2023-11-23 12:33:48','dev','123456789','beer'),
	(2,'2023-11-24 09:27:43','2023-11-24 09:27:43','Phạm Duy An','0909092297','Marketing'),
	(3,'2023-11-27 02:37:19','2023-11-27 02:37:19','nguyen Thien','15262','Hdjdhd'),
	(4,'2023-12-22 08:58:52','2023-12-22 08:58:52','Na Test','0000000000','Test'),
	(5,'2024-02-15 03:10:03','2024-02-15 03:10:03','huy','0339767625','điện thoại'),
	(6,'2024-02-26 05:14:00','2024-02-26 05:14:00','MA CÔNG THƯƠNG','0567411268','OK'),
	(7,'2024-04-24 09:10:25','2024-04-24 09:10:25','Phan Kiều Huyền Trang','0974070159','Kinh doanh ăn uống');

/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_08_19_000000_create_failed_jobs_table',1),
	(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(5,'2023_11_16_195138_create_contact_table',1),
	(6,'2023_11_17_200045_create_photos_table',1),
	(7,'2023_11_17_200045_create_videos_table',1),
	(8,'2023_11_17_235607_create-settings-table',1),
	(9,'2023_11_18_014518_add-video-cover',1),
	(10,'2023_12_12_002919_add-video-embedframe',2),
	(11,'2023_12_26_023848_add-photo-thumbnail',3),
	(12,'2023_12_26_110854_add-video-primary',4);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `photos`;

CREATE TABLE `photos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` int(10) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;

INSERT INTO `photos` (`id`, `path`, `title`, `ordering`, `created_at`, `updated_at`, `thumbnail`)
VALUES
	(3,'/storage/attachment/Evb7ZXl5vRN2qGzLvvBgcnIQA44OttyEOkDy6zL9.jpg','XÂY DỰNG - Công ty Đường Thịnh Design Decor',8,'2023-11-21 09:44:50','2023-12-29 04:11:43','/uploads/1703823103_11.jpg'),
	(5,'/storage/attachment/jovyFUqaWb9e8Lzb5CfRqqaRwTFbLwi7C1ILUT9Y.jpg','HOA TƯƠI - Công Ty Vạn Xuân Phát (Đà Lạt Hoa)',7,'2023-11-21 09:46:26','2023-12-29 04:11:33','/uploads/1703823093_8.jpg'),
	(6,'/storage/attachment/RuXGQzStFSM7JwxEB0GT5U01tSH9E9LoO7tWZXj1.jpg','RƯỢU NHẬP KHẨU - Công ty Wine Shop',5,'2023-11-21 09:52:55','2023-12-29 04:11:10','/uploads/1703823070_3.jpg'),
	(7,'/storage/attachment/BdpXHJuaApftwjmgaDU3inDMNNVxe18BAL2P6gOm.jpg','QUÁN CÀ PHÊ - TNT Coffee Quận 7',9,'2023-11-21 09:55:20','2023-12-29 04:12:35','/uploads/1703823155_4.jpg'),
	(8,'/storage/attachment/tRjeV4jKsRakZdruDNa676V4ANEQWPVnckuVvvAn.jpg','HỆ THỐNG CỬA CUỐN - Công ty Tài Lộc Window',6,'2023-11-21 09:55:43','2023-12-29 04:11:22','/uploads/1703823082_7.jpg'),
	(9,'/storage/attachment/leS5raaw9aHR7Q55QjP51yAduEhM7pJcYdURVGct.jpg','THỜI TRANG',14,'2023-11-21 09:56:07','2023-12-29 04:13:30','/uploads/1703823210_5.jpg'),
	(10,'/storage/attachment/mHNmnQL9Lq9m9wtA7JbnYlaUFKDdnmaB6BCJAs0R.jpg','THẾ GIỚI THẢM LÔNG - Nhà Shy',11,'2023-11-24 08:09:40','2023-12-29 04:12:56','/uploads/1703823176_1.jpg'),
	(11,'/storage/attachment/akPdUOw5wVtm4xKIj2e38LrzzTzEcWdByIc8ij74.jpg','BNI - Ký kết hợp tác với Công Ty TCBD',3,'2023-11-24 09:06:12','2023-12-29 04:10:43','/uploads/1703823043_13.jpg'),
	(12,'/storage/attachment/Pcpnlo3ViC9WDUqoHAzq7cjDVcQyP1snkSDc2pqE.jpg','BNI - Lễ kết nối kinh doanh Galaxy Chapter',4,'2023-11-24 09:06:35','2023-12-29 04:10:57','/uploads/1703823057_10.jpg'),
	(13,'/storage/attachment/Sq3uMkOO4PiJE9cLRaj4RL69U0BfiznD2RdiYZ6k.jpg','THẨM MỸ - Thẩm Mỹ Viện Kim Thu',2,'2023-11-24 09:08:17','2024-01-09 08:30:02','/uploads/1703823189_6.jpg'),
	(14,'/storage/attachment/sY861L0iR8GkQaWk9WkSJQN2rLhkuMOoVEZENlOe.jpg','ĐIỆN THOẠI BÁN LẺ  - Chuỗi cửa hàng Chung Mobile',10,'2023-11-24 09:09:42','2023-12-29 04:12:46','/uploads/1703823166_9.jpg'),
	(15,'/storage/attachment/qAfbN94VCSzJ20rXJXf5jHuxUQAi1P7dNMes9Pqg.jpg','XÂY DỰNG - Công ty VModule',13,'2023-11-24 09:10:06','2023-12-29 04:13:20','/uploads/1703823200_14.jpg'),
	(20,'/storage/attachment/Nq4vn22bPuE4O1zr3Jfv87dC6xeBFDknRLD19PK8.jpg','Đào tạo quảng cáo bán hàng Online',1,'2024-01-09 08:57:44','2024-05-03 08:06:47','/uploads/1704790664_riky total.jpg'),
	(21,'/storage/attachment/L2jnLeugEY7VW9vnlN4Z8NoqKlwIDFjq3vdkDr3Y.jpg','DU LỊCH LỮ HÀNH - Công Ty Belles Travel',10,'2024-01-19 08:47:06','2024-01-19 08:47:06','/uploads/1705654026_RIKY - HÌNH WEB.jpg');

/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `key`, `name`, `value`, `created_at`, `updated_at`, `type`)
VALUES
	(1,'email','Email','info@riky.vn',NULL,'2023-11-19 08:59:59',NULL),
	(2,'address','Address','Tầng 5, Tòa nhà Songdo, 62A Phạm Ngọc Thạch, Phường Võ Thị Sáu, Quận 3, Thành phố Hồ Chí Minh.',NULL,'2023-11-19 08:58:59',NULL),
	(3,'hotline','Hotline','079 2222 900',NULL,'2024-03-25 02:06:48',NULL),
	(4,'welcome_video','Welcome Video','/storage/attachment/NITXLkwD3OWbXnukurbLohiRX3mWiR99YERILOxg.mp4',NULL,'2024-04-17 09:31:22',NULL),
	(5,'site_name','Site Name','RiKy.vn',NULL,NULL,NULL),
	(6,'site_description','Site Description','Riky Marketing là công ty tư vấn, huấn luyện đào tạo Marketing Online tại Việt Nam. Hỗ trợ các Cá Nhân, Doanh Nghiệp, Nghệ Sĩ nắm bắt cơ hội kinh doanh trực tuyến và khai thác tối đa ứng dụng của Internet vào hoạt động kinh doanh.',NULL,NULL,NULL),
	(7,'site_keyword','Site Keyword','Marketing, Ecommerce, Training',NULL,NULL,NULL),
	(8,'site_logo','Site Logo','/storage/attachment/urrNttp1HehbLdy2El1HjKoXTKCEMKZMkRUz1VmD.png',NULL,'2023-11-24 04:09:29',NULL),
	(9,'site_favicon','Site Favicon','/storage/attachment/U0awcn9vb7wFUwN9kRpndiFstRIlOhYV7A1rmjFQ.png',NULL,'2023-11-23 12:29:58','photo'),
	(10,'zalo','Zalo','1419343237425045129',NULL,'2024-01-16 11:08:20',NULL),
	(11,'header_script','Header Script','<!-- Google tag (gtag.js) --> <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-SM08KHTSZ5\"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag(\'js\', new Date());    gtag(\'config\', \'G-SM08KHTSZ5\'); </script> <!-- Google Tag Manager --> <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\': new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src= \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f); })(window,document,\'script\',\'dataLayer\',\'GTM-P7L7J9WZ\');</script> <!-- End Google Tag Manager -->',NULL,'2024-02-05 23:27:39','text');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(3,'Administrator','admin@riky.vn','2023-11-18 09:47:16','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','ewk0QdvXBNuoPfncjypFyo1tFp9pTcZi0FA43KoUr2LN8wFdVQiLemg6fBmE',NULL,NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table videos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordering` int(10) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `embed_frame` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` longtext COLLATE utf8mb4_unicode_ci,
  `primary` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;

INSERT INTO `videos` (`id`, `path`, `title`, `ordering`, `created_at`, `updated_at`, `cover`, `embed_frame`, `description`, `slug`, `primary`)
VALUES
	(3,'/storage/attachment/HoKMMQDhiwp9lc9ndmyJcK8dEYYNEnT3AQXckVEB.mov','THẾ GIỚI THẢM LÔNG - Cảm nhận của Nhà Shy',4,'2023-11-21 08:06:10','2023-12-29 04:32:32','/storage/attachment/6TFb99qctgYY02sXYBRlSjuEWHISbqqLV88UA5EI.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/hdZ4ydb_kNM?si=0NUa57OzD5KckSU8?enablejsapi=1\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','Kinh doanh online lâu năm, liệu bạn có biết?\r\n❓ Cách tăng doanh số khi muốn mở rộng mô hình kinh doanh\r\n❓ Cập nhật các kiến thức mới trong lĩnh vực Marketing Online\r\n❓ Hiểu rõ các thuật toán trên nền tảng online\r\n\r\nHọc thật - Làm thật - Chiến thật cùng RiKy Marketing 💥 💥','the-gioi-tham-long-cam-nhan-cua-nha-shy',0),
	(5,'/storage/attachment/bKmIaB35uaFcv1j9ybKFgO5rqpVt9EWzgJ2zCIbp.mp4','RƯỢU NHẬP KHẨU - Công ty Wine Shop',1,'2023-12-04 03:16:22','2024-04-17 09:37:03','/storage/attachment/4YEM9cAC51PkiPwMQwZhqmQkFJIKJEtBMkfmLRWP.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/o8plQFAB8yY?si=KFfgUrHEZE9zJ35O?enablejsapi=1\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','Khắc phục giải pháp trong Marketing Online mà Doanh nghiệp mắc phải\r\n\r\n❓ Team Marketing chưa thống nhất được cách làm việc\r\n❓ Team Marketing chưa đưa ra KPI cần đạt được khi thực hiện các chương trình Marketing Online\r\n❓ Team Marketing đạt được KPI nhưng lại chưa mang về được nguồn doanh thu như mong đợi.\r\n\r\n👉🏽 👉🏽 Tất cả vấn đề trên sẽ được giải đáp trong khoá Huấn luyện Marketing Online tại RiKy Marketing. Cùng trải nghiệm để chạm tới Thành công nhé 💥','ruou-nhap-khau-cong-ty-wine-shop',0),
	(6,'/storage/attachment/ZcgTNGMdyhOzwjiL6Hypt3CQTihm4kDnE1AFxqUM.mp4','HOA TƯƠI - Công ty Vạn Xuân Phát (Đà Lạt Hoa)',3,'2023-12-06 04:10:33','2023-12-28 08:23:40','/storage/attachment/ISHJjcodGcVVxBf4me6RZGCW86cXBvOS1HGXOeTr.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/z8X1LD4ndJM?si=qLocsJrAtz3NDFaF?enablejsapi=1\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','Thực chiến MARKETING ONLINE trong ngành HOA TƯƠI, liệu có khó?\r\n❓ Giải quyết được vấn đề đầu ra sản phẩm để đưa sản phẩm chất lượng nhất đến tay khách hàng\r\n❓ Tìm được khách hàng mới trên kênh online trong thị trường đầy cạnh tranh\r\n❓ Giải quyết các vấn đề về số khi TỰ CHẠY hoặc ĐI THUÊ đơn vị quảng cáo\r\n\r\n👉🏽 👉🏽 Cùng RiKy Marketing trải nghiệm buổi học và cảm nhận của Công ty Vạn Xuân Phát - Cửa hàng Hoa tươi Đà Lạt hoa nhé.','hoa-tuoi-cong-ty-van-xuan-phat-da-lat-hoa',0),
	(7,'','HỆ THỐNG CỬA CUỐN - Công ty Tài Lộc Window',2,'2023-12-22 08:57:20','2023-12-28 08:23:25','/storage/attachment/XRvH0pKHIFbSi1XhI4s7qL1OrA9q8fSntg6KV4JG.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/BVw9ibHZWdc?si=u5puUlifJ39hRRM9?enablejsapi=1\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','Chuỗi hệ thống các cửa hàng, Marketing Online như thế nào cho hiệu quả?\r\n✅ Hiểu được mô hình chuyển đổi trong Marketing Online\r\n✅ Lập kế hoạch Marketing Online SMART.\r\n✅ Các bộ phận Marketing - Kinh Doanh cùng hiểu các mục tiêu và KPI chung đề ra\r\n\r\nCùng trải nghiệm buổi huấn luyện đặc biệt này của RiKy Marketing và Tài Lộc Window nào 📣 📣','he-thong-cua-cuon-cong-ty-tai-loc-window',0),
	(13,'','KẾT NỐI KINH DOANH - BNI Galaxy Chapter',5,'2023-12-29 04:26:29','2024-01-03 02:00:11','/storage/attachment/TzPBQSUfldVs39OKiUCirZrMbaIgfX1VKudTrLCv.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MSQ8VnJwv5M?si=GQjAjEd1CpT6prIO\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','Nên ĐI THUÊ hay TỰ CHẠY quảng cáo? Lựa chọn nào sẽ TỐT HƠN cho doanh nghiệp của bạn?\r\n\r\n❓ Muốn thuê \"Người giỏi\" nhưng chi phí quá cao\r\n❓ Chi phí vừa tầm thì lại gặp \"người chưa giỏi\"\r\n❓ Team Marketing của Công ty chưa hiểu nhau, kiến thức chuyên môn chưa đủ sâu để tối ưu các quảng cáo\r\n\r\n💥 Tham gia Khoá Huấn luyện Marketing Online của RiKy để cùng tìm ra giải đáp cho câu hỏi đó đối với doanh nghiệp/ shop mà bạn đang kinh doanh','ket-noi-kinh-doanh-bni-galaxy-chapter',0),
	(14,'','THẾ GIỚI THẢM LÔNG - Hành Trình tìm đến RiKy của Nhà Shy',8,'2023-12-29 04:31:57','2024-01-03 09:28:12','/storage/attachment/YmWuKU6rFnh8E4xJNDfECTcD2KzNDqIqCnqJykDl.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/yJVOb7qfNY0?si=U9te0L8G1RuwYUIs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','KINH DOANH ONLINE ĐÃ LÂU, LIỆU BẠN CÓ BIẾT?\r\n\r\n❓ Làm thế nào để mở rộng mô hình kinh doanh nhưng vẫn duy trì và phát triển được doanh thu\r\n❓ Tìm ra được những ý tưởng mới cho Marketing Online\r\n❓ Chuyên gia để giải quyết những vấn đề mà doanh nghiệp đang gặp phải trong thời gian khó khăn này\r\n\r\n💥 Nếu bạn đang gặp những vấn đề trên và cần tìm \"góc nhìn mới\" thì liên hệ ngay với RiKy Marketing trong khoá Huấn luyện Marketing Online','the-gioi-tham-long-hanh-trinh-tim-den-riky-cua-nha-shy',0),
	(15,'','QUẦN ÁO TRẺ EM - Bảo Châu RB Kids',6,'2024-01-03 08:17:41','2024-01-03 09:28:29','/storage/attachment/IRH7nqZIpiNXMN0fnk713uyStcXDGbTFLtRQ1L0X.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/PADVZ_gYDC4?si=LdgcE7QzxNqSnuca\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','Kinh doanh THỜI TRANG trong thị trường đã \"bão hoà\" liệu có làm khó bạn?\r\n\r\n❓ Không tìm được khách hàng tiềm năng mới mỗi ngày\r\n❓ Chạy quảng cáo nhưng không chốt được đơn hàng\r\n❓ Livestream nhưng chỉ có vài người xem\r\n\r\n💥 💥 Cùng đến ngay với RiKy để giải quyết những câu hỏi trên kể cả việc chạy quảng cáo trong lúc Livestream 💥 💥','quan-ao-tre-em-bao-chau-rb-kids',0),
	(16,'','NÓN BẢO HIỂM - Blue Sea (Cùng bạn ra biển lớn)',7,'2024-01-03 09:26:59','2024-01-03 09:28:34','/storage/attachment/V1PCL5Gx4u3De4IpQJfDW57OGKl6X9WwO0CvPRxF.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/X1zJIj9wF3k?si=n0K-DOHLvxFZFwPs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','THƯƠNG HIỆU LỚN liệu có cần đến MARKETING ONLINE ?\r\n\r\n❓ Triển khai các chiến dịch quảng cáo Marketing Online thế nào để thu hút khách hàng\r\n❓ Chiến lược dành cho Marketing Online sẽ lên và thực hiện như thế nào\r\n❓ Cần tối ưu gì để mang lại hiệu quả tốt hơn\r\n\r\n🎉 🎉 Đăng ký ngay Khoá Huấn luyện Marketing Online của RiKy để nhận được những giải đáp này nhé 💥 💥','non-bao-hiem-blue-sea-cung-ban-ra-bien-lon',0),
	(17,'','QUÁN BAR - Sai Gon De Chiu (khai trương quán Quận 1)',9,'2024-01-03 09:58:48','2024-01-03 09:58:48','/storage/attachment/XR9d2iQc18qFE85sjPDrXZk58xo4q9S1bCgQtRdO.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8yZqHdCYC5c?si=9jtfB_OGynZhFyuy\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','Kinh doanh Dịch vụ Quán Bar có khó không?\r\n\r\n❓ Quán Bar dành cho những người trung niên, nên Marketing Online như thế nào\r\n❓ Xây dựng chiến lược và thực thi ra làm sao\r\n❓ Cần tối ưu các điểm nào để tối ưu chi phí hơn\r\n\r\n💥 💥 Cùng trải nghiệm để nhận được những giải đáp trong Khoá Huấn luyện Marketing Online tại RiKy nhé  🎉 🎉','quan-bar-sai-gon-de-chiu-khai-truong-quan-quan-1',0),
	(18,'','QUÁN CÀ PHÊ - TNT Coffee (quận 7)',8,'2024-01-12 10:01:37','2024-01-15 07:40:25','/storage/attachment/z3rgHmRFptVgsokPMBxbtJ9yB1UAGDgO8rPKxvps.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/lhPl9SNDils?si=tQvNrPRqPZUiGDEi\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','💥 💥 QUÁN CÀ PHÊ SANG TRỌNG cần thực thi chiến lược Marketing Online như thế nào để đem lại hiệu quả tối đa?\r\n\r\n❓ Không biết cách phân chia ngân sách hợp lý\r\n❓ Các chương trình khuyến mãi không thường xuyên - không biết cách lập kế hoạch Marketing thế nào cho hợp lý\r\n❓ Cần tối ưu điểm nào để ra kết quả tốt hơn\r\n\r\n🎉 🎉 Cùng đăng ký ngay với RiKy để chúng mình được giải đáp các thắc mắc của bạn!','quan-ca-phe-tnt-coffee-quan-7',0),
	(19,'','THỜI TRANG - Hacchic Couture',6,'2024-01-15 10:08:08','2024-01-15 10:08:21','/storage/attachment/LsYcs0xnpUkOEurst5lZ5AyWQkrTK5srbb7QWBdy.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5bT6XRr0HnU?si=7zG8m9Wwpg2iGLO6\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','💥 💥 Chạy quảng cáo ngân sách \"TIỀN TỈ\", tối ưu thế nào?\r\n\r\n❓ Tăng ngân sách nhưng vẫn đảm bảo được số lượng tin nhắn đổ về\r\n❓ So sánh mức độ hiệu quả của mỗi mẫu váy thế nào\r\n❓ Tối ưu như thế nào để \"thắng\" đối thủ cạnh tranh\r\n\r\n🎉 🎉 Nhanh tay đăng ký để được nghe những kinh nghiệm thực chiến của RiKy nào.','thoi-trang-hacchic-couture',0),
	(20,'','CHUỖI CỬA HÀNG ĐIỆN THOẠI - Chung Mobile',3,'2024-01-19 08:35:52','2024-01-19 08:35:52','/storage/attachment/fbQcL7YJkgnsp9wX89ZCFf5Q35y8Btn3sKNPh4ZI.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2c9eAEASVfk?si=MXGYIfZJjy9p_Qjf\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','💥 💥 CHUỖI cửa hàng điện thoại - chuyên cung cấp các sản phẩm của APPLE nên xây dựng và thực thi chiến lược Marketing như thế nào cho hợp lý\r\n\r\n❓ Không biết khi nào nên tăng ngân sách, khi nào nên giảm ngân sách\r\n❓ Mang về được nhiều khách hàng nhưng chi phí vẫn vậy\r\n❓ Đạt doanh số vượt ngưỡng mục tiêu đề ra\r\n\r\n🎉  🎉 Cùng đăng ký ngay với RiKy để nhận được những thông tin, kinh nghiệm siêu bổ ích này cho doanh nghiệp của bạn nhé!','chuoi-cua-hang-dien-thoai-chung-mobile',0),
	(21,'','DU LỊCH LỮ HÀNH - Công Ty Belles Travel',10,'2024-01-19 08:46:23','2024-01-19 08:46:31','/storage/attachment/REzsdCLCGi1R03i78L9iqY2nsfYK6pgIehHXdpKk.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wIuNpt-uvzo?si=wgO48IgTrNZ0SmFi\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','Ngành DU LỊCH LỮ HÀNH - làm thế nào để cạnh tranh với các \"ông trùm\" tại Việt Nam?\r\n\r\n❓ Xác định được đúng tệp đối tượng khách hàng mà doanh nghiệp có thể cạnh tranh với các \"ông trùm\"\r\n❓ Tận dụng tốt nguồn ngân sách khi Công ty ở thời gian đầu thành lập\r\n❓ Hiểu đúng và thực thi chuẩn xác quảng cáo trên nền tảng Facebook mang về gói tour \"siêu sang trọng\"\r\n\r\n🎉  🎉 Cùng \"khám phá\" xem RiKy sẽ mang đến cho ngành DU LỊCH LỮ HÀNH những thông tin bổ ích gì nhé!','du-lich-lu-hanh-cong-ty-belles-travel',0),
	(22,'','THIẾT KẾ NỘI NGOẠI THẤT - Công Ty Đường Thịnh Design Decor',4,'2024-02-27 04:45:38','2024-02-27 04:45:38','/storage/attachment/YNGtU6b6n4o9Gm6zciimFgeNRmlxqZewXLNqdOCG.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TXJ7D9hmGs8?si=bZhTpLKhYjS06IaZ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','💥 Ngành Xây Dựng nên làm Marketing Online như thế nào để hiệu quả?\r\n\r\n❓ Công ty vừa và nhỏ nên chưa có phòng ban chuyên về Marketing\r\n❓ Đi thuê đơn vị Agency bên ngoài nhưng không biết cách kiểm soát chất lượng hiệu quả\r\n❓ Việc thực thi và triển khai gặp nhiều khó khăn, tăng chi phí nhưng hiệu quả không tăng\r\n\r\n👉🏽 👉🏽 Cùng đăng ký ngay để RiKy Marketing sẽ đồng hành cùng bạn giải quyết những vấn đề này nhé!','thiet-ke-noi-ngoai-that-cong-ty-duong-thinh-design-decor',0),
	(23,'','TẢ BỈM - Công Ty IMG (Tả Bỉm Thương Hiệu Ryo)',5,'2024-02-27 08:52:08','2024-02-27 08:52:08','/storage/attachment/Z3zTwmaJWDkF9V5Nze6EOFxKNugdaOUIY9lCCY6b.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RWCIbbb7evg?si=qmvgYfTbieD-fRep\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>','💥 Khởi nghiệp nên lựa chọn chiến lược Marketing Online nào cho hợp lý? \r\n\r\n❓ Chọn chiến lược nào khi có quá nhiều \"ông lớn\" trên thị trường\r\n❓ \"Điểm khác biệt - USP\" của sản phẩm mình là gì so với các sản phẩm khác\r\n❓ Làm thế nào để phủ rộng thị trường để sản phẩm đến tay đại lý và người tiêu dùng\r\n\r\n👉🏽 👉🏽 Cùng tham gia ngay Khoá huấn luyện Marketing Online để RiKy đồng hành, định hướng và đưa ra các chiến lược phù hợp nhất với tình hình doanh nghiệp hiện tại của mình','ta-bim-cong-ty-img-ta-bim-thuong-hieu-ryo',0),
	(24,'','TRANG TRÍ NHÀ CỬA - Đèn Bar, đèn ngủ để bàn HUTA',9,'2024-03-25 07:23:10','2024-04-10 01:36:11','/storage/attachment/gKN5AsLi1CFOElTBZJ7tuoukwUb9PNAhkJrv1vt3.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/abmi0BHYCXY?si=76Pdtf2e7Llbox64\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>','💥 SẢN PHẨM ĐÈN CÁ NHÂN HOÁ thực thi chiến lược Marketing Online như thế nào?\r\n\r\n❓ Sự phát triển nhanh chóng của công nghệ thông tin và sự biến động của nhu cầu thị trường đặt ra những thách thức lớn cho các doanh nghiệp. \r\n❓ Để đối mặt với những thách thức này, các doanh nghiệp cần điều chỉnh chiến lược Marketing của mình để đảm bảo hiệu quả tối ưu. Marketing Online là một chiến lược quảng bá sản phẩm hoặc dịch vụ sử dụng các kênh trực tuyến và công nghệ số hiệu quả nhất hiện \r\n\r\n👉🏽 👉🏽  Cùng tham dự một phần của buổi coaching nhà RiKy với Công ty Đèn HUTA nhé!','trang-tri-nha-cua-den-bar-den-ngu-de-ban-huta',0),
	(25,'','QUY TRÌNH QUẢNG CÁO - RA ĐƠN NHÀ RIKY MARKETING',1,'2024-04-17 09:36:38','2024-04-17 09:40:53','/storage/attachment/1tgMVQjfZHvwO77siLjq6twKYBTtApZOZ3BkjIif.jpg','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1u-uUm38V34?si=I5ANIRLhHeXpdPpC\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>','💥 𝐐𝐮𝐲 𝐭𝐫𝐢̀𝐧𝐡 𝐐𝐮𝐚̉𝐧𝐠 𝐜𝐚́𝐨 - 𝐑𝐚 đ𝐨̛𝐧 𝐧𝐡𝐚̀ 𝐑𝐢𝐊𝐲 💥\r\n\r\n❓Bạn có đang thắc mắc Quy trình \"Chạy quảng cáo - ra đơn\" nhà RiKy Marketing sẽ được triển khai như thế nào không?\r\n\r\n🔥 RiKy Marketing đã có cơ hội được hợp tác với Nha Khoa Thẩm Mỹ Ngọc Trai trong dự án Trọn gói \"𝐐𝐮𝐚𝐲 𝐝𝐮̛̣𝐧𝐠 𝐯𝐢𝐝𝐞𝐨 𝐪𝐮𝐚̉𝐧𝐠 𝐜𝐚́𝐨 - 𝐂𝐡𝐚̣𝐲 𝐪𝐮𝐚̉𝐧𝐠 𝐜𝐚́𝐨 𝐫𝐚 đ𝐨̛𝐧 - 𝐂𝐡𝐚̆𝐦 𝐬𝐨́𝐜 𝐟𝐚𝐧𝐚𝐩𝐠𝐞\".\r\n\r\n👉🏽 👉🏽 Cùng RiKy Marketing xem lại chúng mình đã trải qua những công đoạn nào nhaaa ❤️ ❤️','quy-trinh-quang-cao-ra-don-nha-riky-marketing',1);

/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
