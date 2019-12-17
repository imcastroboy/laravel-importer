<?php

namespace App\Entities;

use App\Contracts\Stats;

class PlayerStats implements Stats
{
    public $stats;

    public function __construct($stats)
    {
        $this->stats = $stats;
    }

    public function playerId()
    {
        return $this->stats->id;
    }

    public function form()
    {
        return $this->stats->form;
    }

    public function totalPoints()
    {
        return $this->stats->total_points;
    }

    public function influence()
    {
        return $this->stats->influence;
    }

    public function creativity()
    {
        return $this->stats->creativity;
    }

    public function threat()
    {
        return $this->stats->threat;
    }

    public function ictIndex()
    {
        return $this->stats->ict_index;
    }

    public function chancePlayingNextRound()
    {
        return $this->stats->chance_of_playing_next_round;
    }

    public function chancePlayingThisRound()
    {
        return $this->stats->chance_of_playing_this_round;
    }

    public function code()
    {
        return $this->stats->code;
    }

    public function costChangeEvent()
    {
        return $this->stats->cost_change_event;
    }

    public function costChangeEventFall()
    {
        return $this->stats->cost_change_event_fall;
    }

    public function costChangeStart()
    {
        return $this->stats->cost_change_start;
    }

    public function costChangeStartFall()
    {
        return $this->stats->cost_change_start_fall;
    }

    public function dreamteamCount()
    {
        return $this->stats->dreamteam_count;
    }

    public function elementType()
    {
        return $this->stats->element_type;
    }

    public function epNext()
    {
        return $this->stats->ep_next;
    }

    public function epThis()
    {
        return $this->stats->ep_this;
    }

    public function evenPoints()
    {
        return $this->stats->event_points;
    }

    public function inDreamteam()
    {
        return $this->stats->in_dreamteam;
    }

    public function news()
    {
        return $this->stats->news;
    }

    public function newsAdded()
    {
        return $this->stats->news_added;
    }

    public function nowCost()
    {
        return $this->stats->now_cost;
    }

    public function pointsPerGame()
    {
        return $this->stats->points_per_game;
    }

    public function selectedByPercent()
    {
        return $this->stats->selected_by_percent;
    }

    public function special()
    {
        return $this->stats->special;
    }

    public function transferIn()
    {
        return $this->stats->transfers_in;
    }

    public function transferInEvent()
    {
        return $this->stats->transfers_in_event;
    }

    public function transferOut()
    {
        return $this->stats->transfers_out;
    }

    public function transferOutEvent()
    {
        return $this->stats->transfers_out_event;
    }

    public function valueForm()
    {
        return $this->stats->value_form;
    }

    public function valueSeason()
    {
        return $this->stats->value_season;
    }

    public function minutes()
    {
        return $this->stats->minutes;
    }

    public function goalsScored()
    {
        return $this->stats->goals_scored;
    }

    public function assists()
    {
        return $this->stats->assists;
    }

    public function cleanSheets()
    {
        return $this->stats->clean_sheets;
    }

    public function goalsConceded()
    {
        return $this->stats->goals_conceded;
    }

    public function ownGoals()
    {
        return $this->stats->own_goals;
    }

    public function penaltiesSaved()
    {
        return $this->stats->penalties_saved;
    }

    public function penaltiesMissed()
    {
        return $this->stats->penalties_missed;
    }

    public function yellowCards()
    {
        return $this->stats->yellow_cards;
    }

    public function redCards()
    {
        return $this->stats->red_cards;
    }

    public function saves()
    {
        return $this->stats->saves;
    }

    public function bonus()
    {
        return $this->stats->bonus;
    }

    public function bps()
    {
        return $this->stats->bps;
    }


}