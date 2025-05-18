CREATE TABLE `usuarios` (
  `id` varchar(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) 

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
('1', 'Marlon Costa', 'marlon@marlon', '123456'),
('2', 'Viviane Santos', 'viviane@viviane', '9876');
