
CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `ket` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `jenis_kelamin` (
  `id` int(11) NOT NULL,
  `ket` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` int(11) NOT NULL,
  `fakultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
