

CREATE TABLE `tbl_acta` (
  `id` int(11) NOT NULL,
  `c1` int(11) DEFAULT NULL,
  `c2` int(11) DEFAULT NULL,
  `c3` int(11) DEFAULT NULL,
  `c4` int(11) DEFAULT NULL,
  `c5` int(11) DEFAULT NULL,
  `c6` int(11) DEFAULT NULL,
  `c7` int(11) DEFAULT NULL,
  `c8` int(11) DEFAULT NULL,
  `c9` int(11) DEFAULT NULL,
  `c10` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `numero` int(11) NOT NULL,
  `año` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_asuntos_pendientes_anteriores`
--

CREATE TABLE `tbl_asuntos_pendientes_anteriores` (
  `id` int(11) NOT NULL,
  `acta_id` int(11) NOT NULL,
  `concepto_id` int(11) NOT NULL,
  `observacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_asuntos_pendientes_siguientes`
--

CREATE TABLE `tbl_asuntos_pendientes_siguientes` (
  `id` int(11) NOT NULL,
  `acta_id` int(11) NOT NULL,
  `concepto_id` int(11) NOT NULL,
  `observacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_conceptos`
--

CREATE TABLE `tbl_conceptos` (
  `id` int(11) NOT NULL,
  `nombre_concepto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_conceptos_acta`
--

CREATE TABLE `tbl_conceptos_acta` (
  `id` int(11) NOT NULL,
  `acta_id` int(11) NOT NULL,
  `concepto_id` int(11) NOT NULL,
  `checkbox` tinyint(1) DEFAULT NULL,
  `observaciones` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consejo_sociedad`
--

CREATE TABLE `tbl_consejo_sociedad` (
  `id` int(11) NOT NULL,
  `sociedad_id` int(11) NOT NULL,
  `nombre` varchar(180) NOT NULL,
  `domicilio` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_miembros_sociedad`
--

CREATE TABLE `tbl_miembros_sociedad` (
  `id` int(11) NOT NULL,
  `sociedad_id` int(11) NOT NULL,
  `nombre` varchar(180) NOT NULL,
  `domicilio` varchar(180) NOT NULL,
  `curp` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona_moral`
--

CREATE TABLE `tbl_persona_moral` (
  `id` int(11) NOT NULL,
  `razonsocial` varchar(500) NOT NULL,
  `domicilio` varchar(180) NOT NULL,
  `rfc` varchar(180) NOT NULL,
  `actividades` varchar(500) NOT NULL,
  `ubicacion` varchar(300) NOT NULL,
  `ciclos` varchar(180) NOT NULL,
  `fondos` varchar(500) NOT NULL,
  `gerente_nombre` varchar(300) NOT NULL,
  `gerente_domicilio` varchar(300) NOT NULL,
  `representante_nombre` varchar(500) NOT NULL,
  `representante_domicilio` varchar(300) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_vigencia` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `ciudad` tinyint(1) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `documentacion_rfc` tinyint(1) NOT NULL,
  `documentacion_identificacion` tinyint(1) NOT NULL,
  `documentacion_escri_constitucion` tinyint(1) NOT NULL,
  `documentacion_escri_nombra_consejo` tinyint(1) NOT NULL,
  `documentacion_escri_nombra_gerente` tinyint(1) NOT NULL,
  `documentacion_escri_nombra_apoderado` tinyint(1) NOT NULL,
  `documentacion_acta_asamblea_aproba` tinyint(1) NOT NULL,
  `documentacion_constancia_fondo` tinyint(1) NOT NULL,
  `documentacion_acta_asamblea` tinyint(1) NOT NULL,
  `documentacion_estudio_viabilidad` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_socios_persona_fisica`
--

CREATE TABLE `tbl_socios_persona_fisica` (
  `id` int(11) NOT NULL,
  `nombre` varchar(180) NOT NULL,
  `domicilio` varchar(180) NOT NULL,
  `curp` varchar(180) NOT NULL,
  `rfc` varchar(180) NOT NULL,
  `actividades` varchar(500) NOT NULL,
  `ubicacion` varchar(300) NOT NULL,
  `ciclos` varchar(180) NOT NULL,
  `fondos` varchar(500) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_vigencia` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `ciudad` varchar(180) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `documentacion_rfc` tinyint(1) NOT NULL,
  `documentacion_curp` tinyint(1) NOT NULL,
  `documentacion_identificacion` tinyint(1) NOT NULL,
  `documentacion_constancia_fondo` tinyint(1) NOT NULL,
  `documentacion_acta_asamblea` tinyint(1) NOT NULL,
  `documentacion_estudio_viabilidad` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_acta`
--
ALTER TABLE `tbl_acta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_c1` (`c1`),
  ADD KEY `fk_c2` (`c2`),
  ADD KEY `fk_c3` (`c3`),
  ADD KEY `fk_c4` (`c4`),
  ADD KEY `fk_c5` (`c5`),
  ADD KEY `fk_c6` (`c6`),
  ADD KEY `fk_c7` (`c7`),
  ADD KEY `fk_c8` (`c8`),
  ADD KEY `fk_c9` (`c9`),
  ADD KEY `fk_c10` (`c10`);

--
-- Indices de la tabla `tbl_asuntos_pendientes_anteriores`
--
ALTER TABLE `tbl_asuntos_pendientes_anteriores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_asuntos_anteriores` (`acta_id`),
  ADD KEY `fk_asuntos_anteriores2` (`concepto_id`);

--
-- Indices de la tabla `tbl_asuntos_pendientes_siguientes`
--
ALTER TABLE `tbl_asuntos_pendientes_siguientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_asuntos_siguientes` (`acta_id`),
  ADD KEY `fk_asuntos_siguientes2` (`concepto_id`);

--
-- Indices de la tabla `tbl_conceptos`
--
ALTER TABLE `tbl_conceptos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_conceptos_acta`
--
ALTER TABLE `tbl_conceptos_acta`
  ADD KEY `fk_conceptos_acta` (`acta_id`),
  ADD KEY `fk_conceptos_acta2` (`concepto_id`);

--
-- Indices de la tabla `tbl_consejo_sociedad`
--
ALTER TABLE `tbl_consejo_sociedad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_persona_moral_consejo` (`sociedad_id`);

--
-- Indices de la tabla `tbl_miembros_sociedad`
--
ALTER TABLE `tbl_miembros_sociedad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_persona_moral_miembros` (`sociedad_id`);

--
-- Indices de la tabla `tbl_persona_moral`
--
ALTER TABLE `tbl_persona_moral`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_socios_persona_fisica`
--
ALTER TABLE `tbl_socios_persona_fisica`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_acta`
--
ALTER TABLE `tbl_acta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_asuntos_pendientes_anteriores`
--
ALTER TABLE `tbl_asuntos_pendientes_anteriores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_asuntos_pendientes_siguientes`
--
ALTER TABLE `tbl_asuntos_pendientes_siguientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_conceptos`
--
ALTER TABLE `tbl_conceptos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_consejo_sociedad`
--
ALTER TABLE `tbl_consejo_sociedad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_miembros_sociedad`
--
ALTER TABLE `tbl_miembros_sociedad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_persona_moral`
--
ALTER TABLE `tbl_persona_moral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_socios_persona_fisica`
--
ALTER TABLE `tbl_socios_persona_fisica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_acta`
--
ALTER TABLE `tbl_acta`
  ADD CONSTRAINT `fk_c1` FOREIGN KEY (`c1`) REFERENCES `tbl_conceptos` (`id`),
  ADD CONSTRAINT `fk_c10` FOREIGN KEY (`c10`) REFERENCES `tbl_conceptos` (`id`),
  ADD CONSTRAINT `fk_c2` FOREIGN KEY (`c2`) REFERENCES `tbl_conceptos` (`id`),
  ADD CONSTRAINT `fk_c3` FOREIGN KEY (`c3`) REFERENCES `tbl_conceptos` (`id`),
  ADD CONSTRAINT `fk_c4` FOREIGN KEY (`c4`) REFERENCES `tbl_conceptos` (`id`),
  ADD CONSTRAINT `fk_c5` FOREIGN KEY (`c5`) REFERENCES `tbl_conceptos` (`id`),
  ADD CONSTRAINT `fk_c6` FOREIGN KEY (`c6`) REFERENCES `tbl_conceptos` (`id`),
  ADD CONSTRAINT `fk_c7` FOREIGN KEY (`c7`) REFERENCES `tbl_conceptos` (`id`),
  ADD CONSTRAINT `fk_c8` FOREIGN KEY (`c8`) REFERENCES `tbl_conceptos` (`id`),
  ADD CONSTRAINT `fk_c9` FOREIGN KEY (`c9`) REFERENCES `tbl_conceptos` (`id`);

--
-- Filtros para la tabla `tbl_asuntos_pendientes_anteriores`
--
ALTER TABLE `tbl_asuntos_pendientes_anteriores`
  ADD CONSTRAINT `fk_asuntos_anteriores` FOREIGN KEY (`acta_id`) REFERENCES `tbl_acta` (`id`),
  ADD CONSTRAINT `fk_asuntos_anteriores2` FOREIGN KEY (`concepto_id`) REFERENCES `tbl_conceptos` (`id`);

--
-- Filtros para la tabla `tbl_asuntos_pendientes_siguientes`
--
ALTER TABLE `tbl_asuntos_pendientes_siguientes`
  ADD CONSTRAINT `fk_asuntos_siguientes` FOREIGN KEY (`acta_id`) REFERENCES `tbl_acta` (`id`),
  ADD CONSTRAINT `fk_asuntos_siguientes2` FOREIGN KEY (`concepto_id`) REFERENCES `tbl_conceptos` (`id`);

--
-- Filtros para la tabla `tbl_conceptos_acta`
--
ALTER TABLE `tbl_conceptos_acta`
  ADD CONSTRAINT `fk_conceptos_acta` FOREIGN KEY (`acta_id`) REFERENCES `tbl_acta` (`id`),
  ADD CONSTRAINT `fk_conceptos_acta2` FOREIGN KEY (`concepto_id`) REFERENCES `tbl_conceptos` (`id`);

--
-- Filtros para la tabla `tbl_consejo_sociedad`
--
ALTER TABLE `tbl_consejo_sociedad`
  ADD CONSTRAINT `fk_persona_moral_consejo` FOREIGN KEY (`sociedad_id`) REFERENCES `tbl_persona_moral` (`id`);

--
-- Filtros para la tabla `tbl_miembros_sociedad`
--
ALTER TABLE `tbl_miembros_sociedad`
  ADD CONSTRAINT `fk_persona_moral_miembros` FOREIGN KEY (`sociedad_id`) REFERENCES `tbl_persona_moral` (`id`);
