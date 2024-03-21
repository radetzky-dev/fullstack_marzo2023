--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `actor`
--
ALTER TABLE `actor`
ADD PRIMARY KEY (`actor_id`),
ADD KEY `idx_actor_last_name` (`last_name`);

--
-- Indici per le tabelle `address`
--
ALTER TABLE `address`
ADD PRIMARY KEY (`address_id`),
ADD KEY `idx_fk_city_id` (`city_id`);

--
-- Indici per le tabelle `category`
--
ALTER TABLE `category` ADD PRIMARY KEY (`category_id`);

--
-- Indici per le tabelle `city`
--
ALTER TABLE `city`
ADD PRIMARY KEY (`city_id`),
ADD KEY `idx_fk_country_id` (`country_id`);

--
-- Indici per le tabelle `country`
--
ALTER TABLE `country` ADD PRIMARY KEY (`country_id`);

--
-- Indici per le tabelle `customer`
--
ALTER TABLE `customer`
ADD PRIMARY KEY (`customer_id`),
ADD KEY `idx_fk_store_id` (`store_id`),
ADD KEY `idx_fk_address_id` (`address_id`),
ADD KEY `idx_last_name` (`last_name`);

--
-- Indici per le tabelle `film`
--
ALTER TABLE `film`
ADD PRIMARY KEY (`film_id`),
ADD KEY `idx_title` (`title`),
ADD KEY `idx_fk_language_id` (`language_id`),
ADD KEY `idx_fk_original_language_id` (`original_language_id`);

--
-- Indici per le tabelle `film_actor`
--
ALTER TABLE `film_actor`
ADD PRIMARY KEY (`actor_id`, `film_id`),
ADD KEY `idx_fk_film_id` (`film_id`);

--
-- Indici per le tabelle `film_category`
--
ALTER TABLE `film_category`
ADD PRIMARY KEY (`film_id`, `category_id`),
ADD KEY `fk_film_category_category` (`category_id`);

--
-- Indici per le tabelle `film_text`
--
ALTER TABLE `film_text` ADD PRIMARY KEY (`film_id`);

ALTER TABLE `film_text`
ADD FULLTEXT KEY `idx_title_description` (`title`, `description`);

--
-- Indici per le tabelle `inventory`
--
ALTER TABLE `inventory`
ADD PRIMARY KEY (`inventory_id`),
ADD KEY `idx_fk_film_id` (`film_id`),
ADD KEY `idx_store_id_film_id` (`store_id`, `film_id`);

--
-- Indici per le tabelle `language`
--
ALTER TABLE `language` ADD PRIMARY KEY (`language_id`);

--
-- Indici per le tabelle `payment`
--
ALTER TABLE `payment`
ADD PRIMARY KEY (`payment_id`),
ADD KEY `idx_fk_staff_id` (`staff_id`),
ADD KEY `idx_fk_customer_id` (`customer_id`),
ADD KEY `fk_payment_rental` (`rental_id`);

--
-- Indici per le tabelle `rental`
--
ALTER TABLE `rental`
ADD PRIMARY KEY (`rental_id`),
ADD UNIQUE KEY `rental_date` (
    `rental_date`, `inventory_id`, `customer_id`
),
ADD KEY `idx_fk_inventory_id` (`inventory_id`),
ADD KEY `idx_fk_customer_id` (`customer_id`),
ADD KEY `idx_fk_staff_id` (`staff_id`);

--
-- Indici per le tabelle `staff`
--
ALTER TABLE `staff`
ADD PRIMARY KEY (`staff_id`),
ADD KEY `idx_fk_store_id` (`store_id`),
ADD KEY `idx_fk_address_id` (`address_id`);

--
-- Indici per le tabelle `store`
--
ALTER TABLE `store`
ADD PRIMARY KEY (`store_id`),
ADD UNIQUE KEY `idx_unique_manager` (`manager_staff_id`),
ADD KEY `idx_fk_address_id` (`address_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `actor`
--
ALTER TABLE `actor`
MODIFY `actor_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 201;

--
-- AUTO_INCREMENT per la tabella `address`
--
ALTER TABLE `address`
MODIFY `address_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 606;

--
-- AUTO_INCREMENT per la tabella `category`
--
ALTER TABLE `category`
MODIFY `category_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 17;

--
-- AUTO_INCREMENT per la tabella `city`
--
ALTER TABLE `city`
MODIFY `city_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 601;

--
-- AUTO_INCREMENT per la tabella `country`
--
ALTER TABLE `country`
MODIFY `country_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 110;

--
-- AUTO_INCREMENT per la tabella `customer`
--
ALTER TABLE `customer`
MODIFY `customer_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 600;

--
-- AUTO_INCREMENT per la tabella `film`
--
ALTER TABLE `film`
MODIFY `film_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 1001;

--
-- AUTO_INCREMENT per la tabella `inventory`
--
ALTER TABLE `inventory`
MODIFY `inventory_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 4582;

--
-- AUTO_INCREMENT per la tabella `language`
--
ALTER TABLE `language`
MODIFY `language_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 7;

--
-- AUTO_INCREMENT per la tabella `payment`
--
ALTER TABLE `payment`
MODIFY `payment_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 16050;

--
-- AUTO_INCREMENT per la tabella `rental`
--
ALTER TABLE `rental`
MODIFY `rental_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 16050;

--
-- AUTO_INCREMENT per la tabella `staff`
--
ALTER TABLE `staff`
MODIFY `staff_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT per la tabella `store`
--
ALTER TABLE `store`
MODIFY `store_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `address`
--
ALTER TABLE `address`
ADD CONSTRAINT `fk_address_city` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `city`
--
ALTER TABLE `city`
ADD CONSTRAINT `fk_city_country` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `customer`
--
ALTER TABLE `customer`
ADD CONSTRAINT `fk_customer_address` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_customer_store` FOREIGN KEY (`store_id`) REFERENCES `store` (`store_id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `film`
--
ALTER TABLE `film`
ADD CONSTRAINT `fk_film_language` FOREIGN KEY (`language_id`) REFERENCES `language` (`language_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_film_language_original` FOREIGN KEY (`original_language_id`) REFERENCES `language` (`language_id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `film_actor`
--
ALTER TABLE `film_actor`
ADD CONSTRAINT `fk_film_actor_actor` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`actor_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_film_actor_film` FOREIGN KEY (`film_id`) REFERENCES `film` (`film_id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `film_category`
--
ALTER TABLE `film_category`
ADD CONSTRAINT `fk_film_category_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_film_category_film` FOREIGN KEY (`film_id`) REFERENCES `film` (`film_id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `inventory`
--
ALTER TABLE `inventory`
ADD CONSTRAINT `fk_inventory_film` FOREIGN KEY (`film_id`) REFERENCES `film` (`film_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_inventory_store` FOREIGN KEY (`store_id`) REFERENCES `store` (`store_id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `payment`
--
ALTER TABLE `payment`
ADD CONSTRAINT `fk_payment_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_payment_rental` FOREIGN KEY (`rental_id`) REFERENCES `rental` (`rental_id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `fk_payment_staff` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `rental`
--
ALTER TABLE `rental`
ADD CONSTRAINT `fk_rental_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_rental_inventory` FOREIGN KEY (`inventory_id`) REFERENCES `inventory` (`inventory_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_rental_staff` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `staff`
--
ALTER TABLE `staff`
ADD CONSTRAINT `fk_staff_address` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_staff_store` FOREIGN KEY (`store_id`) REFERENCES `store` (`store_id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `store`
--
ALTER TABLE `store`
ADD CONSTRAINT `fk_store_address` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_store_staff` FOREIGN KEY (`manager_staff_id`) REFERENCES `staff` (`staff_id`) ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;