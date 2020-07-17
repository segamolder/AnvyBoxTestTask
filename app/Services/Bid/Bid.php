<?php


	namespace App\Services\Bid;


	use App\Interfaces\AbstractBid;

    class Bid
	{
        /**
         * @var AbstractBid
         */
        private $bid;

        private static $instance;

        /**
         * Bid constructor.
         */
        public function __construct(AbstractBid $bid)
        {
            $this->bid = $bid;
        }

        public static function getInstance(AbstractBid $bid) {
            if(empty(self::$instance)){
                self::$instance = new Bid($bid);
            }

            return self::$instance;
        }

        public function store() {
            return $this->bid->store();
        }
    }
