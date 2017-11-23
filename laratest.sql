-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 09:46 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laratest`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `film_id` int(10) UNSIGNED NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `film_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'This is an awesome comedy move and Ryan Reynold has just stole the show with this movie.Super movie', '2017-11-23 14:29:57', '2017-11-23 14:29:57'),
(2, 1, 2, 'This is an epic movie...emotional and touchy', '2017-11-23 14:30:49', '2017-11-23 14:30:49'),
(3, 1, 3, 'nice movie....Tom Holland is awesome', '2017-11-23 14:31:25', '2017-11-23 14:31:25'),
(4, 1, 4, 'Another Christopher Nolan movie and another superb movie', '2017-11-23 14:32:07', '2017-11-23 14:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `ticket_price` int(10) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `name`, `description`, `release_date`, `rating`, `ticket_price`, `country`, `genre`, `photo`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Deadpool', 'Deadpool is a 2016 American superhero film based on the Marvel Comics character of the same name, distributed by 20th Century Fox. It is the eighth installment of the X-Men film series. The film was directed by Tim Miller from a screenplay by Rhett Reese and Paul Wernick, and stars Ryan Reynolds in the title role alongside Morena Baccarin, Ed Skrein, T. J. Miller, Gina Carano, Leslie Uggams, Brianna Hildebrand, and Stefan Kapičić. In Deadpool, Wade Wilson hunts the man who gave him mutant abilities, but also a scarred physical appearance, as the antihero Deadpool.', '2016-02-08', 4, 75, 'USA', 'action,comedy,romance', 'deadpool.jpg', 'deadpool', '2017-11-23 14:27:21', '2017-11-23 14:27:21'),
(2, 'Logan', 'Logan is a 2017 American superhero film, produced by Marvel Entertainment, TSG Entertainment and The Donners\' Company, and distributed by 20th Century Fox.[3][4] It is the tenth installment in the X-Men film series, as well as the third and final Wolverine solo film following X-Men Origins: Wolverine (2009) and The Wolverine (2013). The film, which takes inspiration from the Old Man Logan comic-book series by Mark Millar and Steve McNiven, follows an aged Wolverine and an extremely ill Professor X defending the former\'s biological Mexican daughter Laura from the villainous Reavers and Alkali-Transigen led by Donald Pierce and Zander Rice, respectively.', '2017-02-17', 4, 60, 'USA', 'action,family,sci-fi', 'logan.jpg', 'logan', '2017-11-23 14:27:21', '2017-11-23 14:27:21'),
(3, 'Spider-Man: Homecoming', 'Spider-Man: Homecoming is a 2017 American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios, and distributed by Sony Pictures Releasing. It is the second Spider-Man film reboot and the sixteenth film of the Marvel Cinematic Universe (MCU). The film is directed by Jon Watts, from a screenplay by the writing teams of Jonathan Goldstein and John Francis Daley, Watts and Christopher Ford, and Chris McKenna and Erik Sommers. Tom Holland stars as Spider-Man, alongside Michael Keaton, Jon Favreau, Zendaya, Donald Glover, Tyne Daly, Marisa Tomei and Robert Downey Jr. In Spider-Man: Homecoming, Peter Parker tries to balance high school life with being Spider-Man, while facing the Vulture.', '2017-02-17', 3, 50, 'USA', 'action,comedy,sci-fi', 'spiderman.jpg', 'spider-man-homecoming', '2017-11-23 14:27:21', '2017-11-23 14:27:21'),
(4, 'Dunkirk', 'Dunkirk is a 2017 war film written, directed, and co-produced by Christopher Nolan that depicts World War II\'s Dunkirk evacuation. Its ensemble cast includes Fionn Whitehead, Tom Glynn-Carney, Jack Lowden, Harry Styles, Aneurin Barnard, James D\'Arcy, Barry Keoghan, Kenneth Branagh, Cillian Murphy, Mark Rylance, and Tom Hardy. The film is a British, American, French, and Dutch co-production, distributed by Warner Bros. Pictures.', '2017-07-17', 5, 100, 'USA', 'action,history,family', 'dunkirk.jpg', 'dunkirk', '2017-11-23 14:27:21', '2017-11-23 14:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2017_11_23_074434_create_genres_table', 1),
(13, '2017_11_23_172103_add_slug_to_films', 2),
(18, '2017_11_23_080811_create_film_genre_table', 3),
(43, '2014_10_12_000000_create_users_table', 4),
(44, '2014_10_12_100000_create_password_resets_table', 4),
(45, '2017_11_23_072649_create_films_table', 4),
(46, '2017_11_23_074859_create_comments_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Malik Faizan Zafar', 'malikfaizanzafar1993@gmail.com', '$2y$10$FoctSSQoiCSBeRbl.6DEs.le3C5l6DLy/8vFPc6H4KcC9D/ECS4G6', 'QZAoOpmSzxldHYpBohLARl1RXARNZePXP7iJTjf6hMRx3YHS4tjv6iRpxXVD', '2017-11-23 14:29:04', '2017-11-23 14:29:04'),
(2, 'Faiq Farhan', 'faiq@gmail.com', '$2y$10$BavdkRavMBIFjiMcO1uUpuHzAROgwHihythfn4e9AHus8XbTkZv9e', 'PV25J0IUAYGKVcXGe6PYK79JeJkyoNck0P5mLUd4B7CRkaYPvQdjuoWcQ8XW', '2017-11-23 14:32:54', '2017-11-23 14:32:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
