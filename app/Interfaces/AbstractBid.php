<?php


	namespace App\Interfaces;


    use Illuminate\Http\Request;
    use Illuminate\Http\Response;

    interface AbstractBid
	{
        public function __construct(string $name, string $phone, string $text);
        public function store():bool;
	}
