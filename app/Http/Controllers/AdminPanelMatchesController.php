<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPanelMatchesController extends Controller
{
    public function sendDataXMLHTTP(Request $request)
    {

        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Fail...!']);
        }

        $page = $request->data['pageNumber'];
        $pagePerRecode = 2;
        $startFrom = ($page - 1) * $pagePerRecode;

        $matchesData = DB::select('select mat.match_id, mat.match_name, mat.match_date_time, mat.match_type, mat.match_over_count, mat.match_play_status,
        mat.teams_team_id01, t01.team_name as team01_name, t01.team_short_name as team02_short_name, mat.teams_team_id02, t02.team_name as team02_name, t02.team_short_name as team02_short_name 
        from matches mat
        left join teams t01 on mat.teams_team_id01 = t01.team_id
        left join teams t02 on mat.teams_team_id02 = t02.team_id where mat.match_status = 1 order by mat.match_id desc 
        LIMIT ' . $startFrom . ',' . $pagePerRecode);

        $totalRecrods =  DB::select('select count(*) as total_records from matches where match_status = 1');

        $teamsList = DB::select('select * from teams where team_status = 1;');

        $matchHasPlayersList = DB::select('select m_has_p.matches_match_id, m_has_p.players_player_id, players.player_name, players.teams_team_id 
        from matches_has_players m_has_p left join players on m_has_p.players_player_id = players.player_id 
        where m_has_p.matches_match_id = 1');

        return response()->json([
            'status' => true, 'message' => 'SUCCESSFUL...!', 'matchesData' => $matchesData,
            'activePage' => $page, 'totalRecrods' => $totalRecrods[0]->total_records, 'teamsList' => $teamsList
        ]);
    }

    public function getTeamAllPlayers(Request $request)
    {
        $teams_team_id01 = $request->data['team01Id'];
        $teams_team_id02 = $request->data['team02Id'];

        $playersListTeam01 = DB::select('select players.player_id, players.player_name, players.teams_team_id from players where players.teams_team_id = ' . $teams_team_id01 . '');

        $playersListTeam02 = DB::select('select players.player_id, players.player_name, players.teams_team_id from players where players.teams_team_id = ' . $teams_team_id02 . '');

        return response()->json(['status' => true, 'message' => 'SUCCESSFUL...!', 'playersListTeam01' => $playersListTeam01, 'playersListTeam02' => $playersListTeam02]);
    }

    public function getTeamSelectedPlayers(Request $request)
    {
        $matchId = $request->data['matchId'];
        $teams_team_id01 = $request->data['team01Id'];
        $teams_team_id02 = $request->data['team02Id'];

        $matchHasPlayersListTeam01 = DB::select('select m_has_p.matches_match_id, m_has_p.players_player_id, players.player_name, players.teams_team_id 
        from matches_has_players m_has_p left join players on m_has_p.players_player_id = players.player_id 
        where m_has_p.matches_match_id = ' . $matchId . ' and players.teams_team_id = ' . $teams_team_id01 . '');

        $matchHasPlayersListTeam02 = DB::select('select m_has_p.matches_match_id, m_has_p.players_player_id, players.player_name, players.teams_team_id 
        from matches_has_players m_has_p left join players on m_has_p.players_player_id = players.player_id 
        where m_has_p.matches_match_id = ' . $matchId . ' and players.teams_team_id = ' . $teams_team_id02 . '');

        return response()->json(['status' => true, 'message' => 'SUCCESSFUL...!', 'matchHasPlayersListTeam01' => $matchHasPlayersListTeam01, 'matchHasPlayersListTeam02' => $matchHasPlayersListTeam02]);
    }

    public function updateMatch(Request $request)
    {
    }

    public function deleteMatch(Request $request)
    {
    }

    public function addMatch(Request $request)
    {
    }
}
