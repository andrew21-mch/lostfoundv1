<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

$pass = Hash::make(1234);

echo $pass;


