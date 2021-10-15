
--
-- Banco de dados: `Reciclapp`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(3, 'Casa das Garrafas e Bebidas', 'SDMC - Ceilândia, Brasilia - Federal District, 72265-080', -15.794068, -48.150040, 'Centro de Reciclagem'),
(4, 'Reciclagem Ideal Eireli', 'SDMC Quadra 2 CL lote 56 - Ceilândia, Brasília - DF, 72265-705', -15.793351, -48.147007, 'Reciclagem de cobre'),
(5, 'Ecopneu Reciclagem de Pneus Ltda - DF', 'Q QD 19 LOTE 12,14,16,18 - Ceilândia, Brasília - DF, 72215-010', -15.794628, -48.144356, 'Reciclagem pneu'),
(6, 'Reciclagem Júnior', 'Expansão do St. O QNO 18 Conj. E - Ceilândia, Brasília - DF', -15.795372, -48.141254, 'Reciclagem de alumínio'),
(7, 'Depósito Reciclagem', 'Qno 18 Cj 41 - s/n C 8 - Ceilândia, DF, 72260-180', -15.796101, -48.140785, 'Reciclagem em geral'),
(8, 'Brasília Trituradora de pneus', 'St. de Indústria QI 1 - Ceilândia, Brasília - DF, 72265-080', -15.801096, -48.141735, 'Reciclagem de pneus'),
(9, 'Descarte Lixo Eletrônico', 'Qnp 15 conjunto A, Ceilândia Norte casa 02, Brasília - DF, 72241-601', -15.810371, -48.132103, 'Reciclagem de eletrônicos'),
(10, 'Central de Reciclagem', 'Q 2, Varjão - Lago Norte, Brasília - DF, 70297-400', -15.713939, -47.874603, 'Reciclagem em geral'),
(11, 'Reciclagem Guará', 'Guará II QE 40 - Guará, Brasília - DF, 71070-032', -15.841319, -47.986160, 'Reciclagem em geral'),
(12, 'LS Reciclagem', 'QI 416 Conj. 1 26/28 - Samambaia Norte, Brasília - DF, 72320-301', -15.854359, -48.068268, 'Reciclagem em geral');

--
-- Setando chave primária
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabela `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Deletar algum registro na tabela `markers`
--
-- DELETE FROM markers WHERE=1;
-- DELETE FROM markers WHERE=2;
