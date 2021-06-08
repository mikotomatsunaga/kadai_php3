-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 6 月 08 日 03:02
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_l05_11`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table3`
--

CREATE TABLE `todo_table3` (
  `id` int(12) NOT NULL,
  `movie_title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_date` date NOT NULL,
  `genre` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `todo_table3`
--

INSERT INTO `todo_table3` (`id`, `movie_title`, `posted_date`, `genre`, `content`, `created_at`, `updated_at`) VALUES
(13, '右に曲がるボールに悩んでいます', '2021-07-01', 'スライス', '最近、右に曲がるボール、具体的には極端なスライスに悩まされています。どうすればいいか分からないのでなんらかアドバイスいただけると助かります。', '2021-06-07 17:44:24', '2021-06-07 17:44:24'),
(14, '右に曲がるボールに悩んでいます', '2021-07-02', 'スライス', '最近、右に曲がるボール、具体的には極端なスライスに悩まされています。どうすればいいか分からないのでなんらかアドバイスいただけると助かります。', '2021-06-07 17:45:11', '2021-06-07 17:48:08'),
(15, '右に曲がるボールに悩んでいます', '2021-07-03', 'スライス', '最近、右に曲がるボール、具体的には極端なスライスに悩まされています。どうすればいいか分からないのでなんらかアドバイスいただけると助かります。', '2021-06-07 17:45:43', '2021-06-07 17:45:43'),
(16, '右に曲がるボールに悩んでいます', '2021-07-04', 'スライス', '最近、右に曲がるボール、具体的には極端なスライスに悩まされています。どうすればいいか分からないのでなんらかアドバイスいただけると助かります。', '2021-06-07 17:48:56', '2021-06-07 17:48:56'),
(17, '右に曲がるボールに悩んでいます', '2021-07-05', 'スライス', '最近、右に曲がるボール、具体的には極端なスライスに悩まされています。どうすればいいか分からないのでなんらかアドバイスいただけると助かります。', '2021-06-07 17:49:33', '2021-06-07 17:49:51'),
(18, '右に曲がるボールに悩んでいます', '2021-07-06', 'スライス', '最近、右に曲がるボール、具体的には極端なスライスに悩まされています。どうすればいいか分からないのでなんらかアドバイスいただけると助かります。', '2021-06-07 17:50:24', '2021-06-07 17:50:24'),
(19, '右に曲がるボールに悩んでいます', '2021-07-07', 'スライス', '最近、右に曲がるボール、具体的には極端なスライスに悩まされています。どうすればいいか分からないのでなんらかアドバイスいただけると助かります。', '2021-06-07 17:50:43', '2021-06-07 17:50:43'),
(20, '右に曲がるボールに悩んでいます', '2021-07-08', 'スライス', '最近、右に曲がるボール、具体的には極端なスライスに悩まされています。どうすればいいか分からないのでなんらかアドバイスいただけると助かります。', '2021-06-07 17:50:57', '2021-06-07 17:50:57'),
(21, '右に曲がるボールに悩んでいます', '2021-07-09', 'スライス', '最近、右に曲がるボール、具体的には極端なスライスに悩まされています。どうすればいいか分からないのでなんらかアドバイスいただけると助かります。', '2021-06-07 17:51:14', '2021-06-07 17:51:14'),
(22, '右に曲がるボールに悩んでいます', '2021-06-10', 'スライス', '最近、右に曲がるボール、具体的には極端なスライスに悩まされています。どうすればいいか分からないのでなんらかアドバイスいただけると助かります。', '2021-06-07 17:51:29', '2021-06-07 17:51:29');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `todo_table3`
--
ALTER TABLE `todo_table3`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `todo_table3`
--
ALTER TABLE `todo_table3`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
