CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `CPF` varchar(16) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`,`CPF`) USING BTREE;

ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;