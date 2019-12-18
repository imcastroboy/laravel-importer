<?php

namespace App\Repositories;

use App\Contracts\Repository;
use App\Player;
use App\Stats;
class PlayerRepository implements Repository
{
    private $players;

    public function __construct()
    {
        $this->players = new Player;
    }

    public function getData()
    {
        $limit = config('importer.limit');

        return $this->players->paginate($limit);
    }

    public function findById(int $id = 0)
    {
        return $this->players->find($id);
    }

    public function save($data)
    {
        $this->players->updateOrCreate(
            [
                'id' => $data->id()
            ],

            $this->getPlayerInfo($data)
        );
        
        $player = $this->findById($data->id());
        $player->stats()->save(new Stats($this->getStat($data)));

        return $player;
    }

    public function getPlayerInfo($player)
    {
        return [
            'id' => $player->id(),
            'first_name' => $player->firstName(),
            'second_name' => $player->secondName(),
            'photo' => $player->photo(),
            'web_name' => $player->webName(),
            'status' => $player->status(),
            'squad_number' => $player->squadNumber(),
            'team' => $player->team(),
            'team_code' => $player->teamCode()
        ];
    }

    public function getStat($stats)
    {
        return [
            'form' => $stats->form(),
            'total_points' => $stats->totalPoints(),
            'influence' => $stats->influence(),
            'creativity' => $stats->creativity(),
            'threat' => $stats->threat(),
            'ict_index' => $stats->ictIndex(),
            'chance_playing_next_round' => $stats->chancePlayingNextRound(),
            'chance_playing_this_round' => $stats->chancePlayingThisRound(),
            'code' => $stats->code(),
            'cost_change_event' => $stats->costChangeEvent(),
            'cost_change_event_fall' => $stats->costChangeEventFall(),
            'cost_change_start' => $stats->costChangeStart(),
            'cost_change_start_fall' => $stats->costChangeStartFall(),
            'dreamteam_count' => $stats->dreamteamCount(),
            'element_type' => $stats->elementType(),
            'ep_next' => $stats->epNext(),
            'ep_this' => $stats->epThis(),
            'event_points' => $stats->evenPoints(),
            'in_dreamteam' => $stats->inDreamteam(),
            'news' => $stats->news(),
            'news_added' => $stats->newsAdded(),
            'now_cost' => $stats->nowCost(),
            'points_per_game' => $stats->pointsPerGame(),
            'selected_by_percent' => $stats->selectedByPercent(),
            'special' => $stats->special(),
            'transfers_in' => $stats->transferIn(),
            'transfers_in_event' => $stats->transferInEvent(),
            'transfers_out' => $stats->transferOut(),
            'transfers_out_event' => $stats->transferOutEvent(),
            'value_form' => $stats->valueForm(),
            'value_season' => $stats->valueSeason(),
            'minutes' => $stats->minutes(),
            'goals_scored' => $stats->goalsScored(),
            'assists' => $stats->assists(),
            'clean_sheets' => $stats->cleanSheets(),
            'goals_conceded' => $stats->goalsConceded(),
            'own_goals' => $stats->ownGoals(),
            'penalties_saved' => $stats->penaltiesSaved(),
            'penalties_missed' => $stats->penaltiesMissed(),
            'yellow_cards' => $stats->yellowCards(),
            'red_cards' => $stats->redCards(),
            'saves' => $stats->saves(),
            'bonus' => $stats->bonus(),
            'bps' => $stats->bps()
        ];
    }
}