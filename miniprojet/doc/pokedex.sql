--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.4
-- Dumped by pg_dump version 9.5.1

-- Started on 2016-10-22 18:53:45 CEST

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 12 (class 2615 OID 41228)
-- Name: pokedex; Type: SCHEMA; Schema: -; Owner: -
--

CREATE SCHEMA pokedex;


SET search_path = pokedex, pg_catalog;

SET default_with_oids = false;

--
-- TOC entry 214 (class 1259 OID 41244)
-- Name: _collect; Type: TABLE; Schema: pokedex; Owner: -
--

CREATE TABLE _collect (
    pokemon_id integer NOT NULL,
    collector_login character(8) NOT NULL
);


--
-- TOC entry 212 (class 1259 OID 41234)
-- Name: _collector; Type: TABLE; Schema: pokedex; Owner: -
--

CREATE TABLE _collector (
    login character(8) NOT NULL,
    name character varying(50) NOT NULL,
    firstname character varying(50) NOT NULL,
    password character varying(20) NOT NULL
);


--
-- TOC entry 213 (class 1259 OID 41239)
-- Name: _pokemon; Type: TABLE; Schema: pokedex; Owner: -
--

CREATE TABLE _pokemon (
    pokemon_id integer NOT NULL,
    identifier character varying(50) NOT NULL,
    height integer NOT NULL,
    weight integer NOT NULL,
    base_experience integer NOT NULL
);


--
-- TOC entry 2472 (class 0 OID 41244)
-- Dependencies: 214
-- Data for Name: _collect; Type: TABLE DATA; Schema: pokedex; Owner: -
--



--
-- TOC entry 2470 (class 0 OID 41234)
-- Dependencies: 212
-- Data for Name: _collector; Type: TABLE DATA; Schema: pokedex; Owner: -
--



--
-- TOC entry 2471 (class 0 OID 41239)
-- Dependencies: 213
-- Data for Name: _pokemon; Type: TABLE DATA; Schema: pokedex; Owner: -
--

INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (1, 'bulbasaur', 7, 69, 64);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (2, 'ivysaur', 10, 130, 142);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (3, 'venusaur', 20, 1000, 236);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (4, 'charmander', 6, 85, 62);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (5, 'charmeleon', 11, 190, 142);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (6, 'charizard', 17, 905, 240);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (7, 'squirtle', 5, 90, 63);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (8, 'wartortle', 10, 225, 142);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (9, 'blastoise', 16, 855, 239);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (10, 'caterpie', 3, 29, 39);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (11, 'metapod', 7, 99, 72);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (12, 'butterfree', 11, 320, 178);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (13, 'weedle', 3, 32, 39);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (14, 'kakuna', 6, 100, 72);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (15, 'beedrill', 10, 295, 178);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (16, 'pidgey', 3, 18, 50);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (17, 'pidgeotto', 11, 300, 122);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (18, 'pidgeot', 15, 395, 216);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (19, 'rattata', 3, 35, 51);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (20, 'raticate', 7, 185, 145);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (21, 'spearow', 3, 20, 52);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (22, 'fearow', 12, 380, 155);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (23, 'ekans', 20, 69, 58);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (24, 'arbok', 35, 650, 153);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (25, 'pikachu', 4, 60, 112);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (26, 'raichu', 8, 300, 218);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (27, 'sandshrew', 6, 120, 60);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (28, 'sandslash', 10, 295, 158);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (29, 'nidoran-f', 4, 70, 55);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (30, 'nidorina', 8, 200, 128);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (31, 'nidoqueen', 13, 600, 227);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (32, 'nidoran-m', 5, 90, 55);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (33, 'nidorino', 9, 195, 128);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (34, 'nidoking', 14, 620, 227);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (35, 'clefairy', 6, 75, 113);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (36, 'clefable', 13, 400, 217);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (37, 'vulpix', 6, 99, 60);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (38, 'ninetales', 11, 199, 177);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (39, 'jigglypuff', 5, 55, 95);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (40, 'wigglytuff', 10, 120, 196);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (41, 'zubat', 8, 75, 49);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (42, 'golbat', 16, 550, 159);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (43, 'oddish', 5, 54, 64);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (44, 'gloom', 8, 86, 138);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (45, 'vileplume', 12, 186, 221);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (46, 'paras', 3, 54, 57);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (47, 'parasect', 10, 295, 142);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (48, 'venonat', 10, 300, 61);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (49, 'venomoth', 15, 125, 158);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (50, 'diglett', 2, 8, 53);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (51, 'dugtrio', 7, 333, 142);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (52, 'meowth', 4, 42, 58);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (53, 'persian', 10, 320, 154);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (54, 'psyduck', 8, 196, 64);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (55, 'golduck', 17, 766, 175);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (56, 'mankey', 5, 280, 61);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (57, 'primeape', 10, 320, 159);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (58, 'growlithe', 7, 190, 70);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (59, 'arcanine', 19, 1550, 194);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (60, 'poliwag', 6, 124, 60);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (61, 'poliwhirl', 10, 200, 135);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (62, 'poliwrath', 13, 540, 230);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (63, 'abra', 9, 195, 62);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (64, 'kadabra', 13, 565, 140);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (65, 'alakazam', 15, 480, 225);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (66, 'machop', 8, 195, 61);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (67, 'machoke', 15, 705, 142);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (68, 'machamp', 16, 1300, 227);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (69, 'bellsprout', 7, 40, 60);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (70, 'weepinbell', 10, 64, 137);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (71, 'victreebel', 17, 155, 221);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (72, 'tentacool', 9, 455, 67);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (73, 'tentacruel', 16, 550, 180);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (74, 'geodude', 4, 200, 60);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (75, 'graveler', 10, 1050, 137);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (76, 'golem', 14, 3000, 223);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (77, 'ponyta', 10, 300, 82);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (78, 'rapidash', 17, 950, 175);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (79, 'slowpoke', 12, 360, 63);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (80, 'slowbro', 16, 785, 172);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (81, 'magnemite', 3, 60, 65);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (82, 'magneton', 10, 600, 163);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (83, 'farfetchd', 8, 150, 123);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (84, 'doduo', 14, 392, 62);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (85, 'dodrio', 18, 852, 161);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (86, 'seel', 11, 900, 65);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (87, 'dewgong', 17, 1200, 166);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (88, 'grimer', 9, 300, 65);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (89, 'muk', 12, 300, 175);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (90, 'shellder', 3, 40, 61);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (91, 'cloyster', 15, 1325, 184);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (92, 'gastly', 13, 1, 62);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (93, 'haunter', 16, 1, 142);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (94, 'gengar', 15, 405, 225);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (95, 'onix', 88, 2100, 77);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (96, 'drowzee', 10, 324, 66);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (97, 'hypno', 16, 756, 169);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (98, 'krabby', 4, 65, 65);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (99, 'kingler', 13, 600, 166);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (100, 'voltorb', 5, 104, 66);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (101, 'electrode', 12, 666, 168);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (102, 'exeggcute', 4, 25, 65);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (103, 'exeggutor', 20, 1200, 182);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (104, 'cubone', 4, 65, 64);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (105, 'marowak', 10, 450, 149);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (106, 'hitmonlee', 15, 498, 159);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (107, 'hitmonchan', 14, 502, 159);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (108, 'lickitung', 12, 655, 77);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (109, 'koffing', 6, 10, 68);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (110, 'weezing', 12, 95, 172);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (111, 'rhyhorn', 10, 1150, 69);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (112, 'rhydon', 19, 1200, 170);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (113, 'chansey', 11, 346, 395);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (114, 'tangela', 10, 350, 87);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (115, 'kangaskhan', 22, 800, 172);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (116, 'horsea', 4, 80, 59);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (117, 'seadra', 12, 250, 154);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (118, 'goldeen', 6, 150, 64);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (119, 'seaking', 13, 390, 158);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (120, 'staryu', 8, 345, 68);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (121, 'starmie', 11, 800, 182);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (122, 'mr-mime', 13, 545, 161);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (123, 'scyther', 15, 560, 100);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (124, 'jynx', 14, 406, 159);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (125, 'electabuzz', 11, 300, 172);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (126, 'magmar', 13, 445, 173);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (127, 'pinsir', 15, 550, 175);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (128, 'tauros', 14, 884, 172);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (129, 'magikarp', 9, 100, 40);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (130, 'gyarados', 65, 2350, 189);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (131, 'lapras', 25, 2200, 187);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (132, 'ditto', 3, 40, 101);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (133, 'eevee', 3, 65, 65);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (134, 'vaporeon', 10, 290, 184);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (135, 'jolteon', 8, 245, 184);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (136, 'flareon', 9, 250, 184);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (137, 'porygon', 8, 365, 79);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (138, 'omanyte', 4, 75, 71);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (139, 'omastar', 10, 350, 173);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (140, 'kabuto', 5, 115, 71);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (141, 'kabutops', 13, 405, 173);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (142, 'aerodactyl', 18, 590, 180);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (143, 'snorlax', 21, 4600, 189);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (144, 'articuno', 17, 554, 261);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (145, 'zapdos', 16, 526, 261);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (146, 'moltres', 20, 600, 261);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (147, 'dratini', 18, 33, 60);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (148, 'dragonair', 40, 165, 147);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (149, 'dragonite', 22, 2100, 270);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (150, 'mewtwo', 20, 1220, 306);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (151, 'mew', 4, 40, 270);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (152, 'chikorita', 9, 64, 64);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (153, 'bayleef', 12, 158, 142);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (154, 'meganium', 18, 1005, 236);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (155, 'cyndaquil', 5, 79, 62);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (156, 'quilava', 9, 190, 142);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (157, 'typhlosion', 17, 795, 240);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (158, 'totodile', 6, 95, 63);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (159, 'croconaw', 11, 250, 142);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (160, 'feraligatr', 23, 888, 239);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (161, 'sentret', 8, 60, 43);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (162, 'furret', 18, 325, 145);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (163, 'hoothoot', 7, 212, 52);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (164, 'noctowl', 16, 408, 155);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (165, 'ledyba', 10, 108, 53);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (166, 'ledian', 14, 356, 137);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (167, 'spinarak', 5, 85, 50);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (168, 'ariados', 11, 335, 137);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (169, 'crobat', 18, 750, 241);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (170, 'chinchou', 5, 120, 66);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (171, 'lanturn', 12, 225, 161);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (172, 'pichu', 3, 20, 41);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (173, 'cleffa', 3, 30, 44);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (174, 'igglybuff', 3, 10, 42);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (175, 'togepi', 3, 15, 49);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (176, 'togetic', 6, 32, 142);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (177, 'natu', 2, 20, 64);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (178, 'xatu', 15, 150, 165);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (179, 'mareep', 6, 78, 56);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (180, 'flaaffy', 8, 133, 128);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (181, 'ampharos', 14, 615, 230);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (182, 'bellossom', 4, 58, 221);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (183, 'marill', 4, 85, 88);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (184, 'azumarill', 8, 285, 189);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (185, 'sudowoodo', 12, 380, 144);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (186, 'politoed', 11, 339, 225);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (187, 'hoppip', 4, 5, 50);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (188, 'skiploom', 6, 10, 119);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (189, 'jumpluff', 8, 30, 207);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (190, 'aipom', 8, 115, 72);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (191, 'sunkern', 3, 18, 36);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (192, 'sunflora', 8, 85, 149);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (193, 'yanma', 12, 380, 78);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (194, 'wooper', 4, 85, 42);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (195, 'quagsire', 14, 750, 151);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (196, 'espeon', 9, 265, 184);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (197, 'umbreon', 10, 270, 184);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (198, 'murkrow', 5, 21, 81);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (199, 'slowking', 20, 795, 172);
INSERT INTO _pokemon (pokemon_id, identifier, height, weight, base_experience) VALUES (200, 'misdreavus', 7, 10, 87);


--
-- TOC entry 2345 (class 2606 OID 41248)
-- Name: _collect_pkey; Type: CONSTRAINT; Schema: pokedex; Owner: -
--

ALTER TABLE ONLY _collect
    ADD CONSTRAINT _collect_pkey PRIMARY KEY (pokemon_id, collector_login);


--
-- TOC entry 2341 (class 2606 OID 41238)
-- Name: _collector_pkey; Type: CONSTRAINT; Schema: pokedex; Owner: -
--

ALTER TABLE ONLY _collector
    ADD CONSTRAINT _collector_pkey PRIMARY KEY (login);


--
-- TOC entry 2343 (class 2606 OID 41243)
-- Name: _pokemon_pkey; Type: CONSTRAINT; Schema: pokedex; Owner: -
--

ALTER TABLE ONLY _pokemon
    ADD CONSTRAINT _pokemon_pkey PRIMARY KEY (pokemon_id);


--
-- TOC entry 2347 (class 2606 OID 41254)
-- Name: _collect_fk_collector; Type: FK CONSTRAINT; Schema: pokedex; Owner: -
--

ALTER TABLE ONLY _collect
    ADD CONSTRAINT _collect_fk_collector FOREIGN KEY (collector_login) REFERENCES _collector(login);


--
-- TOC entry 2346 (class 2606 OID 41249)
-- Name: _collect_fk_pokemon; Type: FK CONSTRAINT; Schema: pokedex; Owner: -
--

ALTER TABLE ONLY _collect
    ADD CONSTRAINT _collect_fk_pokemon FOREIGN KEY (pokemon_id) REFERENCES _pokemon(pokemon_id);


-- Completed on 2016-10-22 18:53:46 CEST

--
-- PostgreSQL database dump complete
--

