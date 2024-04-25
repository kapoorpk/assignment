CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    profile_picture longtext NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile_picture`, `created_at`, `updated_at`) VALUES
(2, 'aa', 'aa@gmail.com', '$2y$10$0/zIcAcFVMq4QxkMtOupAed0yV9RA0vczXzgDcQgzr2lhP7CmADWW', 'Bulk_Ledger_04_03_2021_17_13_28.csv', '2024-04-25 11:06:58', '2024-04-25 11:06:58'),
(3, 'my', 'my@gmail.com', '$2y$10$gs9dXJOeadBLRztNJBniAelouk4H0VyhOqazKVcnED7yVz.kZAoYa', 'IMG_1535 copy.jpg', '2024-04-25 11:35:00', '2024-04-25 11:35:00'),
(6, 'aa11', 'a@gmail.com', '$2y$10$aBPn81WRkD4NeRpx1Y4M5uxEcbXWc02oitWNOEvuiX6plRk21Woza', 'Bulk_Ledger_04_03_2021_17_13_28.csv', '2024-04-25 11:40:12', '2024-04-25 11:40:12'),
(10, 'aa11ee', 'aa1@gmail.com', '$2y$10$6J.FSoV6sLgZu/njDCEqJufJo1/67hJ/P0TOIMFKjaNuRHWMtKtKC', 'Bulk_Ledger_04_03_2021_17_13_28.csv', '2024-04-25 11:42:25', '2024-04-25 11:42:25'),
(11, 'q', 'q@gmail.com', '$2y$10$NLGsusVzGgQzeLasXtQxCuNlULGgBnaXDu857eZfN8hXQVjenLWKy', 'IMG_1535 copy.jpg', '2024-04-25 12:28:25', '2024-04-25 12:28:25'),
(13, 'pk', 'pk@gmail.com', '$2y$10$tAfmgHKtqMS5rNsWjLjCi.prca2SPZUVcI1iPGaV62Rvd8YDFQgDO', 'nature.jpg', '2024-04-25 17:14:17', '2024-04-25 17:14:17'),
(15, 'qq', 'q1@gmail.com', '$2y$10$XuP.ugKmMXCTK1Vu1wMiiOlz.AwgJ1mI0Aon3l.1G5812GyyMPPXS', 'nature.jpg', '2024-04-25 17:19:29', '2024-04-25 17:19:29'),
(17, 'qq1', 'q11@gmail.com', '$2y$10$T5NoqfPcgGZdAhQqD0obN.uc8iUvzTn43ON4eHop01MuLBNeDDRiy', 'nature.jpg', '2024-04-25 17:20:51', '2024-04-25 17:20:51');

