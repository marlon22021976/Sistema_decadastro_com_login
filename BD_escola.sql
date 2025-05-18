CREATE TABLE `funcionario` (
  `cpf` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `formacao` varchar(50) NOT NULL,
  `nivelEscolar` varchar(50) NOT NULL
) 

INSERT INTO `funcionario` (`cpf`, `nome`, `endereco`, `cidade`, `estado`, `telefone`, `formacao`, `nivelEscolar`) VALUES
('17236655801', 'Vini Santos', 'Rua XX', 'Salto', 'SP', '1189563265', 'Engenharia', 'CursoSuperiorIncompleto');
