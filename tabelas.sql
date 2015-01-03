CREATE TABLE map_slots_front (
	map_x int(1) NOT NULL,
	map_y int(1) NOT NULL,
	floor_number int(1) NOT NULL,
	block_number varchar(4) NOT NULL,
	slot_image varchar(126) NOT NULL DEFAULT 'css/images/front/icons/icon_empty.png'
)

INSERT INTO map_slots_front (map_x, map_y, floor_number, block_number, slot_image) VALUES
('1', '1', '7', 'A', 'css/images/front/icons/icon_curve_1.png'),
('2', '1', '7', 'A', 'css/images/front/icons/icon_horizontal.png'),
('3', '1', '7', 'A', 'css/images/front/icons/icon_curve_2.png'),
('8', '1', '7', 'C', 'css/images/front/icons/icon_curve_1.png'),
('9', '1', '7', 'C', 'css/images/front/icons/icon_horizontal.png'),
('10', '1', '7', 'C', 'css/images/front/icons/icon_curve_2.png'),
('12', '1', '7', 'E', 'css/images/front/icons/icon_curve_1.png'),
('13', '1', '7', 'E', 'css/images/front/icons/icon_horizontal.png'),
('14', '1', '7', 'E', 'css/images/front/icons/icon_curve_2.png'),
('16', '1', '7', 'G', 'css/images/front/icons/icon_curve_1.png'),
('17', '1', '7', 'G', 'css/images/front/icons/icon_horizontal.png'),
('18', '1', '7', 'G', 'css/images/front/icons/icon_curve_2.png'),

('1', '2', '6', 'A', 'css/images/front/icons/icon_vertical.png'),
('2', '2', '6', 'A', 'css/images/front/icons/icon_empty.png'),
('3', '2', '6', 'A', 'css/images/front/icons/icon_vertical.png'),
('8', '2', '6', 'C', 'css/images/front/icons/icon_vertical.png'),
('9', '2', '6', 'C', 'css/images/front/icons/icon_empty.png'),
('10', '2', '6', 'C', 'css/images/front/icons/icon_vertical.png'),
('12', '2', '6', 'E', 'css/images/front/icons/icon_vertical.png'),
('13', '2', '6', 'E', 'css/images/front/icons/icon_empty.png'),
('14', '2', '6', 'E', 'css/images/front/icons/icon_vertical.png'),
('16', '2', '6', 'G', 'css/images/front/icons/icon_vertical.png'),
('17', '2', '6', 'G', 'css/images/front/icons/icon_empty.png'),
('18', '2', '6', 'G', 'css/images/front/icons/icon_vertical.png'),

('1', '3', '5', 'A', 'css/images/front/icons/icon_vertical.png'),
('2', '3', '5', 'A', 'css/images/front/icons/icon_empty.png'),
('3', '3', '5', 'A', 'css/images/front/icons/icon_vertical.png'),
('5', '3', '4', 'B', 'css/images/front/icons/icon_curve_1.png'),
('6', '3', '4', 'B', 'css/images/front/icons/icon_curve_2.png'),
('8', '3', '5', 'C', 'css/images/front/icons/icon_vertical.png'),
('9', '3', '5', 'C', 'css/images/front/icons/icon_empty.png'),
('10', '3', '5', 'C', 'css/images/front/icons/icon_vertical.png'),
('12', '3', '5', 'E', 'css/images/front/icons/icon_vertical.png'),
('13', '3', '5', 'E', 'css/images/front/icons/icon_empty.png'),
('14', '3', '5', 'E', 'css/images/front/icons/icon_vertical.png'),
('16', '3', '5', 'G', 'css/images/front/icons/icon_vertical.png'),
('17', '3', '5', 'G', 'css/images/front/icons/icon_empty.png'),
('18', '3', '5', 'G', 'css/images/front/icons/icon_vertical.png'),

('1', '4', '4', 'A', 'css/images/front/icons/icon_vertical.png'),
('2', '4', '4', 'A', 'css/images/front/icons/icon_empty.png'),
('3', '4', '4', 'A', 'css/images/front/icons/icon_vertical.png'),
('5', '4', '4', 'B', 'css/images/front/icons/icon_vertical.png'),
('6', '4', '4', 'B', 'css/images/front/icons/icon_vertical.png'),
('8', '4', '4', 'C', 'css/images/front/icons/icon_vertical.png'),
('9', '4', '4', 'C', 'css/images/front/icons/icon_empty.png'),
('10', '4', '4', 'C', 'css/images/front/icons/icon_vertical.png'),
('12', '4', '4', 'E', 'css/images/front/icons/icon_vertical.png'),
('13', '4', '4', 'E', 'css/images/front/icons/icon_empty.png'),
('14', '4', '4', 'E', 'css/images/front/icons/icon_vertical.png'),
('16', '4', '4', 'G', 'css/images/front/icons/icon_vertical.png'),
('17', '4', '4', 'G', 'css/images/front/icons/icon_empty.png'),
('18', '4', '4', 'G', 'css/images/front/icons/icon_vertical.png'),

('1', '5', '4', 'A', 'css/images/front/icons/icon_int_right.png'),
('2', '5', '4', 'A', 'css/images/front/icons/icon_horizontal.png'),
('3', '5', '4', 'A', 'css/images/front/icons/icon_int_top.png'),
('4', '5', '4', 'B', 'css/images/front/icons/icon_horizontal.png'),
('5', '5', '4', 'B', 'css/images/front/icons/icon_int_top.png'),
('6', '5', '4', 'B', 'css/images/front/icons/icon_int_top.png'),
('7', '5', '4', 'B', 'css/images/front/icons/icon_horizontal.png'),
('8', '5', '4', 'C', 'css/images/front/icons/icon_int_top.png'),
('9', '5', '4', 'C', 'css/images/front/icons/icon_horizontal.png'),
('10', '5', '4', 'C', 'css/images/front/icons/icon_int_top.png'),
('11', '5', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('12', '5', '4', 'E', 'css/images/front/icons/icon_int_top.png'),
('13', '5', '4', 'E', 'css/images/front/icons/icon_horizontal.png'),
('14', '5', '4', 'E', 'css/images/front/icons/icon_int_top.png'),
('15', '5', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('16', '5', '4', 'G', 'css/images/front/icons/icon_int_top.png'),
('17', '5', '4', 'G', 'css/images/front/icons/icon_horizontal.png'),
('18', '5', '4', 'G', 'css/images/front/icons/icon_int_left.png'),

('1', '6', '3', 'D', 'css/images/front/icons/icon_vertical.png'),
('2', '6', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('3', '6', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('4', '6', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('5', '6', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('6', '6', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('7', '6', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('8', '6', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('9', '6', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('10', '6', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('11', '6', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('12', '6', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('13', '6', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('14', '6', '3', 'F', 'css/images/front/icons/icon_curve_1.png'),
('15', '6', '3', 'F', 'css/images/front/icons/icon_horizontal.png'),
('16', '6', '3', 'F', 'css/images/front/icons/icon_horizontal.png'),
('17', '6', '3', 'F', 'css/images/front/icons/icon_horizontal.png'),
('18', '6', '3', 'F', 'css/images/front/icons/icon_int_left.png'),

('1', '7', '3', 'D', 'css/images/front/icons/icon_vertical.png'),
('2', '7', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('3', '7', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('4', '7', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('5', '7', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('6', '7', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('7', '7', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('8', '7', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('9', '7', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('10', '7', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('11', '7', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('12', '7', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('13', '7', '3', 'D', 'css/images/front/icons/icon_empty.png'),
('14', '7', '3', 'F', 'css/images/front/icons/icon_vertical.png'),
('15', '7', '3', 'F', 'css/images/front/icons/icon_empty.png'),
('16', '7', '3', 'F', 'css/images/front/icons/icon_empty.png'),
('17', '7', '3', 'F', 'css/images/front/icons/icon_empty.png'),
('18', '7', '3', 'F', 'css/images/front/icons/icon_vertical.png'),

('1', '8', '3', 'D', 'css/images/front/icons/icon_curve_3.png'),
('2', '8', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('3', '8', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('4', '8', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('5', '8', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('6', '8', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('7', '8', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('8', '8', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('9', '8', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('10', '8', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('11', '8', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('12', '8', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('13', '8', '3', 'D', 'css/images/front/icons/icon_horizontal.png'),
('14', '8', '3', 'F', 'css/images/front/icons/icon_int_top.png'),
('15', '8', '3', 'F', 'css/images/front/icons/icon_horizontal.png'),
('16', '8', '3', 'F', 'css/images/front/icons/icon_horizontal.png'),
('17', '8', '3', 'F', 'css/images/front/icons/icon_horizontal.png'),
('18', '8', '3', 'F', 'css/images/front/icons/icon_curve_4.png')




CREATE TABLE map_slots (
	floor_id int(1) NOT NULL,
	map_x int(1) NOT NULL,
	map_y int(1) NOT NULL,
	room_id int(11) NOT NULL
)

INSERT INTO map_slots (floor_id, map_x, map_y, room_id) VALUES
('0', '9', '3', '127'),
('0', '13', '3', '127'),
('0', '17', '3', '127'),
('0', '1', '4', '129'),
('0', '9', '4', '127'),
('0', '13', '4', '127'),
('0', '17', '4', '127'),
('0', '1', '5', '127'),
('0', '2', '5', '130'),
('0', '3', '5', '128'),
('0', '4', '5', '128'),
('0', '5', '5', '128'),
('0', '6', '5', '128'),
('0', '7', '5', '128'),
('0', '8', '5', '128'),
('0', '9', '5', '127'),
('0', '10', '5', '128'),
('0', '11', '5', '128'),
('0', '12', '5', '128'),
('0', '13', '5', '127'),
('0', '17', '5', '127'),
('0', '1', '6', '127'),
('0', '2', '6', '127'),
('0', '3', '6', '127'),
('0', '4', '6', '127'),
('0', '5', '6', '127'),
('0', '6', '6', '127'),
('0', '7', '6', '127'),
('0', '8', '6', '127'),
('0', '9', '6', '127'),
('0', '10', '6', '127'),
('0', '11', '6', '127'),
('0', '12', '6', '127'),
('0', '13', '6', '127'),
('0', '14', '6', '127'),
('0', '15', '6', '127'),
('0', '16', '6', '127'),
('0', '17', '6', '127'),
('0', '2', '7', '131'),
('0', '2', '7', '132'),
('0', '3', '7', '127'),
('0', '4', '7', '128'),
('0', '5', '7', '128'),
('0', '6', '7', '128'),
('0', '7', '7', '128'),
('0', '8', '7', '128'),
('0', '9', '7', '128'),
('0', '10', '7', '128'),
('0', '11', '7', '128'),
('0', '12', '7', '128'),
('0', '16', '7', '127')


INSERT INTO map_slots (floor_id, map_x, map_y, room_id) VALUES
('1', '1', '4', '129'),
('1', '1', '5', '127'),
('1', '2', '5', '130'),
('1', '4', '5', '133'),
('1', '9', '5', '134'),
('1', '9', '5', '135'),
('1', '13', '5', '136'),
('1', '13', '5', '137'),
('1', '17', '5', '138'),
('1', '17', '5', '139'),
('1', '1', '6', '127'),
('1', '2', '6', '127'),
('1', '3', '6', '127'),
('1', '4', '6', '127'),
('1', '5', '6', '127'),
('1', '6', '6', '127'),
('1', '7', '6', '127'),
('1', '8', '6', '127'),
('1', '9', '6', '127'),
('1', '10', '6', '127'),
('1', '11', '6', '127'),
('1', '12', '6', '127'),
('1', '13', '6', '127'),
('1', '14', '6', '127'),
('1', '15', '6', '127'),
('1', '16', '6', '127'),
('1', '17', '6', '127'),
('1', '3', '7', '127'),
('1', '4', '7', '140'),
('1', '5', '7', '20'),
('1', '6', '7', '141'),
('1', '7', '7', '142'),
('1', '8', '7', '21'),
('1', '9', '7', '143'),
('1', '10', '7', '22'),
('1', '11', '7', '23'),
('1', '11', '7', '24'),
('1', '12', '7', '25'),
('1', '12', '7', '26'),
('1', '12', '7', '27'),
('1', '12', '7', '28'),
('1', '13', '7', '144'),
('1', '14', '7', '29'),
('1', '14', '7', '30'),
('1', '15', '7', '31'),
('1', '15', '7', '146'),
('1', '16', '7', '32'),
('1', '16', '7', '33'),
('1', '17', '7', '127'),
('1', '18', '7', '103'),
('1', '16', '8', '148'),
('1', '17', '8', '127'),
('1', '18', '8', '104'),
('1', '18', '8', '147')



INSERT INTO map_slots (floor_id, map_x, map_y, room_id) VALUES
('2', '4', '5', '133'),
('2', '9', '5', '134'),
('2', '9', '5', '135'),
('2', '13', '5', '136'),
('2', '13', '5', '137'),
('2', '17', '5', '138'),
('2', '17', '5', '139'),
('2', '3', '6', '127'),
('2', '4', '6', '127'),
('2', '5', '6', '127'),
('2', '6', '6', '127'),
('2', '7', '6', '127'),
('2', '8', '6', '127'),
('2', '9', '6', '127'),
('2', '10', '6', '127'),
('2', '11', '6', '127'),
('2', '12', '6', '127'),
('2', '13', '6', '127'),
('2', '14', '6', '127'),
('2', '15', '6', '127'),
('2', '16', '6', '127'),
('2', '17', '6', '127'),

('2', '3', '7', '35'),
('2', '3', '7', '36'),
('2', '4', '7', '37'),
('2', '4', '7', '38'),
('2', '5', '7', '39'),
('2', '5', '7', '40'),
('2', '6', '7', '41'),
('2', '6', '7', '42'),
('2', '7', '7', '43'),
('2', '7', '7', '44'),
('2', '8', '7', '45'),
('2', '8', '7', '46'),

('2', '9', '7', '149'),

('2', '10', '7', '47'),
('2', '11', '7', '48'),
('2', '11', '7', '49'),
('2', '11', '7', '50'),
('2', '11', '7', '51'),
('2', '12', '7', '52'),
('2', '12', '7', '53'),
('2', '12', '7', '54'),
('2', '12', '7', '55'),

('2', '13', '7', '150'),

('2', '14', '7', '56'),
('2', '15', '7', '57'),
('2', '16', '7', '58'),
('2', '16', '7', '59'),
('2', '17', '7', '127'),
('2', '18', '7', '60'),

('2', '16', '8', '107'),
('2', '17', '8', '127'),
('2', '18', '8', '105'),
('2', '18', '8', '106')


INSERT INTO map_slots (floor_id, map_x, map_y, room_id) VALUES
('3', '9', '5', '134'),
('3', '9', '5', '135'),
('3', '13', '5', '136'),
('3', '13', '5', '137'),
('3', '17', '5', '138'),
('3', '17', '5', '139'),

('3', '3', '6', '127'),
('3', '4', '6', '127'),
('3', '5', '6', '127'),
('3', '6', '6', '127'),
('3', '7', '6', '127'),
('3', '8', '6', '127'),
('3', '9', '6', '127'),
('3', '10', '6', '127'),
('3', '11', '6', '127'),
('3', '12', '6', '127'),
('3', '13', '6', '127'),
('3', '14', '6', '127'),
('3', '15', '6', '127'),
('3', '16', '6', '127'),
('3', '17', '6', '127'),
('3', '18', '6', '127'),

('3', '3', '7', '61'),
('3', '4', '7', '62'),
('3', '5', '7', '63'),
('3', '6', '7', '64'),
('3', '7', '7', '65'),
('3', '8', '7', '66'),

('3', '9', '7', '151'),

('3', '10', '7', '67'),
('3', '11', '7', '68'),
('3', '11', '7', '69'),
('3', '12', '7', '70'),
('3', '12', '7', '71'),
('3', '12', '7', '72'),
('3', '12', '7', '73'),

('3', '13', '7', '152'),

('3', '14', '7', '74'),
('3', '14', '7', '75'),
('3', '15', '7', '76'),
('3', '15', '7', '77'),
('3', '16', '7', '78'),
('3', '16', '7', '79'),
('3', '17', '7', '80'),
('3', '17', '7', '81'),
('3', '18', '7', '82'),
('3', '18', '7', '83')




INSERT INTO map_slots (floor_id, map_x, map_y, room_id) VALUES
('4', '1', '1', '153'),
('4', '2', '1', '154'),

('4', '8', '1', '155'),
('4', '9', '1', '127'),
('4', '10', '1', '7'),

('4', '12', '1', '86'),
('4', '13', '1', '127'),
('4', '14', '1', '87'),

('4', '16', '1', '110'),
('4', '17', '1', '127'),
('4', '18', '1', '111'),


('4', '1', '2', '127'),
('4', '2', '2', '127'),

('4', '5', '2', '3'),
('4', '5', '2', '4'),

('4', '8', '2', '6'),
('4', '9', '2', '127'),
('4', '10', '2', '8'),

('4', '12', '2', '85'),
('4', '13', '2', '127'),
('4', '14', '2', '88'),

('4', '16', '2', '109'),
('4', '17', '2', '127'),
('4', '18', '2', '112'),



('4', '2', '3', '127'),

('4', '8', '3', '5'),
('4', '9', '3', '127'),
('4', '10', '3', '9'),

('4', '12', '3', '84'),
('4', '13', '3', '127'),
('4', '14', '3', '89'),
('4', '14', '3', '90'),

('4', '16', '3', '108'),
('4', '17', '3', '127'),
('4', '18', '3', '113'),


('4', '1', '4', '129'),
('4', '2', '4', '127'),
('4', '3', '4', '127'),
('4', '4', '4', '127'),
('4', '5', '4', '127'),
('4', '6', '4', '127'),
('4', '7', '4', '127'),
('4', '8', '4', '127'),
('4', '9', '4', '127'),
('4', '10', '4', '127'),
('4', '11', '4', '127'),
('4', '12', '4', '127'),
('4', '13', '4', '127'),
('4', '14', '4', '127'),
('4', '15', '4', '127'),
('4', '16', '4', '127'),
('4', '17', '4', '127'),

('4', '2', '5', '130'),
('4', '9', '5', '134'),
('4', '9', '5', '135'),
('4', '13', '5', '136'),
('4', '13', '5', '137'),
('4', '17', '5', '138'),
('4', '17', '5', '139')




INSERT INTO map_slots (floor_id, map_x, map_y, room_id) VALUES

('5', '12', '1', '93'),
('5', '12', '1', '94'),
('5', '13', '1', '127'),
('5', '14', '1', '160'),
('5', '14', '1', '95'),

('5', '16', '1', '116'),
('5', '17', '1', '127'),
('5', '18', '1', '117'),


('5', '1', '2', '156'),
('5', '2', '2', '157'),

('5', '8', '2', '11'),
('5', '9', '2', '127'),
('5', '10', '2', '12'),

('5', '12', '2', '92'),
('5', '13', '2', '127'),
('5', '14', '2', '96'),

('5', '16', '2', '115'),
('5', '17', '2', '127'),
('5', '18', '2', '118'),


('5', '1', '3', '127'),
('5', '2', '3', '158'),
('5', '2', '3', '159'),

('5', '8', '3', '10'),
('5', '9', '3', '127'),
('5', '10', '3', '13'),

('5', '12', '3', '91'),
('5', '13', '3', '127'),
('5', '14', '3', '97'),

('5', '16', '3', '114'),
('5', '17', '3', '127'),
('5', '18', '3', '119'),


('5', '1', '4', '129'),
('5', '2', '4', '1'),

('5', '8', '4', '161'),
('5', '9', '4', '127'),
('5', '10', '4', '161'),

('5', '12', '4', '162'),
('5', '13', '4', '127'),
('5', '14', '4', '162'),

('5', '16', '4', '163'),
('5', '17', '4', '127'),
('5', '18', '4', '163'),

('5', '2', '5', '130'),

('5', '9', '5', '134'),
('5', '9', '5', '135'),
('5', '13', '5', '136'),
('5', '13', '5', '137'),
('5', '17', '5', '138'),
('5', '17', '5', '139')



INSERT INTO map_slots (floor_id, map_x, map_y, room_id) VALUES
('6', '1', '1', '127'),
('6', '2', '1', '164'),

('6', '8', '1', '16'),
('6', '9', '1', '127'),
('6', '10', '1', '17'),

('6', '12', '1', '99'),
('6', '13', '1', '127'),
('6', '14', '1', '100'),
('6', '14', '1', '101'),

('6', '16', '1', '165'),
('6', '17', '1', '127'),
('6', '18', '1', '123'),



('6', '1', '1', '127'),
('6', '2', '1', '164'),

('6', '8', '1', '16'),
('6', '9', '1', '127'),
('6', '10', '1', '17'),

('6', '16', '1', '165'),
('6', '17', '1', '127'),
('6', '18', '1', '123'),



('6', '1', '2', '156'),

('6', '8', '2', '15'),
('6', '9', '2', '127'),
('6', '10', '2', '18'),

('6', '12', '2', '99'),
('6', '13', '2', '127'),
('6', '14', '2', '100'),
('6', '14', '2', '101'),

('6', '16', '2', '121'),
('6', '16', '2', '122'),
('6', '17', '2', '127'),
('6', '18', '2', '124'),




('6', '8', '3', '14'),
('6', '9', '3', '127'),
('6', '10', '3', '19'),

('6', '12', '3', '98'),
('6', '13', '3', '127'),
('6', '14', '3', '102'),

('6', '16', '3', '120'),
('6', '17', '3', '127'),
('6', '18', '3', '125'),



('6', '2', '4', '2'),

('6', '8', '4', '166'),
('6', '9', '4', '127'),
('6', '10', '4', '166'),

('6', '12', '4', '167'),
('6', '13', '4', '127'),
('6', '14', '4', '167'),

('6', '16', '4', '168'),
('6', '17', '4', '127'),
('6', '18', '4', '168'),

('6', '2', '5', '130'),
('6', '9', '5', '134'),
('6', '9', '5', '135'),
('6', '13', '5', '136'),
('6', '13', '5', '137'),
('6', '17', '5', '138'),
('6', '17', '5', '139')
