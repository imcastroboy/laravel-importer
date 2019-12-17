<?php

namespace App\Contracts;

interface Stats
{
    public function form();
    public function totalPoints();
    public function influence();
    public function creativity();
    public function threat();
    public function ictIndex();
    public function chancePlayingNextRound();
    public function chancePlayingThisRound();
    public function code();
    public function costChangeEvent();
    public function costChangeEventFall();
    public function costChangeStart();
    public function costChangeStartFall();
    public function dreamteamCount();
    public function elementType();
    public function epNext();
    public function epThis();
    public function evenPoints();
    public function inDreamteam();
    public function news();
    public function newsAdded();
    public function nowCost();
    public function pointsPerGame();
    public function selectedByPercent();
    public function special();
    public function transferIn();
    public function transferInEvent();
    public function transferOut();
    public function transferOutEvent();
    public function valueForm();
    public function valueSeason();
    public function minutes();
    public function goalsScored();
    public function assists();
    public function cleanSheets();
    public function goalsConceded();
    public function ownGoals();
    public function penaltiesSaved();
    public function penaltiesMissed();
    public function yellowCards();
    public function redCards();
    public function saves();
    public function bonus();
    public function bps();
}