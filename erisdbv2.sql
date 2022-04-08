-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 08-04-2022 a las 12:19:22
-- Versión del servidor: 5.7.32
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erisdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblautonumbers`
--

CREATE TABLE `tblautonumbers` (
  `AUTOID` int(11) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblautonumbers`
--

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(1, '02983', 7, 1, 'userid'),
(2, '000', 78, 1, 'employeeid'),
(3, '0', 27, 1, 'APPLICANT'),
(4, '69125', 31, 1, 'FILEID');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_archivos_cv`
--

CREATE TABLE `t_archivos_cv` (
  `ID` int(11) NOT NULL,
  `FILEID` varchar(30) DEFAULT NULL,
  `JOBID` int(11) NOT NULL,
  `FILE_NAME` varchar(90) NOT NULL,
  `FILE_LOCATION` varchar(255) NOT NULL,
  `USERATTACHMENTID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_archivos_cv`
--

INSERT INTO `t_archivos_cv` (`ID`, `FILEID`, `JOBID`, `FILE_NAME`, `FILE_LOCATION`, `USERATTACHMENTID`) VALUES
(2, '2147483647', 2, 'Resume', 'photos/27052018124027PLATENO FE95483.docx', 2018013),
(3, '20226912530', 2, 'Resume', 'photos/08042022042958carbon.png', 2018013);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_candidatos`
--

CREATE TABLE `t_candidatos` (
  `APPLICANTID` int(11) NOT NULL,
  `FNAME` varchar(90) NOT NULL,
  `LNAME` varchar(90) NOT NULL,
  `MNAME` varchar(90) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `SEX` varchar(11) NOT NULL,
  `CIVILSTATUS` varchar(30) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `BIRTHPLACE` varchar(255) NOT NULL,
  `AGE` int(2) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `EMAILADDRESS` varchar(90) NOT NULL,
  `CONTACTNO` varchar(90) NOT NULL,
  `DEGREE` text NOT NULL,
  `APPLICANTPHOTO` varchar(255) NOT NULL,
  `NATIONALID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_candidatos`
--

INSERT INTO `t_candidatos` (`APPLICANTID`, `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `SEX`, `CIVILSTATUS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `USERNAME`, `PASS`, `EMAILADDRESS`, `CONTACTNO`, `DEGREE`, `APPLICANTPHOTO`, `NATIONALID`) VALUES
(2018013, 'Kim', 'Domingo', 'Enoe', 'Kab City', 'Female', 'none', '1991-01-01', 'Kab Citys', 27, 'kim', 'a6312121e15caec74845b7ba5af23330d52d4ac0', 'kim@y.com', '5415456', 'BSAC', 'photos/carbon.png', ''),
(2018014, 'Jake', 'Zyrus', 'Ilmba', 'Kab City', 'Female', 'none', '1993-01-16', 'Kab City', 25, 'jake', 'c8d99c2f7cd5f432c163abcd422672b9f77550bb', 'jake@y.com', '14655623123123', 'BSIT', '', ''),
(2018015, 'Janry', 'Tan', 'Lim', 'brgy 1 Kab City', 'Female', 'Single', '1992-01-30', 'Kab City', 26, 'janry', '1dd4efc811372cd1efe855981a8863d10ddde1ca', 'jan@gmail.com', '0234234', 'BSIT', '', ''),
(2022016, 'jose', 'santiz', 'ruiz', 'Calle candoquis', 'Male', 'Single', '1990-03-18', 'Hola no se que decir', 31, 'joseph1990', 'ecbea8744ac3ccbbefd8a5f194da73e3a00c0d8e', 'jose_santizr1990@hotmail.com', '9612168345', 'Licenciatura', '', ''),
(2022017, 'dfgfd', 'fdgfd', 'dfgfd', 'calle candoquis 209', 'Female', 'Married', '1987-03-28', 'dfgdfg', 34, 'dfgfdgd', '3888edf374b08b91562c51adff1ae82b7954f247', 'jose_santizr1990@hotmail.com', 'dfgfd', 'dfgfdgfd', '', ''),
(2022018, 'jesus', 'carlos', 'lopez', 'sadsjkajd', 'Female', 'Married', '1927-01-30', 'asdsad', 95, 'joseph1990', '7c222fb2927d828af22f592134e8932480637c0d', 'jose_santizr1990@hotmail.com', '9612168345', 'asdsad', '', ''),
(2022019, 'Juana', 'Ruiz', 'Hernandez', 'calle candoquis', 'Female', 'Married', '1909-03-13', 'sadsa', 112, 'joseph1990', 'ecbea8744ac3ccbbefd8a5f194da73e3a00c0d8e', 'jose_santizr1990@hotmail.com', '9612168345', 'adsadsa', '', ''),
(2022020, 'Lopez', 'Guztamante', 'Hernandez', 'calle candoquis', 'Male', 'Married', '1944-02-28', 'sadsad', 77, 'joseph1990', 'ecbea8744ac3ccbbefd8a5f194da73e3a00c0d8e', 'jose_santizr1990@hotmail.com', '9612168345', 'sadsada', '', ''),
(2022021, 'kristal', 'Loipez', 'Lopez', 'calle candoquis', 'Male', 'Widow', '0000-00-00', 'sadsadsa', 97, 'joseph1990', 'ecbea8744ac3ccbbefd8a5f194da73e3a00c0d8e', 'jose_santizr1990@hotmail.com', '9612168345', 'sadsadsa', '', ''),
(2022022, 'victor', 'manuel', 'guzman', 'njiasjijsija', 'Male', 'Widow', '1950-03-26', 'sadsadsa', 71, 'joseph19900', 'ecbea8744ac3ccbbefd8a5f194da73e3a00c0d8e', 'jose_santizr1990@hotmail.com', '9612168345', 'sadsadsad', '', ''),
(2022023, 'Emannuel', 'Espinoza', 'Espinoza', 'Calle candoquis', 'Male', 'Married', '1967-03-29', 'fdsafdsfs', 54, 'joseph199', 'ecbea8744ac3ccbbefd8a5f194da73e3a00c0d8e', 'jose_santizr1990@hotmail.com', '9612168345', 'sadsadsadsa', '', ''),
(2022024, 'sdafds', 'dsfds', 'fs', 'Calle Candoquis San Cayetano sin numero', 'Male', 'Widow', '1975-05-27', 'sdfdsfds', 46, 'sfsdfs', 'baf93c3394f2642163697372d36ba3d5fc3c8702', 'jose_santizr1990@hotmail.com', '9612168345', 'sdfds', '', ''),
(2022025, 'sdsa', 'dsada', 'dsasa', 'Cañon del sumidero', 'Male', 'Widow', '1935-04-28', 'asdasdsa', 86, 'asdas', '930a0029225aa4c28b8ef095b679285eaae27078', 'jose_santizr1990@hotmail.com', '9612168345', 'asdsa', '', ''),
(2022026, 'sadsad', 'asdas', 'sadas', 'Calle Candoquis San Cayetano sin numero', 'Male', 'Widow', '1942-03-26', 'sadassad', 79, 'sadsadsa', 'd5644e8105ad77c3c3324ba693e83d8fffd54950', 'jose_santizr1990@hotmail.com', '9612168345', 'asdsadas', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_categoria`
--

CREATE TABLE `t_categoria` (
  `CATEGORYID` int(11) NOT NULL,
  `CATEGORY` varchar(250) NOT NULL,
  `ICONO` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_categoria`
--

INSERT INTO `t_categoria` (`CATEGORYID`, `CATEGORY`, `ICONO`) VALUES
(10, 'Tecnologìa', '<i class=\"lni lni-instagram-original\"></i>'),
(11, 'Supervisor', '<i class=\"lni lni-instagram-original\"></i>'),
(12, 'Ingenieria', '<i class=\"lni lni-instagram-original\"></i>'),
(13, 'TI', '<i class=\"lni lni-instagram-original\"></i>'),
(14, 'Ingenieria Civl', '<i class=\"lni lni-instagram-original\"></i>'),
(15, 'Recursos Humanos', '<i class=\"lni lni-instagram-original\"></i>'),
(23, 'Ventas', '<i class=\"lni lni-instagram-original\"></i>'),
(24, 'Banco', '<i class=\"lni lni-instagram-original\"></i>'),
(25, 'Finanzas', '<i class=\"lni lni-instagram-original\"></i>'),
(26, 'BPO', '<i class=\"lni lni-instagram-original\"></i>'),
(27, 'Marketing', '<i class=\"lni lni-instagram-original\"></i>'),
(28, 'Compras', '<i class=\"lni lni-instagram-original\"></i>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_compania`
--

CREATE TABLE `t_compania` (
  `COMPANYID` int(11) NOT NULL,
  `COMPANYNAME` varchar(90) NOT NULL,
  `COMPANYADDRESS` varchar(90) NOT NULL,
  `COMPANYCONTACTNO` varchar(30) NOT NULL,
  `COMPANYSTATUS` varchar(90) NOT NULL,
  `COMPANYMISSION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_compania`
--

INSERT INTO `t_compania` (`COMPANYID`, `COMPANYNAME`, `COMPANYADDRESS`, `COMPANYCONTACTNO`, `COMPANYSTATUS`, `COMPANYMISSION`) VALUES
(2, 'Google Ac', 'New York', '9612168345', '', 'weqwe'),
(3, 'Facebook', 'New York', '9612168345', '', ''),
(4, 'GitHub', 'New York', '9612168345', '', ''),
(6, 'SEUAT', 'Tuxtla Gtz', '9612168345', '', ''),
(7, 'Telmex', 'Mexico', '9612168345', '', ''),
(8, 'Codersof', 'Calle candoqis', '9612168345', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_empleadores`
--

CREATE TABLE `t_empleadores` (
  `INCID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `LNAME` varchar(50) NOT NULL,
  `MNAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(90) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `BIRTHPLACE` varchar(90) NOT NULL,
  `AGE` int(11) NOT NULL,
  `SEX` varchar(30) NOT NULL,
  `CIVILSTATUS` varchar(30) NOT NULL,
  `TELNO` varchar(40) NOT NULL,
  `EMP_EMAILADDRESS` varchar(90) NOT NULL,
  `CELLNO` varchar(30) NOT NULL,
  `POSITION` varchar(50) NOT NULL,
  `WORKSTATS` varchar(90) NOT NULL,
  `EMPPHOTO` varchar(255) NOT NULL,
  `EMPUSERNAME` varchar(90) NOT NULL,
  `EMPPASSWORD` varchar(125) NOT NULL,
  `DATEHIRED` date NOT NULL,
  `COMPANYID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_empleadores`
--

INSERT INTO `t_empleadores` (`INCID`, `EMPLOYEEID`, `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `SEX`, `CIVILSTATUS`, `TELNO`, `EMP_EMAILADDRESS`, `CELLNO`, `POSITION`, `WORKSTATS`, `EMPPHOTO`, `EMPUSERNAME`, `EMPPASSWORD`, `DATEHIRED`, `COMPANYID`) VALUES
(76, '2018001', 'Chambe', 'Narciso', 'Captain', 'mabinay', '1992-01-23', 'Mabinay', 30, 'Male', 'Married', '032656', 'chambe@yahoo.com', '', 'Fuel Tender', '', '', '2018001', 'f3593fd40c55c33d1788309d4137e82f5eab0dea', '2018-05-23', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_empleos`
--

CREATE TABLE `t_empleos` (
  `JOBID` int(11) NOT NULL,
  `COMPANYID` int(11) NOT NULL,
  `CATEGORY` varchar(250) NOT NULL,
  `OCCUPATIONTITLE` varchar(90) NOT NULL,
  `REQ_NO_EMPLOYEES` int(11) NOT NULL,
  `SALARIES` double NOT NULL,
  `DURATION_EMPLOYEMENT` varchar(90) NOT NULL,
  `QUALIFICATION_WORKEXPERIENCE` text NOT NULL,
  `JOBDESCRIPTION` text NOT NULL,
  `PREFEREDSEX` varchar(30) NOT NULL,
  `SECTOR_VACANCY` text NOT NULL,
  `JOBSTATUS` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_empleos`
--

INSERT INTO `t_empleos` (`JOBID`, `COMPANYID`, `CATEGORY`, `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `JOBDESCRIPTION`, `PREFEREDSEX`, `SECTOR_VACANCY`, `JOBSTATUS`, `DATEPOSTED`) VALUES
(1, 2, 'Tecnologìa', 'Desarrollador Javascript', 6, 15000, 'jan 30', 'Two year Experience', 'We are looking for bachelor of science in information technology.\\r\\nasdasdasd', 'Male/Female', 'yes', '', '2018-05-20 00:00:00'),
(2, 2, '', 'Fullstack Python', 1, 15000, 'may 20', 'Two years Experience', 'We are looking for bachelor of science in Acountancy', 'Female', 'yes', '', '2018-05-20 02:33:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_empleos_aplicados`
--

CREATE TABLE `t_empleos_aplicados` (
  `REGISTRATIONID` int(11) NOT NULL,
  `COMPANYID` int(11) NOT NULL,
  `JOBID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `APPLICANT` varchar(90) NOT NULL,
  `REGISTRATIONDATE` date NOT NULL,
  `REMARKS` varchar(255) NOT NULL DEFAULT 'Pending',
  `FILEID` varchar(30) DEFAULT NULL,
  `PENDINGAPPLICATION` tinyint(1) NOT NULL DEFAULT '1',
  `HVIEW` tinyint(1) NOT NULL DEFAULT '1',
  `DATETIMEAPPROVED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_empleos_aplicados`
--

INSERT INTO `t_empleos_aplicados` (`REGISTRATIONID`, `COMPANYID`, `JOBID`, `APPLICANTID`, `APPLICANT`, `REGISTRATIONDATE`, `REMARKS`, `FILEID`, `PENDINGAPPLICATION`, `HVIEW`, `DATETIMEAPPROVED`) VALUES
(1, 2, 2, 2018013, 'Kim Domingo', '2018-05-27', 'Hola como estas', '2147483647', 0, 0, '2022-04-07 23:17:28'),
(2, 2, 2, 2018015, 'Janry Tan', '2018-05-26', 'Hola como estas kskdoa', '2147483647', 0, 0, '2022-04-07 23:28:32'),
(3, 2, 2, 2018013, 'Kim Domingo', '2022-04-08', 'Pending', '20226912530', 1, 1, '2022-04-08 04:29:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_retroalimentaciones`
--

CREATE TABLE `t_retroalimentaciones` (
  `FEEDBACKID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `REGISTRATIONID` int(11) NOT NULL,
  `FEEDBACK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_retroalimentaciones`
--

INSERT INTO `t_retroalimentaciones` (`FEEDBACKID`, `APPLICANTID`, `REGISTRATIONID`, `FEEDBACK`) VALUES
(1, 2018015, 2, 'Hola como estas kskdoa'),
(2, 2018013, 1, 'Hola como estas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `USERID` varchar(30) NOT NULL,
  `FULLNAME` varchar(40) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `ROLE` varchar(30) NOT NULL,
  `PICLOCATION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`USERID`, `FULLNAME`, `USERNAME`, `PASS`, `ROLE`, `PICLOCATION`) VALUES
('00018', 'Campcodes', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'photos/Koala.jpg'),
('2018001', 'Chambe Narciso', 'Narciso', 'f3593fd40c55c33d1788309d4137e82f5eab0dea', 'Employee', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  ADD PRIMARY KEY (`AUTOID`);

--
-- Indices de la tabla `t_archivos_cv`
--
ALTER TABLE `t_archivos_cv`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `t_candidatos`
--
ALTER TABLE `t_candidatos`
  ADD PRIMARY KEY (`APPLICANTID`);

--
-- Indices de la tabla `t_categoria`
--
ALTER TABLE `t_categoria`
  ADD PRIMARY KEY (`CATEGORYID`);

--
-- Indices de la tabla `t_compania`
--
ALTER TABLE `t_compania`
  ADD PRIMARY KEY (`COMPANYID`);

--
-- Indices de la tabla `t_empleadores`
--
ALTER TABLE `t_empleadores`
  ADD PRIMARY KEY (`INCID`),
  ADD UNIQUE KEY `EMPLOYEEID` (`EMPLOYEEID`);

--
-- Indices de la tabla `t_empleos`
--
ALTER TABLE `t_empleos`
  ADD PRIMARY KEY (`JOBID`);

--
-- Indices de la tabla `t_empleos_aplicados`
--
ALTER TABLE `t_empleos_aplicados`
  ADD PRIMARY KEY (`REGISTRATIONID`);

--
-- Indices de la tabla `t_retroalimentaciones`
--
ALTER TABLE `t_retroalimentaciones`
  ADD PRIMARY KEY (`FEEDBACKID`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`USERID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  MODIFY `AUTOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_archivos_cv`
--
ALTER TABLE `t_archivos_cv`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `t_candidatos`
--
ALTER TABLE `t_candidatos`
  MODIFY `APPLICANTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2022027;

--
-- AUTO_INCREMENT de la tabla `t_categoria`
--
ALTER TABLE `t_categoria`
  MODIFY `CATEGORYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `t_compania`
--
ALTER TABLE `t_compania`
  MODIFY `COMPANYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `t_empleadores`
--
ALTER TABLE `t_empleadores`
  MODIFY `INCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `t_empleos`
--
ALTER TABLE `t_empleos`
  MODIFY `JOBID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t_empleos_aplicados`
--
ALTER TABLE `t_empleos_aplicados`
  MODIFY `REGISTRATIONID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `t_retroalimentaciones`
--
ALTER TABLE `t_retroalimentaciones`
  MODIFY `FEEDBACKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
