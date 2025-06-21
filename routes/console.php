<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('invite-codes:clear')->hourly();
