<?php
// var_dump($request["domain"]);
	if($request["domain"]=="dota.denpasarkota.go.id" || $domain=="dota.denpasarkota.go.id" || $request["domain"]=="ppid.denpasarkota.go.id" || $domain=="ppid.denpasarkota.go.id") {
	    include('maintenance.php');
        exit;
	}
