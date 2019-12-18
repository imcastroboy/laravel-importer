<?php

namespace App\Entities;

use App\Contracts\Stats;
use App\Contracts\Person;
use App\Contracts\Player;

class FootballPlayer implements Person, Player, Stats
{
    public $player;

    public function __construct($player)
    {
        $this->player = $player;
    }

    public function id()
    {
        return $this->player->id;
    }

    public function firstName()
    {
        return $this->player->first_name;
    }

    public function secondName()
    {
        return $this->player->second_name;
    }

    public function photo()
    {
        return $this->player->photo;
    }

    public function webName()
    {
        return $this->player->web_name;
    }

    public function status()
    {
        return $this->player->status;
    }

    public function squadNumber()
    {
        return $this->player->squad_number;
    }

    public function team()
    {
        return $this->player->team;
    }

    public function teamCode()
    {
        return $this->player->team_code;
    }

    public function form()
    {
        return $this->player->form;
    }

    public function totalPoints()
    {
        return $this->player->total_points;
    }

    public function influence()
    {
        return $this->player->influence;
    }

    public function creativity()
    {
        return $this->player->creativity;
    }

    public function threat()
    {
        return $this->player->threat;
    }

    public function ictIndex()
    {
        return $this->player->ict_index;
    }

    public function chancePlayingNextRound()
    {
        return $this->player->chance_of_playing_next_round;
    }

    public function chancePlayingThisRound()
    {
        return $this->player->chance_of_playing_this_round;
    }

    public function code()
    {
        return $this->player->code;
    }

    public function costChangeEvent()
    {
        return $this->player->cost_change_event;
    }

    public function costChangeEventFall()
    {
        return $this->player->cost_change_event_fall;
    }

    public function costChangeStart()
    {
        return $this->player->cost_change_start;
    }

    public function costChangeStartFall()
    {
        return $this->player->cost_change_start_fall;
    }

    public function dreamteamCount()
    {
        return $this->player->dreamteam_count;
    }

    public function elementType()
    {
        return $this->player->element_type;
    }

    public function epNext()
    {
        return $this->player->ep_next;
    }

    public function epThis()
    {
        return $this->player->ep_this;
    }

    public function evenPoints()
    {
        return $this->player->event_points;
    }

    public function inDreamteam()
    {
        return $this->player->in_dreamteam;
    }

    public function news()
    {
        return $this->player->news;
    }

    public function newsAdded()
    {
        return $this->player->news_added;
    }

    public function nowCost()
    {
        return $this->player->now_cost;
    }

    public function pointsPerGame()
    {
        return $this->player->points_per_game;
    }

    public function selectedByPercent()
    {
        return $this->player->selected_by_percent;
    }

    public function special()
    {
        return $this->player->special;
    }

    public function transferIn()
    {
        return $this->player->transfers_in;
    }

    public function transferInEvent()
    {
        return $this->player->transfers_in_event;
    }

    public function transferOut()
    {
        return $this->player->transfers_out;
    }

    public function transferOutEvent()
    {
        return $this->player->transfers_out_event;
    }

    public function valueForm()
    {
        return $this->player->value_form;
    }

    public function valueSeason()
    {
        return $this->player->value_season;
    }

    public function minutes()
    {
        return $this->player->minutes;
    }

    public function goalsScored()
    {
        return $this->player->goals_scored;
    }

    public function assists()
    {
        return $this->player->assists;
    }

    public function cleanSheets()
    {
        return $this->player->clean_sheets;
    }

    public function goalsConceded()
    {
        return $this->player->goals_conceded;
    }

    public function ownGoals()
    {
        return $this->player->own_goals;
    }

    public function penaltiesSaved()
    {
        return $this->player->penalties_saved;
    }

    public function penaltiesMissed()
    {
        return $this->player->penalties_missed;
    }

    public function yellowCards()
    {
        return $this->player->yellow_cards;
    }

    public function redCards()
    {
        return $this->player->red_cards;
    }

    public function saves()
    {
        return $this->player->saves;
    }

    public function bonus()
    {
        return $this->player->bonus;
    }

    public function bps()
    {
        return $this->player->bps;
    }

}