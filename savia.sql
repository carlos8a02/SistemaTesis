-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2021 a las 02:28:37
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `savia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agricultura`
--

CREATE TABLE `agricultura` (
  `id` int(11) NOT NULL,
  `agricultor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_agricultor` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agrovenezuela`
--

CREATE TABLE `agrovenezuela` (
  `id` int(11) NOT NULL,
  `agro` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_agro` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aldea_universitaria`
--

CREATE TABLE `aldea_universitaria` (
  `id` int(11) NOT NULL,
  `universidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_universidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `universidad_biblioteca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `universidad_comedor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `universidad_banos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `universidad_canchas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_universidad` int(30) NOT NULL,
  `observacion_universidad` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentaciones`
--

CREATE TABLE `alimentaciones` (
  `id` int(11) NOT NULL,
  `alimentacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_alimentacion` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amor_mayores`
--

CREATE TABLE `amor_mayores` (
  `id` int(30) NOT NULL,
  `amor_mayor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_amor_mayor` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artesania`
--

CREATE TABLE `artesania` (
  `id` int(11) NOT NULL,
  `artesano` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_artesano` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoridadlegitima`
--

CREATE TABLE `autoridadlegitima` (
  `id` int(11) NOT NULL,
  `nombre_vocero` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_autoridad_legitima` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cargo_autoridad_legitima` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `numero_de_telefono` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autoridadlegitima`
--

INSERT INTO `autoridadlegitima` (`id`, `nombre_vocero`, `nombre_autoridad_legitima`, `cargo_autoridad_legitima`, `numero_de_telefono`) VALUES
(1, 'ca', 'ca', 'cacique', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas`
--

CREATE TABLE `cajas` (
  `id` int(11) NOT NULL,
  `clap` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_clap` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas_adicionales`
--

CREATE TABLE `caracteristicas_adicionales` (
  `id` int(11) NOT NULL,
  `traje_tipico` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `lengua:materna` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `lenguas_maternas` int(30) NOT NULL,
  `sistema_bilingue` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `menores_sin_estudio` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `total_menores` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carnet_patria`
--

CREATE TABLE `carnet_patria` (
  `id` int(11) NOT NULL,
  `carnet` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_carnet` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cazador`
--

CREATE TABLE `cazador` (
  `id` int(11) NOT NULL,
  `caza` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_caza` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros_salud`
--

CREATE TABLE `centros_salud` (
  `id` int(11) NOT NULL,
  `centro_salud` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ambulancias` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `patologias` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `centros_salud`
--

INSERT INTO `centros_salud` (`id`, `centro_salud`, `estatus`, `ambulancias`, `patologias`) VALUES
(1, 'Ambulatorio Rural 1', 'Activo', 'si', 'Otras'),
(2, 'Centro Chamanico', 'Activo', 'si', 'Enfermedades CrÃ³nicas Degener'),
(3, 'Centro Chamanico', 'Activo', 'si', 'VIH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercios`
--

CREATE TABLE `comercios` (
  `id` int(11) NOT NULL,
  `comercio` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipos_comercios` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comercios`
--

INSERT INTO `comercios` (`id`, `comercio`, `tipos_comercios`) VALUES
(1, 'si', 'publico'),
(2, 'si', 'privado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunas`
--

CREATE TABLE `comunas` (
  `id` int(11) NOT NULL,
  `base_misiones` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `inf1` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `consejo_comunal` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `inf2` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_de_consejo_comunal` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pertenece_a_una_comunidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `comite_indigena` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comunas`
--

INSERT INTO `comunas` (`id`, `base_misiones`, `inf1`, `consejo_comunal`, `inf2`, `tipo_de_consejo_comunal`, `pertenece_a_una_comunidad`, `comite_indigena`) VALUES
(1, 'si', 'carlos', 'si', 'asas', 'mixto', 'si', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crias`
--

CREATE TABLE `crias` (
  `id` int(11) NOT NULL,
  `criador` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_crias` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidades`
--

CREATE TABLE `discapacidades` (
  `id` int(11) NOT NULL,
  `discapacidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad_discapacidad` int(30) NOT NULL,
  `discapacidad_femeninas` int(30) NOT NULL,
  `discapacidad_masculinos` int(30) NOT NULL,
  `tipo_discapacidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `discapacidades`
--

INSERT INTO `discapacidades` (`id`, `discapacidad`, `cantidad_discapacidad`, `discapacidad_femeninas`, `discapacidad_masculinos`, `tipo_discapacidad`) VALUES
(1, 'si', 1, 1, 1, 'Visual'),
(2, 'si', 1, 1, 1, 'Visual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribucion_geografica`
--

CREATE TABLE `distribucion_geografica` (
  `id` int(11) NOT NULL,
  `estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `municipios` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `parroquias` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `sector` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_comunidad` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_indigena` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `grupo` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `distribucion_geografica`
--

INSERT INTO `distribucion_geografica` (`id`, `estado`, `municipios`, `parroquias`, `sector`, `nombre_comunidad`, `nombre_indigena`, `grupo`) VALUES
(2, 'Anzoategui', 'Aragua', 'Cachipo', 'car', 'loss', 'asdas', 'No Aplica'),
(6, 'Anzoategui', 'Anaco', 'Anaco', 'eee', 'eee', 'eee', 'Clan'),
(7, 'Anzoategui', 'Anaco', 'San JoaquÃ­n', 'sddsd', 'sdsdsd', 'dsdsdsd', 'No Aplica'),
(8, 'Anzoategui', 'Aragua', 'Aragua de Barcelona', 'dsd', 'dsdsdd', 'dsdsd', 'No Aplica'),
(9, 'Anzoategui', 'Anaco', 'Anaco', 'sdas', 'sasas', 'xccax', 'No Aplica'),
(10, 'Anzoategui', 'Anaco', 'San JoaquÃ­n', 'sas', 'sasas', 'ca', 'Sub-grupo'),
(11, 'Anzoategui', 'Anaco', 'San JoaquÃ­n', 'dadad', 'adadad', 'adad', 'Sub-grupo'),
(12, 'Anzoategui', 'Anaco', 'Anaco', 'carrs', 'adada', 'ca', 'Clan'),
(13, 'Anzoategui', 'Anaco', 'Anaco', 'fdfd', 'fdfdf', 'fdfd', 'No Aplica'),
(14, 'Anzoategui', 'Anaco', 'Anaco', 'fdfd', 'fdfdf', 'fdfd', 'No Aplica'),
(15, 'Anzoategui', 'Anaco', 'Anaco', 'fdfd', 'fdfdf', 'fdfd', 'No Aplica'),
(16, 'Anzoategui', 'Diego Bautista Urban', 'El Morro', 'fdfd', 'fdfdf', 'fdfd', 'No Aplica'),
(17, 'Anzoategui', 'Diego Bautista Urban', 'El Morro', 'fdfd', 'fdfdf', 'fdfd', 'No Aplica'),
(18, 'Anzoategui', 'Anaco', 'Anaco', 'fdfdf', 'fdfdf', 'xccax', 'Clan'),
(19, 'Anzoategui', 'Anaco', 'Anaco', 'dsd', 'dsdsd', 'dsdsd', 'Clan'),
(20, 'Anzoategui', 'Anaco', 'Anaco', 'dsd', 'dsdsd', 'dsdsd', 'Clan'),
(22, 'Anzoategui', 'Aragua', 'Aragua de Barcelona', 'fre', 'dsdsd', 'asdsd', 'No Aplica'),
(23, 'Anzoategui', 'Anaco', 'Anaco', 'carrs', 'addad', 'sdaasdasd', 'No Aplica'),
(24, 'Anzoategui', 'Aragua', 'Aragua de Barcelona', 'ewe', 'wewe', 'ewe', 'Sub-grupo'),
(25, 'Anzoategui', 'Anaco', 'Anaco', 'sdasd', 'sassa', 'dsdsd', 'Sub-grupo'),
(26, 'Anzoategui', 'Aragua', 'Cachipo', 'caca', 'cacac', 'caca', 'Sub-grupo'),
(27, 'Anzoategui', 'Diego Bautista Urban', 'El Morro', 'dad', 'addad', 'adad', 'Clan'),
(28, 'Anzoategui', 'Anaco', 'Anaco', 'fdsd', 'sddsd', 'sdsd', 'No Aplica'),
(29, 'Anzoategui', 'Aragua', 'Cachipo', 'sdasd', 'dasdad', 'asdasd', 'No Aplica'),
(30, 'Anzoategui', 'Anaco', 'Anaco', 'anaco', 'sasas', 'sasas', 'Sub-grupo'),
(31, 'Anzoategui', 'Anaco', 'Anaco', 'cadad', 'hjhjh', 'ujhjh', 'Sub-grupo'),
(32, 'Anzoategui', 'Aragua', '-', 'hghg', 'hhh', 'jkjkj', 'Sub-grupo'),
(33, 'Anzoategui', 'Aragua', 'Aragua de Barcelona', 'jkjjj', 'uuyy', 'poil', 'Sub-grupo'),
(34, 'Anzoategui', 'Libertad', 'El Carito', 'kariÃ±a', 'infe', 'sdsd', 'Sub-grupo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribucion_poblacion`
--

CREATE TABLE `distribucion_poblacion` (
  `id` int(11) NOT NULL,
  `total_habitantes_indigenas` int(30) NOT NULL,
  `actas_nacimiento` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `numero_actas` int(30) NOT NULL,
  `cedulas_indentidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `numero_cedulas` int(30) NOT NULL,
  `numero_femeninos` int(30) NOT NULL,
  `numero_masculinos` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `distribucion_poblacion`
--

INSERT INTO `distribucion_poblacion` (`id`, `total_habitantes_indigenas`, `actas_nacimiento`, `numero_actas`, `cedulas_indentidad`, `numero_cedulas`, `numero_femeninos`, `numero_masculinos`) VALUES
(2, 12, 'no', 1, 'no', 1, 1, 1),
(3, 12, 'si', 0, 'si', 0, 1, 1),
(4, 20, 'si', 0, 'si', 0, 1, 1),
(5, 1, 'si', 0, 'si', 0, 1, 1),
(6, 1, 'si', 0, 'si', 0, 1, 1),
(7, 2, 'si', 0, 'si', 0, 1, 1),
(8, 1, 'si', 0, 'si', 0, 1, 1),
(9, 1, 'si', 0, 'si', 0, 1, 1),
(10, 1, 'si', 0, 'si', 0, 2, 2),
(11, 1, 'si', 0, 'si', 0, 44, 4),
(12, 1, 'si', 0, 'si', 0, 1, 1),
(13, 1, 'si', 0, 'si', 0, 1, 1),
(14, 1, 'si', 0, 'si', 0, 22, 22),
(15, 1, 'si', 0, 'si', 0, 1, 1),
(16, 1, 'si', 0, 'si', 0, 1, 1),
(17, 11, 'si', 0, 'si', 0, 11, 111),
(18, 200, 'si', 0, 'si', 0, 50, 50),
(19, 200, 'si', 0, 'si', 0, 50, 50),
(20, 10, 'si', 0, 'si', 0, 12, 60),
(21, 1, 'si', 0, 'si', 0, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo_independiente`
--

CREATE TABLE `empleo_independiente` (
  `id` int(11) NOT NULL,
  `cuenta_propia` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleo_independiente`
--

INSERT INTO `empleo_independiente` (`id`, `cuenta_propia`) VALUES
(1, 'si'),
(2, 'no'),
(3, 'si'),
(4, 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocivil`
--

CREATE TABLE `estadocivil` (
  `id` int(11) NOT NULL,
  `unidos` int(30) NOT NULL,
  `casados` int(30) NOT NULL,
  `solteros` int(30) NOT NULL,
  `divorciados` int(30) NOT NULL,
  `viudos` int(30) NOT NULL,
  `otros` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estadocivil`
--

INSERT INTO `estadocivil` (`id`, `unidos`, `casados`, `solteros`, `divorciados`, `viudos`, `otros`) VALUES
(1, 1, 1, 1, 1, 1, 'concubinos'),
(2, 1, 2, 3, 4, 5, 'fe'),
(4, 1, 2, 3, 4, 5, 'fjashfns');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hogares_de_la_patria`
--

CREATE TABLE `hogares_de_la_patria` (
  `id` int(11) NOT NULL,
  `hogares_patria` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_hogares_patria` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_comunidad`
--

CREATE TABLE `informacion_comunidad` (
  `id` int(11) NOT NULL,
  `instituciones_educativas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `total_analfabetas` int(30) NOT NULL,
  `analfabetas_femeninas` int(30) NOT NULL,
  `analfabetas_masculinos` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interculturales`
--

CREATE TABLE `interculturales` (
  `id` int(11) NOT NULL,
  `escuela_interculturales` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_intercultural` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `intercultural_biblioteca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `intercultural_comedor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `intercultural_banos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `intercultural_canchas` int(30) NOT NULL,
  `codigo_intercultural` int(30) NOT NULL,
  `observacion_intercultural` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jose_gregorio`
--

CREATE TABLE `jose_gregorio` (
  `id` int(11) NOT NULL,
  `jgh` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_jgh` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lactancias`
--

CREATE TABLE `lactancias` (
  `id` int(11) NOT NULL,
  `lactantes` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `total_lactante` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lactancias`
--

INSERT INTO `lactancias` (`id`, `lactantes`, `total_lactante`) VALUES
(1, 'si', 1),
(2, 'si', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liceos`
--

CREATE TABLE `liceos` (
  `id` int(11) NOT NULL,
  `liceo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_liceo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `liceo_biblioteca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `liceo_comedor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `liceo_banos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `liceo_canchas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_liceo` int(30) NOT NULL,
  `observacion_liceo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menores_trabajando`
--

CREATE TABLE `menores_trabajando` (
  `id` int(11) NOT NULL,
  `ninos_menores` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `total_menores` int(30) NOT NULL,
  `detalle_empleados` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `menores_trabajando`
--

INSERT INTO `menores_trabajando` (`id`, `ninos_menores`, `total_menores`, `detalle_empleados`) VALUES
(1, 'si', 10, 'sin padres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercales`
--

CREATE TABLE `mercales` (
  `id` int(11) NOT NULL,
  `mercal` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_mercal` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `milagros`
--

CREATE TABLE `milagros` (
  `id` int(11) NOT NULL,
  `milagro` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_milagro` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mision_robinson`
--

CREATE TABLE `mision_robinson` (
  `id` int(11) NOT NULL,
  `mision_ribas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_ribas` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `natalidades`
--

CREATE TABLE `natalidades` (
  `id` int(11) NOT NULL,
  `mujeres_embarazadas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `numero_mujeres_embarazadas` int(30) NOT NULL,
  `mujeres_10_17` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `numero_menores_embarazadas` int(30) NOT NULL,
  `mujeres_18_25` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `numero_jovenes_embarazadas` int(30) NOT NULL,
  `mujeres_26_45` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `numero_adultas_embarazadas` int(30) NOT NULL,
  `parteras` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `numero_parteras` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `natalidades`
--

INSERT INTO `natalidades` (`id`, `mujeres_embarazadas`, `numero_mujeres_embarazadas`, `mujeres_10_17`, `numero_menores_embarazadas`, `mujeres_18_25`, `numero_jovenes_embarazadas`, `mujeres_26_45`, `numero_adultas_embarazadas`, `parteras`, `numero_parteras`) VALUES
(1, 'no', 0, 'no', 0, '0', 0, 'no', 0, 'si', 1),
(2, 'si', 3, 'si', 1, '1', 1, 'si', 1, 'si', 10),
(3, 'no', 0, 'no', 0, '0', 0, 'no', 0, 'si', 25),
(4, 'si', 1, 'no', 0, '0', 0, 'no', 0, 'si', 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `natalidad_infantil`
--

CREATE TABLE `natalidad_infantil` (
  `id` int(11) NOT NULL,
  `infantes_femeninos` int(30) NOT NULL,
  `infantes_masculinos` int(30) NOT NULL,
  `nacidos` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `natalidad_infantil`
--

INSERT INTO `natalidad_infantil` (`id`, `infantes_femeninos`, `infantes_masculinos`, `nacidos`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 5),
(3, 0, 0, 0),
(4, 0, 0, 0),
(5, 1, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negra_hipolita`
--

CREATE TABLE `negra_hipolita` (
  `id` int(11) NOT NULL,
  `hipolita` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_hipolita` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nevado`
--

CREATE TABLE `nevado` (
  `id` int(11) NOT NULL,
  `nevados` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_nevado` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pdvales`
--

CREATE TABLE `pdvales` (
  `id` int(11) NOT NULL,
  `pdval` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_pdval` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pension`
--

CREATE TABLE `pension` (
  `id` int(11) NOT NULL,
  `pensionados` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_pensionados` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pescador`
--

CREATE TABLE `pescador` (
  `id` int(11) NOT NULL,
  `pesca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_pesca` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_semilla`
--

CREATE TABLE `plan_semilla` (
  `id` int(11) NOT NULL,
  `semillas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_semilla` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practicas_ancestrales`
--

CREATE TABLE `practicas_ancestrales` (
  `id` int(11) NOT NULL,
  `saber_ancestral` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `sitios_sagrados` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `total_sitios_sagrados` int(30) NOT NULL,
  `tipos_rituales` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `conservar_saberes_ancestrales` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `transmicion_saberes_ancestrales` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `comunidad_imparte` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `practicas_ancestrales` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `religion_comunidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `primarias`
--

CREATE TABLE `primarias` (
  `id` int(11) NOT NULL,
  `escuelas_primarias` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_primaria` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `primaria_biblioteca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `primaria_comedor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `primaria_banos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `primaria_canchas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_escuela` int(30) NOT NULL,
  `observacion_primaria` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_encuestas`
--

CREATE TABLE `p_encuestas` (
  `id_encuestas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_censal`
--

CREATE TABLE `registro_censal` (
  `id` int(11) NOT NULL,
  `nombres_apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cedulas` int(30) NOT NULL,
  `edad` int(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `grado_instruccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `agua` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `gas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `electricidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `aseo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `acceso_comunidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `agua`, `gas`, `electricidad`, `aseo`, `acceso_comunidad`) VALUES
(1, 'No Tiene', 'Directo', 'Planta de Combustible', 'Aseo Urbano', 'AÃ©reo'),
(2, 'No Tiene', 'Directo', 'Red ElÃ©ctrica', 'Quema de Desechos', 'AÃ©reo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simoncitos`
--

CREATE TABLE `simoncitos` (
  `id` int(11) NOT NULL,
  `simoncito` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_simoncito` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `simoncito_biblioteca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `simoncito_comedor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `simoncito_banos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `simoncito_canchas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_simoncito1` int(30) NOT NULL,
  `observacion_simoncito` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicas`
--

CREATE TABLE `tecnicas` (
  `id` int(11) NOT NULL,
  `escuela_tecnica` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_tecnica` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tecnica_biblioteca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tecnica_comedor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tecnica_banos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tecnica_canchas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_tecnica` int(30) NOT NULL,
  `observacion_tecnica` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` double NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` double NOT NULL,
  `celular` double NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `privilegio` int(2) NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `cedula`, `direccion`, `telefono`, `celular`, `usuario`, `privilegio`, `password`) VALUES
(1, 'Alondra', 'segura', 325844545, 'caracas', 2124152454, 122145454, 'segura', 1, '81CMbBg2r.GBA'),
(2, 'jose', 'olachea', 254152454, 'caracas', 121245454, 12452457457, 'jose', 2, '81CMbBg2r.GBA'),
(3, 'juan', 'rodriguez', 3224245241, 'caracas', 212421241, 1441454, 'juan', 3, '81CMbBg2r.GBA'),
(4, 'carlos', 'ochoa', 25845923, 'guarenas', 2123612381, 4163123169, 'carlos', 1, '81CMbBg2r.GBA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viviendas`
--

CREATE TABLE `viviendas` (
  `id` int(11) NOT NULL,
  `vivienda` int(30) NOT NULL,
  `tipos_viviendas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `otras_vivienda` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `viviendas`
--

INSERT INTO `viviendas` (`id`, `vivienda`, `tipos_viviendas`, `otras_vivienda`) VALUES
(1, 12, 'Quinta', 'Tepuy'),
(2, 1, 'Quinta', 'Ruka'),
(3, 12, 'Quinta', 'Tapurupa'),
(4, 12, 'Quinta', 'Tapurupa'),
(5, 19, 'Anexo', 'Palafitos'),
(6, 12, 'Quinta', 'Tepuy'),
(7, 2, 'Casa', 'Ruka'),
(8, 3, 'Quinta', 'Tapurupa'),
(9, 1, 'Casa', 'Ruka'),
(10, 3, 'Quinta', 'Tapurupa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda_venezuela`
--

CREATE TABLE `vivienda_venezuela` (
  `id` int(11) NOT NULL,
  `viviendas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `beneficiados_viviendas` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agricultura`
--
ALTER TABLE `agricultura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `agrovenezuela`
--
ALTER TABLE `agrovenezuela`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aldea_universitaria`
--
ALTER TABLE `aldea_universitaria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alimentaciones`
--
ALTER TABLE `alimentaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `amor_mayores`
--
ALTER TABLE `amor_mayores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `artesania`
--
ALTER TABLE `artesania`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `autoridadlegitima`
--
ALTER TABLE `autoridadlegitima`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `caracteristicas_adicionales`
--
ALTER TABLE `caracteristicas_adicionales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carnet_patria`
--
ALTER TABLE `carnet_patria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cazador`
--
ALTER TABLE `cazador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `centros_salud`
--
ALTER TABLE `centros_salud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comercios`
--
ALTER TABLE `comercios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comunas`
--
ALTER TABLE `comunas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `crias`
--
ALTER TABLE `crias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `discapacidades`
--
ALTER TABLE `discapacidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `distribucion_geografica`
--
ALTER TABLE `distribucion_geografica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `distribucion_poblacion`
--
ALTER TABLE `distribucion_poblacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleo_independiente`
--
ALTER TABLE `empleo_independiente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hogares_de_la_patria`
--
ALTER TABLE `hogares_de_la_patria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informacion_comunidad`
--
ALTER TABLE `informacion_comunidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `interculturales`
--
ALTER TABLE `interculturales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jose_gregorio`
--
ALTER TABLE `jose_gregorio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lactancias`
--
ALTER TABLE `lactancias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `liceos`
--
ALTER TABLE `liceos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menores_trabajando`
--
ALTER TABLE `menores_trabajando`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mercales`
--
ALTER TABLE `mercales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `milagros`
--
ALTER TABLE `milagros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mision_robinson`
--
ALTER TABLE `mision_robinson`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `natalidades`
--
ALTER TABLE `natalidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `natalidad_infantil`
--
ALTER TABLE `natalidad_infantil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `negra_hipolita`
--
ALTER TABLE `negra_hipolita`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nevado`
--
ALTER TABLE `nevado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pdvales`
--
ALTER TABLE `pdvales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pension`
--
ALTER TABLE `pension`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pescador`
--
ALTER TABLE `pescador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plan_semilla`
--
ALTER TABLE `plan_semilla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `practicas_ancestrales`
--
ALTER TABLE `practicas_ancestrales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `primarias`
--
ALTER TABLE `primarias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `p_encuestas`
--
ALTER TABLE `p_encuestas`
  ADD PRIMARY KEY (`id_encuestas`);

--
-- Indices de la tabla `registro_censal`
--
ALTER TABLE `registro_censal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `simoncitos`
--
ALTER TABLE `simoncitos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tecnicas`
--
ALTER TABLE `tecnicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `viviendas`
--
ALTER TABLE `viviendas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vivienda_venezuela`
--
ALTER TABLE `vivienda_venezuela`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agricultura`
--
ALTER TABLE `agricultura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `agrovenezuela`
--
ALTER TABLE `agrovenezuela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `aldea_universitaria`
--
ALTER TABLE `aldea_universitaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alimentaciones`
--
ALTER TABLE `alimentaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `amor_mayores`
--
ALTER TABLE `amor_mayores`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `artesania`
--
ALTER TABLE `artesania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `autoridadlegitima`
--
ALTER TABLE `autoridadlegitima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cajas`
--
ALTER TABLE `cajas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `caracteristicas_adicionales`
--
ALTER TABLE `caracteristicas_adicionales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carnet_patria`
--
ALTER TABLE `carnet_patria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cazador`
--
ALTER TABLE `cazador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `centros_salud`
--
ALTER TABLE `centros_salud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comercios`
--
ALTER TABLE `comercios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comunas`
--
ALTER TABLE `comunas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `crias`
--
ALTER TABLE `crias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `discapacidades`
--
ALTER TABLE `discapacidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `distribucion_geografica`
--
ALTER TABLE `distribucion_geografica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `distribucion_poblacion`
--
ALTER TABLE `distribucion_poblacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `empleo_independiente`
--
ALTER TABLE `empleo_independiente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estadocivil`
--
ALTER TABLE `estadocivil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `hogares_de_la_patria`
--
ALTER TABLE `hogares_de_la_patria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informacion_comunidad`
--
ALTER TABLE `informacion_comunidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `interculturales`
--
ALTER TABLE `interculturales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jose_gregorio`
--
ALTER TABLE `jose_gregorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lactancias`
--
ALTER TABLE `lactancias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `liceos`
--
ALTER TABLE `liceos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menores_trabajando`
--
ALTER TABLE `menores_trabajando`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mercales`
--
ALTER TABLE `mercales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `milagros`
--
ALTER TABLE `milagros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mision_robinson`
--
ALTER TABLE `mision_robinson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `natalidades`
--
ALTER TABLE `natalidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `natalidad_infantil`
--
ALTER TABLE `natalidad_infantil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `negra_hipolita`
--
ALTER TABLE `negra_hipolita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nevado`
--
ALTER TABLE `nevado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pdvales`
--
ALTER TABLE `pdvales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pension`
--
ALTER TABLE `pension`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pescador`
--
ALTER TABLE `pescador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plan_semilla`
--
ALTER TABLE `plan_semilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `practicas_ancestrales`
--
ALTER TABLE `practicas_ancestrales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `primarias`
--
ALTER TABLE `primarias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `p_encuestas`
--
ALTER TABLE `p_encuestas`
  MODIFY `id_encuestas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_censal`
--
ALTER TABLE `registro_censal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `simoncitos`
--
ALTER TABLE `simoncitos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tecnicas`
--
ALTER TABLE `tecnicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `viviendas`
--
ALTER TABLE `viviendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `vivienda_venezuela`
--
ALTER TABLE `vivienda_venezuela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
