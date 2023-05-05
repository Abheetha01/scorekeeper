INSERT INTO `scoreboard`.`adminusers` (`admin_usr_name`, `admin_user_email`, `admin_user_password`, `admin_user_type`, `admin_user_status`) VALUES ('admin00', 'admin00@gmail.com', '1234', 'SU', 1);

INSERT INTO `scoreboard`.`teams` (`team_name`, `team_short_name`, `team_flag`) VALUES ('Sri Lanka', 'SL', 'sl');
INSERT INTO `scoreboard`.`teams` (`team_name`, `team_short_name`, `team_flag`) VALUES ('India', 'IN', 'in');

INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('S Jayasuriya', 'admin-panel', 1);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('M Jayawrdhana', 'admin-panel', 1);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('T M Dilshan', 'admin-panel', 1);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('K Sangakkara', 'admin-panel', 1);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('L Malinga', 'admin-panel', 1);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('Upul Tharanga', 'admin-panel', 1);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('Asela Gunarathne', 'admin-panel', 1);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('Arjuna Ranthunga', 'admin-panel', 1);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('M S Dhoni', 'admin-panel', 2);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('Virat Kohli', 'admin-panel', 2);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('Rohit Sharma', 'admin-panel', 2);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('S Tendulkar', 'admin-panel', 2);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('K L Rahul', 'admin-panel', 2);
INSERT INTO `scoreboard`.`players` (`player_name`, `player_image`, `teams_team_id`) VALUES ('Ravindra Jadeja', 'admin-panel', 2);

INSERT INTO `scoreboard`.`matches` (`match_name`, `match_date_time`, `match_type`, `match_over_count`, `teams_team_id01`, `teams_team_id02`) VALUES ('Sl vs IN', '2023-04-26 20:00:00', 'ODI', '50', '1', '2');
INSERT INTO `scoreboard`.`matches` (`match_name`, `match_type`, `match_over_count`, `teams_team_id01`, `teams_team_id02`) VALUES ('Sl vs IN', 'ODI', '50', '1', '2');

INSERT INTO `scoreboard`.`matches_has_records` (`matches_match_id`, `batting_players_player_id`, `balling_players_player_id`, `over`, `over_ball_index`) VALUES ('1', '1', '9', '1', '1');
INSERT INTO `scoreboard`.`matches_has_records` (`matches_match_id`, `batting_players_player_id`, `balling_players_player_id`, `over`, `over_ball_index`, `score_type`, `score`) VALUES ('1', '1', '9', '1', '1', 'RUN', '2');

INSERT INTO `scoreboard`.`matches_has_players` (`matches_match_id`, `players_player_id`, `plyer_bating_order`) VALUES ('1', '1', '1');
INSERT INTO `scoreboard`.`matches_has_players` (`matches_match_id`, `players_player_id`, `plyer_bating_order`) VALUES ('1', '2', '2');

UPDATE `scoreboard`.`matches` SET `match_live_statys` = 'LIVE', `teams_team_id_toss_win` = '2', `team01_status` = 'BAT', `team01_score` = '2', `team01_play_valid_ball_count` = '2', `team01_play_all_ball_count` = '2', `team02_status` = 'BALL' WHERE (`match_id` = '1');
